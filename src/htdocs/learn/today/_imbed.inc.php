<?php

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
    <h2>Today in Earthquake History</h2>";

    $query = $pdo->prepare('
        SELECT *
        FROM eq_history
        WHERE month=:mm AND day=:dd
        ORDER BY year DESC
        LIMIT 1'
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
							echo '<h3 style="color:black">' .
							      sprintf('M%s - %s, %s',
	                          $mag,
														(strpos($country,':'))?substr($country,strpos($country, ':')+1):$country,
														$year) .
										'</h3>';
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


$pdo = null;

echo "
  <p>
    View more events for today or select another day at
    <a href=\"today/\">Today in Earthquake History</a>
  </p>
";
