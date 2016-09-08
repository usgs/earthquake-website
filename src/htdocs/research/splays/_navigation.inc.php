<?php
  $section = "/research";

  echo "<a href='/research' class='up-one-level'>Research</a>",

  "<section>",

    navItem("${section}/splays/index.php", "What Is a Tsunami?") .
    navItem("${section}/splays/ak.php", "The M9.2 Alaska EQ &amp; Tsunami") .
    navItem("${section}/splays/splays.php", "Splay Faults") .
    navItem("${section}/splays/resources.php", "Additional Resources") ,

  "</section>"
  ;

?>
