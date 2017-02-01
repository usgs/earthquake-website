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
      <img src="../images/B.gif" alt="childs drawing of the letter B and a house">
      <p>
        <strong>B is for BOLT.</strong> Bolt your house to the ground, or it will be more likely to break in an earthquake. <small>- Sven </small>
      </p>
    </div>
</div>
