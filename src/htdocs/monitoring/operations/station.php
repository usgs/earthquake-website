<?php
  include_once 'functions.inc.php';
  include_once __DIR__ . '/conf/config.inc.php';

  $network = param('network');
  $station = param('station');

  if ($network != null && $station != null &&
      preg_match('/^[a-zA-Z]+$/', $network) &&
      preg_match('/^[a-zA-Z]+$/', $station)) {
    header("Location: ${NETOPS_BASEPATH}/stations/${network}/${station}/");
  } else {
    header('HTTP/1.0 404 Not Found');
  }
