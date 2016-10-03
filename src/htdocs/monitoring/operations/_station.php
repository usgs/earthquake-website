<?php
if (!isset($TEMPLATE)) {
  include_once __DIR__ . '/conf/config.inc.php';
  include_once __DIR__ . '/inc/functions.inc.php';

  $placeholderValue = '&ndash;';
  $jsonFile = 'index.json';

  if (!file_exists($jsonFile)) {
    http_response_code(400);
    exit(0);
  }

  $json = json_decode(file_get_contents($jsonFile), true);


  $id = $json['id'];
  $properties = $json['properties'];
  $coordinates = isset($json['geometry']['coordinates']) ?
      $json['geometry']['coordinates'] :
      [$placeholderValue, $placeholderValue, $placeholderValue];

  $heliplotUrl = $NETOPS_HELIPLOT_URL . '/' .
      $properties['station_code'] . '.png';

  $TITLE = $properties['network_code'] . ' ' . $properties['station_code'];
  $NAVIGATION = true;

  $HEAD = (isset($HEAD) ? $HEAD : '') . '
    <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
    <link rel="stylesheet" href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"/>
    <link rel="stylesheet" href="' . $NETOPS_WEBSITE_BASEURL .
        '/css/station-details-map.css"/>
    <link rel="stylesheet" href="' . $NETOPS_WEBSITE_BASEURL .
        '/css/_station.css"/>
  ';

  $FOOT = (isset($FOOT) ? $FOOT : '') . '
    <script>
      var NETOPS_WEBSITE_BASEURL,
          STATION,
          TELEMETRY_URL;

      NETOPS_WEBSITE_BASEURL = \'' . $NETOPS_WEBSITE_BASEURL . '\';
      STATION = ' . safe_json_encode($json) . '
      TELEMETRY_URL = \'' . $TELEMETRY_URL . '\';
    </script>
    <script src="/lib/leaflet-0.7.7/leaflet.js"></script>
    <script src="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL . '/js/config.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL .
        '/js/telemetry-factory.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL .
        '/js/station-details-map.js"></script>
    <script src="' . $NETOPS_WEBSITE_BASEURL .
        '/js/_station.js"></script>
  ';


  include 'template.inc.php';
}
?>

<header>
  <h3>
    <?php echo $properties['name']; ?>
  </h3>
  <p>
    <?php
      echo $properties['network_code'] . ' ' . $properties['station_code'];
    ?>
    commences operations on: <?php echo $properties['start_date']; ?>
  </p>
</header>

<section class="row">
  <div class="column one-of-two station-details-map-container"></div>
  <div class="column one-of-two station-details-table-container">
    <table class="station-details-table">
      <tbody>
        <tr>
          <th scope="row">Host</th>
          <td><?php
            if (isset($properties['host']) &&
                $properties['host'] !== null) {
              echo $properties['host'];
            } else {
              echo $placeholderValue;
            }
          ?></td>
        </tr>
        <tr>
          <th scope="row">Latitude</th>
          <td><?php echo $coordinates[1]; ?></td>
        </tr>
        <tr>
          <th scope="row">Longitude</th>
          <td><?php echo $coordinates[0]; ?></td>
        </tr>
        <tr>
          <th scope="row">Elevation</th>
          <td><?php echo $coordinates[2]; ?></td>
        </tr>
        <tr>
          <th scope="row">Datalogger</th>
          <td><?php
            if (isset($properties['datalogger']) &&
                $properties['datalogger'] !== null) {
              echo $properties['datalogger'];
            } else {
              echo $placeholderValue;
            }
          ?></td>
        </tr>
        <tr>
          <th scope="row">Broadband</th>
          <td><?php
            if (isset($properties['broadband']) &&
                $properties['broadband'] !== null) {
              echo $properties['broadband'];
            } else {
              echo $placeholderValue;
            }
          ?></td>
        </tr>
        <tr>
          <th scope="row">Accelerometer</th>
          <td><?php
            if (isset($properties['accelerometer']) &&
                $properties['accelerometer'] !== null) {
              echo $properties['accelerometer'];
            } else {
              echo $placeholderValue;
            }
          ?></td>
        </tr>
        <tr>
          <th scope="row">Telemetry Status at the NEIC</th>
          <td class="station-details-telemetry">Pending</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<section class="station-details-heliplot">
  <h2>Heliplot</h2>
  <a class="station-details-heliplot-link" href="<?php $heliplotUrl; ?>">
    <img class="station-details-heliplot-image"
        src="<?php echo $heliplotUrl; ?>"
        alt="Station Heliplot"/>
  </a>
</section>
