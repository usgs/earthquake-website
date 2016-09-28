<?php
if (!isset($TEMPLATE)) {
  date_default_timezone_set('UTC');
  include_once 'functions.inc.php'; // provides `param` method

  $lastUpdated = 0; // last update time
  $vnet = param('vnet'); // which network should we use

  // Build URL for station feed
  if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') {
    $protocol = 'https://';
    $port = '443';
  } else {
    $protocol = 'http://';
    $port = '80';
  }

  $host = isset($_SERVER['SERVER_NAME']) ?
      $_SERVER['SERVER_NAME'] : 'localhost';

  $port = isset($_SERVER['SERVER_PORT']) ?
      $_SERVER['SERVER_PORT'] : $port;

  $path = isset($_SERVER['SCRIPT_NAME']) ?
      dirname($_SERVER['SCRIPT_NAME']) : '';

  $url = $protocol . $host . ':' . $port . $path . '/station.json.php';

  try {
    $stations = json_decode(file_get_contents($url), true)['features'];
  } catch (Exception $ex) {
    http_send_status('500 Internal Server Error');
    exit();
  }

  if ($vnet != null) {
    $stations = array_filter($stations, function ($feature) {
      global $vnet;

      if ($vnet)
      $vnets = $feature['properties']['virtual_networks'];

      if (is_array($vnets)) {
        return in_array($vnet, $vnets);
      }

      return false;
    });
  }

  function getHeliplot ($station) {
    global $lastUpdated;

    $properties = $station['properties'];
    $heliplot = 'ftp://hazards.cr.usgs.gov' .
        '/web/earthquake-network-operations/Seismic_Data/telemetry_data' .
        '/' . $properties['station_code'];

    // This is awful slow. Is it strictly necessary?
    $modified = filemtime($heliplot . '_24hr.png');
    $lastUpdated = max($lastUpdated, $modified);

    return "
      <li class=\"heliplot-list-item\">
        <figure>
          <figcaption class=\"heliplot-figcaption\">
            ${properties['network_code']}/${properties['station_code']}
            ${properties['name']}
          </figcaption>
          <a href=\"${heliplot}_24hr.html\">
            <img src=\"${heliplot}_24hr.png\" alt=\"Heliplot Image\"
                class=\"heliplot-image\"/>
          </a>
        </figure>
      </li>
    ";
  }

  $TITLE = (($vnet != null) ? $vnet . ' ': '') . 'Heliplots';

  $HEAD = '
    <style>
      .heliplot-list {
        overflow: hidden;
      }
      .heliplot-list-item {
        float: left;
        margin-right: 1em;
      }
      .heliplot-figcaption {
        font-weight: bold;
        margin-bottom: 1em;
      }
      .heliplot-image {
        border: 1px solid #ccc;
        padding: 1em 0;
      }
    </style>
  ';

  include 'template.inc.php';
}
?>

<h2>These data update automatically every 30 minutes</h2>
<h3>Last update: <?php echo date('F d, Y H:i:s'); ?> UTC</h3>
<p>
  Seismograms may take several moments to load.
  Click on a plot to see larger image.
</p>


<ul class="no-style heliplot-list">
  <?php
    for ($i = 0; $i < 100; $i++) {
    foreach ($stations as $station) {
      echo getHeliplot($station);
    }
  }
  ?>
</ul>
