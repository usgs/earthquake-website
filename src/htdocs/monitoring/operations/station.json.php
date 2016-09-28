<?php
  include_once __DIR__ . '/conf/config.inc.php';
  include_once __DIR__ . '/inc/functions.inc.php';

  $feed = array(
    'errors' => array(),
    'features' => array(),
    'type' => 'FeatureCollection'
  );

  $networks = array_map('basename', glob('stations/*', GLOB_ONLYDIR));

  foreach ($networks as $network) {
    $stations = array_map('basename',
        glob("stations/${network}/*", GLOB_ONLYDIR));

    foreach ($stations as $station) {
      // Find station files
      $stationFile = __DIR__ . "/stations/${network}/${station}/index.json";

      try {
        // Validate file content
        if (!file_exists($stationFile)) {
          throw new Exception('Could not find station information for ' .
            "${network}_${station}");
        }

        $stationJson = json_decode(file_get_contents($stationFile), true);

        if (json_last_error() != JSON_ERROR_NONE || $stationJson == null) {
          throw new Exception("Failed to parse JSON for ${network}_${station}");
        }

        if ($stationJson['id'] != "${network}_${station}") {
          throw new Exception("ID mismatch for ${network}_${station}");
        }

        $stationJson['properties']['url'] =
          $NETOPS_WEBSITE_BASEURL . "/stations/${network}/${station}/";

        // Passed validation, add this station to the feed
        array_push($feed['features'], $stationJson);
      } catch (Exception $ex) {
        // Failed validation, add this error to the feed
        array_push($feed['errors'], $ex->getMessage());
      }

    }
  }

  // Output the feed
  header('Content-Type: application/json');
  print str_replace('\/', '/', safe_json_encode($feed));
