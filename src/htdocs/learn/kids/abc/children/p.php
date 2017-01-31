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
      <img src="../images/P1.gif" alt="childs drawing of the letter P and a sketch of the earth with layers and a wiggly line crossing it">
      <p>
        <strong>P is for P-WAVES.</strong> P-waves are the only waves that can go through the core. <small>- Sven</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/P2.gif" alt="childs drawing of the letter P and a house with furniture, a person, and a cat">
      <p>
        <strong>P is for PANIC.</strong> If you panic in an earthquake, something bad will happen to you. <small>- Sade</small>
      </p>
      <br style="clear:left;"/>
      <img src="../images/P3.gif" alt="childs drawing of the letter P and a house with furniture, a person, and a cat">
      <p>
        <strong>P is for PREPARED.</strong> If you be prepared, you wouldn't be so scared. <strong>P is for PLASTIC BAGS.</strong> In earthquakes, houses can fall and if you can't fo in your house to get food, what would you do? You should have plastic bags with plastic spoons and cans of fruit. <small>- Sade and Esther</small>
      </p>
    </div>
</div>
