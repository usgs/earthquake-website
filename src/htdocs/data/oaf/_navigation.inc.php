<?php

$id = "" . time();
$params = array(
  "feed" => $id,
  "search" => array(
    "id" => $id,
    "name" => "Aftershock Forecasts",
    "isSearch" => true,
    "params" => array(
    "contributor" => "oaf"
    )
  ),
  "basemap" => "terrain",
  "timeZone" => "utc",
  "viewModes" => array(
    "map" => true,
    "list" => true
  )
);
$aftershockForecastSearchLink = '/earthquakes/search/#' . rawurlencode(json_encode($params));

echo navGroup(navItem('/data/oaf/', 'Aftershock Forecasts'),

  navItem($aftershockForecastSearchLink, 'Search Archives') .
  navItem('overview.php', 'Overview') .
  navItem('background.php', 'Scientific Background') .
  navItem('schedule.php', 'Forecast Update Schedule')
);

/*
  navItem('disclaimer.php',
      'Disclaimers')
 */

?>
