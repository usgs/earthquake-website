<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Browse by Quad';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once ('_functions.inc.php');

?>

<h3>Generate a map interactively in your area of interest</h3>

<figure class="right">
  <img src="images/quad-instructions.jpg" alt="quad-instructions" />
</figure>

<p>Click on the red node in the center of each quadrangle to reveal a list of available layers that will download into Google Earth upon selection. Stack layers by clicking the node again to download additional layers.  The information links next to each layer will open a web page containing specific information related to the data depicted in the layer.</p>

<p class="kml"><a href="kml/quads.kmz">Bay Area Quad Browser</a><?php print(simpleFileSize("kml/quads.kmz")); ?></p>
