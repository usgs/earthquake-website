<?php
$section = "/data/crust";
$NAVIGATION = true;
$url = $_SERVER['REQUEST_URI'];
$matchesIntro = false;

if (preg_match("@^{$section}/(index.php)?$@", $url)) {
  $matchesIntro = true;
}

echo "<a href='/data' class='up-one-level'>Data and Products</a>";

echo "<section>";
  echo
  navItem("${section}/index.php", "Introduction") ;

  if(preg_match("@^${section}/database.php$@", $url) ||
  preg_match("@^${section}/database.php$@", $url) ||
  preg_match("@^${section}/maps.php$@", $url))
  {
    echo "</section>";
    echo navGroup(navItem("${section}/database.php", "Global Crustal Database"),
    navItem("${section}/database.php", "Introduction") .
    navItem("${section}/maps.php", "Province and Age Maps")
  );
  echo "<section>";
  }
  else{
    echo navItem("${section}/database.php", "Global Crustal Database");
  }

    echo
    navItem("${section}/crust.php", "Global Crustal Model") ;

    if(preg_match("@^${section}/china.php$@", $url) ||
    preg_match("@^${section}/china.php$@", $url) ||
    preg_match("@^${section}/cascadia.php$@", $url) ||
    preg_match("@^${section}/india.php$@", $url) ||
    preg_match("@^${section}/nam.php$@", $url) ||
    preg_match("@^${section}/sam.php$@", $url))
    {
      echo "</section>";
      echo navGroup(navItem("${section}/china.php", "Regional Crustal Models"),
        navItem("${section}/china.php", "China") .
        navItem("${section}/cascadia.php", "Cascadia Subduction Zone") .
        navItem("${section}/india.php", "Indian Subcontintent") .
        navItem("${section}/nam.php", "North America") .
        navItem("${section}/sam.php", "South America")
    );
    echo "<section>";
    }
    else{
      echo navItem("${section}/china.php", "Regional Crustal Models");
    }

      echo
      navItem("${section}/download.php", "Download Maps") ;

?>
