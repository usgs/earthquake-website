<?php

if (!isset($TEMPLATE)) {
  $TITLE = '';
  $HEAD = '
    <script src="js/aframe-v0.5.0.min.js"></script>
    <script src="js/constrained-look-controls.js"></script>
    <link rel="stylesheet" href="style.css" />
  ';
  $FOOT = '';

  include 'template.inc.php';
}

?>

<a-scene embedded>
  <a-assets>
    <img id="shaketable" src="images/shaketable-sphere.jpg">
  </a-assets>
  <a-entity camera constrained-look-controls="limit-down: -26; limit-up: 28;"
     rotation="-10 266.5 0"></a-entity>
  <a-sky src="#shaketable"></a-sky>
</a-scene>
