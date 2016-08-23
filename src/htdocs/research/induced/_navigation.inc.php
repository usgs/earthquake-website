<?php
  $section = "/research/induced";

  echo "<a href='/research/induced/' class='up-one-level'>Induced Earthquakes</a>",

  "<section>",

    navItem("${section}/overview.php", "Overview") .
    navItem("${section}/myths.php", "Myths & Misconceptions") .
    navItem("${section}/studies.php", "Observational Studies") .
    navItem("${section}/hazards.php", "Hazard Estimation") .
    navItem("${section}/modeling.php", "Numerical Modeling") .
    navItem("${section}/references.php", "Publications") ,

  "</section>"
  ;

?>
