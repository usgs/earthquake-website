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
      <img src="../images/N.gif" alt="childs drawing of the letter N and two buildings shaking">
      <p>
        <strong>N is for NOISE.</strong> The buildings fall down and it makes a lot of noise because of the earthquake. <small>- Jeremy</small>
      </p>
    </div>
</div>
