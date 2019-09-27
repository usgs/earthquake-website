<?php
  $section = "/education/shakingsimulations";

  $url = $_SERVER['REQUEST_URI'];

  $matchesOverview = false;
  if (preg_match("@^{$section}/(index.php)?$@", $url)) {
    $matchesOverview = true;
  }

  echo "<a href='/education/' class='up-one-level'>Earthquake Topics</a>";

  echo navGroup('Ground Shaking Simulations',
    navItem("${section}/", "Overview", $matchesOverview) .
    navItem("${section}/background.php", "Background") .
    navItem("${section}/hayward/","View Animations") .
    navItem("${section}/colors.php", "Explanation of Colors") .
    navItem("${section}/classroom.php", "For Teachers") .
    navItem("${section}/people.php", "Contributors") .
    navItem("${section}/seealso.php", "See Also")
  );
