<?php
	$section = "/earthquakes/events/1906calif";
  $NAVIGATION = true;

	echo "<a href='/earthquakes/events/1906calif' class='up-one-level'>Earthquake Events</a>",

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
<p style="font-size: .85em;"><a href="/earthquakes/">Back to Northern CA Home</a></p>
