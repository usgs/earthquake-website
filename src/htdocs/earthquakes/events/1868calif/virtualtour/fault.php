<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Urbanization of the Hayward Fault';
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
        <h3><img src="images/faulttrace.jpg" alt="Image of the Detailed Mapping of the Hayward Fault"/><h3>
      </div>
      <div class="column four-of-five">
        <h3> Detailed Mapping of the Hayward Fault </h3>
        <p>Where is the Hayward Fault?  The Hayward Fault is a major earthquake fault that runs for nearly 45 miles (72 km) through the East Bay of the San Francisco Bay region.  It is a right-lateral strike-slip fault, meaning that motion along it is mainly horizontal, so that objects on the opposite side of the fault from the viewer will move to the viewer&rsquo;s right as slip occurs.  Geologists have traced the surface expression of the Hayward Fault through collecting many types of observations, such as geomorphic expression, fault trenches, and fault creep.  This Google Earth file contains a detailed map of the Hayward Fault.  Data from <a href="/education/haywardfault/">Hayward Fault Virtual Tour</a>.</p>
        <p class="kml"><a href="kml/HaywardFaulttrace.kmz">Fault Trace</a> <?php print(simpleFileSize("kml/HaywardFaulttrace.kmz"));  ?> </p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/trench.jpg" alt="Photo of Dating Ancient Earthquakes along the Hayward Fault"/></h3>
      </div>
      <div class="column four-of-five">
        <h3> Dating Ancient Earthquakes along the Hayward Fault </h3>
        <p>How often does the Hayward Fault cause damaging quakes?  Digging a trench across a fault and dating the soils disturbed by prior earthquakes is the best technique for investigating the history of earthquake faults such as the Hayward Fault.  This Google Earth file shows numerous trench locations, photographs from the trenches, and descriptions (logs) of the trenches.  By exposing the upper few feet of soils across an active fault, so called &ldquo;paleoseismologists&rdquo; hope to find disturbed ancient soil layers or other traces left by past earthquakes. When paleoseismologists know when the last large earthquake was and how often prehistoric earthquakes have occurred, they can estimate the probability of the next big earthquake.  Data from <a href="/education/haywardfault/">Hayward Fault Virtual Tour</a>.</p>
        <p class="kml"><a href="kml/HaywardFaultTrenches.kmz">Fault Trenches</a> <?php print(simpleFileSize("kml/HaywardFaultTrenches.kmz"));  ?> </p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/creep.jpg" alt="Image examining Creep on the Hayward Fault"/></h3>
      </div>
      <div class="column four-of-five">
        <h3> Creep on the Hayward Fault </h3>
        <p>What is fault creep and where can you see it along the Hayward Fault?  The San Francisco Bay Area is one of the few places in the world where faults &ldquo;creep,&rdquo; that is, the fault slip is slow and continuous and does not occur as the result of a large earthquake.  This Google Earth file shows locations and photographs of fault creep (such as sidewalk cracks, offset street curbs, and cracked building foundations). The Hayward Fault is actively moving, year-by-year. This characteristic is unlike that of other earthquake faults such as the San Andreas Fault, which is &ldquo;locked&rdquo; between major earthquakes.  Detailed USGS investigations into movements along the Hayward Fault show the fault creep averages about one-fifth of an inch (5 mm) per year. However, this creep occurs at different rates and in different locations and can vary significantly from one year to the next.  Data from <a href="/education/haywardfault/">Hayward Fault Virtual Tour</a>. See the <a href="http://pubs.usgs.gov/of/2008/1135//">Green Guide to the Hayward Fault</a> for locations of selected field trip destinations where you can observe features associated with the Hayward Fault.</p>
        <p class="kml"><a href="kml/HaywardCreepPhotos.kmz">Fault Creep</a> <?php print(simpleFileSize("kml/HaywardCreepPhotos.kmz"));  ?> </p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/lidar.jpg" alt="Photo of the Hayward Fault mapped from airplanes"/></h3>
      </div>
      <div class="column four-of-five">
        <h3> Mapping the Hayward Fault from Airplanes </h3>
        <p>How do you see the fault when it is overgrown with vegetation?  One of the newest tools for mapping faults is LIDAR (Laser Imaging Detection And Ranging or LIght Detection And Ranging).  This Google Earth file contains an image from along the Hayward Fault that was created from LIDAR data.  See if you can find the UC Berkeley stadium.  Faults generate recognizable shapes in the landscape that geologists use to map the location of active faults.  However, in many areas the faulted landforms are hidden by extensive vegetation.  LIDAR uses laser light projected down from an airplane to make a detailed image of the ground surface, even through trees.  LIDAR images allow scientists to detect subtle landscape features associated with active faulting that may reveal previously undetected active strands of faults.  More information is available at the USGS <a href="http://lidar.cr.usgs.gov/">Center for LIDAR Information Coordination and Knowledge</a>
        <p class="kml"><a href="kml/Lidar.kmz">LIDAR</a> <?php print(simpleFileSize("kml/Lidar.kmz"));  ?> </p>
      </div>
    </div>
  </li>

  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/modern.jpg" alt="Image of a Hayward Fault "Airquake""/></h3>
      </div>
      <div class="column four-of-five">
        <h3> 3D Hayward Fault &ldquo;Airquakes&rdquo; </h3>
        <p>What is an &ldquo;airquake?&rdquo;  Earthquakes along the Hayward Fault occur at varying depths.  Since we cannot crack open Google Earth to show you earthquakes at the depth at which they occur, we have color coded them according to their depth.  This Google Earth file contains &ldquo;airquakes&rdquo; (earthquakes that we have pulled up out of the ground) along the Hayward Fault to help illustrate the orientation of the fault plane below the surface. The yellow colored earthquakes are 0-3 km deep, the orange colored earthquakes are 3-6 km deep, and the red colored earthquakes are 6-10 km deep.  Deeper earthquakes that occur on a dipping fault plane do not line up with the surface trace of the fault when projected up to the surface.</p>
        <p class="kml"><a href="kml/HaywardEQs3D.kmz">Airquakes</a> <?php print(simpleFileSize("kml/HaywardEQs3D.kmz"));  ?> </p>
      </div>
    </div>
  </li>



</ul>

<p><a href="./modern.php">Earthquake Hazards of the Bay Area Today</a> &raquo;</p>
