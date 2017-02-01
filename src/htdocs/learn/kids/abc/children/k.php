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
      <img src="../images/K.gif" alt="childs drawing of the letter K and a house with a sad face">
      <p>
        <strong>K is for KILL.</strong> Earthquakes kill people by smashing them and scaring them and having heart attacks. <small>- Sven</small>
      </p>
    </div>
</div>
