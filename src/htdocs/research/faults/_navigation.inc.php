<?php
  $section = "/research/faults";

  echo "<a href='/research/faults/' class='up-one-level'>Faults, Earthquake Geology &amp; Special Earthquake Studies</a>",

  "<section>",

    navItem("${section}/overview.php", "Overview") .
    navItem("${section}/geology.php", "Earthquake Geology") .
    navItem("${section}/paleo.php", "Paleoseismology") .
    navItem("${section}/geomorphology.php", "Tectonic Geomorphology") .
    navItem("${section}/geodesy.php", "Near-Field Geodesy") .
    navItem("${section}/response.php", "Earthquake Response") .
    navItem("${section}/salton.php", "Salton Seismic Imaging") ,
    /* navItem("/earthquakes/events/", "Special Earthquake Studies") , */

  "</section>"
  ;

?>
