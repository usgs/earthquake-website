<?php
$section = "/data/slab";

echo "<a href='/data/index.php' class='up-one-level'>Data &amp; Products</a>",

"<section>",

  navItem("${section}/index.php", "Background Information") .
  navItem("${section}/models.php", "Models") .
  navItem("http://usgs.maps.arcgis.com/apps/webappviewer/index.html?id=de81616029224bf699813ef7941a2ee0", "Interactive Map") .
  navItem("${section}/maps.php", "Slab Surface vs Slab Earthquake Depths Maps") .
  navItem("${section}/events/", "Individual Events") .
  navItem("${section}/refs.php", "References") .

"</section>"
;

?>
