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
  The seismometer you picked was in the fault zone. The fault zone doesn't transmit
  energy as well as solid rock so the one you picked had a lower pitch.
</p>
<p>
  Try listening to them again.
</p>

<!-- Go back to previous page -->
<p>
  <a class='prev' href="../rocktype.php">
    <span class='material-icons prev'>&#xe5c4;</span>
    <strong>GO BACK</strong>
  </a>
</p>
