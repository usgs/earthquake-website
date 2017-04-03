<?php
      //	Author:	Tiffany Kalin
      //	Contact: Andy Michael
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Earthquake Fault Length Effects';
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

<img class="right" src="images/fault-length.gif" alt="map showing a long fault and a short fault"></a>

<p>
	Earthquakes come in many different sizes which you generally
  hear described by their magnitude. The magnitude measures
  how much the ground shakes. There are other ways to measure
  the size of an earthquake, for instance we can measure how
  long the fault was that slipped during the earthquake.
</p>
<p> In a band both trumpets and tubas can play at the same volumes
  or magnitude, but the smaller trumpet plays higher notes.
  For the same magnitude, a short fault will produce more high
  frequencies than a longer fault.
</p>
<p> Below are two seismograms, or records of ground shaking,
  that you can listen to. They are from two different earthquakes
  that occurred near each other. Both earthquakes were recorded
  on the same seismometer and had nearly equal magnitudes, but
  they sound different. Click the sideways triangle (or play
  button) to hear the sound.
</p>

<h3>Earthquake One</h3>
<p>
	<audio controls>
		<source src="mp4s/petrolia1a.mp4" type="audio/mp4"/>
	Your browser does not support the audio element.
	</audio>
</p>
<h3>Earthquake Two</h3>
<p>
	<audio controls>
		<source src="mp4s/petrolia2a.mp4" type="audio/mp4"/>
	Your browser does not support the audio element.
	</audio>
</p>
<div>
  <p>
    Which earthquake had the shorter fault:
  </p>
  <button class="p1" value="Earthquake One" onMouseOver="p1()">Earthquake One</button>
  or
  <button class="p2" value="Earthquake Two" onMouseOver="p2()">Earthquake Two</button>
  ?
</div>
