<?php
include_once dirname(__DIR__) . '/conf/config.inc.php';

if (!function_exists('safe_json_encode')) {
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
}

if (!function_exists('utf8_encode_array')) {
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
}

if (!function_exists('get_stations')) {
  /**
   * Gets stations from the web service. Throws an exception if anything
   * fails.
   *
   * @param $virtualNetwork {String}
   *     The virtual network for which to fetch stations. If not provided,
   *     fetches all available stations.
   *
   * @return {FeatureCollection}
   *     A feature collection containing station information.
   *
   * @throws {Exception}
   *     If anything goes awry.
   */
  function get_stations ($virtualNetwork = null) {
    global $NETOPS_WEBSITE_BASEURL;

    $url = $NETOPS_WEBSITE_BASEURL . '/station.json.php';

    if ($virtualNetwork != null) {
      $url .= '?virtual_network=' . $virtualNetwork;
    }

    $stations = json_decode(@file_get_contents($url), true);

    if ($stations == '' || !isset($stations['features'])) {
      throw new Exception('Failed to get sation information');
    }

    return $stations;
  }
}
