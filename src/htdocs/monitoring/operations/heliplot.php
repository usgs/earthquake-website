<?php
if (!isset($TEMPLATE)) {
  include_once 'functions.inc.php'; // provides `param`
  include_once __DIR__ . '/conf/config.inc.php';
  include_once __DIR__ . '/inc/functions.inc.php'; // provides `get_stations`

  $virtualNetwork = param('virtual_network');
  $stations = null;

  try {
    $stations = get_stations($virtualNetwork)['features'];
  } catch (Exception $ex) {
    http_response_code(500);
    exit();
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
    global $GS_NETWORKS;

    $properties = $station['properties'];
    $heliplot = $NETOPS_HELIPLOT_URL . '/' . $properties['station_code'];

    if (in_array($properties['network_code'], $GS_NETWORKS)){
			return "
				<li class=\"heliplot-list-item\" id=\"station-${station['id']}\">
					<figure class=\"heliplot-figure\">
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
			";}
		else {
		  return "";
		}
  }

  $TITLE = (($virtualNetwork != null) ?
      htmlentities($virtualNetwork) . ' ': '') . 'Heliplots';
  $NAVIGATION = true;

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
        strtotime(file_get_contents($NETOPS_HELIPLOT_UPDATE_URL))
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
