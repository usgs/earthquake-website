<?php
  $section = "/monitoring";

  echo "<a href='/monitoring' class='up-one-level'>Monitoring</a>",

  "<section>",

    navItem("/contactus/golden/neic.php", "National Earthquake Information Center-NEIC") .
    navItem("${section}/anss/", "ANSS-Advanced National Seismic System") .
    navItem("${section}/gsn/", "GSN-Global Seismographic Network") .
    navItem("${section}/volunteer/", "Volunteer Monitoring") .
    navItem("${section}/helicorders.php", "Seismogram Displays") .
    navItem("${section}/buildings/", "Earthquake Monitoring of Structures") .
    navItem("${section}/nsmp/", "NSMP-National Strong Motion Project") .
    navItem("${section}/deformation/", "Crustal Deformation Monitoring") ,

  "</section>"
  ;

?>
