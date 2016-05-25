<?php
	$TITLE = 'Aug. 23, 2011 M5.8 Virginia Earthquake Aftershocks';
	$WIDGETS = 'dialog';
	$SCRIPTS = 'aftershocks.js';
	$STYLES = "
		table.identify { border-collapse: collapse; border-color: #000; }
		table.identify th { background-color: #666; color: #FFF; padding: 3px; }
		table.identify td { padding: 3px; }
		table.identify a { color: blue; }
	";
	#legend {background: transparent url('Qfaultlegendvert.gif') no-repeat; margin-right:0; width:176px;
	include_once $_SERVER['DOCUMENT_ROOT'] . '/template/template.inc.php';
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="http://serverapi.arcgisonline.com/jsapi/arcgis/3.0/js/dojo/dijit/themes/claro/claro.css">
    
    
    <script type="text/javascript">var dojoConfig = {parseOnLoad: true};</script>
    <script type="text/javascript" src="http://serverapi.arcgisonline.com/jsapi/arcgis/?v=3.0"></script>
</head>

<body class="claro" >
        <div id="map">
        <div id="legend"><img src="VA_aftershocks_legend.png" alt="Legend"/></div>
        <div id="kml"><a href="VA.kmz" target="_blank">Download KML</a></div>
        </div>
    <div id="timeSliderDiv"></div>
    <div id="timelabels"><img src="time_labels_VA.png"/></div>
    <div id="mapInfo"><b>Map Explanation</b></ br><p>
    Shown here in time lapse sequence are 369 aftershocks greater than about magnitude 1.0 recorded through December 31, 2011.  These earthquakes were located by the USGS National Earthquake Information Center (NEIC) using data provided by portable seismographs deployed by Virginia Polytechnic Institute (Virginia Tech), Columbia University Lamont- Doherty Earth Observatory, University of Memphis Center for Earthquake Research and Information, Lehigh University, IRIS (Incorporated Research Institutions for Seismology (IRIS), Cornell University, and USGS.  A couple hundred of the aftershocks greater than about M1.7 were felt locally. Many more aftershocks smaller than M1.0 (and unlikely to have been felt) have likely occurred in the epicentral area during this time, but the data have not been thoroughly analyzed for events this small.</div>
</body> 
</html>