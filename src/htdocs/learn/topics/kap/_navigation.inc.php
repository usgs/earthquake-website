<?php
  $section = "/learn/topics/kap";

  $matchesIndex = false;
  $url = $_SERVER['REQUEST_URI'];
  if (preg_match("@^$section/((index\.php)?|location\.php)$@", $url)) {
    $matchesIndex = true;
  }

  echo "<a href='/learn/topics' class='up-one-level'>Earthquake Topics</a>",

  "<section>",

    "<header>Kite Aerial Photography</header>",

    navItem("${section}/", "Repeat Photography: George Lawrence&rsquo;s &ldquo;San Francisco in Ruins&rdquo;", $matchesIndex) .
    navItem("${section}/carrizo.php", "San Andreas Fault at Wallace Creek") .
    navItem("/learn/parkfield/shake/", "Parkfield Shake Table Exhibit") .

  "</section>"
  ;

?>
