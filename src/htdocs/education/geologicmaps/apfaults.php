<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Alquist-Priolo Faults';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
include_once ('_functions.inc.php');

?>
<div class="row">
<div class="column one-of-two">
  <figure>
  <p>The Alquist-Priolo Earthquake Fault Zoning Act's main purpose is to prevent the construction of buildings used for human occupancy on the surface trace of active faults. Before a new project is permitted, cities and counties require a geologic investigation to demonstrate that proposed buildings will not be constructed on active faults.</p>
  <h3>Google Earth File</h3>
  <p>This layer depicts <a href="qfaults.php">Quaternary faults</a> that are designated by the Alquist-Priolo Fault Zone Act as active. The Alquist Priolo earthquake fault zones, which are regulatory zones around these active faults, are not included in this file.  Maps of the Alquist Priolo fault zones may be obtained from the <a href="http://www.consrv.ca.gov/CGS/rghm/ap/">California Geologic Survey</a>.</p>
  <p class="kml"><a href="kml/apfaults.kmz">Alquist-Priolo Faults</a><?php print(simpleFileSize("kml/apfaults.kmz")); ?></p>
  <br /> <figcaption>This layer is intended solely as an educational tool. The official <a href="http://www.consrv.ca.gov/CGS/rghm/ap/">Alquist-Priolo Earthquake Fault Zone Maps</a> that govern construction setbacks and disclosure are produced by the <a href="http://gmw.consrv.ca.gov/shmp/">California Geological Survey</a>. Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers.</figcaption>
</div>
</figure>
<div class="column one-of-two">
  <a href="kml/apfaults.kmz"><img src="images/apfaults.jpg" alt="AP Faults icon" /></a>
</div>
</div>
