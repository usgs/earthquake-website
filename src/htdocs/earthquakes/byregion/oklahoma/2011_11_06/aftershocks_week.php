<?php
	$TITLE = 'Nov. 6, 2011 M5.6 Oklahoma Earthquake Foreshocks and Aftershocks';
	$WIDGETS = 'dialog';
	$STYLES = '
		table.identify { border-collapse: collapse; border-color: #000; }
		table.identify th { background-color: #666; color: #FFF; padding: 3px; }
		table.identify td { padding: 3px; }
		table.identify a { color: blue; }
	';

	$SCRIPTS = 'http://serverapi.arcgisonline.com/jsapi/arcgis/?v=3.0,aftershocks_week.js';

	$STYLESHEETS = 'http://serverapi.arcgisonline.com/jsapi/arcgis/3.0/js/dojo/dijit/themes/claro/claro.css';

	$HEAD = '
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	';

	$BODYCLASS = 'claro';
	include_once $_SERVER['DOCUMENT_ROOT'] . '/template/template.inc.php';
?>
<div id="map">
	<div id="legend"><img src="OK_aftershocks_legend.png" alt="Legend"/></div>
	<div id="kml"><a href="OK.kmz" target="_blank">Download KML</a></div>
</div>
<div id="timeSliderDiv"></div>
<div id="timelabels"><img src="OK_aftershocks_timebar_week.png" alt="Time Labels"/></div>
<div id="mapInfo">
	<b>Map Explanation</b>
	<br/>
	<p>
		Shown here in time lapse sequence are 48 aftershocks greater than about
		magnitude 1.0 recorded within one week of the M4.8 foreshock.  These earthquakes were
		located by the USGS National Earthquake Information Center (NEIC).
		Numerous aftershocks were felt locally.
	</p>
</div>
<script type="text/javascript">/**<![CDATA[*/
	var dojoConfig = {parseOnLoad: true};
/**]]>*/</script>
