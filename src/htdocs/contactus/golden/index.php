<?php
	$TITLE = "Geologic Hazards Science Center, Golden, CO";
	$WIDGETS = "imagelist";
	include_once($_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php");
?>

<div class="six column">

<p>
	The Geologic Hazards Science Center (GHSC), on the Colorado School of Mines campus, is
	home to the National Earthquake Information Center (NEIC), as well as the Geomagnetism
	Program staff, and many scientists in the Landslide Hazards Program. The Global
	Seismographic Network (GSN) is also operated nearby in Albuquerque, NM.
</p>
	The mission of the National Earthquake Information Center (NEIC) is to determine rapidly
	the location and size of all destructive earthquakes worldwide and to immediately
	disseminate this information to concerned national and international agencies,
	scientists, and the general public. The NEIC compiles and maintains an extensive,
	global seismic database on earthquake parameters and their effects that serves as a
	solid foundation for basic and applied earth science research.
</p>

<?php

$list = new ImageList('two');

// NEIC
$list->addItem(
	'neic.php',
	'images/NEIC.MediaCenter.jpg',
	'National Earthquake Information Center (NEIC)',
	'<p>' .
		'The NEIC monitors earthquakes around the world in near-real-time.  Tours are available by appointment.' .
	'</p>'
);

// IMW Education
$list->addItem(
	'/learn/topics/search.php?sendTopicID=&sendContentID=&sendLevelID=&sendRegionID=26',
	'images/IMWtrench.jpg',
	'Intermountain West Earthquake Science',
	'<p>' .
		'Almost 75 percent of Utah\'s population lives near the Wasatch Fault.' .
	'</p>'
);

// Central US Education
$list->addItem(
	'/regional/ceus/workshop_2014feb25.php',
	'images/CEUSseis.gif',
	'2014 Central and Eastern U.S. Earthquake Hazards Workshop',
	'<p>' .
		'Continuing concern exists for a major destructive earthquake in the New Madrid seismic zone.' .
	'</p>'
);

//Oklahoma Seismicity Animation
$list->addItem(
	'/regional/ceus/products/OKeqanimation.php',
	'images/newsrelease_05022014_graph.gif',
	'Animation of Oklahoma Seismicity',
	'<p>The rate of earthquakes in Oklahoma has increased remarkably since October 2013–by about 50 percent –significantly increasing the chance for a damaging magnitude 5.5 or greater quake in central Oklahoma.</p>'
);

// Eastern US Education
$list->addItem(
	'/learn/topics/search.php?sendTopicID=&sendContentID=&sendLevelID=&sendRegionID=32',
	'images/EasternUS.jpg',
	'Eastern US Earthquake Science',
	'<p>' .
		'In nearly all parts of the northeastern US, we do not yet know how to tell which fault caused an individual earthquake.' .
	'</p>'
);

$list->display();
?>
</div>

<div class="four column">

<div>
	<img src="images/neic_bldg.jpg" alt="NEIC building"/>
	<p>National Earthquake Information Center.</p>
</div>

	<p><a href="goldenloc.php">Directions &amp; Contacts</a></p>

	<h2>Regional Interest:</h2>

	<ul>
		<li><a href="http://www.pnsn.org/">Pacific Northwest Seismic Network (PNSN)</a></li>
		<li><a href="http://www.ceri.memphis.edu/">Center for Earthquake Research &amp; Information (CERI)</li>
		<li><a href="http://www.ceri.memphis.edu/products_usgs/pubs_db3.html">CERI Publications Database</a></li>
		<li><a href="http://pubs.usgs.gov/gip/119/">Putting Down Roots</a> - EQ preparedness for Central US</li>
		<li><a href="http://ussc.utah.gov/putting_down_roots.html">Putting Down Roots - EQ preparedness for Utah</a></li>
	</ul>

</div>
