<?php
  $section = "/research/everyone";

  echo "<a href='/research/everyone/' class='up-one-level'>Science for Everyone</a>";

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

  print	navItem("$section/topics/wasatch/addl-resources.php", "Additional Resources");

?>
