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

<h4><a href="/ws/designmaps/">U.S. Seismic Design Maps Web Services</a></h4>

<p>
  The USGS collaborates with organizations (such as the Building Seismic 
	Safety Council) that develop model building and bridge design codes to make 
	seismic design parameter values available to engineers. The design code 
	developers first decide how USGS earthquake hazard information should be 
	applied in design practice. Then the USGS calculates gridded values of 
	seismic design parameters based on USGS hazard values in accordance with 
	design code procedures. The <i>U.S. Seismic Design Maps Web Services</i> 
	provide seismic design parameter values from numerous design code editions.
	
	These web services replace the former <i>U.S. Seismic Design Maps Web 
	Applications</i>, which were streamlined due to insufficient resources and 
	the recent development of similar web tools by third parties. Whereas the 
	former applications each interacted with users through a graphical user 
	interface (GUI), the replacement web services receive the inputs (e.g. 
	latitude and longitude) in the form of a web address and return the outputs 
	(e.g. S<sub>DS</sub> and S<sub>D1</sub>) in text form, without 
	supplementary graphics. Though designed primarily to be read by the 
	aforementioned third-party web GUIs (e.g. from <a href=
  "https://asce7hazardtool.online/">ASCE</a>, <a href=
  "https://seismicmaps.org/">SEAOC/OSHPD</a>, and <a href=
  "https://hazards.atcouncil.org/">ATC</a>), the text outputs are also 
	human-readable. Step-by-step instructions for using one of these web 
	services, namely that for the recently published <i>ASCE/SEI 7-16</i> 
	standard, <a href="./step-by-step-instructions-for-webservice_v3.pdf">are 
	posted here</a>. Most users will find the third-party web GUIs to be more
	usable than these underlying USGS web services.
</p>

<h4><a href="rtgm.php">Risk-Targeted Ground Motion Calculator</a></h4>

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
