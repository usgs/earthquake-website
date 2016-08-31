<?php
  $section = "/research/eqproc/rockphysics";

  echo "<a href='/research/eqproc/rockphysics' class='up-one-level'>Rock Physics Labs</a>",

  "<section>",

    navItem("${section}/why.php", "Why Study the Friction of Rock?") .
    navItem("${section}/history.php", "History") .
    navItem("${section}/machines.php", "Test Apparatus") .
    navItem("${section}/current.php", "Current Projects") .
    navItem("${section}/pubs.php", "Publications") ,

  "</section>"
  ;

?>
