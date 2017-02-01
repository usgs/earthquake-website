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
      <img src="../images/L1.gif" alt="childs drawing of the letter L and a house with a desk in the room with peole under it">
      <p>
        <strong>L is for LIFE.</strong> If there is an earthquake and it is shaking, you need to get under the desk. You don't need to stay in your room. This saves your life. <small>- Carmela</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/L2.gif" alt="childs drawing of the letter L and a volcano">
      <p>
        <strong>L is for LAVA.</strong> Lava is boiling hot liquid that comes out of a volcano, and a volcano sometimes causes an earthquake. <small>- Tishwana</small>
      </p>
    </div>
</div>
