<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald
  // Last modified: 05/23/2016, Lisa Wald
  if (!isset($TEMPLATE)) {
  $TITLE = 'Information by Region-Oklahoma';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<?php
// Author: Lisa Wald
// Contact: Lisa Wald
// Last modified: 05/23/2016, Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Information by Region-Oklahoma';
    $NAVIGATION = true;

	$WIDGETS = 'dialog';
	$STYLES = '
		table.identify { border-collapse: collapse; border-color: #000; }
		table.identify th { background-color: #666; color: #FFF; padding: 3px; }
		table.identify td { padding: 3px; }
		table.identify a { color: blue; }
	';

	$SCRIPTS = 'http://serverapi.arcgisonline.com/jsapi/arcgis/?v=3.0,aftershocks.js';

	$STYLESHEETS = 'http://serverapi.arcgisonline.com/jsapi/arcgis/3.0/js/dojo/dijit/themes/claro/claro.css';

	$HEAD = '
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	';

	$BODYCLASS = 'claro';
  include 'template.inc.php';
?>

<h2>Nov. 6, 2011 M5.6 Oklahoma Earthquake Foreshocks and Aftershocks</h2>

<div id="map">
	<div id="legend"><img src="OK_aftershocks_legend.png" alt="Legend"/></div>
	<div id="kml"><a href="OK.kmz" target="_blank">Download KML</a></div>
</div>
<div id="timeSliderDiv"></div>
<div id="timelabels"><img src="OK_aftershocks_timebar.png" alt="Time Labels"/></div>
<div id="link"><a href="aftershocks_week.php">View aftershocks from November 5, 2011 - November 12, 2011</a></div>
<div id="mapInfo"><br/>
	<b>Map Explanation</b>
	<br/>
	<p>
		Shown here in time lapse sequence are one M4.8 foreshock (green star) and 133 aftershocks greater than about magnitude 1.0 recorded through July 31, 2012. Aftershocks are earthquakes that follow the largest shock of an earthquake sequence. They are smaller than the mainshock, but can be still large enough to cause additional damage, and within 1-2 rupture lengths distance from the mainshock. Aftershocks can continue over a period of weeks, months, or years. In general, the larger the mainshock, the larger and more numerous the aftershocks, and the longer they will continue.  These earthquakes were located by the USGS National Earthquake Information Center (NEIC) in collaboration CERI-Memphis and the University of Oklahoma.  The aftershocks near the main shock appear to align along a northeast-southwest trend that is probably defining the fault rupture below the ground surface.  No ground surface rupture above this fault has been detected in the field.
Numerous aftershocks were felt locally. Many hundreds more aftershocks smaller than M1.0 (and unlikely to have been felt) have likely occurred in the epicentral area during this time, but the data have not been thoroughly analyzed reviewed for events this small. The number of aftershocks and their decrease in frequency of occurrence with time is normal behavior for a M5.6 main shock.
</p>
</div>
<div id="caption"><p><strong><i>Below:</i></strong><i> Maintenance workers prepare to use a tarp to cover the damage to one of the spires on Benedictine Hall at St. Gregory's University in Shawnee, Okla., Sunday, Nov. 6, 2011. Two earthquakes in the area in less than 24 hours caused one of the towers to topple, and damaged the remaining three.</i><strong><i>(AP Photo/Sue Ogrocki)</i></strong></p></div>
<div id="ap"><img src="AP111106043818.png" alt="Earthquake Damage"/></div>
<script type="text/javascript">/**<![CDATA[*/
	var dojoConfig = {parseOnLoad: true};
/**]]>*/</script>
