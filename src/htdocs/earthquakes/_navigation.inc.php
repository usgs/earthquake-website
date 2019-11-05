<?php
  $section = "/earthquakes";

  echo "<a href='/earthquakes' class='up-one-level'>Earthquakes</a>",

  "<section>",

    navItem("${section}/map/", "Latest Earthquakes") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/lists-maps-and-statistics", "Earthquake Lists, Maps &amp; Statistics") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/special-earthquakes-earthquake-sequences-and-fault-zones", "Special Earthquakes, Earthquake Sequences, and Fault Zones") .
    navItem("${section}/search/", "Search Earthquake Catalog") .
    navItem("${section}/feed/", "Real-time Notifications, Feeds &amp; Web Services") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/information-region", "Information by Region") .
    navItem("/data/comcat/", "ANSS ComCat Documentation") .
    navItem("https://www.usgs.gov/natural-hazards/earthquake-hazards/errata-latest-earthquakes", "Errata for Latest Earthquakes") ,

  "</section>"
  ;

?>
