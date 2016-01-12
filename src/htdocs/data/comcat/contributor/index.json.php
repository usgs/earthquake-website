<?php

include_once '../_functions.inc.php';
$contributors = get_json_metadata('.', 'index.json');


// one day
$CACHE_MAXAGE = 86400;
include '../../../../lib/cache.inc.php';

header('Content-type: application/json');


$base_url = '/data/comcat';
foreach ($contributors as $contributor) {
  $id = $contributor['id'];
  $logo = 'logos/' . $id . '.svg';
  if (file_exists('../' . $logo)) {
    $contributor['logo'] = $base_url . '/' . $logo;
  }

  $contributor['url'] = $base_url . '/contributor/' . $id . '/';
}

echo json_encode($contributors);
