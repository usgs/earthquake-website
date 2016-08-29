<?php

date_default_timezone_set('America/Los_Angeles');

$allowed = '/^[\w-.]+$/'; //used to sanitize input parameter (only alphanumerics, ., or hyphen)

$callback = '';
if (isSet($_GET['callback']) && (preg_match($allowed, $_GET['callback']))) {
  $callback = $_GET['callback'];
}

// import array containing color scale
include_once 'colorScale.inc.php';

// query db
include $_SERVER['DOCUMENT_ROOT'] . "/template/static/dbconnect.inc.php";
$query_rsPoints = sprintf("SELECT * FROM research_vs30
	WHERE `lat` != 0 AND `lng` != 0
	ORDER BY `name` ASC"
);
$rsPoints = mysql_query($query_rsPoints, $db) or die(mysql_error());


$points = array(
	'type' => 'FeatureCollection',
  'metadata' => array(
    'generated' => date('c'),
    'count' => mysql_num_rows($rsPoints)
  ),
	'features' => array()
);

while ($row_rsPoints = mysql_fetch_assoc($rsPoints)) {
  if ($row_rsPoints['lng'] && $row_rsPoints['lat']) {
	  $vs30 = purgeNull($row_rsPoints['vs30']);
	  $color = getColor($vs30);
	  $feature = array(
	    'type' => 'Feature',
	    'properties' => array(
	      'index' => $row_rsPoints['index'],
	      'net_sta' => $row_rsPoints['net_sta'],
	      'name' => purgeNull($row_rsPoints['name']),
	      'method' => $row_rsPoints['method'],
	      'vs30' => $vs30,
	      'color' => $color,
	      'd_max' => purgeNull($row_rsPoints['d_max'])
	    ),
	    'geometry' => array(
	      'type' => 'Point',
	      'coordinates' => array(
	        floatval($row_rsPoints['lng']),
	        floatval($row_rsPoints['lat'])
	      )
	    ),
	    'id' => intval($row_rsPoints['id'])
	  );

	  array_push($points['features'], $feature);
  }
}

// Create json object from array and display
header('Content-Type: application/json');
$json = json_encode($points);
if ($callback) {
  printf ('%s(%s);', $callback, $json);
} else {
  print $json;
}

// Get color code for given depth
function getColor($num) {
	$scale = $GLOBALS['scale'];

	if ($num === '') {
		$r = $scale['No value'];
	} else {
		$r = $scale['max']; // first set color to max value; gets reset in loop if $num is within lower range
		foreach ($scale as $key => $color) {
			if (gettype($key) !== 'string' && $num < $key) {
				$r = $color;
				break;
			}
		}
	}
	return $r;
}

// don't echo 'null' in output
function purgeNull($val) {
	$r = '';
	if ($val) {
	  $r = $val;
	}
	return $r;
}

?>