<?php
if (!isset($TEMPLATE)) {
  include_once './conf/config.inc.php';
  include_once 'functions.inc.php'; // provides `param` method

  $lastUpdated = 0; // last update time
  $virtualNetwork = param('virtual_network'); // which network should we use

  $STATION_FEED = $NETOPS_WEBSITE_BASEURL . '/station.json.php';

  $stations = json_decode(@file_get_contents($STATION_FEED), true);

  if ($stations == '' || !isset($stations['features'])) {
    http_response_code(500);
    exit();
  }

  $stations = $stations['features'];

  // Filter stations down to only those that are part of the requested
  // virtual network.
  if ($virtualNetwork != null) {
    $stations = array_filter($stations, function ($feature) {
      global $virtualNetwork;

      if ($virtualNetwork)
      $virtualNetworks = $feature['properties']['virtual_networks'];

      if (is_array($virtualNetworks)) {
        return in_array($virtualNetwork, $virtualNetworks);
      }

      return false;
    });
  }

  /**
   * Generates markup for the heliplot list item.
   *
   * @param $stations {Array}
   *     An array with station keys pointing to station property values.
   *
   * @return {String}
   *     The markup for the heliplot list item.
   */
  function getHeliplot ($station) {
    global $NETOPS_HELIPLOT_URL;
    global $lastUpdated;

    $properties = $station['properties'];
    $heliplot = $NETOPS_HELIPLOT_URL . '/' . $properties['station_code'];

    return "
      <li class=\"heliplot-list-item\" id=\"station-${station['id']}\">
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

  $TITLE = (($virtualNetwork != null) ?
      $virtualNetwork . ' ': '') . 'Heliplots';

  $HEAD = '
    <link rel="stylesheet" href="css/heliplot.css"/>
  ';

  include 'template.inc.php';
}
?>

<h2>These data update automatically every 30 minutes</h2>
<h3>
  Last update:
  <?php
    echo date('F d, Y H:i:s',
        strtotime(file_get_contents($NETOPS_HELIPLOT_URL . '/tt_update'))
      );
  ?>
  UTC
</h3>
<p>
  Seismograms may take several moments to load.
  Click on a plot to see larger image.
</p>


<ul class="no-style heliplot-list">
  <?php
    foreach ($stations as $station) {
      echo getHeliplot($station);
    }
  ?>
</ul>
