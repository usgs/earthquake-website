<?php
      //	Author:	Tiffany Kalin
      //	Contact: Andy Michael
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Rock Type Effects';
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

<img class="right" src="images/rock-type.gif" alt="cartoon showing an earthquake with soft sand in one direction and hard rock in the other"></a>

<p>
	If you haven't done the <a href="distance.php">Distance
  Effects </a> topic yet, you should do that one first.
</p>
<p>
	When learning about how distance affects shaking we learned
  that the waves lose energy as they travel. How fast they lose
  energy depends on the type of rock they are traveling through.
  For instance, very solid granites will transmit energy better
  than the chewed up rocks we find in fault zones. It's almost
  like the waves traveling through the chewed up rocks are traveling
  further and so they lose more energy and especially more of
  the high frequencies.
</p>
<p>
	Below are two seismograms, or records of ground shaking,
  you can listen to. They come from the same earthquake but
  were recorded on two different seismometers. Both seismometers
  were about 5 miles from the earthquake, but one is on very
  solid rock while the other is in the fault zone. That's why
  they have different pitches. The volume has been adjusted
  to the same level so concentrate on the pitch to tell the
  difference. Click the sideways triangle (or play button) to
  hear the sound.
</p>
<h3>Seismometer One</h3>
<p>
	<audio controls>
		<source src="mp4s/pst.mp4" type="audio/mp4"/>
	Your browser does not support the audio element.
	</audio>
</p>
<h3>Seismometer Two</h3>
<p>
	<audio controls>
		<source src="mp4s/pmm.mp4" type="audio/mp4"/>
	Your browser does not support the audio element.
	</audio>
</p>
<div>
  <p>
  	Which seismometer was on the solid rock:
  </p>
  <button class="pst" value ="Seiso One" onMouseOver="pst()"> Seisometer One</button>
  or
  <button class="pmm" value="Seiso Two" onMouseOver="pmm()">Seisometer Two</button>
  ?
</div>
