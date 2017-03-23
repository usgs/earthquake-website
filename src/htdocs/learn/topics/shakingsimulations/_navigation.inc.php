
<?php
  $section = "/learn/topics/shakingsimulations";

echo "<a href='/learn/topics/' class='up-one-level'>Earthquake Topics</a>";

echo navGroup(navItem("${section}/","Ground Shaking Simulations"),
    navItem("${section}/index.php", "Overview") .
    navItem("${section}/background.php", "Background")
  );

  echo navGroup(navItem("${section}/hayward/","View Animations"),
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
