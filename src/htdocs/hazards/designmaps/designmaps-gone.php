<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Changes to U.S. Seismic Design Maps Web Tools';

    // Use hazards level nav file
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();

    include 'template.inc.php';
  }
?>

<p class="alert info">
  Due to insufficient resources and the recent development of similar web tools by third parties, the USGS has replaced its former <it>U.S.
	Seismic Design Maps</i> web applications with web services that can be used through third-party tools.
  <br /><br />
	Your options for using the replacement USGS web services are described below.
</p>

<h2>Third-party Graphical User Interfaces (GUIs)</h2>
<p>
  Most users will find third-party GUIs like the following more usable than the replacement USGS web services, and more like the former USGS applications:
</p>
<ul>
  <li><a href="https://asce7hazardtool.online/">ASCE 7 Hazard Tool</a></li>
  <li><a href="https://seismicmaps.org/">SEAOC/OSHPD Seismic Design Maps Tool</a></li>
  <li><a href="https://hazards.atcouncil.org/">ATC Hazards by Location Tool</a></li>
</ul>

<h2>USGS U.S. Seismic Design Maps Web Services</h2>
<p>
	Whereas the former USGS web applications each interacted with users through a graphical user interface (GUI), the replacement web services receive the inputs (e.g. latitude and longitude) in the form of a web address and return the outputs (e.g. S<sub>DS</sub> and S<sub>D1</sub>) in text form, without supplementary graphics.
</p>
<ul>
  <li>
    <a href="/ws/designmaps/">Documentation for all design code editions</a>
  </li>
  <li>
    <a href="/hazards/designmaps/Step-by-step-instructions-AASHTO-v4.pdf">Step-by-step Instructionsfor <i>AASHTO Guide Specifications</i></a>
  </li>
  <li>
    <a href="/hazards/designmaps/Step-by-step-instructions-AASHTO-v4.pdf">Step-by-step instructions for <i>ASCE/SEI 7-16 Standard</i></a>
  </li>
</ul>
