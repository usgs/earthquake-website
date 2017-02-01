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
      <img src="../images/H1.gif" alt="childs drawing of the letter H and people going down a staircase yelling help!">
      <p>
        <strong>H is for HELP.</strong> You should help people when earthquakes happen so they will  not get hurt. You should keep bandagges iin your closet or room. You should keep bandages in every room. <small>- Laura</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/H2.gif" alt="childs drawing of the letter H and a car and two people, one lying on the ground">
      <p>
        <strong>H is for HEART ATTACK.</strong> Some people get a heart attack when there is an earthquake because they are so frightened. If poeple are prepared, they know what to do, and they can usually keep safe. <small>- Tracy</small>
      </p>
    </div>
</div>
