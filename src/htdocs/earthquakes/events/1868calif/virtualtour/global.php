<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Global Earthquake Setting';
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
        <h3><img src="images/plates.jpg" alt="Photo of Tectonic Plates Boundaries"/></h3>
      </div>
      <div class="column four-of-five">
        <h3> Tectonic Plates Boundaries </h3>
        <p>The outermost shell of the Earth is broken into several rigid &ldquo;plates&rdquo; that have been moving relative to one another for hundreds of millions of years. Two of these moving plates, the North American and the Pacific, rub past each other in western California; the boundary between them is a zone of faults, the principal one being the San Andreas Fault. The Pacific Plate (on the west) slides horizontally northwestward relative to the North American Plate (on the east) at about 2 in/yr, causing earthquakes along the San Andreas and associated faults. For more information on plate tectonics see  <a href="http://pubs.usgs.gov/gip/dynamic/dynamic.html">This Dynamic Earth</a>.</p>
        <p class="kml"><a href="https://prd-wret.s3-us-west-2.amazonaws.com/assets/palladium/production/atoms/files/plate-boundaries.kmz">Tectonic Plate Boundaries</a> (321 kB)</p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/RealTimeEQ3.jpg" alt="Image showing a Real-Time Earthquake"/></h4>
      </div>
      <div class="column four-of-five">
        <h3> Real-Time Earthquakes </h3>
        <p>Did you know that 500,000 detectable earthquakes occur globally each year?  Of those, nearly 100,000 can be felt, and 100 cause damage.  This Google Earth file shows earthquake activity around the world for the past week.  See how earthquakes are concentrated along the plate boundaries of the Earth. The word &ldquo;earthquake&rdquo; is used to describe both sudden slip on a fault and the resulting ground shaking. Earthquakes are also associated with active volcanism and the flow of magma at depth.  Most earthquakes in California occur on faults in the upper 5-10 miles (8-15 km) of the Earth&rsquo;s crust as the result of failure caused by the strains induced by plate motions. Earthquakes in the Bay Area reflect the relative motion of the Pacific and North America plates.</p>
        <p class="kml"> <a href="/earthquakes/feed/v1.0/summary/1.0_week_age.kml">Real-time Earthquakes</a></p>
      </div>
    </div>
  </li>


</ul>

<p><a href="./bayarea.php">Earthquake Setting of the San Francisco Bay Area</a> &raquo;</p>
