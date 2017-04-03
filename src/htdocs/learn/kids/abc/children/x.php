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
      <img src="../images/X.gif" alt="childs drawing of the letter X and a slanting building with x-shaped cracks">
      <p>
        <strong>X is for X-SHAPED CRACKS.</strong> When it is an earthquake and a building has x-shaped cracks in the wall, that means that in the next earthquake, it is about to fall. <small>- Trina</small>
      </p>
    </div>
</div>
