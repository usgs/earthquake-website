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
function get_json_metadata($dir='.', $metadata_file='index.json') {
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

?>
