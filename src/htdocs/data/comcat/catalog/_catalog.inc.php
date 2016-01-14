<?php

if (!isset($TEMPLATE)) {
  $index = 'index.json';

  if (!file_exists($index)) {
    http_response_code(400);
    exit();
  } else {
    $json = json_decode(file_get_contents($index), true);

    $id = $json['id'];
    $title = $json['title'];
    $url = $json['url'];
    $logo = '../../logos/' . $id . '.svg';

    $TITLE = strtoupper($id) . ' (Catalog)';
    $NAVIGATION = true;

    if (file_exists($logo)) {
      $COOPERATORS =
          '<a class="cooperator" href="' . $url . '">' .
            '<img src="' . $logo . '"' .
            ' alt="in cooperation with ' . $title . '"/>' .
          '</a>';
    }
  }

  include 'template.inc.php';
}

echo '<h2>' . $title . '</h2>';
echo '<p><a href="' . $url . '">' . $url . '</a></p>';

?>
