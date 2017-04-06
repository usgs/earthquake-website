<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'The San Andreas and Other Bay Area Faults';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
include_once ('_functions.inc.php');

?>

<ul class="no-style">
  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/BayArea_Setting_tile3.jpg" alt="Bay Area Faults"/></h3>
      </div>
      <div class="column four-of-five">
    <figure>
      <h3>Bay Area Faults</h3>
    <p>The San Francisco Bay Area is transected by a series of subparallel faults that together accommodate the relative motion between the Pacific and North American plates. The San Andreas Fault and 6 other significant fault zones are present in the Bay Area: the Calaveras, Concord-Green Valley, Greenville, Hayward, Rodgers Creek, and San Gregorio Faults. The faults shown here are represented by simple lines which do not convey how complicated they can be. In reality, active faults can be very complex, consisting of multiple breaks along curved, complex traces. See for yourself by examining the detailed mapping of the <a href="/regional/nca/haywardfault/">Hayward Fault</a>.</p>
    <p class="kml"><a href="kml/SanAndreasBayAreaFaults.kmz">Bay Area Faults</a> <?php print(simpleFileSize("kml/SanAndreasBayAreaFaults.kmz")); ?> </p>
      <figcaption>This Bay Area Faults layer is intended solely as an educational tool. <a href="http://www.consrv.ca.gov/CGS/rghm/ap/index.htm">Official state Earthquake Fault Zone maps</a> that govern construction setbacks and disclosure are produced by the <a href="http://gmw.consrv.ca.gov/shmp/">California Geological Survey</a>.</figcaption>
    </figure>
  </div>
</div>
</li>
<li>
  <div class="row">
  <div class="column one-of-five">
    <h3><img src="images/BayAreaRuptures.jpg" alt="Historic Ruptures"/></h3>
  </div>
  <div class="column four-of-five">
    <figure>
      <h3>Historic Ruptures</h3>
      <p>In the last half of the 1800&rsquo;s, potentially damaging earthquakes (magnitude 6.0 or greater) occurred in the San Francisco Bay Area at an average rate of once every four years. However, seismicity rates dropped dramatically after the 1906 earthquake: scientists believe the large stress release of the 1906 earthquake also relieved stresses on faults throughout the Bay Area. Seismic activity was very low until the 1989 Loma Prieta (6.9 magnitude) earthquake. The level of seismic activity has not yet returned to that of the late 1800&rsquo;s, but as stresses continue to build scientists expect more frequent and stronger earthquakes in the future. The following file is an interpretation of historic ruptures in the Bay Area from 1836 until today. For more information, see <a href="/regional/states/historical_state.php#california">Historic Earthquakes by State</a>.</p>
      <p class="kml"><a href="kml/BayAreaRuptures.kmz">Historic Ruptures</a> <?php print(simpleFileSize("kml/BayAreaRuptures.kmz")); ?></p>
    </figure>
  </div>
</div>
</li>
</ul>
<p><a href="earthquake.php">The Northern California Earthquake, April 18, 1906</a> &raquo;</p>
