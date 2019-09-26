<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquakes';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once ('_functions.inc.php');

?>

<div class= "row">
  <div class="column one-of-two">
    <p>The Bay Area may is a seismically active region. On average, there are 20 or more earthquakes every day in the greater Bay Area. Hundreds of sensitive seismic instruments record these earthquakes, many of which are too small or too deep to be felt. Understanding the frequency and location of past earthquakes&mdash;both large and small&mdash;is important for detecting locations of faults and determining where future earthquakes might occur.</p>

    <h3>Google Earth File</h3>
    <p>This layer shows M2+ earthquakes that occurred between 1960 and 2009. The symbols are sized proportional to the magnitude of the earthquake.  Hover your cursor over an earthquake epicenter to see the magnitude and date, or click for a pop-up balloon with more information, including the depth beneath the surface.</p>
    <p class="kml"><a href="kml/earthquakes.kmz">Earthquakes</a><?php print(simpleFileSize("kml/earthquakes.kmz")); ?></p>

    <h3>Learn More</h3>
    <ul>
      <li><a href="/earthquakes/">USGS real-time earthquakes</a> (<a href="/earthquakes/feed/v1.0/summary/1.0_week_age.kml">in Google Earth</a>)</li>
      <li><a href="http://www.ncedc.org/anss/catalog-search.html">Data source</a></li>
    </ul>

    <p><small>Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</small></p>
  </div>

  <div class="column one-of-two">
    <a href="kml/earthquakes.kmz"><img src="images/earthquakes.jpg" alt="Earthquakes icon" /></a>
  </div>
</div>
