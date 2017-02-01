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
      <img src="../images/Q.gif" alt="childs drawing of the letter Q and a light swinging from a ceiling, table with people under it, and people standing next to a door">
      <p>
        <strong>Q is for QUICK.</strong> If there is an earthquake you should either run to a doorway with no door or run under a table. If there is an aftershock you need to get under your table quickly. <small>- Linda and Esther</small>
      </p>
    </div>
</div>
