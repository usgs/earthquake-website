<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Browse Entire Region';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<div class="row">
  <div class="column one-of-two">
<ul class="no-style linklist clear">
  <li>
    <h3><a href="apfaults.php" class="kml"><img src="images/tn-apfaults.jpg" alt="AP Faults icon" />Alquist-Priolo Faults</a></h3>
    <p>Browse active surface fault traces and zones mapped by the California Geological Survey as required by the Alquist-Priolo Earthquake Fault Zone Act.</p>
  </li>

  <li>
    <h3><a href="earthquakes.php" class="kml"><img src="images/tn-earthquakes.jpg" alt="Earthquakes icon" />Earthquakes</a></h3>
    <p>Examine 40-years of M 2+ earthquakes in the Bay Area.</p>
  </li>

  <li>
    <h3><a href="geology.php" class="kml"><img src="images/tn-geology.jpg"  alt="Geology icon" />Geology</a></h3>
    <p>What kind of rocks are under your house? This layer depicts the distribution of geologic materials at the surface in the Bay Area.</p>
  </li>

  <li>
    <h3><a href="hillshades.php" class="kml"><img src="images/tn-hillshades.jpg" alt="Hillshades icon" />Hillshades</a></h3>
    <p>Shaded relief, or hillshading, provides a clearer picture of the topography by mimicing the sun&rsquo;s effects (illumination, shading and shadows) on hills and canyons.</p>
  </li>
</ul>
</div>
<div class="column one-of-two">
<ul class="no-style linklist clear">
  <li>
    <h3><a href="landslides.php" class="kml"><img src="images/tn-landslides.jpg" alt="Landslides icon" />Landslides</a></h3>
    <p>Landslides are relatively common in the Bay Area. In fact, 75,000 have been mapped within the ten Bay Area counties. They range widely in age, size, and type and degree of activity.</p>
  </li>

  <li>
    <h3><a href="liquefaction.php" class="kml"><img src="images/tn-liquefaction.jpg" alt="Liquefaction icon" />Liquefaction</a></h3>
    <p>Solid ground can &ldquo;liquefy&rdquo; during an earthquake, when sandy materials saturated with water behave like a liquid due to shaking. Examine areas that are susceptible to liquefaction.</p>
  </li>

  <li>
    <h3><a href="qfaults.php" class="kml"><img src="images/tn-qfaults.jpg" alt="Quarternary Faults icon" />Quarternary Faults</a></h3>
    <p>Do you live near an earthquake fault? This layer shows surface faults traces that are believed to be sources of M 6+ earthquakes during the Quaternary period (past 1.6 million years).</p>
  </li>
  </ul>
</div>
</div>
