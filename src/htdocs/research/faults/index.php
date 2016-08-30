<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Faults, Earthquake Geology, and Special Earthquake Studies';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
      // Use Earthquake level nav file
        include_once 'functions.inc.php';
        ob_start();
        include '../_navigation.inc.php';
        $NAVIGATION = ob_get_clean();

        include 'template.inc.php';
    }
?>

<p>
  In order to understand the risk that different areas of the U.S. face for earthquake hazards, we first need to know where the faults are and how they behave.  We are aware of the existence of a fault only if it has produced an earthquake that we know about from modern seismic instrument recordings or historical written records or if it has left a recognizable mark on the earth’s surface that can be discovered by remote imagery.  Once a fault has been identified, the next step is to determine how it behaves.
</p>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="overview.php">
          <h4>Overview</h4>
          <img src="images/denali150.jpg" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          Scientists are studying faults and their behaviors in various regions of the U.S. and in other parts of the world. Specific areas of study in the U.S. are divided into these regions: Alaska, the Pacific Northwest, Calfornia, the Intermountain West, and Central and Eastern U.S.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="geology.php">
          <h4>Earthquake Geology</h4>
          <img src="images/faults150.gif" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          USGS scientists study active fault zones by mapping faults, excavating trenches, studying landforms offset by earthquakes, and measuring past and current motion of active faults using alignment arrays, global positioning systems (GPS), and airborne, terrestrial and mobile laser scanning technology.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="paleo.php">
          <h4>Paleoseismology</h4>
          <img src="images/mill-canyon-logs.jpg" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          By excavating trenches across active faults, USGS geologists and collaborators are unraveling the history of earthquakes on specific faults.
        </p>
      </li>
    </ul>
  </section>
</div>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="geomorphology.php">
          <h4>Tectonic Geomorphology</h4>
          <img src="images/geomorph150.gif" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          Repeated earthquakes shape the Earth over the millennia and fault zones often have unique and diagnostic landforms caused by the faulting process.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="geodesy.php">
          <h4>Near-Field Geodesy</h4>
          <img src="images/napa-tls.jpg" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          In order to measure the rate at which the Earth’s crust deforms between, during and after earthquakes, precise measurements need to be made along active faults zones.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="research.php">
          <h4>Earthquake Response</h4>
          <img src="images/response.jpg" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          USGS scientists conduct research and provide scientific response to damaging earthquakes in active tectonic regions of the United States and around the world.
        </p>
      </li>
    </ul>
  </section>
</div>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="salton.php">
          <h4>Salton Seismic Imaging</h4>
          <img src="images/salton150.gif" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          Scientists are creating images of underground structure and sediments in the Imperial and Coachella Valleys and adjacent mountain ranges to investigate the earthquake hazards they pose to cities in this area.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="/earthquakes/events/">
          <h4>Special Earthquake Studies</h4>
          <img src="images/specialeq150.gif" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          Significant earthquakes provide a wealth of data, and a unique opportunity to observe phenomena that do not occur very often.  These earthquakes have been critically examined.
        </p>
      </li>
    </ul>
  </section>
</div>
