<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Landslides';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once ('_functions.inc.php');

?>

<div class="row">
  <div class="column one-of-two">
    <p>Significant portions of the greater San Francisco Bay region are comprised of sloping ground, and most of this land is subject to landslides and other types of slope failure. 75,000 landslides&mdash;ranging widely in age, size, and type and degree of activity&mdash;have been mapped within the ten county region. Depending on location, the number of landslides identified averages about ten per square mile and varies from zero to 40.</p>

    <h3>Google Earth File</h3>
    <p>This layer classifies the land as &ldquo;Mostly Landslides&rdquo;, &ldquo;Few Landslides&rdquo; and &ldquo;Flat Land.&rdquo;</p>
    <p class="kml"><a href="kml/landslides.kmz">Landslides</a><?php print(simpleFileSize("kml/landslides.kmz")); ?></p>

    <h3>Learn More</h3>
    <ul>
      <li><a href="https://landslides.usgs.gov/">USGS Landslide Hazards Program</a></li>
      <li><a href="https://pubs.usgs.gov/of/1997/of97-745/of97-745d.html">Data source</a></li>
    </ul>

    <p><small>This layer is intended solely as an educational tool. The California Geological Survey produces State-mandated regulatory maps that show &ldquo;Zones of Required Investigation&rdquo; for landslide hazards. Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</small></p>
  </div>

  <div class="column one-of-two">
    <a href="kml/landslides.kmz"><img src="images/landslides.jpg" alt="Landslides icon" /></a>
  </div>
</div>
