<?php
  $section = "/monitoring";

  echo "<a href='/monitoring' class='up-one-level'>Monitoring</a>",

  "<section>",

    navItem("/contactus/golden/neic.php", "National Earthquake Information Center-NEIC") .
    navItem("${section}/anss/", "Advanced National Seismic System-ANSS") .
    navItem("${section}/gsn/", "Global Seismographic Network-GSN") .
    navItem("${section}/volunteer/", "Volunteer Monitoring") .
    navItem("${section}/buildings/", "Structural Health Monitoring of Buildings") .
    navItem("${section}/nsmp/", "National Strong Motion Project - NSMP") .
    navItem("${section}/deformation/", "Crustal Deformation Monitoring") ,

  "</section>"
  ;

?>
