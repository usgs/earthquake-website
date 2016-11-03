<?php
      //  Author:  Tiffany Kalin
      //  Contact:
      //  Last  modified: 11/3/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Sorry';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>
<p>
  The seismometer you picked was 75 miles from the earthquake, but the other seismometer
  was only 6 miles from the earthquake. The closer one should have the higher pitch.
</p>
<p>
  Try listening to them again.
</p>

<!-- Go back to previous page -->
<p>
  <a class='prev' href="../distance.php">
    <span class='material-icons prev'>&#xe5c4;</span>
    <strong>GO BACK</strong>
  </a>
</p>
