<?php
  $section = "/research/eqproc/rockphysics";

  echo "<a href='/research/eqproc/rockphysics/current.php' class='up-one-level'>Current Projects</a>",

  "<section>",

    navItem("${section}/friction.php", "Rate- and State-Dependent Friction") .
    navItem("${section}/nucleation.php", "Earthquake Nucleation") .
    navItem("${section}/creeping.php", "Mineralogy of Creeping Faults") .
    navItem("${section}/rotary.php", "Earthquake Simulation") .
    navItem("${section}/safod.php/", "SAFOD") ,
    navItem("${section}/melt.php/", "Melting of Slip Surface at High Pressure") ,

  "</section>"
  ;

?>
