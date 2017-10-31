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
    <h2>On $date...</h2>";

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
        //print out data
        $scriptIDArray = [];
        $scriptClassArray = [];
        while ($fact = $query->fetch(PDO::FETCH_ASSOC)) {
          $mag = $fact['magnitude'];
          $country = $fact['location'];
          $scriptIDArray[] = $country;
          $year = $fact['year'];
          $comment = $fact['comment'];
          $name = "map_" . $fact['country'];
          $scriptClassArray[] = $name;
					  echo sprintf('<h3 style="color:black">M%s - %s, %s</h3>',
                        $mag,
												(strpos($country,':'))?substr($country,strpos($country, ':')+1):$country,
												$year);
              echo '<div id="' . $name . '" style="height:300px;max-width:100%;margin:20px 0px"></div>';
						echo '<p>' . $comment . '</p>';
        }

      $query->closeCursor();
    } catch (PDOException $e) {
      // don't output this on prod...
      trigger_error($e->getMessage());
    }
    $query = null;


$pdo = null;

echo "
  <p>
    View more events for today or select another day at
    <a href=\"today/\">Today in Earthquake History</a>
  </p>
";

echo '<script type="text/javascript">
        var scriptIDArray = ' . json_encode($scriptIDArray) . ';
        var scriptClassArray = ' . json_encode($scriptClassArray) . ';
      </script>';
