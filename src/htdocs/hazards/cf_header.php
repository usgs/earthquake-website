<?php
if (!isset($TEMPLATE)) {
	$TITLE =  htmlspecialchars($_GET["name"]);
	$HEAD = '<base href="http://earthquake.usgs.gov/hazards/>';
  include 'template.inc.php';
}
	exit();
