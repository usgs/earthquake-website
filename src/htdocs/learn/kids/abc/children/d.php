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
      <img src="../images/D1.gif" alt="childs drawing of the letter D and damaged roads and buildings">
      <p>
        <strong>D is for DAMAGE.</strong>That's after a big earthquake or a volcano eruption. Like broken windows, a tipped building. <small>- Eder</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/D2.gif" alt="childs drawing of the letter D and someone under a table">
      <p>
        <strong>D is for DROP.</strong> We have to drop on the ground when we have the drop drill. If you don't drop, you won't be covered. <small>- Shamarr</small>
      </p>
    </div>
</div>
