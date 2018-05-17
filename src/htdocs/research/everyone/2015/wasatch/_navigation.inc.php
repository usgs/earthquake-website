<?php
  $section = "/research/everyone";

  echo "<a href='/research/everyone/2015' class='up-one-level'>Science for Everyone</a>";

  print navGroup('How Big and How Frequent Are Earthquakes on the Wasatch Fault?',

    navItem("index.php", "Where is the Wasatch Fault?") .
    navItem("weknow.php", "What do we already know? What is still unknown?") .
  	navItem("doing.php", "What are we doing?")
  );

  print navGroup('In the Trenches on a Paleoseismology Project',

  	navItem("select.php", "Selecting &amp; Preparing the Site") .
  	navItem("collect.php", "Down in the Trenches &amp; Up in the Air-Collecting Data") .
  	navItem("process.php", "Back at the Computer-Processing &amp; Analyzing the Data")
  );

  print	navItem("addl-resources.php", "Additional Resources");

?>
