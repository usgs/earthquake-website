<?php
  $section = "/hazards";

  echo "<a href='/hazards' class='up-one-level'>Hazards</a>",

  "<section>",

    navItem("${section}/designmaps/", "Design Ground Motions") .
    navItem("${section}/hazmaps/", "Seismic Hazard Maps &amp; Other Products") .
    navItem("${section}/qfaults/", "Quaternary Faults") .
    navItem("${section}/products/scenario/", "Scenarios") .
    navItem("${section}/contributions.php", "Request for Contributions") .
    navItem("${section}/workshops/", "Workshops") ,

  "</section>"
  ;

?>
