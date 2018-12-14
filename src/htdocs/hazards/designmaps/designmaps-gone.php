<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Design Ground Motions Online Tool Discontinued';

    // Use hazards level nav file
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();

    include 'template.inc.php';
  }
?>

<p class="alert info">
  Due to insufficient resources and the recent development of similar web tools by third parties, the USGS has streamlined its U.S. Seismic Design Maps web applications. Whereas the former applications each interacted with users through a graphical user interface (GUI), the replacement web services receive the inputs (e.g. latitude and longitude) in the form of a web address and return the outputs (e.g. SDS and SD1) in text form, without supplementary graphics. Though designed primarily to be read by the aforementioned third-party web GUIs (e.g., from <a href="https://asce7hazardtool.online/">ASCE</a>, <a href="https://seismicmaps.org/"> SEAOC/OSHPD</a>, and <a href="https://hazards.atcouncil.org/">ATC</a>), the text outputs are also human-readable. Most users will find the third-party web GUIs to be more usable than the underlying USGS web services.
</p>

<p>
  <a href="/ws/designmaps/">View Web Services</a>
</p>
<p>
  <a href="/hazards/designmaps/step-by-step-instructions-for-webservice_v3.pdf">Step-by-step Instructions</a><br />
  - how to use web services, namely that for the recently published ASCE/SEI 7-16 Standard
</p>
