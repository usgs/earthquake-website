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
      <img src="../images/A1.gif" alt="childs drawing of the letter A and a person under a table">
      <p>
        <strong>A is for AFTERSHOCK.</strong> An aftershock is like an earthquake except it stays little. An aftershock could kill people. But the people that know what to do don't get hurt. <small>- Alvin</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/A2.gif" alt="childs drawing of the letter A and two desks with two kids under them">
      <p>
        <strong>A is for AFRAID.</strong> After an earthquake, some people are afraid. <small>- Donniece</small>
      </p>
    </div>
</div>
