<?php
  $section = "/earthquakes";

  echo "<a href='/earthquakes' class='up-one-level'>Earthquakes</a>",

  "<section>",

    navItem("${section}/map/", "Latest Earthquakes") .
    navItem("${section}/browse/", "Earthquake Lists, Maps &amp; Statistics") .
    navItem("${section}/events/", "Special Earthquakes, Earthquake Sequences, and Fault Zones") .
    navItem("${section}/search/", "Search Earthquake Catalog") .
    navItem("${section}/feed/", "Real-time Notifications, Feeds &amp; Web Services") .
    navItem("${section}/byregion/", "Information by Region") .
    navItem("/data/comcat/", "ANSS ComCat Documentation") .
    navItem("${section}/errata.php", "Errata for Latest Earthquakes") ,

  "</section>"
  ;

?>
