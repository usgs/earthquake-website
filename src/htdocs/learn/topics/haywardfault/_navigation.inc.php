<?php
	$section = "/learn/topics/haywardfault";
	$NAVIGATION = true;

echo "<a href='/learn/topics/' class='up-one-level'>Earthquake Topics</a>";

echo "<section>";
				echo
				navItem("${section}/index.php", "Introduction") .
		    navItem("${section}/gis/", "Download GIS Data") ;
echo "</section>";
				echo navGroup(navItem("${section}/tiled/", "Interactive Maps"),

					navItem("${section}/tiled/", "Tiled Map") .
					navItem("${section}/zoomable/", "Zoomable Map")
				);
echo "<section>";
        echo navItem("${section}/symbols/", "Map Symbols") ;
		echo "</section>";
?>
