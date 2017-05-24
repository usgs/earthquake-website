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
    <ul class="no-style linklist">
      <li>
        <a href="apfaults.php">
          <h3>Alquist-Priolo Faults</h3>
          <img src="images/tn-apfaults.jpg" alt="AP Faults icon" />
        </a>
        <p>Browse active surface fault traces and zones mapped by the California Geological Survey as required by the Alquist-Priolo Earthquake Fault Zone Act.</p>
      </li>

      <li>
        <a href="earthquakes.php">
          <h3>Earthquakes</h3>
          <img src="images/tn-earthquakes.jpg" alt="Earthquakes icon" />
        </a>
        <p>Examine 40-years of M 2+ earthquakes in the Bay Area.</p>
      </li>

      <li>
        <a href="geology.php">
          <h3>Geology</h3>
          <img src="images/tn-geology.jpg"  alt="Geology icon" />
        </a>
        <p>What kind of rocks are under your house? This layer depicts the distribution of geologic materials at the surface in the Bay Area.</p>
      </li>

      <li>
        <a href="hillshades.php">
          <h3>Hillshades</h3>
          <img src="images/tn-hillshades.jpg" alt="Hillshades icon" />
        </a>
        <p>Shaded relief, or hillshading, provides a clearer picture of the topography by mimicing the sun&rsquo;s effects (illumination, shading and shadows) on hills and canyons.</p>
      </li>
    </ul>
  </div>

  <div class="column one-of-two">
    <ul class="no-style linklist">
      <li>
        <a href="landslides.php">
          <h3>Landslides</h3>
          <img src="images/tn-landslides.jpg" alt="Landslides icon" />
        </a>
        <p>Landslides are relatively common in the Bay Area. In fact, 75,000 have been mapped within the ten Bay Area counties. They range widely in age, size, and type and degree of activity.</p>
      </li>
      <li>
        <a href="liquefaction.php">
          <h3>Liquefaction</h3>
          <img src="images/tn-liquefaction.jpg" alt="Liquefaction icon" />
        </a>
        <p>Solid ground can &ldquo;liquefy&rdquo; during an earthquake, when sandy materials saturated with water behave like a liquid due to shaking. Examine areas that are susceptible to liquefaction.</p>
      </li>
      <li>
        <a href="qfaults.php">
          <h3>Quarternary Faults</h3>
          <img src="images/tn-qfaults.jpg" alt="Quarternary Faults icon" />
        </a>
        <p>Do you live near an earthquake fault? This layer shows surface faults traces that are believed to be sources of M 6+ earthquakes during the Quaternary period (past 1.6 million years).</p>
      </li>
    </ul>
  </div>

</div>
