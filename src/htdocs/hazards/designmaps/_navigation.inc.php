<?php
  $section = '/hazards/designmaps';

  echo '<section>',
    navItem("${section}/index.php", 'Seismic Design Maps &amp; Tools') .

  '</section>';

  echo navGroup(navItem("${section}/usdesign.php", 'US Seismic Design Maps'),
    navItem('/designmaps/us/application.php', 'Use the Tool') .
    navItem('/designmaps/us/changelog.php', 'Recent Changes') .
    navItem("${section}/usdesigndoc.php", 'Documentation &amp; Help')
  );

  echo navGroup(navItem("${section}/rtgm.php", 'Risk Targeted Ground Motion Calculator'),
    navItem('/designmaps/rtgm/', 'Use the Tool') .
    navItem('https://github.com/usgs/earthquake-rtgm-calculator/wiki/Risk-Targeted-Ground-Motion-Calculator-Documentation', 'Documentation & Help')
  );

  echo navGroup(navItem("${section}/wwdesign.php", 'Worldwide Seismic Design Tool'),
    navItem('http://geohazards.usgs.gov/designmaps/ww/', 'Use the Tool') .
    navItem('https://github.com/usgs/earthquake-wwdesign/wiki/Worldwide-Seismic-Design-Tool-Documentation', 'Documentation &amp; Help')
  );
