<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Contributors';
  $NAVIGATION = true;
  include 'template.inc.php';
}


include_once '../_functions.inc.php';
$contributors = get_json_metadata('.', 'index.json');

echo '<ul>';
foreach ($contributors as $contributor) {
  $aliases = $contributor['aliases'];
  $id = $contributor['id'];
  $title = $contributor['title'];

  if ($aliases !== null) {
    $title .= ' (aka ' . strtoupper(implode(', ', $aliases)) . ')';
  }

  echo '<li>' .
      '<a href="' . $id . '/">' .
        strtoupper($id) . ' - ' . $title .
      '</a>' .
      '</li>';
}
echo '</ul>';

?>
