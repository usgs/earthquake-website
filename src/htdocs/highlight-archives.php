<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake Hazards Program Highlights - Archives';
    $HEAD = '<link rel="stylesheet" href="highlight-archives.css"/>';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<?php
include_once '_features.inc.php';
echo $EQ_FEATURES->toHtml(-1);
?>
