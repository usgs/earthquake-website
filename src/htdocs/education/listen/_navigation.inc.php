<?php
$section = "/education/listen";

print navItem("$section/index.php", "Introduction");
print navGroup("Interactive Listening Quiz",
  navItem("$section/source.php", "Fault Length Effects") .
	navItem("$section/distance.php", "Distance Effects") .
	navItem("$section/rocktype.php", "Rock Type Effects") .
	navItem("$section/combination.php", "Multiple Earthquakes")
);
print navItem("$section/allsounds.php", "Earthquake Sounds for Fun");
print navItem("$section/download.php", "Download Sound Files");
print navItem("$section/music/index.php", "Earthquake Music");

?>
