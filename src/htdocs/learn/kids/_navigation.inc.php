<?php
  $section = "/learn/kids";

  echo "<a href='/learn/kids' class='up-one-level'>For Kids</a>",

  "<section>",

    navItem("${section}/eqscience.php", "Science of Earthquakes") .
    navItem("/learn/animations/", "Earthquake Animations") .
    navItem("${section}/sciencefair.php", "Science Fair Projects") .
    navItem("${section}/become.php", "Become an Earthquake Scientist") .
    navItem("/learn/facts.php", "Cool Earthquake Facts") .
    navItem("/learn/today/", "Google Earth/KML Files") .
    navItem("${section}/kidsLearningLinks.php", "Learning Links") .
    navItem("/learn/photos.php", "Earthquake Photos") .
    navItem("${section}/abc/", "Earthquake ABC") .
    navItem("/earthquakes/map/", "Latest Earthquakes") ,

  "</section>"
  ;

?>
