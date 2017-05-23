<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Geology';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once ('_functions.inc.php');

?>

<div class="row">
  <div class="column one-of-two">
    <p>What kind of rocks exist under your house? Examine a geologic map showing the distribution of geologic materials that are visible at the Earth&rsquo;s surface in the Bay Area. Geologist produce maps like this to understand both past and present-day processes affecting a region on Earth.</p>

    <h3>Google Earth File</h3>
    <p>This layer classifies the geologic materials of the Bay Area by age, dividing them into eons, eras, periods, and epochs of geologic time.  Click on a geologic unit to determine its age and rock type.</p>
    <p class="kml"><a href="kml/geology.kmz">Geology</a><?php print(simpleFileSize("kml/geology.kmz")); ?></p>

    <h3>Learn More</h3>
    <ul>
      <li><a href="https://geomaps.wr.usgs.gov/sfgeo/">San Francisco Bay Region Geology and Geologic Hazards</a></li>
    </ul>

    <p><small>Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</small></p>
  </div>

  <div class="column one-of-two">
    <a href="kml/geology.kmz"><img src="images/geology.jpg" alt="Geology icon" /></a>
  </div>
</div>
