<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'U.S. Seismic Design Maps Web Applications Streamlined';

    // Use hazards level nav file
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();

    include 'template.inc.php';
  }
?>

<p class="alert info">
  Due to insufficient resources and the recent development of similar web tools by third parties, the USGS has streamlined its <it>U.S. 
	Seismic Design Maps</i> web applications. Whereas the former applications each interacted with users through a graphical user interface 
	(GUI), the replacement web services receive the inputs (e.g. latitude and longitude) in the form of a web address and return the outputs 
	(e.g. S<sub>DS</sub> and S<sub>D1</sub>) in text form, without supplementary graphics. Though designed primarily to be read by the 
	aforementioned third-party web GUIs (e.g. from <a href="https://asce7hazardtool.online/">ASCE</a>, 
	<a href="https://seismicmaps.org/">SEAOC/OSHPD</a>, and <a href="https://hazards.atcouncil.org/">ATC</a>), the text outputs are also 
	human-readable. Most users will find the third-party web GUIs to be more usable than the underlying USGS web services.
</p>

<p>
  <a href="/ws/designmaps/">View Web Services</a>
</p>
<p>
  <a href="/hazards/designmaps/step-by-step-instructions-for-webservice_v3.pdf">Step-by-step Instructions</a><br />
  - how to use web services, e.g. for the recently published <i>ASCE/SEI 7-16 Standard</i>
</p>
