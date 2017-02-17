<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	2/2/2017
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Today in Earthquake History';
      $NAVIGATION	= true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
        <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
        <link rel="stylesheet" href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"/>';
      include	'template.inc.php';
      }

//include database object
include_once '/etc/puppet/EHPServer.class.php';
$pdo = EHPServer::getDatabase('earthquake');

// use intval to prevent sql injection
date_default_timezone_set('UTC');
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
		<h2>On $date...</h2>";

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
          $mag = $fact['magnitude'];
          $country = $fact['country'];
          $year = $fact['year'];
          $image = $fact['image'];
          $comment = $fact['comment'];
					echo '<li class="alert">';
							echo '<h4 style="color:black">' .
							      sprintf('M%s - %s, %s',
	                          $mag,
														(strpos($country,':'))?substr($country,strpos($country, ':')+1):$country,
														$year) .
										'</h4>';
							echo '<figure class="left">' . $image . '</figure>';
						echo '<p>' . $comment . '</p>';
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
		<form method="get|post" action="index.php" >
			<ol class="no-style" name="frmnewdate" id="frmnewdate">
				<li>
					<label for="month">Month</label>
					<select name="month" id="month">';
						for ($i = 1; $i <= 12; $i++) {
              if ($i == $mm) {
                printf('<option value="%d" selected>%s</option>', $i,
  								date('F', strtotime("$i/1/1972")));
              }
              else {
							printf('<option value="%d">%s</option>', $i,
								date('F', strtotime("$i/1/1972")));
              }
						}
					echo '</select>
				</li>
				<li>
					<label for="day">Day</label>
					<select name="day" id="day">';
						for ($i = 1; $i <= 31; $i++) {
              if ($i == $dd) {
                printf('<option value="%d" selected>%s</option>', $i,
  								date('jS', strtotime("1/${i}/1972")));
              }
              else {
							printf('<option value="%d">%s</option>', $i,
								date('jS', strtotime("1/${i}/1972")));
              }
						}
					echo '</select>
				</li>
			</ol>
      <footer class="footer" aria-label="Search form footer">
        <button type="submit" id="fdsn-submit">View Date</button>
        <span class="output-descriptor"></span>
        <div class="search-error"></div>
      </footer>
      <br />
      <a href="index.php">View Today&rsquo;s Date</a>
		</form>';
		echo '
		<h2>Disclaimer</h2>
		<p class="disclaimer">
			All dates and times are displayed in UTC and not your local time or
			the local time near the epicenter. Also, the history displayed on this page
			defaults to the current date at UTC; please take this into consideration
			if you view this page and the day is either ahead or behind your local
			date. Earthquake names and magnitudes may differ slightly from what is currently in the ComCat Earthquake Catalog since the sources of each may be different.
		</p>
	</div>
</div>';

$pdo = null;
