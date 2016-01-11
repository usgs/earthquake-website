<?php

include_once '../_functions.inc.php';
$catalogs = get_json_metadata('.', 'index.json');

header('Content-type: application/json');


$base_url = '/data/comcat';
foreach ($catalogs as $id => &$metadata) {
  $logo = 'logos/' . $id . '.svg';
  if (file_exists('../' . $logo)) {
    $metadata['logo'] = $base_url . '/' . $logo;
  }

  $metadata['url'] = $base_url . '/catalogs/' . $id . '/';
}

echo json_encode($catalogs);
