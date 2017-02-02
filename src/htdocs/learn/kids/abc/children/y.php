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
      <img src="../images/Y.gif" alt="childs drawing of the letter Y and people under tables yelling">
      <p>
        <strong>Y is for YELL.</strong>When somebody is hurt, I yell for help. When I get hurt, my mom yells for help too. And my sister does the same. My dad calls us after everytime it's an earthquake. My grandma does too. <small>- Laura</small>
      </p>
    </div>
</div>
