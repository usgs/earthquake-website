<?php
  $section = "/research/external";

  echo "<a href='/research/external' class='up-one-level'>External Grants</a>",

  "<section>",

    navItem("${section}/forpis.php", "Info for PIs") .
    navItem("${section}/contact.php", "Contacts") ,

  "</section>"
  ;

?>
