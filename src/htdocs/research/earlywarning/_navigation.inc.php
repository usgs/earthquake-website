<?php
  $section = "/research/earlywarning";

  echo "<a href='/research/earlywarning/' class='up-one-level'>Earthquake Early Warning</a>",

  "<section>",

    navItem("${section}/overview.php", "Overview") .
    navItem("${section}/background.php", "Background") .
    navItem("${section}/currentstatus.php", "Current Status") .
    navItem("${section}/nextsteps.php", "Next Steps") .
    navItem("${section}/news.php", "News") ,

  "</section>"
  ;

?>
