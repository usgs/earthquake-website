<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Scenario Catalogs';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<p>
  This new (2017) collection of nearly 800 ShakeMap earthquake scenarios is the authoritative U.S.G.S. collection for the continental U.S. The scenario fault ruptures are derived from the latest National Seismic Hazard Model for the U.S. (Petersen et al, 2014); the collection of events is known as the 2014 Building Seismic Safety Council (BSSC) catalog. For this BSSC ShakeMap catalog, we leverage ArcGIS Server and ArcGIS Online to display locations, ruptures, and maximum shaking intensities. Each ShakeMap can be selected and any format of each can downloaded.
</p>
<a href="http://usgs.maps.arcgis.com/apps/webappviewer/index.html?id=14d2f75c7c4f4619936dac0d14e1e468"><h2>U.S. Map and List of Scenarios for Building Seismic Safety Council 2014 Event Set</h2></a>
<p>
  See <strong>bssc2014</strong> catalog link below for more detailed information about this scenario collection. Legacy scenario catalogs are included for archival purposes.
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
