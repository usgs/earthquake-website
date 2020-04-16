<?php
	$section = "/learn/parkfield";
	$NAVIGATION = true;
	$url = $_SERVER['REQUEST_URI'];
	$matchesIntro = false;

	if (preg_match("@^{$section}/(index.php)?$@", $url)) {
    $matchesIntro = true;
  }

echo "<section>";
				echo
				navItem("${section}/index.php", "Introduction") .
		    navItem("${section}/geology.php", "Tectonic Setting") ;

				if(preg_match("@^${section}/hist.php$@", $url) ||
				preg_match("@^${section}/1857.php$@", $url) ||
				preg_match("@^${section}/1881.php$@", $url) ||
				preg_match("@^${section}/1901.php$@", $url) ||
				preg_match("@^${section}/1922.php$@", $url) ||
				preg_match("@^${section}/1934.php$@", $url) ||
				preg_match("@^${section}/1966.php$@", $url) ||
				preg_match("@^${section}/2004.php$@", $url))
				{
					echo "</section>";
					echo navGroup(navItem("${section}/hist.php", "Earthquake History"),
						navItem("${section}/1857.php", "1857") .
						navItem("${section}/1881.php", "1881") .
						navItem("$section/1901.php", "1901") .
						navItem("$section/1922.php", "1922") .
						navItem("$section/1934.php", "1934") .
						navItem("$section/1966.php", "1966") .
						navItem("$section/2004.php", "2004")
					);
					echo "<section>";
				}
				else{
					echo navItem("${section}/hist.php", "Earthquake History");
				}

				if(preg_match("@^${section}/sciadv.php$@", $url) ||
				preg_match("@^${section}/repeat.php$@", $url) ||
				preg_match("@^${section}/fluids.php$@", $url))
				{
					echo "</section>";
					echo navGroup(navItem("${section}/sciadv.php", "Scientific Advances"),
						navItem("${section}/repeat.php", "Repeating Earthquakes") .
						navItem("${section}/fluids.php", "Fluids and Earthquakes")
					);
					echo "<section>";
				}
				else{
					echo navItem("${section}/sciadv.php", "Scientific Advances");
				}

				if(preg_match("@^${section}/eq_predict.php$@", $url) ||
				preg_match("@^${section}/eq_predict.php$@", $url) ||
				preg_match("@^${section}/scibasis.php$@", $url) ||
				preg_match("@^${section}/statuspolicy.php$@", $url))
				{
					echo "</section>";
					echo navGroup(navItem("$section/eq_predict.php", "Earthquake Prediction"),
					navItem("$section/eq_predict.php", "Earthquake Prediction History") .
					navItem("$section/scibasis.php", "Scientific Basis") .
					navItem("$section/statuspolicy.php", "Status Levels and Public Policy")
					);
					echo "<section>";
				}
				else{
					echo navItem("${section}/eq_predict.php", "Earthquake Prediction");
				}

				if(preg_match("@^${section}/safod_pbo.php$@", $url) ||
				preg_match("@^${section}/safod_pbo.php$@", $url) ||
				preg_match("@^${section}/2003site.php$@", $url))
				{
					echo "</section>";
					echo navGroup(navItem("$section/safod_pbo.php", "San Andreas Fault Observatory at Depth"),
					navItem("$section/safod_pbo.php", "Overview") .
					navItem("$section/2003site.php", "2003 Site Characterization Studies")
				);
					echo "<section>";
				}
				else{
					echo navItem("${section}/safod_pbo.php", "San Andreas Fault Observatory at Depth");
				}

	echo
	navItem("${section}/shake", "Shake Table");


	if(preg_match("@^${section}/overview.php$@", $url) ||
	preg_match("@^${section}/overview.php$@", $url) ||
	preg_match("@^${section}/seismic.php$@", $url) ||
	preg_match("@^${section}/deform.php$@", $url) ||
	preg_match("@^${section}/electromag.php$@", $url) ||
	preg_match("@^${section}/discontinued.php$@", $url))
	{
		echo "</section>";
		echo navGroup(navItem("$section/overview.php", "Data Networks"),
		navItem("$section/overview.php", "Overview") .
		navItem("$section/seismic.php", "Seismic") .
		navItem("$section/deform.php", "Deformation") .
		navItem("$section/electromag.php", "Electromagnetics") .
		navItem("$section/discontinued.php", "Discontinued Monitoring")
	);
		echo "<section>";
	}
	else{
		echo navItem("${section}/overview.php", "Data Networks");
	}


echo navItem("$section/livedata.php", "View or Download Data");



if(preg_match("@^${section}/scientific.php$@", $url) ||
preg_match("@^${section}/scientific.php$@", $url) ||
preg_match("@^${section}/general.php$@", $url))
{
	echo "</section>";
	echo navGroup(navItem("$section/scientific.php", "References"),
	navItem("$section/scientific.php", "Scientific") .
	navItem("$section/general.php", "General")
	);
	echo "<section>";
}
else{
	echo navItem("${section}/safod_pbo.php", "San Andreas Fault Observatory at Depth");
}


echo navItem("https://earthquake.usgs.gov/earthquakes/map/#%7B%22feed%22%3A%227day_all%22%2C%22search%22%3Anull%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22street%22%2C%22autoUpdate%22%3Atrue%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B35.72421761691415%2C-120.63880920410156%5D%2C%5B36.08045935195454%2C-120.2237319946289%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Afalse%2C%22faults%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D", "Current Seismicity at Parkfield") ;

?>
