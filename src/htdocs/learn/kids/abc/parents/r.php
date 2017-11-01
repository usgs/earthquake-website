<?php
// Author: Lisa Wald
// Contact: Lucy Jones
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake ABC - Parent&apos;s Guide';
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
    <img class='dropcap' src="../images/ir.gif" alt="childs drawing of the letter R">
    <h2>ichter Scale</h2>
    <br style="clear:left;"/>
    <p>
      The Richter scale is an idea, like the Fahrenheit scale, not an instrument. The term is sometimes used to describe the local magnitude scale, the first magnitude scale defined by Charles Richter, and sometimes used to mean any magnitude scale (see <a href="m.php">Magnitude</a>.)
    </p>
  </div>
</div>
