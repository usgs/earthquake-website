<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Historic Photographs of the 1906 Earthquake';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
include_once ('_functions.inc.php');


?>
<ul class="no-style separator">
  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/HistPhotos_page.jpg" alt="Photographs of Fault and Earthquake Damage"/></h3>
      </div>
      <div class="column four-of-five">
    <figure>
      <h3>Photographs of Fault and Earthquake Damage</h3>
      <p>The 1906 earthquake was the first natural disaster to be well-documented by photographs. The <a href="http://bancroft.berkeley.edu/collections/earthquakeandfire/index2.html">Bancroft Library</a> of the University of California, Berkeley, holds the single largest collection of 1906 photographs, including thousands from their own archive and those of contributing institutions. The file below includes 73 photographs taken at known locations, organized into groups showing fault rupture, shaking damage, landslides, and ground failure including liquefaction.  This file also includes links to other collections of 1906 photographs, as well as to &ldquo;then and now&rdquo; repeat photography documenting changes in San Francisco over the past 100 years.</p>
         <p class="kml"><a href="kml/FaultandShakingPhotographs.kmz">Photographs of Fault and Earthquake Damage</a><?php print(simpleFileSize("kml/FaultandShakingPhotographs.kmz")); ?></p>
    </figure>
  </div>
</div>
</li>
<li>
</ul>

<p><a href="modern.php">Earthquake Hazards of The Bay Area Today</a> &raquo;</p>
