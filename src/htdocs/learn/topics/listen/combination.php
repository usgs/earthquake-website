<?php
      //	Author:	Tiffany Kalin
      //	Contact: Andy Michael
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Listening to Multiple Earthquakes';
      $HEAD = '
        <link rel="stylesheet" href="/lib/hazdev-webutils-0.1.8/hazdev-webutils.css"/>
      ';
      $FOOT = '
        <script src="/lib/hazdev-webutils-0.1.8/hazdev-webutils.js"></script>
        <script src="learnListenModalView.js"></script>
      ';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<div class="row">
  <div class="column one-of-one">
    <p>
    	If you haven't done the <a href="source.php">Fault
      Length Effects</a> and <a href="distance.php">Distance
      Effects</a> topics yet, you should do them first.
    </p>
    <p>
    	After the 1992 Landers earthquake in southern California
      many areas around the western United States experienced increased
      numbers of small earthquakes. Here is a seismogram recorded
      at the Long Valley Caldera, a volcanic center near Mammoth
      Lakes, California, which was one of the areas that had a large
      number of triggered earthquakes.
    </p>
    <p>
    	<img src="images/landersmtcm.gif" alt="Landers seismogram" width="569" height="124"/>
    </p>
    <p>
    	In this seismogram the earliest triggered events we can
      see are several minutes after the shaking from the mainshock
      arrives. But there could be earlier events that we can't see
      because they are covered up by the shaking of the mainshock.
    </p>
    <p>
    	It may be easier to hear the small triggered earthquakes
      than it is to see them. The Landers earthquake is far
      from the seismometer so most of its high frequencies have
      died away before the waves reach the seismometer. But
      the small earthquakes have small fault areas and therefore
      produced high frequency energy and because they are near
      the seismometer this energy has not died away.
    </p>
    <figure class="left">
    	<img src="images/landersgeom.gif" alt="Landers geometry"/>
    </figure>
    <p>
    	Listen to the seismogram recorded at the Long Valley Caldera
      and see if you can hear the small earthquakes (high frequency
      bursts) despite the low rumble of the distant large earthquake.
      Click the sideways triangle (or play button) to hear the sound.
    </p>
    <p>
    	If you are having trouble picking out the small nearby earthquakes,
      listen for the two very close to the end and then listen to
      the seismogram again.
    </p>
    <p>
    	Listen to the seismogram recorded at the Long Valley Caldera
      and see if you can hear the small earthquakes (high frequency
      bursts) despite the low rumble of the distant large earthquake.
      Click the sideways triangle (or play button) to hear the sound.
    </p>
  </div>
</div>

<div class="row">
  <div class="column one-of-two">
    <h3>Long Valley Caldera Seismogram</h3>
    <p>
    	<audio controls>
    		<source src="mp4s/MTCM.mp4" type="audio/mp4"/>
    	Your browser does not support the audio element.
    	</audio>
    </p>
    <p>
    	If you are having trouble picking out the small nearby earthquakes,
      listen for the two very close to the end and then listen to
      the seismogram again.
    </p>

    <hr align=size="1">

    <p>
    	Here are two more seismograms of the Landers earthquake.
      One is recorded at Parkfield near Paso Robles and the other
      is recorded at the Geysers north of San Francisco. Only one
      of these areas had small earthquakes triggered by the Landers
      event. Can you tell which one?
    </p>

    <h3>Parkfield Seismogram</h3>
    <p>
    	<audio controls>
    		<source src="mp4s/PMMM.mp4" type="audio/mp4"/>
    	Your browser does not support the audio element.
    	</audio>
    </p>
    <h3>Geysers Seismogram</h3>
    <p>
    	<audio controls>
    		<source src="mp4s/GGPM.mp4" type="audio/mp4"/>
    	Your browser does not support the audio element.
    	</audio>
    </p>
    <div>
      <p>
      	Which area had small triggered earthquakes:
      </p>
      <button class="parkfield" value="Parkfield" onMouseOver="parkfield()">Parkfield</button>
        or
      <button class="GGPM" value="Geysers" onMouseOver="GGPM()">Geysers</button>
      ?
    </div>
  </div>
  <div class="column one-of-two">
    <p>
      <img src="images/soundmap.gif">
    </p>
  </div>
</div>
