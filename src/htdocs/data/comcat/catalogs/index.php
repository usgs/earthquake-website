<?php

if (!isset($TEMPLATE)) {
  $TITLE = "Catalogs";

  include 'template.inc.php';
}


include_once '../_functions.inc.php';
$catalogs = get_json_metadata('.', 'index.json');

echo '<ul>';
foreach ($catalogs as $id => $metadata) {
  echo '<li>' .
      '<a href="' . $id . '/">' .
        strtoupper($id) . ' - ' . $metadata['name'] .
      '</a>' .
      '</li>';
}
echo '</ul>';

?>
