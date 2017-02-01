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
      <img src="../images/V1.gif" alt="childs drawing of the letter V and a sketch of the western US with concentric circles on it">
      <p>
        <strong>V is for VIBRATIONS.</strong> When an earthquake strikes, it sends vibrations that travel as high as the magnitude is. <small>- Eder</small>
      </p>
      <img src="../images/V2.gif" alt="childs drawing of the letter V and a volcanoe spewing materials out the top">
      <p>
        <strong>V is for VOLCANOES.</strong> Sometimes volcanoes cause earthquakes. <small>- oj</small>
      </p>

    </div>
</div>
