<?php
  $section = "/research/monitoring";

  echo "<a href='/research/monitoring/' class='up-one-level'>Monitoring Improvements</a>",

  "<section>",

    navItem("${section}/realtime.php", "Real-time Information") .
    navItem("${section}/instrument.php", "Instrument and Data Quality Research") .
    navItem("${section}/slowslip.php", "Monitoring Slow Slip") ,

  "</section>"
  ;

?>
