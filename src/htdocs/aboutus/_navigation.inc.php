<?php
	$section = "/aboutus";

  echo "<section>",

    navItem("${section}/index.php", "About Us-Program Overview") .
    navItem("${section}/mission.php", "Mission Statement") .
    navItem("http://www.nehrp.gov/", "NEHRP") .
    navItem("${section}/sesac/", "Advisory Committee - SESAC") .
    navItem("${section}/nepec/", "Earthquake Prediction Evaluation Council - NEPEC") .
    navItem("${section}/documents.php", "Program Documents") .
    navItem("${section}/history.php", "Program History") ,

  "</section>"
  ;

?>
