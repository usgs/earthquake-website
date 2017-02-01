<?php
// Author: Lisa Wald
// Contact: Lucy Jones
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake ABC - Children&apos;s Book';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="styles.css"/>';
    include 'template.inc.php';
  }
?>

<div class='row'>
    <div class='column one-of-five'>
      <?php
      include 'jumpmenu.inc.php';
      ?>
    </div>

    <div class='column four-of-five'>
      <img src="../images/F.gif" alt="childs drawing of the letter F and a building burning with a firetruck on the way">
      <p>
        <strong>F is for FIRE.</strong>When the earthquakes happen in many places, it starts a fire. It could start by pipes. <strong>F is for FORESHOCK.</strong> Foreshocks are little earthquakes that come before a big earthquake comes. That's why they put fire engines outside! <small>- Linda and Jonathan</small>
      </p>
    </div>
</div>
