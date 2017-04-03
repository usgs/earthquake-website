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
      <img src="../images/I1.gif" alt="childs drawing of the letter I and a damage freeway">
      <p>
        <strong>I is for INTENSITY.</strong> Earthquake intensity is the measurement of the earthquake and shaking. If you live closer to an epicenter you will get more shaking. <small>- Eder</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/I2.gif" alt="childs drawing of the letter I and a sketch of the Earth with a wedge out and layers labeled">
      <p>
        <strong>I is for INGE.</strong> Inge was a seismologist and what she did was discover the core of the earth. <small>- Sade</small>
      </p>
    </div>
</div>
