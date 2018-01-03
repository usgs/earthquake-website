<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Science for Everyone';
    $HEAD = '<link rel="stylesheet" href="/research/everyone/styles.css"/>';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<h3>2018</h3>
<!-- Featured Items -->
  <?php
  include_once '_features.inc.php';
  echo $EQ_FEATURES->toHtml(-1);
  ?>
