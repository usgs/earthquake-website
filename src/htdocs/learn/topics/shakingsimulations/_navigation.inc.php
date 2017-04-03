
<?php
  $section = "/learn/topics/shakingsimulations";

  $url = $_SERVER['REQUEST_URI'];
  $matchesOverview = false;
  $insideAnimations = false;

  if (preg_match("@^{$section}/(index.php)?$@", $url)) {
    $matchesOverview = true;
  }

  if(preg_match("@^{$section}/hayward/(index.php)?$@", $url) ||
    preg_match("@^{$section}/1906/(index.php)?$@", $url) ||
    preg_match("@^{$section}/1989/(index.php)?$@", $url) ||
    preg_match("@^{$section}/shakeout/(index.php)?$@", $url)){
      $insideAnimations = true;
    }

echo "<a href='/learn/topics/' class='up-one-level'>Earthquake Topics</a>";

echo navGroup(navItem("${section}/","Ground Shaking Simulations"),
    navItem("${section}/", "Overview", $matchesOverview) .
    navItem("${section}/background.php", "Background")
  );

  echo navGroup(navItem("${section}/hayward/","View Animations", $insideAnimations),
      navItem("${section}/hayward/", "Hayward Fault Scenarios") .
      navItem("${section}/1906/", "1906 Earthquake") .
      navItem("${section}/1989/", "1989 Loma Prieta Earthquake") .
      navItem("${section}/shakeout/", "Southern California ShakeOut")
    );
  echo
  "<section>",
    navItem("${section}/colors.php", "Explanation of Colors") .
    navItem("${section}/classroom.php", "For Teachers") .
    navItem("${section}/people.php", "Contributors") .
    navItem("${section}/seealso.php", "See Also") ,

  "</section>"
  ;

?>
