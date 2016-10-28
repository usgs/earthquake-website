<?php
if (!isset($TEMPLATE)) {
	ob_start();
	$TITLE = "this doesn't matter";
  $NAVIGATION = true;
  include 'template.inc.php';
}
ob_clean();
return;
