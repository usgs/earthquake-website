
<?php

  $section = "/hazards/urban/sfbay/liquefaction";
  $url = $_SERVER['REQUEST_URI'];

  $matchesOverview = false;
  if (preg_match("@^{$section}/(index.php)?$@", $url)) {
    $matchesOverview = true;
  }

  echo "<a href='/hazards/urban/' class='up-one-level'>Urban Seismic Hazards</a>",

    "<section>" .
      navItem("${section}/", "Overview", $matchesOverview) .
      navItem("${section}/sfbay/", "San Francisco Bay Area") .
      navItem("${section}/alameda/","Northwestern Alameda County") .
      navItem("${section}/scvalley/","Northern Santa Clara Valley") .
    "</section>"
  ;

?>
