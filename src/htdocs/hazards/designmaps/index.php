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

<p>
  Engineers should typically use the tools below for seismic design; the
	parameter values they provide are not identical to those from hazard tools
	available elsewhere on the USGS website.
</p>

<hr/>

<h2><a href="/ws/designmaps/">U.S. Seismic Design Maps Web Services</a></h2>

<p>
  The USGS collaborates with organizations (such as the Building Seismic
	Safety Council) that develop model building and bridge design codes to make
	seismic design parameter values available to engineers. The design code
	developers first decide how USGS earthquake hazard information should be
	applied in design practice. Then the USGS calculates gridded values of
	seismic design parameters based on USGS hazard values in accordance with
	design code procedures. The <i>U.S. Seismic Design Maps Web Services</i>
	provide seismic design parameter values from numerous design code editions.
</p>

<h3>USGS U.S. Seismic Design Maps Web Services</h3>

<ul>
  <li>
    <a href="/ws/designmaps/">View USGS Web Services</a>
  </li>
  <li>
    <a href="/hazards/designmaps/step-by-step-instructions-for-webservice_v3.pdf">Step-by-step Instructions</a><br />
      - how to use the U.S. Seismic Design Web Services, e.g. for the recently published <i>ASCE/SEI 7-16 Standard</i>
  </li>
</ul>

<h3>Third-party GUIs</h3>
<p>
  Most users will find third-party graphical users interfaces (GUIs) like the following to be more usable, and more like the former USGS application(s):
</p>
<ul>
  <li><a href="https://asce7hazardtool.online/">ASCE 7 Hazard Tool</a></li>
  <li><a href="https://seismicmaps.org/">SEAOC/OSHPD Seismic Design Maps Tool</a></li>
  <li><a href="https://hazards.atcouncil.org/">ATC Hazards by Location Tool</a></li>
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
