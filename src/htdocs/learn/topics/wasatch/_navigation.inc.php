<?php
  $section = "/learn";

  echo "<a href='/learn/' class='up-one-level'>Learn</a>";

  print navGroup('How Big and How Frequent Are Earthquakes on the Wasatch Fault?',

    navItem("${section}/topics/wasatch/index.php", "Where is the Wasatch Fault?") .
    navItem("$section/topics/wasatch/weknow.php", "What do we already know? What is still unknown?") .
  	navItem("$section/topics/wasatch/doing.php", "What are we doing?")
  );

  print navGroup('In the Trenches on a Paleoseismology Project',

  	navItem("$section/topics/wasatch/select.php", "Selecting &amp; Preparing the Site") .
  	navItem("$section/topics/wasatch/collect.php", "Down in the Trenches &amp; Up in the Air-Collecting Data") .
  	navItem("$section/topics/wasatch/process.php", "Back at the Computer-Processing &amp; Analyzing the Data")
  );

  print	navItem("$section/topics/wasatch/resources.php", "Additional Resources");

?>
