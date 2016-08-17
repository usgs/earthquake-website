<?php
  $section = "/research/hazrisk";

  echo "<a href='/research/hazrisk/' class='up-one-level'>Hazard &amp; Risk Assessment</a>",

  "<section>",

    navItem("${section}/national.php", "National Hazard Maps") .
    navItem("${section}/regional.php", "Regional & Urban Hazards") .
    navItem("${section}/risk.php", "Risk") ,

  "</section>"
  ;

?>
