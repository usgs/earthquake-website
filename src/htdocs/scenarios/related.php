<?php
  // Author: Lisa Wald
  // Contact: David Wald, wald@usgs.gov
  // Last modified:
  if (!isset($TEMPLATE)) {
  $TITLE = 'Related Scenarios and Exercises';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>
<div class="row">
  <div class="column two-of-three">
  	<h2>Scenario Shakemaps</h2>
  	<p>
  		<em>Earthquake Scenarios</em> describe the expected ground motions and
  		effects of specific hypothetical large earthquakes. In planning and
  		coordinating emergency response, utilities, emergency responders, and
  		other agencies are best served by conducting training exercises based on
  		realistic earthquake situations, ones that they are most likely to face.
  		Scenario earthquakes can fill this role; they can be generated for any
  		potential hypothetical future or past historic earthquake.
  	</p>
  	<p>
  		Our <a href="/data/shakemap/">Shakemap page</a> has more information about the process used to create the
  		scenario maps, or you can  view scenario Shakemaps on the <a
  		href="/earthquakes/shakemap/list.php?x=1&amp;s=1">Shakemap archives page</a>.
  		The scenario Shakemaps on the archive page are organized by region and you
  		can click the name of the region at the top of the page to filter your
  		results.
  	</p>

    <h2>Other Scenarios</h2>
    <ul>
      <li><a href="/earthquakes/shakemap/global/shake/casc9.0_expanded_peak_se/">"Cascadia Rising"</a> - M9 on the Cascadia Subduction Zone (2016)</li>
      <li><a href="/earthquakes/shakemap/global/shake/haywiredm7.05_se/">Haywired</a> - M7 on the Hayward Fault (2016)</li>
      <li><a href="/earthquakes/shakemap/sc/shake/ardent_sentry_2015_se/">"Ardent Sentry "Southern California ShakeOut</a> - M7.8 on the Southern San Andreas Fault (2012 update)</li>
      <li><a href="/earthquakes/shakemap/sc/shake/shakeout2_full_se/">Southern California ShakeOut</a> - M7.8 on the Southern San Andreas Fault (2008)</li>
      <li><a href="/earthquakes/shakemap/ut/shake/shakeoutff_se/">Great Utah ShakeOut (2012)</a> - M7 on the Wasatch Fault</li>

      <li><a href="/hazards/urban/ceusmodel.php">Computer Simulation of a Magnitude 7.7 Earthquake in the New Madrid Seismic Zone</a></li>
      <li><a href="/hazards/urban/ceus_nle_2011.php">Central &amp; Eastern US Scenarios for 2011 National Level Exercise</a></li>
      <li><a href="/hazards/urban/sanjose.php">Animation of ground motions recorded by the San Jose Dense Seismic Array from the M5.6 earthquake near Scotty's Junction, NV</a></li>
      <li><a href="/hazards/urban/seattle_simulation.php">Computer Simulation of a Magnitude 6.5 Earthquake on the Seattle Fault</a></li>
      <li><a href="/hazards/urban/nisqually.php">Simulation of the 2001 M6.8 Nisqually, Washington Earthquake</a></li>
      <li><a href="/hazards/urban/westseattle.php">Simulation of Seismic Energy Focussing in West Seattle</a></li>
      <li><a href="/hazards/urban/kingdome.php">Animation of Ground Motions Produced by the Implosion of the Kingdome</a></li>
    </ul>
  </div>
  <div class="column one-of-three">
  	<h2>More Information</h2>
  	<p>
  		Additional deterministic and scenario ground-motion maps will be posted on
  		this page in the near future as they are developed.
  	</p>
  	<a href="/earthquakes/shakemap/list.php?x=1&amp;s=1"><img src="images/intensity.gif" alt="Example Scenario Shakemap"/></a>
  </div>
</div>
