<?php

  echo navGroup(navItem('/data/shakemap/', 'ShakeMap'),

    navItem('/earthquakes/search/#%7B%22feed%22%3A%221437493916387%22%2C%22search%22%3A%7B%22id%22%3A%221437493916387%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22producttype%22%3A%22shakemapi%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D',
    'Search ShakeMap Archives') .

    navItem('/earthquakes/map/#%7B%22feed%22%3A%221450204307479%22%2C%22search%22%3A%7B%22id%22%3A%221450204307479%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22catalog%22%3A%22atlas%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D',
      'Atlas') .

    navItem('/earthquakes/shakemap/list.php?x=1&s=1', 'Scenarios') .

    navItem('http://usgs.github.io/shakemap', 'ShakeMap Manual') .

    navItem('/research/software/shakecast.php', 'ShakeCast') .

    navItem('http://usgs.github.io/shakemap/disclaimers.html', 'Disclaimers')
  );
?>
