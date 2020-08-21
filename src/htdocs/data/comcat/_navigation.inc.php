<?php
$section = "/data/comcat";

echo navGroup(("ComCat Documentation") ,

  navItem("${section}/index.php#1", "Data Types, Definitions, Formats, Availability") .
  navItem("${section}/index.php#2", "Data Access") .
  navItem("${section}/index.php#3", "Contribute and Receive Data-PDL") .
  navItem("${section}/index.php#4", "Sources of Data - Catalogs and Real-time") .
  navItem("${section}/index.php#5", "Event Association") .
  navItem("${section}/index.php#6", "References")
);

?>
