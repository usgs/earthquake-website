<?php
// Author: Lisa Wald
// Contact: Brad Aagaard and Dave Wald
// Last modified: Lisa Wald, 2016/08/10
if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Processes and Effects';
  $NAVIGATION = true;
  // Use Earthquake level nav file
  include_once 'functions.inc.php';
  ob_start();
  include '../_navigation.inc.php';
  $NAVIGATION = ob_get_clean();

  include 'template.inc.php';
}
?>

<p>
  The overarching theme of this research is for scientists to discover as much as they can about earthquakes and faulting from field and laboratory observations, and to combine this with geophysical, geological, geochemical, and mathematical (including computational) modeling of earthquake sources and fault zones so as to best improve USGS earthquake hazard assessments.
</p>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="overview.php">
          <h4>Overview</h4>
          <img src="images/topic-eqproc150.gif" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          The breadth and depth of studying earthquake processes in the field, in the lab, and on the computer to inform earthquake hazards.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="trackingstress.php">
          <h4>Tracking Stress Buildup</h4>
          <img src="images/stressrate150.gif" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          The constant plate tectonic motions between the Pacific and North American plates guarantees that the crust in the western US is continually building up stress.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="deformation.php">
          <h4>Crustal Deformation</h4>
          <img src="images/instruments150.gif" class='feeds-list-image'
              alt="icon"  width="75"/>
        </a>
        <p>
          Crustal deformation refers to the changing earth’s surface caused by tectonic forces that are accumulated in the crust and then cause earthquakes.
        </p>
      </li>
    </ul>
  </section>
</div>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="sliprates.php">
          <h4>Fault Slip Rates</h4>
          <img src="images/gpssites150.gif" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          Earth’s crust typically moves a few millimeters to centimeters per year. In an actively deforming continental region, the crust often behaves like a set of nearly-rigid blocks separated by faults.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="posteqmotions.php">
          <h4>Post-Earthquake Motions</h4>
          <img src="images/hectormine150.gif" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          After a large earthquake, the crust does not stop moving. The slip that occurs during the aftershocks that follow is called afterslip.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="grdmotion.php">
          <h4>Ground Movements</h4>
          <img src="images/rupture150.gif" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          Measureable permanent ground displacements are produced by shallow earthquakes of magnitude 5 and greater. These displacements are used by seismologists to understand the earthquake source in detail.
        </p>
      </li>
    </ul>
  </section>

</div>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="grdshaking.php">
          <h4>Ground Shaking</h4>
          <img src="images/effects150.gif" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          Past earthquakes have shown that the amplification of motions due to surface-to-bedrock geology, 3D crustal structure, and topography have a major influence on seismic damage and loss in urban areas.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="/research/cpt/">
          <h4>Cone Penetration Testing (CPT)</h4>
          <img src="images/grdfailure150.gif" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          This research focuses on the ability to determine what areas are more prone to experiencing effects such as liquefaction and landslides when there is shaking from an earthquake.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="sfbarrays.php">
          <h4>San Francisco Bay Area Arrays</h4>
          <img src="images/arrays150.jpg" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          Seismologists have observed that both topographic highs and basins have complex and varying effects on seismic waves. By deploying arrays of seismic recorders our understanding is improved of what specific features have what specific effects on the seismic waves.
        </p>
      </li>
    </ul>
  </section>
</div>

<div class='row'>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="ebse.php">
          <h4>East Bay Seismic Experiment</h4>
          <img src="images/tn-ebse-11_2x.jpg" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          The implosion of the Warren Hall building on California State University East Bay (CSU-EB) campus in August of 2013 provided an excellent opportunity to use a “free” seismic source that was practically located on the Hayward Fault.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="rockphysics/">
          <h4>Rock Physics Labs</h4>
          <img src="images/noelbartlow150.gif" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          There are currently two main Experimental Rock Physics Laboratories in the Earthquake Science Center in Menlo Park, California. These laboratories specialize in generating earthquakes under controlled conditions.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="tectonics/">
          <h4>Deformation History Animations</h4>
          <img src="images/tectonics.png" class='feeds-list-image'
              alt=" icon"  width="75"/>
        </a>
        <p>
          These animations reconstruct the geography of California through time and help predict how it will change in the future.
        </p>
      </li>
    </ul>
  </section>

</div>
