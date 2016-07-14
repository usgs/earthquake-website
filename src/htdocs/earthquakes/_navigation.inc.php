<?php
  $section = "/earthquakes";

  echo "<a href='/earthquakes' class='up-one-level'>Earthquakes</a>",

  "<section>",

    navItem("${section}/map/", "Latest Earthquakes") .
    navItem("${section}/browse/", "Earthquake Lists, Maps &amp; Statistics") .
    navItem("${section}/search/", "Search Earthquake Catalog") .
    navItem("${section}/feed/", "Real-time Feeds &amp; Notifications") .
    navItem("${section}/byregion/", "Information by Region") .
    navItem("/data/comcat/", "ANSS ComCat Documentation") .
    navItem("${section}/errata.php", "Errata for Latest Earthquakes") ,

  "</section>"
  ;

?>
