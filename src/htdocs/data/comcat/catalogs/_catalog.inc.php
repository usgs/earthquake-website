<?php

if (!isset($TEMPLATE)) {
  $index = 'index.json';

  if (!file_exists($index)) {
    $TITLE = 'not found';
  } else {
    $json = json_decode(file_get_contents($index), true);

    $id = $json['id'];
    $name = $json['name'];
    $href = $json['href'];
    $logo = '../../logos/' . $id . '.svg';

    $TITLE = strtoupper($id) . ' (Catalog)';

    if (file_exists($logo)) {
      $COOPERATORS =
          '<a class="cooperator" href="' . $href . '">' .
            '<img src="' . $logo . '"' .
            ' alt="in cooperation with ' . $name . '"/>' .
          '</a>';
    }
  }

  include 'template.inc.php';
}

echo '<h2>' . $name . '</h2>';
echo '<p><a href="' . $href . '">' . $href . '</a></p>';

?>
