<?php
  $section = "/data/3dgeologic";
  $url = $_SERVER['REQUEST_URI'];

  $matchesOverview = false;
  if (preg_match("@^{$section}/(index.php)?$@",  $url)) {
    $matchesOverview = true;
  }

  echo '<a href="/data/" class="up-one-level">Data and Products</a>',

  '<section>',
    navItem("${section}/", 'Overview', $matchesOverview) .
    navItem("${section}/download.php", 'Download') .
    navItem("${section}/documentation.php", 'Documentation') .
  '</section>';

?>
