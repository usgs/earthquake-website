<?php
  $section = "/hazards";

  echo "<a href='/hazards' class='up-one-level'>Hazards</a>",

  "<section>",

    navItem("${section}/designmaps/", "Design Ground Motions") .
    navItem("${section}/hazmaps/", "Seismic Hazard Maps &amp; Other Products") .
    navItem("${section}/qfaults/", "Faults") .
    navItem("${section}/scenarios/", "Scenarios") ,

  "</section>"
  ;

?>
