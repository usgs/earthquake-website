<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Scenario Catalogs';
  $NAVIGATION = true;
  include 'template.inc.php';
}


include_once '../_functions.inc.php';
$catalogs = get_json_metadata('.', 'index.json');

echo '<ul>';
foreach ($catalogs as $catalog) {
  $id = $catalog['id'];
  $title = $catalog['title'];

  echo '<li>' .
      '<a href="' . $id . '/">' .
        strtoupper($id) . ' - ' . $title .
      '</a>' .
      '</li>';
}
echo '</ul>';

?>
