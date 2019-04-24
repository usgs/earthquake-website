<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Science for Everyone';
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();
    $HEAD = '<link rel="stylesheet" href="/research/everyone/styles.css"/>';
    include 'template.inc.php';
  }
?>

<!--  Feeds are added to Highlights Feeds for now 12/2017

<a href="atom.php"><img style="padding-right:16px;" src="/images-home/rssfeed.gif" alt="ATOM feed">Subscribe to Science for Everyone</a>

-->

<h3>2019</h3>
<!-- Featured Items -->
  <?php
  include_once '2019/_features.inc.php';
  echo $EQ_FEATURES->toHtml(-1);
  ?>

<h3>Science for Everyone Archives</h3>

<ul>
  <li><a href="2018/">2018</a></li>
  <li><a href="2017/">2017</a></li>
  <li><a href="2016/">2016</a></li>
  <li><a href="2015/">2015</a></li>
</ul>
