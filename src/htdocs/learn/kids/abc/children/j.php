<?php
// Author: Lisa Wald
// Contact: Lucy Jones
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake ABC - Children&apos;s Book';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="../styles.css"/>';
    include 'template.inc.php';
  }
?>

<div class='row'>
    <div class='column one-of-five'>
      <?php
      include '../jumpmenu.inc.php';
      ?>
    </div>

    <div class='column four-of-five'>
      <img src="../images/J1.gif" alt="childs drawing of the letter J and a house with scribbly lines inside">
      <p>
        <strong>J is for JOLTING.</strong> There was a big jolting in my apartment.  Everything fell off of the shelves. <small>- Jeremy</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/J2.gif" alt="childs drawing of the letter J and three tables with a bowl on top of each">
      <p>
        <strong>J is for JELLO.</strong> Jello was used by Lucy Jones to show how the earth shakes during an earthquake. <small>- Tracy</small>
      </p>
    </div>
</div>
