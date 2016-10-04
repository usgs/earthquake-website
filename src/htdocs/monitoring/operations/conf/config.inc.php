<?php
  date_default_timezone_set('UTC');

  // Build URL for station feed
  if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') {
    $NETOPS_PROTOCOL = 'https://';
    $NETOPS_PORT = '443';
  } else {
    $NETOPS_PROTOCOL = 'http://';
    $NETOPS_PORT = '80';
  }

  $NETOPS_HOST = isset($_SERVER['SERVER_NAME']) ?
      $_SERVER['SERVER_NAME'] : 'localhost';

  $NETOPS_PORT = isset($_SERVER['SERVER_PORT']) ?
      $_SERVER['SERVER_PORT'] : $NETOPS_PORT;

  $NETOPS_BASEPATH = dirname(
      str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', __DIR__));

  $NETOPS_WEBSITE_BASEURL = $NETOPS_PROTOCOL . $NETOPS_HOST . ':' .
      $NETOPS_PORT . $NETOPS_BASEPATH;

  $NETOPS_DATA_BASEURL = 'ftp://hazards.cr.usgs.gov' .
      '/web/earthquake-network-operations';

  // $NETOPS_HELIPLOT_URL . '/{station_code}.png' --> large heliplot image
  // $NETOPS_HELIPLOT_URL . '/{station_code}_24hr.png' --> small heliplot image
  // $NETOPS_HELIPLOT_URL . '/{station_code}_24hr.html' --> heliplot markup
  $NETOPS_HELIPLOT_URL = $NETOPS_DATA_BASEURL . '/Seismic_Data/telemetry_data';

  $NETOPS_LATENCY_URL = $NETOPS_DATA_BASEURL . '/station_latency';

  $NETOPS_AVAILABILITY_URL = $NETOPS_DATA_BASEURL . '/station_availability';

  $NETOPS_ISSUES_URL = $NETOPS_DATA_BASEURL . '/station_issues';

  $TELEMETRY_URL = $NETOPS_PROTOCOL . $NETOPS_HOST . ':' . $NETOPS_PORT .
      '/ws/network-operations/telemetry.json';
