<?php
  $section = "/earthquakes/events/1868calif/virtualtour";
  $NAVIGATION = true;
  echo "<a href='/earthquakes/events/1868calif/virtualtour' class='up-one-level'>Earthquakes</a>",

  "<section>",
    navItem("${section}/index.php", "Introduction") .
    navItem("${section}/global.php", "Global Earthquake Setting") .
    navItem("${section}/bayarea.php", "Earthquake Setting of the San Francisco Bay Area") .
    navItem("${section}/earthquake.php", "The Hayward Fault and 1868 Earthquake") .
    navItem("${section}/fault.php", "Urbanization of the Hayward Fault") .
    navItem("${section}/modern.php", "Earthquake Hazards of the Bay Area Today") .
  "</section>"
  ;

?>
