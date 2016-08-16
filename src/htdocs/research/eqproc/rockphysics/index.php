<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Earthquake Processes and Effects';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="../index.css"/>
      ';
      // Use Earthquake level nav file
        include_once 'functions.inc.php';
        ob_start();
        include '../_navigation.inc.php';
        $NAVIGATION = ob_get_clean();

        include 'template.inc.php';
    }
?>

<h2>Rock Physics Labs</h2>

<figure class='right w300'>
	<img src="images/noelbartlow.jpg" alt=""/>
	<figcaption>
    Noel Bartlow loads a granite sample into a pressure vessel at the USGS Rock Physics Laboratory as part of her thesis work at Stanford University on tidal triggering of earthquakes.
  </figcaption>
</figure>

<p>
  There are currently two main Experimental Rock Physics Laboratories in the Earthquake Science Center in Menlo Park, California. These laboratories specialize in generating earthquakes under controlled conditions to measure the processes that determine how they start and how large they will become. Since most damaging earthquakes originate many miles below the earth’s surface, it is almost impossible to study them directly. Instead, much of what we know about natural earthquakes comes from analyzing the seismic waves that they produce.
</p>
<p>
  In the laboratory, however, we are able to recreate the conditions of high pressure, high temperature and slow stress buildup that faults undergo in the months to years before earthquakes. We also have specialized testing machines that slide rocks against each other at the high speeds (meters per second) that occur during earthquakes. Because testing is carried out in a controlled environment, relevant properties are measured before, during and after the occurrence of laboratory earthquakes. These include strength and frictional behavior of rocks and fault zone materials, the velocity of seismic waves through rock, electrical resistivity measurements, as well as the role of fluids and fluid flow in fault zones.
</p>

<h3>How is this Data Used?</h3>

<p>
  Information on rock properties is combined with other geophysical observations to improve our models of the earthquake process, such as the timing and magnitude of earthquakes, earthquake triggering, recurrence, rupture propagation, and ground motion. This in turn is necessary to understand earthquake hazards and risk in earthquake-prone areas.
</p>

<ul>
  <li>
    <a href="why.php">Why Study the Friction of Rock?</a> - A Primer on Laboratory Friction Studies
  </li>
  <li>
    <a href="history.php">History of the Rock Physics Laboratories</a>
  </li>
  <li><a href="machines.php">Test Apparatus</a></li>
  <li><a href="current.php">Current Projects</a></li>
  <li><a href="pubs.php">Publications by Topic</a></li>
</ul>
