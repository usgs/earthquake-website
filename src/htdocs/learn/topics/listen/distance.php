<?php
      //	Author:	Tiffany Kalin
      //	Contact: Andy Michael
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Earthquake Distance Effects';
      $HEAD = '
        <link rel="stylesheet" href="/lib/hazdev-webutils-0.1.8/hazdev-webutils.css"/>
        <link rel="stylesheet" href="styles.css"/>
      ';
      $FOOT = '
        <script src="/lib/hazdev-webutils-0.1.8/hazdev-webutils.js"></script>
        <script src="learnListenModalView.js"></script>
      ';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<img class="right" src="images/EQdist.gif" alt="cartoon showing a seismic station near an earthquake and another far away"></a>

<p>
	As sound travels through the air or earthquake shaking travels
	through the ground, the waves lose energy. And so a band sounds
	louder close to the stage than further back and an earthquake
	feels stronger close to the fault than further away.
</p>
<p>
	But there is another effect that changes the frequencies
  we hear and feel. High frequency waves lose energy more quickly
  than low frequency waves. So, the further you are from a band
  the more the bass sounds dominate what you hear. And the further
  you are from an earthquake the more the low frequency shaking
  dominates what you feel.
</p>
<p>
	Below are two seismograms, or records of ground shaking,
  you can listen to. They come from the same earthquake but
  were recorded on two different seismometers at different distances
  from the earthquake. That's why they have different pitches.
  The volume has been adjusted to the same level so concentrate
  on the pitch to tell the difference. Click the sideways triangle
  (or play button) to hear the sound.
</p>

<h3>Seismometer One</h3>
<p>
	<audio controls>
		<source src="mp4s/sao.mp4" type="audio/mp4"/>
	Your browser does not support the audio element.
	</audio>
</p>
<h3>Seismometer Two</h3>
<p>
	<audio controls>
		<source src="mp4s/pkd1.mp4" type="audio/mp4"/>
	Your browser does not support the audio element.
	</audio>
</p>
<div>
  <p>
  	Which seismometer was closer to the earthquake:
  </p>
  <button class="sao" value="Seiso One" onMouseOver="sao()"> Seisometer One</button>
  or
  <button class="pkd1" value="Seiso Two" onMouseOver="pkd1()">Seisometer Two</button>
  ?
</div>
