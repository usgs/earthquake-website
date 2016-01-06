<?php
  include_once '/data/www/apps/earthquake-event-ws/conf/config.inc.php';

  print navItem($FEED_URL . '/index.php', 'Feeds and Notifications');
  print navGroup('Real-time Feeds',
    navItem($FEED_URL . '/atom.php', 'ATOM') .
    navItem($FEED_URL . '/kml.php', 'KML') .
    navItem($FEED_URL . '/csv.php', 'Spreadsheet') .
    navItem($FEED_URL . '/quakeml.php', 'QuakeML')
  );
  print navGroup('Real-time Notifications',
    navItem('https://sslearthquake.usgs.gov/ens/', 'Earthquake Notification Service') .
    navItem('/earthquakes/ted/', 'Tweet Earthquake Dispatch')
  );
  print navGroup('For Developers',
    navItem($FDSN_URL . '/', 'API Documentation - EQ Catalog') .
    navItem($FEED_URL . '/geojson.php', 'GeoJSON Summary') .
    navItem($FEED_URL . '/geojson_detail.php', 'GeoJSON Detail') .
    navItem($FEED_URL . '/changelog.php', 'Change Log') .
    navItem($FEED_URL . '/../policy.php', 'Feed Lifecycle Policy') .
    navItem('https://github.com/usgs/devcorner', 'Developers Corner') .
    navItem($FEED_URL . '/glossary.php', 'Glossary') .
    navItem('https://geohazards.usgs.gov/mailman/listinfo/realtime-feeds', 'Mailing List-Announcements') .
    navItem('https://geohazards.usgs.gov/mailman/listinfo/realtime-feed-users', 'Mailing List-Forum/Questions')
  );
  print navItem('../search/index.php', 'Search Earthquake Archives');
?>
