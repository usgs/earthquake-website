<?php
function FDSNlink($net) {
	$fdsn_base = '<a target="_blank" href="http://www.fdsn.org/networks/detail/';
	$linkstr = $fdsn_base.$net.'">'.$net.'</a>';
  return $linkstr;
}

if (!isset($TEMPLATE)) {
  include_once __DIR__ . '/conf/config.inc.php';
  include_once __DIR__ . '/inc/functions.inc.php';

  $placeholderValue = '&ndash;';
  $jsonFile = 'index.json';

  if (!file_exists($jsonFile)) {
    header('HTTP/1.0 404 Not Found');
    exit(0);
  }

  $json = json_decode(@file_get_contents($jsonFile), true);

  $requestDir = dirname($_SERVER['SCRIPT_FILENAME']);
  $expectedStation = basename($requestDir);
  $expectedNetwork = basename(dirname($requestDir));

  if ($json == '' || !isset($json['id']) ||
      $json['id'] != "${expectedNetwork}_${expectedStation}") {
    header('HTTP/1.0 404 Not Found');
    exit(0);
  }

  $id = $json['id'];
  $properties = $json['properties'];
  $coordinates = isset($json['geometry']['coordinates']) ?
      $json['geometry']['coordinates'] :
      [$placeholderValue, $placeholderValue, $placeholderValue];

  $heliplotThumb = $NETOPS_HELIPLOT_URL . '/' .
      $properties['station_code'] . '.png';
  $heliplotPage = $NETOPS_HELIPLOT_URL . '/' .
      $properties['station_code'] . '_24hr.html';

  $latencyUrl = $NETOPS_LATENCY_URL . '/' .
      $properties['network_code'] . $properties['station_code'] . '.gif';

  $availabilityUrl = $NETOPS_AVAILABILITY_URL . '/' .
      $properties['network_code'] . '_' . $properties['station_code'];

  $photos = glob('images/*_sm*'); // relative to {network}/{station} directory

  $TITLE = 'Station ' . $properties['network_code'] . ' ' .
      $properties['station_code'];
  $NAVIGATION = true;

  $HEAD = (isset($HEAD) ? $HEAD : '') . '
    <link href="/lib/leaflet-0.7.7/leaflet.css" rel="stylesheet"/>
    <link href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"
        rel="stylesheet"/>
    <link href="/lib/hazdev-tablist-0.1.2/hazdev-tablist.css"
        rel="stylesheet"/>
    <link href="' . $NETOPS_WEBSITE_BASEURL . '/css/station-details-map.css"
        rel="stylesheet"/>
    <link href="' . $NETOPS_WEBSITE_BASEURL . '/css/_station.css"
         rel="stylesheet"/>
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
    <script src="/lib/hazdev-tablist-0.1.2/hazdev-tablist.js"></script>
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

<section class="station-details-map-table-row row right-to-left">
  <div class="column one-of-two station-details-table-container">
    <div class="horizontal-scrolling">
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
            <th scope="row">Network</th>
            <td><?php echo FDSNlink($properties['network_code']);?></td>
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
  </div>
</section>

<div class="tablist">
  <?php if (count($photos) > 0) : ?>
    <section class="panel station-details-photos"
        data-title="Site">
      <h2>Site</h2>
      <?php foreach ($photos as $photo) : ?>
        <a class="station-details-photo-link"
            href="<?php echo str_replace('_sm', '', $photo); ?>">
          <img src="<?php echo $photo; ?>" alt="Site Photo"/>
        </a>
      <?php endforeach; ?>
    </section>
  <?php endif; ?>

  <section class="panel station-details-heliplot"
      data-title="Heliplot">
    <h2>Heliplot</h2>
    <a class="station-details-heliplot-link"
        href="<?php echo $heliplotThumb; ?>">
      <img class="station-details-heliplot-image"
          src="<?php echo $heliplotThumb; ?>"
          alt="Station Heliplot"/>
    </a>
  </section>

  <section class="panel station-details-latency"
      data-title="Latency">
    <h2>Latency</h2>
    <a class="station-details-latency-link"
        href="<?php echo $latencyUrl; ?>">
      <img class="station-details-latency-image"
          src="<?php echo $latencyUrl; ?>"
          alt="Station Latency"/>
    </a>
  </section>

  <section class="panel station-details-availability"
      data-title="Availability">
    <h2>Availability</h2>

    <h3>Past 30 Days</h3>
    <a class="station-details-availability-link"
        href="<?php echo $availabilityUrl; ?>_30days.png">
      <img class="station-details-availability-image"
          src="<?php echo $availabilityUrl; ?>_30days.png"
          alt="Station Availability - Past 30 Days"/>
    </a>

    <h3>Past 365 Days</h3>
    <a class="station-details-availability-link"
        href="<?php echo $availabilityUrl; ?>_365days.png">
      <img class="station-details-availability-image"
          src="<?php echo $availabilityUrl; ?>_365days.png"
          alt="Station Availability - Past Year"/>
    </a>

    <h3>Yearly</h3>
    <a class="station-details-availability-link"
        href="<?php echo $availabilityUrl; ?>_all.png">
      <img class="station-details-availability-image"
          src="<?php echo $availabilityUrl; ?>_all.png"
          alt="Station Availability - Yearly"/>
    </a>
  </section>
</div>
