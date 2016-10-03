<?php
  include_once 'functions.inc.php';
  include_once __DIR__ . '/conf/config.inc.php';

  $virtualNetwork = param('virtual_network');

  if ($virtualNetwork != null) {
    $virtualNetwork = strtoupper(strip_tags($virtualNetwork));
    $queryString = '?virtual_network=' . $virtualNetwork;

    echo navGroup(
      '<a class="up-one-level" href="/monitoring/' .
          strtolower($virtualNetwork) . '/">' . $virtualNetwork . '</a>',

      navItem('/monitoring/operations/network.php' . $queryString,
        'Status') .
      navItem('/monitoring/operations/heliplot.php' . $queryString,
        'Heliplots') .
      navItem($NETOPS_ISSUES_URL . '/' . $virtualNetwork .
          'station_status.csv', 'Issues (CSV)')
    );
  } else {
    echo
      navItem('?virtual_network=ANSS', 'ANSS ' . $TITLE) .
      navItem('?virtual_network=GSN', 'GSN ' . $TITLE);
  }
?>
