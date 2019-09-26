<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Bay Area Geologic Maps in Google Earth';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<p>Explore the geology and geologic hazards of the Bay Area in <a href="https://www.google.com/earth/">Google Earth</a><sup>TM</sup>. Ever wonder how close you are to an earthquake fault? What is liquefaction and where is it likely to occur? Identify how your area of interest relates to the Earth below and learn how to prepare for future natural hazards.</p>

<div class="row">
  <div class="column one-of-two">

    <h3>Browse by Quad</h3>
    <a href="quadrangles.php"><img src="images/quadrangles.jpg" alt="quadrangles" /></a>
    <p>Interactively download themes within Google Earth in your area of interest.</p>

    </div>
    <div class="column one-of-two">

    <h3>Browse Entire Region</h3>
    <a href="region.php"><img src="images/themes.jpg" alt="theme" /></a>
    <p>Download the entire extent of each theme as a layer in Google Earth.</p>

  </div>
</div>

<p><small>Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</small></p>
