<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/27/2016
      if	(!isset($TEMPLATE))	{
			$TITLE = 'Structural Health Monitoring of Veterans Affairs&rsquo; Hospital Buildings';
      $NAVIGATION	= true;
      $HEAD = '
        <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
        <link rel="stylesheet" href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"/>
      ';
      $FOOT = '
        <script src="/lib/leaflet-0.7.7/leaflet.js"></script>
        <script src="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.js"></script>
        <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
      ';
      include	'template.inc.php';
      }
?>

<p>
	In collaboration with the U.S. Department of Veterans Affairs (VA), the <a href="http://nsmp.wr.usgs.gov/">National Strong Motion Project</a> of the U.S. Geological Survey has been installing sophisticated seismic systems that will monitor the structural integrity of VA hospital buildings located in conterminous United States, Alaska and Puerto Rico during earthquake shaking. These monitoring systems, which combine sensitive accelerometers and real-time computer calculations, are capable of determining the structural health of each instrumented structure rapidly after an event, helping to ensure the safety of patients and staff. These efforts in turn will help the U.S. Department of Veterans Affairs safeguard its building inventory from future earthquake losses.
</p>

<div id="map"></div>
<p>
	Select a circle on the map to see details at each instrumented structure. Note that some structures have both building arrays and reference sites where "orange" and "blue" marks may overlap (toggle the layers using the controller in the top right corner of the map).
</p>
<ul>
	<li>Building Array (orange circles): Instrumented by 6 or more accelerometers at different floors.</li>
	<li>Reference Site (blue circles): Instrumented by 3 accelerometers</li>
</ul>

<h2>Fact Sheets</h2>

<ul class="no-style linklist">
	<li>
		<a href="https://pubs.usgs.gov/fs/2012/3094/">
			<h4>Helping Safeguard Veterans Affairs&rsquo; Hospital Buildings by Advanced Earthquake Monitoring</h4>
			<img src="img/fs3094.gif" alt="factsheet 3094"/>
		</a>
		<p>
			USGS Fact Sheet 2012&ndash;3094, by Erol Kalkan, Krishna Banga, Hasan S. Ulusoy, Jon Peter B. Fletcher, William S. Leith, and James L. Blair
		</p>
	</li>
	<li>
		<a href="https://pubs.usgs.gov/fs/2012/3028/">
			<h4>Real-Time Seismic Monitoring of Instrumented Hospital Buildings</h4>
			<img src="img/fs3028.gif" alt="factsheet 3028"/>
		</a>
		<p>
			USGS Fact Sheet 2012&ndash;3028</a>, by Erol Kalkan, Jon Peter B. Fletcher, William S. Leith, Jill McCarthy, and Krishna Banga
		</p>
	</li>
	<li>
		<a href="https://pubs.usgs.gov/of/2012/1241/">
			<h4>Advanced Earthquake Monitoring System for U.S. Department of Veterans Affairs Medical Buildings&mdash;Instrumentation</h4>
			<img src="img/ofr1241.gif" alt="report cover"/>
		</a>
		<p>
			USGS Open-File Report 2012-1241, by By Erol Kalkan, Krishna Banga, Hasan S. Ulusoy, Jon Peter B. Fletcher, William S. Leith, Shahneam Reza, and Timothy Cheng
		</p>
	</li>
</ul>

<h2>Papers</h2>

<ul class="referencelist">
	<li>Ulusoy H.S., Kalkan, E. and Banga, K. &ldquo;<a href="img/2013-Ulusoy_et_al-Real-time-seismic-monitoring.pdf">Real-time Seismic Monitoring of Veterans Affairs Hospital Buildings</a>&rdquo;, Proc. of the SPIE Smart Structures Conference, San Diego, CA, March 11-13, 2013.</li>
	<li>Ulusoy, H., Kalkan E., Fletcher, J.P.B., Friberg, P., Leith, W.K. and Banga, K. (2012). &ldquo;<a href="img/2012-Ulusoy_et_al-Monitoring-and-Alert-System.pdf">Design and Implementation of A Structural Health Monitoring and Alerting System for Hospital Buildings in the United States</a>&rdquo;, Proc. of the 15th World Conf. on Earthquake Engineering, Paper No. 4474, Lisbon, Portugal.</li>
</ul>

<a href="http://www.va.gov/">
  <img src="img/va-logo.png" class="logo" alt="U.S. Department of Veterans Affairs" width="221" height="50" />
</a>
