<?php
  $section = "/hazards";

  echo "<a href='/hazards' class='up-one-level'>Earthquakes</a>",

  "<section>",

    navItem("${section}/designmaps/", "Design Ground Motions") .
    navItem("${section}/hazmaps/", "Seismic Hazard Maps &amp; Other Products") .
    navItem("${section}/products/scenario/", "Scenarios") .
    navItem("${section}/qfaults/", "Quaternary Faults") .
    navItem("${section}/contributions.php", "Request for Contributions") .
    navItem("${section}/workshops/", "Workshops") ,

  "</section>"
  ;

?>
