<?php
// Author: Lisa Wald
// Contact: Justin Rubenstein
// Last modified: Lisa Wald, 2016/08/20
if (!isset($TEMPLATE)) {
  $TITLE = 'Induced Earthquakes';
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
Within the central and eastern United States, the number of earthquakes has increased dramatically over the past few years. Are they natural, or man-made?
And what should be done in the future?
</p>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="overview.php">
          <h4>Overview</h4>
          <img src="images/oiltankers.jpg" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          Between the years 1973&ndash;2008, there was an average of 21 earthquakes of magnitude three and larger in the central and eastern United States. This rate jumped to an average of 99 M3+ earthquakes per year in 2009&ndash;2013, and the rate continues to rise.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="myths.php">
          <h4>Myths and Misconceptions</h4>
          <img src="images/myths100.gif" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          What you do and don&rsquo;t know about induced seismicity.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="studies.php">
          <h4>Observational Studies</h4>
          <img src="images/instrument.jpg" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          The USGS is currently studying seismicity that may be induced at 6 locations across the United States. These studies involve earthquake monitoring, examining industrial data, and evaluating any relationships between seismicity and industrial actions.
        </p>
      </li>
    </ul>
  </section>
</div>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="hazards.php">
          <h4>Hazard Estimation</h4>
          <img src="images/hazards.jpg" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          The USGS is currently developing new methods to evaluate the hazard due to induced earthquakes. These methods will account for the rapid changes in earthquake rate that we have witnessed in the past few years.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="modeling.php">
          <h4>Numerical Modeling</h4>
          <img src="images/coso.jpg" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          The USGS uses numerical simulations of earth processes to: Evaluate the physical relationships between fluid injection and earthquakes at specific sites, and to simulate possible future behaviors of new and ongoing injection projects.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="references.php">
          <h4>Publications</h4>
          <img src="images/srl.jpg" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          USGS publications on induced seismicity.
        </p>
      </li>
    </ul>
  </section>
</div>
