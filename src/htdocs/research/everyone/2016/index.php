<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Science for Everyone';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="/research/everyone/styles.css"/>';
    include 'template.inc.php';
  }
?>

<h3>2016</h3>
<!-- Featured Items -->
  <?php
  include_once '_features.inc.php';
  echo $EQ_FEATURES->toHtml(-1);
  ?>
