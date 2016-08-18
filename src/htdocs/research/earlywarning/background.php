<?php
  // Author: Lisa Wald
  // Contact: Elizabeth Cochran
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Earthquake Early Warning';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
        include 'template.inc.php';
    }
?>

<h2>Earthquake Early Warning Around the World</h2>

<p>
  Strong seismic shaking from an earthquake travels at about 2 miles per second, so it is possible to detect a large earthquake near its source and broadcast a warning of imminent strong shaking to more distant areas before the shaking arrives.  Such systems are operational in several countries around the world, including Mexico, Japan, Turkey, Romania, China, Italy, and Taiwan.  All of these systems are tailor-made for the local system of faults and thus cannot readily be adapted to California.
</p>

<h3>Examples of Early Warning Systems</h3>
<ul>
  <li>
    Mexico City has an EEW system that warns of strong shaking from large earthquakes that occur off of the country’s coast. The system consists of a series of sensors located along the coast that detect shaking from a large earthquake and rapidly determine the location and magnitude. Since Mexico City is located several hundred miles from the main plate boundary they can receive <strong>up to a minute or more of warning of the impending shaking</strong>.  This system has been in operation since 1991.
  </li><br />

  <li>
    Japan currently has the most sophisticated early warning systems in the world. The warnings were initially developed for use in slowing and stopping high-speed trains prior to strong shaking. The success of that program in addition to the devastating effects of the 1995 Kobe earthquake paved the way for building a nationwide early warning system. Japan has built a dense network of on- and off-shore seismic and geodetic instruments to rapidly detect earthquakes. They have been issuing public warnings since 2007.
  </li>
</ul>

<h2>Time to Detect an Event</h2>
<div class='row'>
  <div class='column one-of-two'>
    <figure>
      <img src="images/warningtime.JPG" alt="Warning time depends on distance to quake"/>
      <figcaption>
        Estimated warning times for locations at different distances from the earthquake epicenter. Locations within 20 miles of the fault will likely not receive any warning as, on average, it will take 10 seconds to detect and locate the earthquake.
      </figcaption>
    </figure>
  </div>
  <div class='column one-of-two'>
    <figure>
      <img src="images/timeshake.JPG" alt="Estimated shaking time arrivals"/>
      <figcaption>
        Estimated time until strong shaking arrives in Los Angeles from an earthquake that begins along the southern potion of the San Andreas Fault near the Salton Sea, California. Since seismic waves travel slower than internet and phone communication it is possible to quickly detect the start of the earthquake and send warning out to locations farther away.
      </figcaption>
    </figure>
  </div>
</div>

<p>
  An earthquake early warning system on the west coast of the United States could provide <strong>as much as 60 seconds advance warning</strong> prior to strong shaking arriving depending on the location of the location of the earthquake and the recipient of the warning. <strong>The time required to detect and issue a warning for an earthquake is dependent on several factors: </strong>
</p>

<ol>
  <li><strong>Distance between the earthquake source and the closest seismic network seismometer (station).</strong> It takes a finite amount of time (2 miles per second) for seismic waves to travel from the source (e.g. the point on a fault that is breaking) to the seismic station. The first waves to arrive at a station are the lower amplitude “P waves” that travel at 3-4 miles per sec, on average. The large amplitude (more damaging) “S waves” travel at ~ 2 miles per second. Therefore, the closer a station is to the fault, the more rapidly the earthquake can be detected. Accurate detections often depend on multiple ground motion measurements from more than one station; so, increasing the density of stations near the fault can improve detection times.
  </li><br />

  <li><strong>Transfer of information to the regional networks.</strong> Data from multiple stations must be collected and analyzed by the regional seismic networks, so ground motion information must be transferred from the station to the processing center. Existing networks use a variety of methods to send data back to the server to improve robustness, including radio links, phone lines, public/private internet, and satellite links. In addition, delays from packaging and sending the data from the station must be reduced in order to provide useful warning times.
  </li><br />

  <li><strong>Detection and characterization of an earthquake. </strong>Ground motion records received from the stations in real time are used to detect if an earthquake is occurring and rapidly determine the location and magnitude of the event. We are developing multiple algorithms to estimate the earthquake information as rapidly as possible.
  </li><br />
</ol>
