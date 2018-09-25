<?php

  echo navGroup(navItem('/data/ground-failure/', 'Ground Failure'),

    navItem('/earthquakes/search/#%7B%22feed%22%3A%221530216152430%22%2C%22sort%22%3A%22newest%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22viewModes%22%3A%5B%22list%22%2C%22map%22%5D%2C%22autoUpdate%22%3Afalse%2C%22search%22%3A%7B%22id%22%3A%221530216152430%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%222018-05-29%2000%3A00%3A00%22%2C%22endtime%22%3A%222018-06-28%2023%3A59%3A59%22%2C%22minmagnitude%22%3A2.5%2C%22orderby%22%3A%22time%22%2C%22producttype%22%3A%22ground-failure%22%7D%7D%7D',
    'Search ShakeMap Archives') .

    navItem('/data/ground-failure/background.php', 'Scientific Background')
  );
?>
