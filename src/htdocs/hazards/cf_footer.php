<?php

if (!isset($TEMPLATE)) {
  // buffer header, so it can be discarded
  ob_start();

  $TITLE = 'this doesn\'t matter';
  $NAVIGATION = true;
  include 'template.inc.php';
}

// discard header
ob_clean();

// footer is output after return
return;
