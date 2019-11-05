<?php
  $section = "/learn";

  echo "<a href='/learn' class='up-one-level'>Learn</a>",

  "<section>",

    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/faqs-category", "FAQ") .
    navItem("${section}/kids/index.php", "For Kids") .
    navItem("${section}/education/", "Earthquake Topics") .
    navItem("${section}/glossary/", "Earthquake Glossary") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/science/prepare", "Prepare") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/google-earthkml-files", "Google Earth/KML Files") .
    navItem("/data/posters.php", "Earthquake Summary Posters") .
    navItem("${section}/today/", "Today in Earthquake History") ,

  "</section>"
  ;

?>
