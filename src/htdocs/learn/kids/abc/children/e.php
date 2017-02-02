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
      <img src="../images/E1.gif" alt="childs drawing of the letter E and the western US with concentric circles on California">
      <p>
        <strong>E is for EPICENTER.</strong>Every earthquake has an epicenter. An epicenter is the center of an earthquake and sends vibrations many ways and travels as far as the magnitude. <small>- Eder</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/E2.gif" alt="childs drawing of the letter E and electrical charges emanating from a electrical pole and lines">
      <p>
        <strong>E is for ELECTRICITY.</strong> When there is an earthquake and the electricity is still on, you should turn it off. <small>- Vincent</small>
      </p>
    </div>
</div>
