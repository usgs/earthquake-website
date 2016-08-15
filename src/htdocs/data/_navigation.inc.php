<?php
  $section = "/data";

  echo "<a href='/data' class='up-one-level'>Data &amp; Products</a>",

  "<section>",

    navItem("${section}/data.php", "Data") .
    navItem("${section}/products.php", "Products") ,

  "</section>"
  ;

?>
