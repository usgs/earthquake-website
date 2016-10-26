<?php
if(!isset($TEMPLATE)) {
	ob_start();
	$TITLE = "National Seismic Hazard Maps - Source Parameters";
  include 'template.inc.php';
}
ob_clean();
return;
