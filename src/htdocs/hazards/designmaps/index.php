<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Design Ground Motions';

    // Use hazards level nav file
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();

    include 'template.inc.php';
  }
?>

<p class="alert info">
  Engineers should typically use the tools below for seismic design; the
	parameter values they provide are not identical to those from hazard tools
	available elsewhere on the USGS website.
</p>

<p>
  The USGS collaborates with organizations that develop building codes (for buildings, bridges, and 
	other structures) to make seismic design parameter values available to engineers. The design code
	developers first decide how USGS earthquake hazard information should be applied in design 
	practice. Then, the USGS calculates values of seismic design parameters based on USGS hazard 
	values and in accordance with design code procedures.
</p>

<hr/>

<h2><a href="/ws/designmaps/">U.S. Seismic Design Maps Web Services</a></h2>

<p>
  These web services provide seismic design parameter values from numerous design code editions. 
	Your options for using these web services are:
</p>

<h3>Third-party Graphical User Interfaces (GUIs)</h3>
<p>
  Most users obtain seismic design parameter values from the USGS web services through third-party 
	GUIs like the following:
</p>
<ul>
  <li><a href="https://asce7hazardtool.online/">ASCE 7 Hazard Tool</a></li>
  <li><a href="https://seismicmaps.org/">SEAOC/OSHPD Seismic Design Maps Tool</a></li>
  <li><a href="https://hazards.atcouncil.org/">ATC Hazards by Location Tool</a></li>
</ul>

<h3>USGS U.S. Seismic Design Maps Web Services</h3>
<p>
  It is possible but less convenient to obtain seismic design parameter values directly from the 
	USGS web services:
</p>
<ul>
  <li>
    <a href="/ws/designmaps/">Documentation</a>
  </li>
  <li>
    <a href="/hazards/designmaps/step-by-step-instructions-for-webservice_v3.pdf">Step-by-step Instructions</a><br />
      - an example for the recently published <i>ASCE/SEI 7-16 Standard</i>
  </li>
</ul>

<h2><a href="rtgm.php">Risk-Targeted Ground Motion Calculator</a></h2>

<p>
  This web tool calculates risk-targeted ground motion values from
  probabilistic seismic hazard curves in accordance with the site-specific
  ground motion procedures defined in &ldquo;Method 2&rdquo; (Section
	21.2.1.2) of the <i>ASCE/SEI 7-10 and 7-16</i> standards. The vast majority
	of engineering projects in the U.S. will require use of the <i>U.S.
	Seismic Design Maps Web Services</i> (see above) rather than this
	<i>Risk-Targeted Ground Motion Calculator</i>.
</p>

<hr/>
