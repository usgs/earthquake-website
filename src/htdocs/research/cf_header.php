<?php
if (!isset($TEMPLATE)) {
	$TITLE =  htmlspecialchars($_GET["name"]);
	$HEAD = '<base href="https://earthquake.usgs.gov/research/">';
  include 'template.inc.php';
}
	exit();
