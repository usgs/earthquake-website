<?php

if (!isset($TEMPLATE)) {
  $TITLE =  htmlspecialchars($_GET['name']);
  $NAVIGATION = true;
  include 'template.inc.php';
}

// exit before content or footer
exit();
