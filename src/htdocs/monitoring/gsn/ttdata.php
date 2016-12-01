<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	12/01/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Travel Time Dataset';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>
	As part of our routine review of data we collect, we select data windows around a limited number of larger earthquakes. In the past, we have simply verified that the observed arrivals were acceptably close to predicted arrival times. However, beginning in January 1998, we started to record our arrival time picks as part of our routine data review. Although we typically pick just larger teleseisms, we will usually pick whatever arrivals are visible in the time windows we review. Thus, on occasion, we are picking arrivals from local or regional events.
</p>
<p>
	Our arrival time picks are made from either broadband or short period unfiltered data. We make "classic" picks in the sense that we visually review the time series and mark, to the best of our ability, the onsets of phase arrivals.
</p>
<p>
	Our basic arrival time dataset provides only the station name, the channel from which we made the pick, and the arrival time. We then use a catalog of large teleseisms (the Harvard/Lamont CMT catalog) to perform a rudimentary event and phase association of our arrival time picks. Both the raw and "associated" arrival time datasets are available below.
</p>
<p>
	Please note that the data presented here are experimental. We can make no guarantees about the quality or completeness of these data. Our first and foremost concern is proper quality control of the waveforms--the arrival time datasets presented here are just a byproduct of that work. If you have questions or comments on this project please send mail to: <a href="mailto:dcc@usgs.gov">dcc@usgs.gov</a>.
</p>

<p>
	The plot below shows only the associated arrivals, with all sources corrected to 0 km depth. The predicted travel time curves are from the IASPEI tables, for a source depth of 0 km. Note that the 'ghosting' visible preceding the P-arrivals could be due to a single uncataloged preshock.
</p>
<p>
	<img src="images/ttpicks.gif" alt="travel time picks graph" style="background-color:#333; padding:10px" width="" height="" />
</p>

<p>
	The map below provides a rough estimate of the data coverage. It shows the geometrical midpoints of the earthquake-to-station great circles, for all the arrivals for which we were able to make event associations (regardless of earthquake depth). For example, if we made a pick of SSS and SKS from a single seismogram, there would just be a single red dot on the map at the exact midpoint of the great circle which connects the earthquake and station.
</p>
<p>
	<img src="images/ttpicks_map.gif" alt="travel time picks map" style="background-color:#333; padding:10px" width="" height="" />
</p>

<p>
	Although we continue to make travel time picks and provide them to the ISC and the IRIS Data Management Center, the data set extends from 1997-2005 and is available in two different formats:
	<ol>
		<li><a href="ftp://hazards.cr.usgs.gov/web/data/gsn/ttpicks_raw.txt">raw arrival time picks in tabular form</a>: The columns of this file are, respectively, station name, channel name, and year, day, hour, minute, and second of the phase pick. </li>

		<li><a href="ftp://hazards.cr.usgs.gov/web/data/gsn/ttpicks.txt">"associated" arrival time picks in tabular form</a>: The columns of this file are, respectively, station name, channel name, year, day, hour, minute, and second of the phase pick, year, day, hour, minute, second, latitude, longitude, depth (km) of the associated earthquake, and the phase association.</li>
	</ol>
</p>
