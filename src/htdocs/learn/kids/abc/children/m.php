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
      <img src="../images/M1.gif" alt="childs drawing of the letter L and a house with a desk in the room with peole under it">
      <p>
        <strong>M is for MOUNTAIN.</strong> Mountains are created by earthquakes. Earthquakes make mountains by making the ground go up. <small>- Bryan</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/M2.gif" alt="childs drawing of the letter L and a volcano">
      <p>
        <strong>M is for MAGNITUDE.</strong> Magnitude is the number of the earthquake. <small>- Sade</small>
      </p>
    </div>
</div>
