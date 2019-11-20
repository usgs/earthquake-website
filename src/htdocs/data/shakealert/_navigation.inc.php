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

  navItem($shakeAlertSearchLink, 'Search ShakeAlert Archives') .
  navItem('https://www.usgs.gov/shakealert/', 'ShakeAlert Project') .
  navItem('https://www.shakealert.org/', 'ShakeAlert.org') .
  navItem('https://www.usgs.gov/natural-hazards/earthquake-hazards/early-warning', 'Earthquake Early Warning Research')

);
?>
