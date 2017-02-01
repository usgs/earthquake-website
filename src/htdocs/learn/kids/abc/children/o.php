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
      <img src="../images/O.gif" alt="childs drawing of the letter O and an innertube and the ocean surface below">
      <p>
        <strong>O is for OCEAN.</strong> Sometimes earthquakes occur beneath the ocean. <small>- Linda</small>
      </p>
    </div>
</div>
