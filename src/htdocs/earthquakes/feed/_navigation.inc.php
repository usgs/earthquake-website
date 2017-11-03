<?php
$section = "/earthquakes/feed";


echo "<a href='/earthquakes/feed/' class='up-one-level'>Feeds and Notifications</a>";

  print navGroup('Real-time Notifications',
    navItem('/ens/', 'Earthquake Notification Service') .
    navItem('/earthquakes/ted/', 'Tweet Earthquake Dispatch')
  );

  print navGroup('Real-time Feeds',
    navItem("${section}/v1.0/atom.php", 'ATOM') .
    navItem("${section}/v1.0/kml.php", 'KML') .
    navItem("${section}/v1.0/csv.php", 'Spreadsheet') .
    navItem("${section}/v1.0/quakeml.php", 'QuakeML') .
    navItem("${section}/v1.0/geojson.php", 'GeoJSON Summary') .
    navItem("${section}/v1.0/geojson_detail.php", 'GeoJSON Detail')

  );
  print navGroup('For Developers',
    navItem("${section}/v1.0/changelog.php", 'Change Log') .
    navItem("${section}/policy.php", 'Feed Lifecycle Policy') .
    navItem('https://github.com/usgs/devcorner', 'Developers Corner') .
    navItem('/ws/', 'Web Services') .
    navItem('https://geohazards.usgs.gov/mailman/listinfo/realtime-feeds', 'Mailing List-Announcements') .
    navItem('https://geohazards.usgs.gov/mailman/listinfo/realtime-feed-users', 'Mailing List-Forum/Questions')
  );

?>
