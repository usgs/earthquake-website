<?php
$section = "/data/slab";

echo "<a href='/data' class='up-one-level'>Data &amp; Products</a>",

"<section>",

  navItem("${section}/index.php", "Background Information") .
  navItem("${section}/models.php", "Models") .
  navItem("${section}/map/", "Interactive Map") .
  navItem("${section}/maps.php", "Slab Surface vs Slab Earthquake Depths Maps") .
  navItem("${section}/events.php", "Individual Events") .
  navItem("${section}/refs.php", "References") .

"</section>"
;

?>
