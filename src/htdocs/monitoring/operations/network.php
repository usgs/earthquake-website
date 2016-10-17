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
    exit(0);
  }

  function getTableRow ($station) {
    global $NETOPS_WEBSITE_BASEURL;

    $id = $station['id'];
    $properties = $station['properties'];

    $coordinates = isset($station['geometry']['coordinates']) ?
        $station['geometry']['coordinates'] :
        ['&ndash;', '&ndash;', '&ndash;'];

    $link = $NETOPS_WEBSITE_BASEURL . '/stations/' .
        "${properties['network_code']}/${properties['station_code']}/";

    return "
      <tr id=\"row-${id}\">
        <td>${properties['network_code']}</td>
        <td><a href=\"${link}\">${properties['station_code']}</a></td>
        <td class=\"wider\">${properties['name']}</td>
        <td id=\"telemetry-${id}\" class=\"narrower\">&ndash;</td>
        <td>${coordinates[1]}</td>
        <td>${coordinates[0]}</td>
        <td>${coordinates[2]}</td>
      </tr>
    ";
  }

  $TITLE = (($virtualNetwork != null) ?
      $virtualNetwork . ' ' : 'GSN and ANSS ') . 'Status';
  $NAVIGATION = true;

  $HEAD = '
    <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
    <link rel="stylesheet" href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"/>
    <link rel="stylesheet" href="' . $NETOPS_WEBSITE_BASEURL .
        '/css/network-map.css"/>
    <link rel="stylesheet" href="' . $NETOPS_WEBSITE_BASEURL .
        '/css/network.css"/>
  ';

  $FOOT = '
    <script>
      var NETOPS_WEBSITE_BASEURL,
          STATIONS,
          TELEMETRY_URL;

      NETOPS_WEBSITE_BASEURL = \'' . $NETOPS_WEBSITE_BASEURL . '\';
      STATIONS = ' . safe_json_encode($stations) . ';
      TELEMETRY_URL = \'' . $TELEMETRY_URL . '\';
    </script>
    <script src="/lib/leaflet-0.7.7/leaflet.js"></script>
    <script src="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL . '/js/config.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL .
        '/js/telemetry-factory.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL .
        '/js/network-map.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL .
        '/js/network.js"></script>
  ';

  include 'template.inc.php';
}
?>

<section class="row">
  <div class="column three-of-five network-map-container"></div>
  <div class="column two-of-five network-map-legend"></div>
</section>

<section class="horizontal-scrolling">
  <table class="network-table">
    <thead>
      <th scope="col">Network Code</th>
      <th scope="col">Station Code</th>
      <th scope="col" class="wider">Name</th>
      <th scope="col">
        <abbr title="Telemetry Status at the NEIC">Telemetry</abbr>
      </th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      <th scope="col">Elevation</th>
      <th scope="col">Datalogger</th>
    </thead>
    <tbody>
      <?php foreach ($stations as $station) {
        echo getTableRow($station);
      }?>
    </tbody>
  </table>
</section>
