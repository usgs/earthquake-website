<?php
  $section = "/research/external";

  echo "<a href='/research/external' class='up-one-level'>External Grants</a>",

  "<section>",

    navItem("https://geohazards.usgs.gov/cfusion/external_grants/research.cfm", "Funded Research") .
    navItem("https://geohazards.usgs.gov/cfusion/external_grants/networks.cfm", "Funded Networks") .
    navItem("https://geohazards.usgs.gov/cfusion/external_grants/monitoring_upgrades.cfm", "ARRA-Funded Monitoring Upgrades") .
    navItem("${section}/forpis.php", "Info for PIs") .
    navItem("${section}/contact.php", "Contacts") ,

  "</section>"
  ;

?>
