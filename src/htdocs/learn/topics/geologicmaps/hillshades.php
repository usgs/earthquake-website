<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Hillshades';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once ('_functions.inc.php');

?>

<div class="row">
  <div class="column one-of-two">
    <p>Shaded relief, or hillshading, is a technique where a lighting effect is added to a map based on elevation variations within the landscape. It provides a clearer picture of the topography by mimicing the sun&rsquo;s effects (illumination, shading and shadows) on hills and canyons.</p>

    <h3>Google Earth File</h3>
    <p>This layer depicts hillshades for the entire bay area.</p>
    <p class="kml"><a href="kml/hillshades.kmz">Hillshades</a><?php print(simpleFileSize("kml/hillshades.kmz")); ?></p>

    <h3>Learn More</h3>
    <ul>
      <li><a href="https://bard.wr.usgs.gov/getDEMSMap.html">Data source</a> (7.5 Min DEMs)</li>
      <li><a href="https://eros.usgs.gov/#/Find_Data/Products_and_Data_Available/NED">Data source</a> (National Elevation Dataset)</li>
    </ul>

    <p><small>Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</small></p>
  </div>

  <div class="column one-of-two">
    <a href="kml/hillshades.kmz"><img src="images/hillshades.jpg" alt="Hillshades icon" /></a>
  </div>
</div>
