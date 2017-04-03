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
      <img src="../images/T1.gif" alt="childs drawing of the letter T and tools next to a gas tank, also someone sleeping on a bed">
      <p>
        <strong>T is for TOOLS.</strong> Tools are used to turn off gas in earthquakes and other things. <strong>T is for TIME.</strong> An earthquake sometimes happens early in the morning. <small>- Beth</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/T2.gif" alt="childs drawing of the letter T and mountains with an arrow pointing to one part">
      <p>
        <strong>T is for THRUST.</strong> Thrust is a type of fault that pushes mountains above ground. <small>- Monique</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/T3.gif" alt="childs drawing of the letter R and two damaged building and people running">
      <p>
        <strong>T is for TSUNAMI.</strong> A tsunami is a big wave that can knock your house down and can kill you. It is caused by earthquakes under the ocean. Once in Chile there was an earthquake that traveled to Japan and kill lots of people. <small>- Beth</small>
      </p>
    </div>
</div>
