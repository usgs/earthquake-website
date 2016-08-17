<?php
  // Author: Lisa Wald
  // Contact: Mark pspell_add_to_personal,
  // Last modified: 2016/08/08, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Hazard and Risk Assessment';
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
	Earthquakes cause an estimated annualized loss to the U.S. of several billions of dollars. To mitigate earthquake losses, it is necessary to evaluate the earthquake hazards across the country.
</p>

<div class="row">
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="national.php">
          <h4>National Hazard Maps</h4>
          <img src="images/topic_hazrisk150.gif" alt=""  width="75"/>
        </a>
        <p>
          Seismic hazard maps integrate what scientists have learned about earthquake sources, crustal deformation, active faulting, and ground shaking to evaluate the earthquake hazards across the country.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="regional.php">
          <h4>Regional and Urban Hazards</h4>
          <img src="images/urbanhaz150.gif" alt="" width="75"/>
        </a>
        <p>
          Specific areas are the focus of more detailed studies, and these contribute largely to the updated information that improves the national hazard maps.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="risk.php">
          <h4>Risk</h4>
          <img src="images/risk150.gif" alt="" width="75"/>
        </a>
        <p>
          The impact of earthquakes on public safety and the national economy can be reduced through improvement of the built- environment to resist earthquake effects such as ground shaking.
        </p>
      </li>
    </ul>
  </section>
</div>

<h2>See Also</h2>
<ul>
	<li><a href="/hazards/about/basics.php">Earthquake Hazards 101-The Basics</a></li>
	<li><a href="/hazards/products/">Seismic Hazard Maps &amp; Data</a></li>
	<li><a href="/hazards/apps/">Custom Hazard &amp; Analysis Tools</a></li>
	<li><a href="/hazards/designmaps/">Seismic Design Tools</a></li>
	<li><a href="/hazards/qfaults/">Faults</a></li>
</ul>

<h2 class="researcher" style="clear: left;">Scientific Staff</h2>
<ul>
	<li>Oliver Boyd</li>
	<li>Bill Ellsworth</li>
	<li>Karen Felzer</li>
	<li>Ned Field</li>
	<li>Art Frankel</li>
	<li>Kathy Haller</li>
	<li>Tom Hanks</li>
	<li>Jeanne Hardebeck</li>
	<li>Kuo-wan Lin</li>
	<li>Andrea Llenos</li>
	<li>Nico Luco</li>
	<li>Sean McGowan</li>
	<li>Andy Michael</li>
	<li>Chuck Mueller</li>
	<li>Morgan Page</li>
	<li>Mark Petersen</li>
	<li>Peter Powers</li>
	<li>Sanaz Rezaeian</li>
	<li><a href="https://profile.usgs.gov/wald">David Wald</a></li>
	<li>Craig Weaver</a></li>
	<li>Rob Williams</li>
</ul>
