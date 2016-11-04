<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Great Circle';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<p>
  The shortest path between two points on the surface of a sphere lies along a great circle.  On a 2-dimensional map, this looks like a line, but when it's on a 3-dimensional sphere, it's an arc... part of a circle.
</p>

<video width="800" controls>
  <source src="https://earthquake.usgs.gov/sitedata/learn/animations/greatcircle.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
