<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Quaternary Faults';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once ('_functions.inc.php');

?>

<div class="row">

  <div class="column one-of-two">
    <p>Do you live near an earthquake fault? This layer shows surface faults traces that are believed to be sources of M 6+ earthquakes during the Quaternary geologic period (past 1.6 million years).</p>

    <h3>Google Earth File</h3>
    <p>In this layer, the fault colors represent age of last movement on the fault, from 1.6 million years ago to the present.</p>
    <p class="kml"><a href="kml/qfaults.kmz">Quaternary Faults</a><?php print(simpleFileSize("kml/qfaults.kmz")); ?></p>

    <h3>Learn More</h3>
    <ul>
      <li><a href="/hazards/qfaults/">Data source</a></li>
    </ul>

    <p><small>Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</small></p>
  </div>

  <div class="column one-of-two">
    <a href="kml/qfaults.kmz"><img src="images/qfaults.jpg" alt="Quarternary Faults icon" /></a>
  </div>

</div>
