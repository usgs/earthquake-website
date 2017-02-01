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
      <img src="../images/G.gif" alt="childs drawing of the letter G and kid at a computer, and a gas cloud leaking from the surface of the earth">
      <p>
        <strong>G is for GEOLOGY.</strong> Geology is the study of the Earth. It is how we study earthquakes. <strong>G is for GAS.</strong> Sometimes when gas leaks, the earthquake is bad. Gas can kill people. Gas can start fires. <small>- Sven and Porscha</small>
      </p>
    </div>
</div>
