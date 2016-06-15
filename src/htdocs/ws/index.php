<?php
  // Author: Lisa Wald
  // Contact: Web Team,
  // Last modified: 6/13/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Web Services';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<h2>GIS Services</h2>
<ul>
  <li><a href="https://github.com/usgs/hazdev-gis/blob/master/documentation.md#httpearthquakeusgsgovarcgisrestservices">GIS Services Documentation</a></li>
  <li><a href="/arcgis/rest/services/eq">Earthquakes</a> - slabs, ShakeMaps, Tweet Earthquake Dispatch, and more.</li>
  <li><a href="/arcgis/rest/services/haz">Earthquake Hazards</a> - National Hazard Maps, faults, and more.</li>
</ul>

<h2>Web APIs</h2>
<ul>
  <li><a href="/fdsnws/event/1/">Earthquakes</a> - real-time and catalog (ComCat).</li>
  <li><a href="geoserve/">GeoServe</a> - places, regions and layers used in Latest Earthquakes.</li>
</ul>
