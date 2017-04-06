<?php
	$section = "/earthquakes/events/1906calif/virtualtour";
  $NAVIGATION = true;

	echo "<a href='/earthquakes/events/1906calif' class='up-one-level'>1906 Earthquake</a>",

		"<section>",
			navItem("${section}/index.php","Introduction") .
			navItem("${section}/global.php","Global Geologic Setting of the 1906 Earthquake") .
			navItem("${section}/bayarea.php", "The San Andreas and Other Bay Area Faults") .
			navItem("${section}/earthquake.php", "The Northern California Earthquake, April 18, 1906") .
			navItem("${section}/photos.php", "Historic Photographs of the 1906 Earthquake") .
			navItem("${section}/modern.php", "Earthquake Hazards of The Bay Area Today") .
			navItem("${section}/instructions.php", "Instructions &amp; Tips") .

		"</section>"
		;

?>
