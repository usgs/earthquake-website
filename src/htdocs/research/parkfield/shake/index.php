<?php

if (!isset($TEMPLATE)) {
  $TITLE = '';
  $HEAD = '<script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>';
  $FOOT = '<link rel="stylesheet" href="style.css" />';

  include 'template.inc.php';
}

?>

<a-scene embedded>
  <a-entity>
    <a-sky src="images/shaketable-sphere.jpg" theta-start="40"></a-sky>
  </a-entity>
</a-scene>
