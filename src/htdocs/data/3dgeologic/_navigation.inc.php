<?php
	$section = "/data/3dgeologic";
  $NAVIGATION = true;

	echo "<a href='/data/' class='up-one-level'>Data and Products</a>",

		"<section>",
			navItem("${section}/","Overview") .
			navItem("${section}/download.php","Download") .
			navItem("${section}/documentation.php", "Documentation") .

		"</section>"
		;

?>
