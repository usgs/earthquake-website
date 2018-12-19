<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'U.S. Seismic Design Options';

    // Use hazards level nav file
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();

    include 'template.inc.php';
  }
?>



<p class="alert info">
  Due to insufficient resources and the recent development of similar web tools by third parties, the USGS has replaced the <it>U.S.
	Seismic Design Maps</i> web applications with web services.
  <br /><br />
  Whereas the former web applications each interacted with users through a graphical user interface (GUI), the replacement web services receive the inputs (e.g. latitude and longitude) in the form of a web address and return the outputs (e.g. S<sub>DS</sub> and S<sub>D1</sub>) in text form, without supplementary graphics. Your new options are described below.
</p>

<h2>USGS U.S. Seismic Design Maps Web Services</h2>

<ul>
  <li>
    <a href="/ws/designmaps/">View USGS Web Services</a>
  </li>
  <li>
    <a href="/hazards/designmaps/step-by-step-instructions-for-webservice_v3.pdf">Step-by-step Instructions</a><br />
      - how to use the U.S. Seismic Design Web Services, e.g. for the recently published <i>ASCE/SEI 7-16 Standard</i>
  </li>
</ul>

<h2>Third-party GUIs</h2>
<p>
  Most users will find third-party graphical users interfaces (GUIs) like the following to be more usable, and more like the former USGS application(s):
</p>
<ul>
  <li><a href="https://asce7hazardtool.online/">ASCE 7 Hazard Tool</a></li>
  <li><a href="https://seismicmaps.org/">SEAOC/OSHPD Seismic Design Maps Tool</a></li>
  <li><a href="https://hazards.atcouncil.org/">ATC Hazards by Location Tool</a></li>
</ul>
