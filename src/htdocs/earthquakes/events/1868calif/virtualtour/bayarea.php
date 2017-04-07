<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Setting of the San Francisco Bay Area';
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
        <img src="images/BayArea_Setting_tile3.jpg" alt="Photo of Bay Area Faults"/>
      </div>
      <div class="column four-of-five">
        <figure>
          <h3>Bay Area Faults</h3>
          <p>How close to a fault do you live?  The San Francisco Bay Area is sliced and diced by a series of faults that together accommodate the relative motion between the Pacific and North American plates. This Google Earth file shows the 8 significant earthquake producing faults in the Bay Area: the Hayward, Calaveras, Concord-Green Valley, Greenville, Rodgers Creek, San Andreas, Mt. Diablo, and San Gregorio Faults. In these files, the faults are represented by simple lines which do not convey how complicated they are.</a></p>
          <p class="kml"><a href="kml/BayAreaFaults.kmz">Bay Area Faults</a> <?php print(simpleFileSize("kml/BayAreaFaults.kmz"));  ?> </p>
          <figcaption>This view of Bay Area Faults is intended solely as an educational tool. <a href="http://www.consrv.ca.gov/CGS/rghm/ap/index.htm">Official state Earthquake Fault Zone maps</a> that govern construction setbacks and disclosure are produced by the <a href="http://gmw.consrv.ca.gov/shmp/">California Geological Survey </a>.</figcaption>
        </figure>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <img src="images/histEQ.jpg" alt="Movie of Animated Earthquakes"/>
      </div>
      <div class="column four-of-five">
        <h3>Animated Earthquakes</h3>
        <p>Watch a movie showing 40 years of Bay Area earthquakes.  This animation of magnitude 3 and greater earthquakes highlights the locations of the 8 major faults in the Bay Area over time. By playing back the earthquakes as a movie in Google Earth, one can see interesting patterns and earthquake sequences (swarms). For example, some fault segments experience long periods of no earthquakes followed by short periods of many earthquakes.  In addition, large numbers of smaller aftershocks usually follow a large earthquake, as after the magnitude 6.9 1989 Loma Prieta earthquake.</p>
        <p><a href="instructions.html">Instructions</a> to animate earthquakes in Google Earth</p>
        <p class="kml"><a href="kml/AnimatedEarthquakes.kmz">Animated Earthquakes</a>  <?php print(simpleFileSize("kml/AnimatedEarthquakes.kmz"));  ?> </p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <img src="images/gps.jpg" alt="Photo of GPS used to track locations of benchmarks"/>
      </div>
      <div class="column four-of-five">
        <h3>Global Positioning Systems (GPS)</h3>
        <p>Do you have a GPS on your cell phone?  Well, scientists use highly-accurate GPS devices to measure the locations of benchmarks throughout the Bay Area, which they re-occupy over a span of years to measure how these benchmarks have moved. The arrows shown in this Google Earth file represent movement of benchmarks in the Bay Area over time.  The length of the arrows shows the rate at which the benchmarks are moving.</p>
        <p class="kml"><a href="kml/GPSVectors.kmz">GPS Vectors</a> <?php print(simpleFileSize("kml/GPSVectors.kmz"));  ?> </p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <img src="images/insar2.jpg" alt="Photo of InSAR"/>
      </div>
      <div class="column four-of-five">
        <h3> InSAR </h3>
        <p>Can movement along earthquake faults be detected from space?  Yes, InSAR (Interferometric synthetic aperture radar) is a remote sensing method that uses satellite radar data to measure ground movement.  Scientists produce maps like the one in this Google Earth file that shows ground deformation. Satellites passing above the ground emit radar that bounces off the earth and returns back to the satellite, measuring the topography of the earth.  The satellite then re-images the same location after a period of time, which allows scientists to detect changes in the earth&rsquo;s surface.  The warmer colors indicate greater movement relative to the satellite. </p>
        <p class="kml"><a href="kml/InSAR.kmz">InSAR</a> <?php print(simpleFileSize("kml/InSAR.kmz"));  ?> </p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <img src="images/geol.jpg" alt="Photo of Bedrock vs. Soft Ground"/>
      </div>
      <div class="column four-of-five">
        <h3> Bedrock vs. Soft Ground </h3>
        <p>Do you live on soft ground or bedrock?  A major factor affecting the shaking intensity at a site during an earthquake is the type of geologic material underneath that site.  Materials in low-lying areas (where most of the people in the Bay Area live and work) consist of deep, loose soils that tend to amplify and prolong shaking more than firmer material on hillsides.  This Google Earth file shows the general geology of the Bay Area - areas that consist of soft soils in the low-lying regions and areas of bedrock on the hillsides.  A detailed <a href="http://pubs.usgs.gov/sim/2006/2918/">geologic map</a> of the Bay Area is also available.</p>
        <p class="kml"><a href="kml/GeneralizedGeology.kmz">Bay Area Geology</a> <?php print(simpleFileSize("kml/GeneralizedGeology.kmz"));  ?> </p>
      </div>
    </div>
  </li>
</ul>
