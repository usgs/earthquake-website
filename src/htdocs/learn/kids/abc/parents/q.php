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
    <img class='dropcap' src="../images/iq.gif" alt="childs drawing of the letter Q">
    <h2>uickly</h2>
    <br style="clear:left;"/>
    <p>
      When an earthquake begins, we must move quickly to a safe position, but not too quickly.  Moving too fast can lead to injury, even in the drills (see <a href="p.php">Panic</A>).
    </p>
  </div>
</div>
