<?php

// for navItem function
include_once 'functions.inc.php';

if (!isset($TEMPLATE)) {
  // buffer header, so it can be discarded
  ob_start();
  $TITLE = 'this doesn\'t matter';
  $NAVIGATION =
      '<a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/external-grants" class="up-one-level">External Grants</a>';
  include 'template.inc.php';
}

// discard header
ob_clean();

// footer, navigation output after return
return;
