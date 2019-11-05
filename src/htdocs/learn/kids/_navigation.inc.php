<?php
  $section = "/learn/kids/index.php";

  echo "<a href='/learn/kids/index.php' class='up-one-level'>For Kids</a>",

  "<section>",

    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/science/science-earthquakes", "Science of Earthquakes") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/science/earthquake-animations?qt-science_center_objects=7#qt-science_center_objects", "Earthquake Animations") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/science/science-fair-project-ideas", "Science Fair Projects") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/science/become-an-earthquake-scientist", "Become an Earthquake Scientist") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/science/cool-earthquake-facts", "Cool Earthquake Facts") .
    navItem("/learn/today/", "Google Earth/KML Files") .
    navItem("${section}/kidsLearningLinks.php", "Learning Links") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/science/earthquake-photo-collections", "Earthquake Photos") .
    navItem("https://earthquake.usgs.gov/earthquakes/map/", "Latest Earthquakes") ,

  "</section>"
  ;

?>
