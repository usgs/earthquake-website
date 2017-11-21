<?php
  // Author: Lisa Wald
  // Contact: Elizabeth Cochran
  // Last modified: Lisa Wald, 2016/08/10
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake Early Warning';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<h2>Earthquake Early Warning Around the World</h2>

<p>
  Earthquake Early Warning systems are operational in several countries around the world, including Mexico, Japan, Turkey, Romania, China, Italy, and Taiwan. All of these systems rapidly detect earthquakes and track their evolution to provide warnings of pending ground shaking. Systems can vary depending on the local faults and the specific ground motion data available.
</p>

<h3>Examples of Early Warning Systems</h3>
<ul>
  <li>
    Mexico City has an EEW system that warns of strong shaking from large earthquakes that occur off of the country’s coast. The system consists of a series of sensors located along the coast that detect shaking from a large earthquake and rapidly determine the location and magnitude. Since Mexico City is located several hundred miles from the main plate boundary they can receive up to a minute or more of warning of the impending shaking for subduction zone earthquakes, but warning times are shorter for earthquakes that occur closer to the city. This system has been in operation since 1991.
  </li><br />

  <li>
    Japan currently has the most sophisticated early warning systems in the world. The warnings were initially developed for use in slowing and stopping high-speed trains prior to strong shaking. The success of that program in addition to the devastating effects of the 1995 Kobe earthquake paved the way for building a nationwide early warning system. Japan has built a dense network of seismic instruments to rapidly detect earthquakes. They have been issuing public warnings since 2007.
  </li>
</ul>

<h2>Time to Detect an Event</h2>

<p>
  An earthquake early warning system on the west coast of the United States could provide up to tens of seconds of warning prior to shaking arriving.  The time required to detect and issue a warning for an earthquake is dependent on several factors:
</p>

<ol>
  <li><strong>Distance between the earthquake source and the closest seismic network seismometer (station).</strong> It takes a finite amount of time (3&ndash;4 miles per second) for the first seismic waves to travel from the source (e.g. the point on a fault that is breaking) to the seismic station. Therefore, the closer a station is to where an earthquake begins, the more rapidly the earthquake can be detected. Accurate detections often depend on multiple ground motion measurements from more than one station; so, increasing the density of stations near the fault can improve detection times.
  </li><br />

  <li><strong>Transfer of information to the regional networks.</strong> Data from multiple stations is collected and analyzed by the regional seismic networks, so ground motion information must be transferred from the station to the processing center. Existing networks use a variety of methods to send data back to the server to improve robustness, including radio links, phone lines, public/private internet, and satellite links. In addition, delays from packaging and sending the data from the station must be minimized to provide useful warning times.
  </li><br />

  <li><strong>Detection and characterization of an earthquake.</strong> Ground motion records received from the stations in real time are used to detect an earthquake and rapidly determine an initial location and magnitude of the event. We are developing multiple algorithms to estimate the earthquake information as rapidly as possible. Earthquakes can continue to grow in size over many seconds (the larger the earthquake generally the longer it takes to get to the final size), so magnitude estimates can also change through time as the evolving earthquake is tracked.</li><br />

  <li><strong>Shaking intensity threshold used to issue an alert.</strong> Alerts are issued for a region when the expected ground shaking intensity is above a minimum threshold. Alerts can be provided more quickly for low thresholds of ground shaking because the system doesn’t need to wait as long for the earthquake magnitude to grow (larger earthquakes produce high ground shaking intensities).</li>
</ol>
