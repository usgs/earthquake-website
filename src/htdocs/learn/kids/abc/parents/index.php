<?php
// Author: Lisa Wald
// Contact: Lucy Jones
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake ABC - Childrens Book';
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
      <p><img src='/learn/kids/abc/images/eqbanner.gif' alt='Earthquake'/></p>
      <p><img src='/learn/kids/abc/images/abcanim.gif' alt='ABC'/></p>
      <p><img src='/learn/kids/abc/images/trace.gif' alt='seismogram'/></p>

      <h2>A Child's View of Earthquake Facts and Feelings<sup>&copy;</sup></h2>
      <h3>With a Parent's Guide to Earthquakes by Dr. Lucy Jones, USGS</h3>

      <p><img src='/learn/kids/abc/images/table.gif' alt='child under table'/></p>

      <p>&copy;Copyright Paula Rao and Sirius Productions, 1994.</p>

    </div>
</div>
