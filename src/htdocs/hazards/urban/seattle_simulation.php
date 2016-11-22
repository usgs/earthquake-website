<?php
      //	Author:	Tiffany Kalin
			// Webpage contact - Lisa Wald
			// Content contact/SME - Art Frankel, afrankel@usgs.gov
      //	Last	modified:	11/21/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Computer Simulation of a Magnitude 6.5 Earthquake on the Seattle Fault';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<p>
	These animations show the simulated ground motions that could occur in the Seattle region for a magnitude 6.5 earthquake on the Seattle fault. We use a three-dimensional model of the Earth's crust that includes the Seattle basin, which is a deep basin filled with glacial deposits, sediments, and sedimentary rock. This simulation is for periods of ground motions greater than about 2 sec. The simulation does not include the effects of very shallow material such as artificial fill, which will influence shaking at shorter periods than considered here. The colors denote the ground velocity caused by the seismic waves that radiate from the fault, analogous to waves in a pond generated when a pebble is dropped. Red values indicate the largest ground velocities.
</p>

<p>
	The simulation is based on an initial model of the Seattle basin and is intended to show the general character of the long-period ground shaking expected for a large earthquake on the Seattle fault.  It demonstrates the profound effect the Seattle basin has on ground shaking produced by earthquakes. The relatively unconsolidated material in the basin amplifies the ground shaking and also traps seismic energy to prolong the duration of ground motion.
</p>

<p>
	The simulation is for 38 sec of ground motion. The two views of the ground motions are: 1) a vertical cross section oriented north-south approximately at the longitude of the Kingdome and 2) a map view of the ground surface.
</p>

<h2>1. Vertical cross section</h2>
<p>
  <video width="553" height="447" controls>
    <source src="media/seattleXS.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
	<!--<video src="media/seattleXS.mp4" poster="images/seattleXS.gif" alt="Click to view Seattle cross-section animation" width="553" height="447" controls></video>-->
</p>

<p>
	The top edge is the ground surface and depth is shown on the vertical axis. North is to the left and south to the right. For reference, the Kingdome would be located at the top edge of the picture at approximately 22,000 meters (m) along the horizontal axis of the section. The black curved lines in the cross section represent the configuration of the Seattle basin. The upper curve is the top of the bedrock and the lower curve is the top of the basement rocks at the bottom of the Seattle basin. The Seattle fault is located in the lower right hand portion of the cross section, at about 8-11 km depth. Earthquake rupture starts at the deepest portion of the fault and ruptures upward and northward (to the left), similar to how actual large earthquakes occur.
</p>

<p>
	In the simulation, we first see a large pulse (red) of shear-wave motion (S-wave) travelling upward towards the surface and downtown Seattle. This energy is concentrated in an area that includes downtown Seattle. This strong pulse is caused by the earthquake rupturing northward towards the downtown area and the focusing caused by the rigidity change with depth in the Seattle basin. Some of the S-wave energy is reflected downward by the surface. Following the initial S-wave are several pulses of ground motion which are trapped in the top 2 km or so of the Seattle basin. This is surface wave energy which is trapped by the relatively unconsolidated deposits near the surface. This trapped energy causes the long-period ground motions in Seattle to have a long duration of shaking of up to about 25 sec. The long-period ground motions in the northern part of the area are dominated by these surface waves.
</p>

<h2>2. Map view of Seattle region showing the coastlines</h2>
<p>
  <video width="555" height="450" controls>
    <source src="media/seattlesurf.mp4" type="video/mp4">
  Your browser dose not support the video tag.
  </video>
	<!--<video src="media/seattlesurf.mp4" poster="images/seattlesurf.gif" alt="Click to view Seattle Fault M6.5 animation - map view" width="555" height="450" controls></video>-->
</p>

<p>
	North is to the top of the map. Rectangle at south part of map is the surface projection of the portion of the Seattle fault which ruptures in the simulation. Now the colors are keyed to the intensity and direction of ground motion at the surface. Blue colors represent ground motion to the north and red colors are ground motion to the south. The intensity of the color corresponds to the amount of the ground motion. As the seismic waves propagate to the north in this simulation, the ground in downtown Seattle first moves to the north (blue) and then to the south (red). This is the S-wave from the earthquake. Then we see successive waves of ground motions which begin in the southern part of the Seattle basin and propagate to the north. These waves are the surface waves described in the vertical cross section. This energy is trapped by the unconsolidated material in the shallow part of the Seattle basin. These trapped seismic waves cause the duration of long-period shaking to be about 25 sec.
</p>

<p>
	We have verified some of the results of the simulation using recordings of actual earthquakes in the region, including the magnitude 4.9 Bremerton earthquake of June 1997 and a magnitude 3.5 earthquake that occurred south of Seattle in Feb. 1997. Recordings from these earthquakes show that the Seattle basin does indeed trap seismic energy and produce large surface waves, as seen in the computer simulation.
</p>

<h2>References</h2>
<ul class="referencelist">
	<li>Arthur Frankel and William Stephenson, Bulletin of the Seismological Society of America (2000, v. 90, pp. 1251-1267).</li>
</ul>
