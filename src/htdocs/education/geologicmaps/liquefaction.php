<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Liquefaction Susceptibility';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once ('_functions.inc.php');

?>

<div class="row">

  <div class="column one-of-two">
    <p>Liquefaction is a phenomenon where saturated sand and silt take on the characteristics of a liquid during the intense shaking of an earthquake. The highest hazard areas are concentrated in regions of man-made landfill, especially fill that was placed many decades ago in areas that were once submerged bay floor. Such areas along the Bay margins are found in San Francisco, Oakland and Alameda Island, as well as other places around San Francisco Bay. Other potentially hazardous areas include larger stream channels, which produce the loose young soils that are particularly susceptible to liquefaction.</p>

    <h3>Google Earth File</h3>
    <p>This layer shows the varying susceptibility in different parts of the region. Susceptibility is delineated in five units from &ldquo;Very High&rdquo; to &ldquo;Very Low&rdquo; hazard. Roughly one quarter of the San Francisco Bay region may be exposed to liquefaction&mdash;the area mapped in the &ldquo;Very High&rdquo;, &ldquo;High&rdquo; and &ldquo;Moderate&rdquo; categories makes up about 25% of the 9-county region.</p>
    <p>Note that this KML layer has the &ldquo;Very Low&rdquo; liquefaction susceptibility zones turned off by default.</p>
    <p class="kml"><a href="kml/liquefaction.kmz">Liquefaction Susceptibility</a><?php print(simpleFileSize("kml/liquefaction.kmz")); ?></p>

    <h3>Learn More</h3>
    <ul>
      <li><a href="https://geomaps.wr.usgs.gov/sfgeo/liquefaction/">Liquefaction</a> (USGS &amp; California Geological Survey)</li>
      <li>Data source: <a href="https://pubs.usgs.gov/of/2000/of00-444/">USGS Open File Report 00-444</a></li>
      <li>Additional (updated) Data: <a href="https://pubs.usgs.gov/of/2006/1037/">USGS Open File Report 2006-1037</a></li>
    </ul>

    <p><small>This layer is intended solely as an educational tool. The <a href="http://www.conservation.ca.gov/cgs/shzp/">California Geological Survey</a> produces State-mandated regulatory maps that show &ldquo;<a href="http://www.abag.ca.gov/bayarea/eqmaps/liquefac/liquefac.html">Zones of Required Investigation</a>&rdquo; for liquefaction (and landslide) hazard. Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</small></p>
  </div>

  <div class="column one-of-two">
    <a href="kml/liquefaction.kmz"><img src="images/liquefaction.jpg" width="304" height="333" alt="Liquefaction icon" /></a>
  </div>
  
</div>
