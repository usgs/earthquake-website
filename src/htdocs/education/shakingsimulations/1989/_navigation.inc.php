<?php
  $section = "/learn/topics/shakingsimulations";

  $url = $_SERVER['REQUEST_URI'];

  $matchesOverview = false;
  if (preg_match("@^{$section}/(index.php)?$@", $url)) {
    $matchesOverview = true;
  }

  echo "<a href='${section}' class='up-one-level'>Ground Shaking Simulations</a>";

  echo navGroup('View Animations',
    navItem("${section}/hayward/", "Hayward Fault Scenarios") .
    navItem("${section}/1906/", "1906 Earthquake") .
    navItem("${section}/1989/", "1989 Loma Prieta Earthquake") .
    navItem("${section}/shakeout/", "Southern California ShakeOut")
  );
