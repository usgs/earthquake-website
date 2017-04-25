<?php
	$section = "/hazards/urban/sfbay/liquefaction";
  $NAVIGATION = true;

	echo "<a href='/hazards/urban/sfbay/liquefaction/' class='up-one-level'>Liquefaction Hazard Maps</a>",

		"<section>".
      navItem("${section}/","Overview") .
			navItem("${section}/sfbay/", "San Francisco Bay Area") .
			navItem("${section}/alameda/","Northwestern Alameda County") .
      navItem("${section}/scvalley/","Northern Santa Clara Valley") .

		"</section>"
		;

?>
