<?php

include_once '../_functions.inc.php';
$contributors = get_json_metadata('.', 'index.json');


// one day
$CACHE_MAXAGE = 86400;
include '../../../../lib/cache.inc.php';

header('Content-type: application/json');


$base_url = 'http://earthquake.usgs.gov/data/comcat';
$output = array();
foreach ($contributors as $contributor) {
  // copy selected properties
  $c = array();

  $id = $contributor['id'];

  $c['id'] = $id;
  $c['title'] = $contributor['title'];
  $c['aliases'] = $contributor['aliases'];

  // link to contributor page
  $c['url'] = $base_url . '/contributor/' . $id . '/';

  // logo if it exists
  $logo = 'logos/' . $id . '.svg';
  if (file_exists('../' . $logo)) {
    $c['logo'] = $base_url . '/' . $logo;
  }

  $output[] = $c;
}

echo json_encode($output);
