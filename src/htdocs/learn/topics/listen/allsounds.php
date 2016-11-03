<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	11/2/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Listen for Fun';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>
	<img src="images/soundmap.gif">Location Map</a>
</p>
<ul class="imagelist">
 <li class="first">
   <h3>The 1992 Magnitude 7.3 Landers Earthquake</h3>
   <p>
     Recorded at Long Valley Caldera
   </p>
   <audio controls>
     <source src="wavs/MTCM.wav" type="audio/wav">
   Your browser does not support the audio element.
   </audio>
   <p>
     Recorded at Parkfield
   </p>
   <audio controls>
     <source src="wavs/PMMM.wav" type="audio/wav">
   Your browser does not support the audio element.
   </audio>
 </li>
 <li>
    <h3>1992 Petrolia (near Eureka) Earthquakes Recorded at Berkeley</h3>
    <p>
      Magnitude 6.5
    </p>
    <audio controls>
      <source src="wavs/petrolia1a.wav" type="audio/wav">
    Your browser does not support the audio element.
    </audio>
    <p>
      Magnitude 6.3
    </p>
    <audio controls>
      <source src="wavs/petrolia2a.wav" type="audio/wav">
    Your browser does not support the audio element.
    </audio>
 </li>
 <li>
    <h3>1994 Magnitude 5 Parkfield Earthquake</h3>
    <p>
      Recorded at Parkfield
    </p>
    <audio controls>
      <source src="wavs/sao.wav" type="audio/wav">
    Your browser does not support the audio element.
    </audio>
    <p>
      Recorded at Hollister
    </p>
    <audio controls>
      <source src="wavs/pkd1.wav" type="audio/wav">
    Your browser does not support the audio element.
    </audio>
 </li>
 <li>
    <h3>Magnitude 2 Parkfield Earthquake</h3>
    <p>
      Recorded on Hard Rock
    </p>
    <audio controls>
      <source src="wavs/pst.wav" type="audio/wav">
    Your browser does not support the audio element.
    </audio>
    <p>
      Recorded on Chewed Up Fault Zone Rocks Two
    </p>
    <audio controls>
      <source src="wavs/pmm.wav" type="audio/wav">
    Your browser does not support the audio element.
    </audio>
 </li>
</ul>
