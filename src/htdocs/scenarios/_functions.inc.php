<?php

/**
 * Scan a directory for metadata files.
 *
 * @param $dir {String}
 *        default '.'
 *        path to directory to scan.
 * @param $metadata_file {String}
 *        default 'index.json'
 *        name of json file within directory to parse.
 */
function get_json_metadata ($dir='.', $metadata_file='index.json') {
  $metadata = array();

  $files = scandir($dir);
  foreach ($files as $f) {
    $path = $dir . DIRECTORY_SEPARATOR . $f;
    if ($f === '.' || $f === '..' || !is_dir($path)) {
      continue;
    }
    // load name from data file
    $index = $path . DIRECTORY_SEPARATOR . $metadata_file;
    if (!file_exists($index)) {
      continue;
    }
    $metadata[] = json_decode(file_get_contents($index), true);
  }

  return $metadata;
}

/**
 * Get an absolute url to the root of the site.
 *
 * @return {String}
 *         absolute url to host for current page.
 *         for example: 'http://localhost:8080'
 */
function get_host_url_prefix () {
  // build absolute Event Page URL string
  $server_protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'Off') ?
      'https://' :
      'http://';
  $server_host = isset($_SERVER['HTTP_HOST']) ?
      $_SERVER['HTTP_HOST'] :
      'earthquake.usgs.gov';
  $server_port = isset($_SERVER['SERVER_PORT']) ?
      $_SERVER['SERVER_PORT'] :
      80;

  $host_url_prefix = $server_protocol . $server_host;

  // check for non-standard port
  if ( ($server_port == 80 && $server_protocol == 'http://') ||
      ($server_port == 443 && $server_protocol == 'https://') ) {
    // don't need port
  } else {
    // if a port is specified in the HTTP_HOST, don't use twice
    // (ex: localhost:8080, perhaps used in port forwarding)
    if(!strpos($server_host, ':')) {
      $host_url_prefix .= ':' . $server_port;
    }
  }

  return $host_url_prefix;
}

?>
