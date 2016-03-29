<?php
/*
  print navItem('/earthquakes/map/', 'Latest Earthquakes');
  print navItem('/earthquakes/feed/','Feeds & Notifications');
  print navItem('/earthquakes/browse/','EQ Lists, Maps & Statistics');
  print navItem('/earthquakes/states/','Information by Region');
  print navItem('/earthquakes/search/','Search EQ Catalog');
 */

 echo navGroup(('PAST'),

 navItem('eqarchives/', 'EQ Lists, Maps & Statistics').
 navItem('search/', 'Search Earthquake Catalog').
 navItem('resources.php', 'Research Resources')
);

 echo navGroup(('PRESENT'),

  navItem('map/', 'Latest Earthquakes').
  navItem('feed/', 'Feeds & Notifications')
);

echo navGroup(('FUTURE'),

  navItem('/hazards/haz101.php', 'Earthquake Hazards (& Probabilities) 101').
  navItem('/learn/prepare.php', 'Preparedness').
  navItem('/hazards/products/scenario/', 'Scenarios')
);

echo navItem('region.php', 'Information by Region');
echo navItem('comcat/', 'Earthquake Catalog');
echo navItem('errata.php', 'Errata');

?>
