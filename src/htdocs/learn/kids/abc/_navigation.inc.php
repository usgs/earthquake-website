<?php
  $section = "/learn/kids/abc";

  echo "<a href='/learn/kids/' class='up-one-level'>Earthquakes For Kids</a>",

  "<section>",
    navItem("${section}/index.php","Earthquake ABC") .
    navItem("${section}/intro.php", "Introduction") .
    navItem("${section}/children/", "Children's Book") .
    navItem("${section}/parents/", "Parents Guide") .
    navItem("${section}/teachers.php", "Teachers Guide") ,
  "</section>"
  ;
?>
