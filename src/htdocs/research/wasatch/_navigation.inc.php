<?php
  $section = "/research";

  echo "<a href='/research' class='up-one-level'>Research</a>";

  print navGroup('How Big and How Frequent Are Earthquakes on the Wasatch Fault?',

    navItem("${section}/wasatch/index.php", "Where is the Wasatch Fault?") .
    navItem("$section/wasatch/weknow.php", "What do we already know? What is still unknown?") .
  	navItem("$section/wasatch/doing.php", "What are we doing?")
  );

  print navGroup('In the Trenches on a Paleoseismology Project',

  	navItem("$section/wasatch/select.php", "Selecting &amp; Preparing the Site") .
  	navItem("$section/wasatch/collect.php", "Down in the Trenches &amp; Up in the Air-Collecting Data") .
  	navItem("$section/wasatch/process.php", "Back at the Computer-Processing &amp; Analyzing the Data")
  );

  print	navItem("$section/wasatch/resources.php", "Additional Resources");

?>
