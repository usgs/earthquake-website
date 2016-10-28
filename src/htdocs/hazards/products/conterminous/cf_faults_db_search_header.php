<?php
if (!isset($TEMPLATE)) {
	$TITLE =  htmlspecialchars($_GET["year"]) . " National Seismic Hazard Maps - Source Parameters";
	$HEAD = '<base href="http://earthquake.usgs.gov/hazards/products/conterminous"/>';
  include 'template.inc.php';
}
	exit();
