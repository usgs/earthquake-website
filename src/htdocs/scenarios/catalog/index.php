<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Scenario Catalogs';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<a href="/scenarios/map/#%7B%22feed%22%3A%22bssc2014%22%7D"><h2>U.S. Map and List of Scenarios for Building Seismic Safety Council 2014 Event Set</h2></a>
<p>
  See <strong>bssc2014</strong> catalog link below for information about this scenario collection.
</p>

<h2>All Scenario Catalogs</h2>

<?php
include_once '../_functions.inc.php';
$catalogs = get_json_metadata('.', 'index.json');

echo '<ul>';
foreach ($catalogs as $catalog) {
  $id = $catalog['id'];
  $title = $catalog['title'];

  echo '<li>' .
      '<a href="' . $id . '/">' .
        $id . ' - ' . $title .
      '</a>' .
      '</li>';
}
echo '</ul>';

?>
