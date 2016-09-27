<?php
/**
 * Safely json_encode values.
 *
 * Handles malformed UTF8 characters better than normal json_encode.
 * from http://stackoverflow.com/questions/10199017/how-to-solve-json-error-utf8-error-in-php-json-decode
 *
 * @param $value {Mixed}
 *        value to encode as json.
 * @return {String}
 *         json encoded value.
 * @throws Exception when unable to json encode.
 */
function safe_json_encode ($value) {
  $encoded = json_encode($value);
  $lastError = json_last_error();
  switch ($lastError) {
    case JSON_ERROR_NONE:
      return $encoded;
    case JSON_ERROR_UTF8:
      return safe_json_encode(utf8_encode_array($value));
    default:
      throw new Exception('json_encode error (' . $lastError . ')');
  }
}

/**
 * UTF8 encode a data structure.
 *
 * from http://stackoverflow.com/questions/10199017/how-to-solve-json-error-utf8-error-in-php-json-decode
 *
 * @param $mixed {Mixed}
 *        value to utf8 encode.
 * @return {Mixed}
 *         utf8 encoded value.
 */
function utf8_encode_array($mixed) {
  if (is_array($mixed)) {
      foreach ($mixed as $key => $value) {
          $mixed[$key] = utf8_encode_array($value);
      }
  } else if (is_string ($mixed)) {
      return utf8_encode($mixed);
  }
  return $mixed;
}


try {
  $feed = array(
    'features' => array(),
    'type' => 'FeatureCollection'
  );

  $networks = array_map('basename', glob('stations/*', GLOB_ONLYDIR));

  foreach ($networks as $network) {
    $stations = array_map('basename',
        glob("stations/${network}/*", GLOB_ONLYDIR));

    foreach ($stations as $station) {
      // Find station files
      $stationFile = "stations/${network}/${station}/index.json";

      if (!file_exists($stationFile)) {
        throw new Exception('Could not find station information for ' .
          $network . '_' . $station);
      }

      // Validate file content
      $stationJson = json_decode(file_get_contents($stationFile));

      if (json_last_error() != JSON_ERROR_NONE || $stationJson == null) {
        throw new Exception("Failed to parse JSON for ${network}_${station}");
      }

      if ($stationJson->id != "${network}_${station}") {
        throw new Exception("ID mismatch for ${network}_${station}");
      }

      // Output the feed
      array_push($feed['features'], $stationJson);
    }
  }

  header('Content-Type: application/json');
  print str_replace('\/', '/', safe_json_encode($feed));
} catch (Exception $ex) {
  header('HTTP/1.0 500 Internal Server Error');
  print str_replace('\/', '/', safe_json_encode(array(
    'error' => $ex->getMessage()
  )));
}
