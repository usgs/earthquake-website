<?php
  $section = "/learn";

  echo "<a href='/learn/' class='up-one-level'>Learn</a>";

  print navGroup('Establishing the Story of Past Earthquakes on the San Andreas Fault to Inform the Future',

    navItem("${section}/topics/safz-paleo/index.php", "Intro &amp; Paleoseismology") .
    navItem("$section/topics/safz-paleo/finding.php", "Finding Paleoearthquakes") .
  	navItem("$section/topics/safz-paleo/determining.php", "Determining the Age of a PaleoEQ &amp; Estimating Magnitudes") .
  	navItem("$section/topics/safz-paleo/bigpicture.php", "SAFZ-The Big Picture") .
  	navItem("$section/topics/safz-paleo/sca.php", "Southern California") .
  	navItem("$section/topics/safz-paleo/nca.php", "Northern California") .
    navItem("$section/topics/safz-paleo/nowwhat.php", "Now What?")

  );

  print	navItem("$section/topics/safz-paleo/resources.php", "Additional Resources");

?>
