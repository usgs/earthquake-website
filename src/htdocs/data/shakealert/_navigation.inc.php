<?php

$id = "" . time();
$params = array(
  "feed" => $id,
  "search" => array(
    "id" => $id,
    "name" => "ShakeAlerts",
    "isSearch" => true,
    "params" => array(
      "contributor" => "ew"
    )
  ),
  "basemap" => "terrain",
  "timeZone" => "utc",
  "viewModes" => array(
    "map" => true,
    "list" => true
  )
);
$shakeAlertSearchLink = '/earthquakes/search/#' . rawurlencode(json_encode($params));


echo navGroup(navItem('/data/shakealert/', 'ShakeAlert'),

  navItem($shakeAlertSearchLink, 'Search ShakeAlert Archives')

);

/*
  navItem('performance.php',
    'About ShakeAlert Performance') .

  navItem('references.php',
    'Data, Products & References') .

  navItem('faq.php',
    'FAQ') .

    navItem('/background.php',
      'Scientific Background') .

  navItem('disclaimer.php',
      'Disclaimers')
 */

?>
