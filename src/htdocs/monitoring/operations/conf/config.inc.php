<?php
  date_default_timezone_set('UTC');

  // Build URL for station feed
  if (
      (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on')
      || (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])
          && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
  ) {
    $NETOPS_PROTOCOL = 'https://';
    $NETOPS_PORT = '443';
  } else {
    $NETOPS_PROTOCOL = 'http://';
    $NETOPS_PORT = isset($_SERVER['SERVER_PORT']) ?
        $_SERVER['SERVER_PORT'] : '80';
  }

  $NETOPS_HOST = isset($_SERVER['HTTP_HOST']) ?
      $_SERVER['HTTP_HOST'] : 'localhost';

  $NETOPS_BASEPATH = dirname(
      str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', __DIR__));

  $NETOPS_WEBSITE_BASEURL = $NETOPS_PROTOCOL . $NETOPS_HOST . ':' .
      $NETOPS_PORT . $NETOPS_BASEPATH;

  $NETOPS_DATA_BASEURL = '/static/earthquake-network-operations';

  // $NETOPS_HELIPLOT_URL . '/{station_code}.png' --> large heliplot image
  // $NETOPS_HELIPLOT_URL . '/{station_code}_24hr.png' --> small heliplot image
  // $NETOPS_HELIPLOT_URL . '/{station_code}_24hr.html' --> heliplot markup
  $NETOPS_HELIPLOT_URL = $NETOPS_DATA_BASEURL . '/Seismic_Data/telemetry_data';

  $NETOPS_LATENCY_URL = $NETOPS_DATA_BASEURL . '/station_latency';

  $NETOPS_AVAILABILITY_URL = $NETOPS_DATA_BASEURL . '/station_availability';

  $NETOPS_ISSUES_URL = $NETOPS_DATA_BASEURL . '/station_issues';

  $TELEMETRY_URL = '/ws/network-operations/telemetry.json';


  /*
  Identify if the station network code is one for which plots are genterated.
  If not then don't display the heli, availability, or latency plot.

  Used by:
  - heliplot.php to hide heliplots that aren't likely to exist.
  - _station.php to hide tabs that aren't likely to exist.
  */
  $GS_NETWORKS = array("IU", "US", "CU", "IC", "NE", "IW", "GS");
