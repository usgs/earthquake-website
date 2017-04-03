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
      <img src="../images/U.gif" alt="childs drawing of the letter U and two boulders next to each other">
      <p>
        <strong>U is for UPLIFT.</strong> Some of the rocks push in to each other when there is an earthquake. <small>- Linda</small>
      </p>
    </div>
</div>
