<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Browse by Theme';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>
<div class="row">

  <div class="column one-of-two">
<ul class="no-style clear">

  <li>
    <h3>Alquist-Priolo Faults</h3>
    <a href="apfaults.php" class="kml"><figure class="left"><img src="images/tn-apfaults.jpg" alt="AP Faults icon" /></figure></a>
    <p>Browse active surface fault traces and zones mapped by the California Geological Survey as required by the Alquist-Priolo Earthquake Fault Zone Act.</p>
    <ul>
      <a href="kml/apfaults.kmz" class="kml">Download Google Earth file</a>
      <br><a href="apfaults.php">More about this layer</a> &raquo;
    </ul>
  </li>

  <li>
    <h3>Earthquakes</h3>
    <a href="earthquakes.php" class="kml"><figure class="left"><img src="images/tn-earthquakes.jpg" alt="Earthquakes icon" /></figure></a>
    <p>Examine 40-years of M 2+ earthquakes in the Bay Area.</p>
    <ul>
      <a href="kml/earthquakes.kmz" class="kml">Download Google Earth file</a>
      <br><a href="earthquakes.php">More about this layer</a> &raquo;
    </ul>
  </li>

  <li>
    <h3>Geology</h3>
    <a href="geology.php" class="kml"><figure class="left"><img src="images/tn-geology.jpg" alt="Geology icon" /></figure></a>
    <p>What kind of rocks are under your house? This layer depicts the distribution of geologic materials at the surface in the Bay Area.</p>
    <ul>
      <a href="kml/geology.kmz" class="kml">Download Google Earth file</a>
      <br><a href="geology.php">More about this layer</a> &raquo;
    </ul>
  </li>

  <li>
    <h3>Hillshades</h3>
    <a href="hillshades.php" class="kml"><figure class="left"><img src="images/tn-hillshades.jpg" alt="Hillshades icon" /></figure></a>
    <p>Shaded relief, or hillshading, provides a clearer picture of the topography by mimicing the sun&rsquo;s effects (illumination, shading and shadows) on hills and canyons.</p>
    <ul>
      <a href="kml/hillshades.kmz" class="kml">Download Google Earth file</a>
      <br><a href="hillshades.php">More about this layer</a> &raquo;
    </ul>
  </li>
</ul>
</div>


<div class="column one-of-two">
  <ul class="no-style clear">

  <li>
    <h3>Landslides</h3>
    <a href="landslides.php" class="kml"><figure class="left"><img src="images/tn-landslides.jpg"  alt="Landslides icon" /></figure></a>
    <p>Landslides are relatively common in the Bay Area. In fact, 75,000 have been mapped within the ten Bay Area counties. They range widely in age, size, and type and degree of activity.</p>
    <ul>
      <a href="kml/landslides.kmz" class="kml">Download Google Earth file</a>
      <br><a href="landslides.php">More about this layer</a> &raquo;
    </ul>
  </li>

  <li>
    <h3>Liquefaction</h3>
    <a href="liquefaction.php" class="kml"><figure class="left"><img src="images/tn-liquefaction.jpg"  alt="Liquefaction icon" /></figure></a>
    <p>Solid ground can &ldquo;liquefy&rdquo; during an earthquake, when sandy materials saturated with water behave like a liquid due to shaking. Examine areas that are susceptible to liquefaction.</p>
    <ul>
      <a href="kml/liquefaction.kmz" class="kml">Download Google Earth file</a>
      <br><a href="liquefaction.php">More about this layer</a> &raquo;
    </ul>
  </li>

  <li>
    <h3>Quarternary Faults</h3>
    <a href="qfaults.php" class="kml"><figure class="left"><img src="images/tn-qfaults.jpg" alt="Quarternary Faults icon" /></figure></a>
    <p>Do you live near an earthquake fault? This layer shows surface faults traces that are believed to be sources of M 6+ earthquakes during the Quaternary period (past 1.6 million years).</p>
    <ul>
      <a href="kml/qfaults.kmz" class="kml">Download Google Earth file</a>
      <br><a href="qfaults.php">More about this layer</a> &raquo;
    </ul>
  </li>
</ul>
</div>
</div>
