<?php

// site search url, leave blank for all usgs
$SITE_URL = 'http://earthquake.usgs.gov';

// navigation above search, below section navigation
$SITE_SITENAV =
	navItem('/earthquakes/', 'Earthquakes') .
	navItem('/hazards/', 'Hazards') .
	navItem('/data/', 'Data &amp; Products') .
	navItem('/learn/', 'Learn') .
	navItem('/monitoring/', 'Monitoring') .
	navItem('/research/', 'Research');

// at bottom of page
$SITE_COMMONNAV =
	navItem(($SITE_URL), 'Home') .
	navItem('/aboutus/', 'About Us') .
	navItem('/contactus/regional.php', 'Contact Us') .
	navItem('http://www.usgs.gov/legal/', 'Legal');

$HEAD =
// site theme, should use a site root-relative URL
	'<link rel="stylesheet" href="/theme/site/earthquake/index.css"/>' .
// page head content
	($HEAD ? $HEAD : '') .
// description meta
	'<meta name="description" content="' .
		'USGS Earthquake Hazards Program, responsible for' .
		' monitoring, reporting, and researching earthquakes and' .
		' earthquake hazards' .
'"/>' .
// keywords meta
	'<meta name="keywords" content="' .
		'aftershock,earthquake,epicenter,fault,foreshock,geologist,' .
		'geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,' .
		'magnitude scale,mercalli,plate,richter,seismic,seismicity,' .
		'seismogram,seismograph,seismologist,seismology,subduction,' .
		'tectonics,tsunami,quake,sismologico,sismologia' .
'"/>';

?>
