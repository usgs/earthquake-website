<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Rock Physics Labs';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="../index.css"/>
      ';
        include 'template.inc.php';
    }
?>

<h2>Current Projects</h2>

<ul class="no-style linklist">
  <li>
    <a href="friction.php">
      <h4>Rate- and State-Dependent Friction</h4>
      <img src="images/tn-double-direct-shear.jpg" width="150" alt=""/>
    </a>
    <p>Experiments are devised to determine the rate- and state-dependent friction laws using both rocks and transparent sliding surfaces.
    </p>
  </li>
  <li>
    <a href="nucleation.php">
      <h4>Earthquake Nucleation</h4>
      <img src="images/tn-EarthquakeNucleation1.jpg" width="150" alt=""/>
    </a>
    <p>How do earthquakes start? Explore earthquake nucleation experiments on the 2-meter biaxial press.
    </p>
  </li>
  <li>
    <a href="creeping.php">
      <h4>Mineralogy of Creeping Faults</h4>
      <img src="images/tn-CreepingFaults1.jpg" width="150" alt=""/>
    </a>
    <p>Why are some earthquake faults locked while others slowly creep?  The mineralogy of the fault plays an important role in fault strength.
    </p>
  </li>
  <li>
    <a href="rotary.php">
      <h4>Earthquake Simulation in High-Velocity Rotary Shear Experiments</h4>
      <img src="images/tn-rotary.jpg" width="150" alt=""/>
    </a>
    <p>How do you design an experimental apparatus where rocks surfaces can slip at the speeds encountered during real earthquakes?
    </p>
  </li>
  <li>
    <a href="safod.php">
      <h4>San Andreas Fault Observatory at Depth (SAFOD)</h4>
      <img src="images/tn-SAFOD1.jpg" width="150" alt=""/>
    </a>
    <p>A drillhole that crosses the San Andreas fault at 2.7 depth deep in the earth reveals minerals with unusual physical properties.
    </p>
  </li>
  <li>
    <a href="melt.php">
      <h4>Melting of Slip Surface at High Pressure</h4>
      <img src="images/tn-Shearing3.jpg" width="150" alt=""/>
    </a>
    <p>Simulated earthquakes at very high pressures causes fault surfaces to melt and loose strength.
    </p>
  </li>
</ul>
