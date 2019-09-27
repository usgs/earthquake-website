<?php

  $section = "/education/geologicmaps";

  echo "<a href='/education/' class='up-one-level'>Earthquake Topics</a>";

  echo "<section>",
    navItem("${section}/index.php","Introduction") .
    navItem("${section}/quadrangles.php","Browse by Quad") .
  "</section>";

  echo navGroup(navItem("${section}/region.php","Browse Entire Region") ,
    navItem("${section}/apfaults.php", "Alquist-Priolo Faults") .
    navItem("${section}/earthquakes.php", "Earthquakes") .
    navItem("${section}/geology.php", "Geology") .
    navItem("$section/hillshades.php", "Hillshades") .
    navItem("$section/landslides.php", "Landslides") .
    navItem("$section/liquefaction.php", "Liquefaction Susceptibility") .
    navItem("$section/qfaults.php", "Quaternary Faults")
  );

?>
