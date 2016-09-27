<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Station Details Map Example';

  $HEAD = '
    <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
    <link rel="stylesheet" href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"/>
    <link rel="stylesheet" href="css/station-details-map.css"/>
    <style>
      #map-container {
        width: 100%;
        height: 480px;
      }
      @media screen and (min-height: 900px) {
        #map-container {
          height: 640px;
        }
      }
      @media screen and (min-height: 1200px) {
        #map-container {
          height: 1024px;
        }
      }
    </style>
  ';

  $FOOT = '
    <script src="/lib/leaflet-0.7.7/leaflet.js"></script>
    <script src="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.js"></script>
    <script src="js/station-details-map.js"></script>
    <script>
      StationDetailsMap({
        el: document.querySelector(\'#map-container\'),
        station: {
          network_code: \'US\',
          station_code: \'ISCO\',
          name: \'Idaho Springs, Colorado, USA\',
          latitude: 39.8,
          longitude: -105.613,
          telemetry: 3
        }
      })
    </script>
  ';

  include 'template.inc.php';
}
?>

<div id="map-container"></div>
