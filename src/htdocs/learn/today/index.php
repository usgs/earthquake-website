<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	2/2/2017
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Today in Earthquake History';
      $NAVIGATION	= true;
			$STYLES  = '
				.nolink, .nolink:hover, .nolink:visited {
					color: #333333;
					text-decoration:none;
					cursor: default;
				}
				#frmnewdate {margin:0;padding:0;}
				#frmnewdate ol {list-style:none;margin:0;padding:0;}
				#frmnewdate ol li {margin:10px 0;padding:0;}
				#frmnewdate label {display:block;float:left;width:64px;text-align:right;}
				#frmnewdate select {width:144px; margin-left:16px;}
				#frmnewdate input {margin-left:80px;}
				#frmnewdate a {display:block;margin:10px 0 0 80px;}
			';
      include	'template.inc.php';
      }

//include database object
include_once '/etc/puppet/EHPServer.class.php';
$pdo = EHPServer::getDatabase('earthquake');

// use intval to prevent sql injection
date_default_timezone_set('America/New_York');
$mm = intval(param('month', date('n')));
$dd = intval(param('day', date('j')));
$date = strtotime("${mm}/${dd}");

//account to wrong user input
$dd = date('d', $date);
$mm = date('m', $date);
$date = date('F jS', strtotime("${mm}/${dd}"));
echo "
<div class=\"row\">
	<div class=\"column two-of-three\">
		<h2>Earthquake History for $date </h2>";

  	$query = $pdo->prepare('
				SELECT *
			  FROM eq_history
			  WHERE month=:mm AND day=:dd
			  ORDER BY year DESC'
		);

		try {
			$query->execute(array(
				'mm' => $mm,
				'dd' => $dd
			));

			//if no results returned
			if (count($query) == 0) {
				echo 'Nothing returned';
				return;
			}
			echo '
			<ul class="no-style linklist">';
				//print out data
				while ($fact = $query->fetch(PDO::FETCH_ASSOC)) {
					echo '<li>';
						echo '<a>';
							echo '<h4 style="color:black">' .
							      sprintf('M%s - %s, %s',
	                          $fact['magnitude'],
														(strpos($fact['country'],':'))?substr($fact['country'],strpos($fact['country'], ':')+1):$fact['country'],
														$fact['year']) .
										'</h4>';
							echo $fact['image'];
						echo '</a>';
						echo '<p>' . $fact['comment'] . '</p>';
					echo '</li>';
				}
			echo '</ul>';

			$query->closeCursor();
		} catch (PDOException $e) {
			// don't output this on prod...
			print_r($e);
		}
		$query = null;
	echo '
	</div>
	<div class="column one-of-three">
		<h2>View a Different Day</h2> ';
		echo '
		<form method="get|post" action="index.php" name="frmnewdate" id="frmnewdate">
			<ol class="no-style">
				<li>
					<label for="month">Month</label>
					<select name="month" id="month">';
						for ($i = 1; $i <= 12; $i++) {
							printf('<option value="%d">%s</option>', $i,
								date('F', strtotime("$i/1/1972")));
						}
					echo '</select>
				</li>
				<li>
					<label for="day">Day</label>
					<select name="day" id="day">';
						for ($i = 1; $i <= 31; $i++) {
							printf('<option value="%d">%s</option>', $i,
								date('jS', strtotime("1/${i}/1972")));
						}
					echo '</select>
				</li>
				<li>
					<input type="submit" name="submit" id="submit" value="View Date"/>
					<br/>
					<a href="index.php">View Today&rsquo;s Date</a>
				</li>
			</ol>
		</form>';
		echo '
		<h2>Disclaimer</h2>
		<p class="disclaimer">
			All dates and times are displayed in UTC and not your local time or
			the local time near the epicenter. Also, the history displayed on this page
			defaults to the current date at UTC; please take this into consideration
			if you view this page and the day is either ahead or behind your local
			date.
		</p>
	</div>
</div>';

$pdo = null;
