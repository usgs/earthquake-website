<?php
  $section = "/research/eqproc";

  echo "<a href='/research/eqproc/' class='up-one-level'>Earthquake Processes &amp; Effects</a>",

  "<section>",

    navItem("${section}/overview.php", "Overview") .
    navItem("${section}/trackingstress.php", "Tracking Stress Buildup") .
    navItem("${section}/deformation.php", "Crustal Deformation") .
    navItem("${section}/sliprates.php", "Fault Slip Rates") .
    navItem("${section}/posteqmotions.php", "Post-Earthquake Motions") .
    navItem("${section}/grdmotion.php", "Ground Motion") .
    navItem("${section}/grdshaking.php", "Ground Shaking") .
    navItem("${section}/grdfailure.php", "Ground Failure") .
    navItem("${section}/sfbarrays.php", "San Francisco Bay Area Arrays") .
    navItem("${section}/ebse.php", "East Bay Seismic Experiment") .
    navItem("${section}/rockphysics/", "Rock Physics Labs") ,

  "</section>"
  ;

?>
