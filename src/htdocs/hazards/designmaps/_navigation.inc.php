<?php
  $section = '/hazards/designmaps';

  echo '<section>',
    navItem("${section}/index.php", 'Seismic Design Maps &amp; Tools') .

  '</section>';

  echo navGroup(navItem("${section}/rtgm.php", 'Risk-Targeted Ground Motion Calculator'),
    navItem('/designmaps/rtgm/', 'Use the Tool') .
    navItem('https://github.com/usgs/earthquake-rtgm-calculator/wiki/Risk-Targeted-Ground-Motion-Calculator-Documentation', 'Documentation & Help')
  );
