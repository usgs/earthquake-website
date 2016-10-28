<?php
if(!isset($TEMPLATE)) {
	ob_start();
	$TITLE = "National Seismic Hazard Maps - Source Parameters";
  $NAVIGATION = true;
  include 'template.inc.php';
}
ob_clean();
return;
