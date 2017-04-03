<?php
  $section = "/learn";

  echo "<a href='/learn' class='up-one-level'>Learn</a>",

  "<section>",

    navItem("${section}/faq.php", "FAQ") .
    navItem("${section}/kids/", "For Kids") .
    navItem("${section}/topics/", "Earthquake Topics") .
    navItem("${section}/glossary/", "Earthquake Glossary") .
    navItem("${section}/preparedness.php", "Prepare") .
    navItem("${section}/kml.php", "Google Earth/KML Files") .
    navItem("${section}/posters.php", "Earthquake Summary Posters") ,

  "</section>"
  ;

?>
