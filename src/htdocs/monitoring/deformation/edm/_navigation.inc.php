<?php
  $section = "/monitoring/deformation/edm";
  $url = $_SERVER['REQUEST_URI'];

  $matchesOverview = false;
  if (preg_match("@^${section}/(index.php)?$@", $url)) {
    $matchesOverview = true;
  }

  echo "<a href='/monitoring/deformation/' class='up-one-level'>Crustal Deformation Monitoring</a>",

  navGroup('Two-Color EDM',
    navItem("${section}/", "Overview", $matchesOverview) .
    navItem("${section}/parkfield/", "Parkfield") .
    navItem("${section}/longvalley/", "Long Valley") .
    navItem("${section}/socal.php", 'Southern California')
  );
