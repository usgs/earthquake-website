<?php
      //	Author:	Tiffany Kalin
			// Webpage contact - Lisa Wald
			// Content contact/SME - Art Frankel, afrankel@usgs.gov
      //	Last	modified:	11/21/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Simulation of the 2001 M6.8 Nisqually, Washington Earthquake';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<p>
  <video width="=640" height="559" controls>
    <source src="media/nisqually.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
	<!--<video src="media/nisqually.mp4" poster="images/nisqually.gif" alt="Click to view Nisqually animation" width="=640" height="559" controls></video>-->
</p>

<p>
	This is an animation in map view of the ground motions from the 3D finite-difference simulation of the 2001 M6.8 Nisqually earthquake.  The colors indicate the magnitude of the vector formed by the two horizontal components of ground velocity from the simulation. Time after the origin time is indicated in the lower left hand corner. The coastline is indicated by the black lines. The epicenter of the earthquake is near the southwest corner of the map. The highest velocities occur near the epicenter. The first phase radiating outward from the hypocenter is the P-wave. The large arrivals that follow are mainly S-waves, some of which are converted to surface waves at the Seattle basin, which is located in the northeast portion of the map. The movie shows the focusing of S-wave energy along the southern edge of the Seattle basin, the generation of basin surface waves as the S-waves impinge on the southern edge of the basin, and the relatively slow propagation (compared to the S-waves) of these surface waves to the northeast across the basin.
</p>

<p>
	Scientific Staff: A. Frankel, W. Stephenson, and D. Carver
</p>

<h2>References</h2>
<ul class="referencelist">
  <li>
     Frankel, A., Stephenson, W., and Carver, D. (2009), Sedimentary basin effects
     in Seattle, Washington: ground-motion observations and 3D simulations,
     Bulletin of the Seismological Society of America , v. 99, pp. 1579-1611.
  </li>
</ul>
