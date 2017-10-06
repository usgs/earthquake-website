<?php

include_once '../_functions.inc.php';
$catalogs = get_json_metadata('.', 'index.json');


// one day
$CACHE_MAXAGE = 86400;
include '../../../lib/cache.inc.php';

header('Content-type: application/json');


$base_url = get_host_url_prefix() . '/scenarios';
foreach ($catalogs as $id => &$metadata) {
  $id = $metadata['id'];
  $logo_id = isset($metadata['logo-id']) ? $metadata['logo-id'] : $id;
  $logo = 'logos/' . $logo_id . '.svg';
  if (file_exists('../' . $logo)) {
    $metadata['logo'] = $base_url . '/' . $logo;
  }

  $metadata['url'] = $base_url . '/catalog/' . $id . '/';
}

echo json_encode($catalogs);
