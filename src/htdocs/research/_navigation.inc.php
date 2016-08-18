<?php
  $section = "/research";

  echo "<a href='/research' class='up-one-level'>Research</a>",

  "<section>",

    navItem("${section}/induced/", "Induced Earthquakes") .
    navItem("${section}/earlywarning/", "Earthquake Early Warning") .
    navItem("${section}/faults/", "Faults, Earthquake Geology &amp; Special Earthquake Studies") .
    navItem("${section}/hazrisk/", "Hazard and Risk") .
    navItem("${section}/eqproc/", "Earthquake Processes &amp; Effects") .
    navItem("${section}/monitoring/", "Monitoring Improvements") .
    navItem("/contactus/", "Regional Science Activities") .
    navItem("${section}/external/", "External Grants") ,

  "</section>"
  ;

?>
