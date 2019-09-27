<?php
  $section = "/education/haywardfault";
  $url = $_SERVER['REQUEST_URI'];

  $matchesIntro = false;
  if (preg_match("@^${section}/(index.php)?$@", $url)) {
    $matchesIntro = true;
  }

  echo "<a href='/education/' class='up-one-level'>Earthquake Topics</a>",

  "<section>",
    navItem("${section}/index.php", "Introduction", $matchesIntro),
    navItem("${section}/gis/", "Download GIS Data"),
  "</section>",

  navGroup("Interactive Maps",
    navItem("${section}/tiled/", "Tiled Map") .
    navItem("${section}/zoomable/", "Zoomable Map")
  ),

  "<section>",
    navItem("${section}/symbols/", "Map Symbols"),
  "</section>";
?>
