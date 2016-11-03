<?php

/*
 * Create a geoJSON file of points in database for display on map
*/

$callback = '';
$allowed = '/^[\w]+$/'; // Sanitize input parameter (alphanumerics only)
if (isSet($_GET['callback']) && preg_match($allowed, $_GET['callback'])) {
	$callback = $_GET['callback'];
}

// Get points from db
include $_SERVER['DOCUMENT_ROOT'] . "/template/static/dbconnect.inc.php";
mysql_select_db('ehpdb', $db);
$query_rsPoints = sprintf('SELECT * FROM monitoring_buildings');
$rsPoints = mysql_query($query_rsPoints, $db) or die(mysql_error());

// Create arrays
$points = array(
	"type" => "FeatureCollection", 
	"features" => array()
);

while ($row_rsPoints = mysql_fetch_assoc($rsPoints)) {
	// ImageMagick adds '-0, -1, etc to multipage .pdf files when creating thumbs...check for suffix
	$layout_thumb = '';
	if ($row_rsPoints['filename_layout']) {
		if (file_exists('img/layouts/thumbs/' . substr($row_rsPoints['filename_layout'], 0, -4) . '.png')) {
			$layout_thumb = substr($row_rsPoints['filename_layout'], 0, -4) . '.png';
		} else if (file_exists('img/layouts/thumbs/' . substr($row_rsPoints['filename_layout'], 0, -4) . '-0.png')) {
			$layout_thumb = substr($row_rsPoints['filename_layout'], 0, -4) . '-0.png';
		}
	}
	$feature = array(
		"type" => "Feature", 
		"properties" => array(
			"name" => $row_rsPoints['name'],
			"city" => $row_rsPoints['city'],
			"state" => $row_rsPoints['state'],
			"station" => $row_rsPoints['station'],
			"building" => $row_rsPoints['building'],
			"type" => $row_rsPoints['type'],
			"sensors_structure" => $row_rsPoints['sensors_structure'],
			"sensors_ground" => $row_rsPoints['sensors_ground'],
			"photo" => $row_rsPoints['filename_photo'],
			"layout" => $row_rsPoints['filename_layout'],
			"layout_thumb" => $layout_thumb
		),
		"geometry" => array(
			"type" => "Point",
			"coordinates" => array(
				floatval($row_rsPoints['lon']), 
				floatval($row_rsPoints['lat'])
			)
		),
		"id" => $row_rsPoints['id']
	);
	array_push($points['features'], $feature);
};

// Create json object from array and display
header('Content-Type: application/json');
$json = json_encode($points);
if ($callback) {
	printf ('%s(%s);', $callback, $json);
} else {
	print $json;
}

?>