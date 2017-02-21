<?php
      //	Author:	Tiffany Kalin
      //	Contact: Andy Michael
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Listen for Fun';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<div class="row">
  <div class="column one-of-two">
    <ul class="imagelist">
     <li class="first">
       <h3>The 1992 Magnitude 7.3 Landers Earthquake</h3>
       <p>
         Recorded at Long Valley Caldera
       </p>
       <audio controls>
         <source src="mp4s/MTCM.mp4" type="audio/mp4">
       Your browser does not support the audio element.
       </audio>
       <p>
         Recorded at Parkfield
       </p>
       <audio controls>
         <source src="mp4s/PMMM.mp4" type="audio/mp4">
       Your browser does not support the audio element.
       </audio>
     </li>
     <li>
        <h3>1992 Petrolia (near Eureka) Earthquakes Recorded at Berkeley</h3>
        <p>
          Magnitude 6.5
        </p>
        <audio controls>
          <source src="mp4s/petrolia1a.mp4" type="audio/mp4">
        Your browser does not support the audio element.
        </audio>
        <p>
          Magnitude 6.3
        </p>
        <audio controls>
          <source src="mp4s/petrolia2a.mp4" type="audio/mp4">
        Your browser does not support the audio element.
        </audio>
     </li>
     <li>
        <h3>1994 Magnitude 5 Parkfield Earthquake</h3>
        <p>
          Recorded at Parkfield
        </p>
        <audio controls>
          <source src="mp4s/sao.mp4" type="audio/mp4">
        Your browser does not support the audio element.
        </audio>
        <p>
          Recorded at Hollister
        </p>
        <audio controls>
          <source src="mp4s/pkd1.mp4" type="audio/mp4">
        Your browser does not support the audio element.
        </audio>
     </li>
     <li>
        <h3>Magnitude 2 Parkfield Earthquake</h3>
        <p>
          Recorded on Hard Rock
        </p>
        <audio controls>
          <source src="mp4s/pst.mp4" type="audio/mp4">
        Your browser does not support the audio element.
        </audio>
        <p>
          Recorded on Chewed Up Fault Zone Rocks Two
        </p>
        <audio controls>
          <source src="mp4s/pmm.mp4" type="audio/mp4">
        Your browser does not support the audio element.
        </audio>
     </li>
    </ul>
  </div>
  <div class="column one-of-two">
    <h4>Location Map</h4>
    <p>
      <img src="images/soundmap.gif">
    </p>
  </div>
</div>
