<?php

$mov = $_GET['mov'];
$set = $_GET['set'];

$mov_path = "/regional/nca/simulations/$set/movies/$mov.mov";

// Animation dimensions
$dimensions = array (
  array("width" => 640,  "height" => 360),  //low-res
  array("width" => 960,  "height" => 540),  //high-res
  array("width" => 1920, "height" => 1080)  //HD
);

// Figure out which resolution is requested
if (preg_match("/_lowres$/", $mov)) {
  $row = 0;
} elseif (preg_match("/_hd$/", $mov)) {
  $row = 2;
} else {
  $row = 1;
}

$width  = $dimensions[$row]['width'];
$height = $dimensions[$row]['height'] + 15;
$movie = sprintf('<embed src="%s" width="%d" height="%d" style="display: block; width: %dpx; margin: 12px auto 0 auto;"></embed><noembed>This animation requires the free <a href="http://apple.com/quicktime/">Quicktime Player</a>.</noembed>', $mov_path, $width, $height, $width);

?>

<div id="animation">
  <?php print $movie; ?>
  <p><a href="<?php print $mov_path; ?>">Download movie</a></p>
</div>
