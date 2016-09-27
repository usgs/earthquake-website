<?php
// Author: Scott Haefner
// Contact: Alan Yong
// Last modified: 8/29/2016, Scott Haefner
if (!isset($TEMPLATE)) {
  $TITLE = 'Data and Products';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/> 
    <link rel="stylesheet" href="style.css"/>
  ';
  $FOOT = '
    <script src="/lib/leaflet-0.7.7/leaflet.js"></script>
    <script src="script.js"></script>
    <script src="vs30.json.php?callback=VS30.storepoints"></script>
  ';
  include 'template.inc.php';

  include_once 'colorScale.inc.php';

  $colors = '';
  $previous = '';
  foreach ($scale as $key => $color) {

    $description = "$previous&ndash;$key"; // middle values (default)
    if (gettype($key) == 'string') {
      if ($previous) {
        $description = "&gt; $previous"; // last value
      } else {
        $description = "$key"; // first value
      }
    } else if (gettype($previous) == 'string') {
      $description = "&lt; $key"; // 2nd value
    }

    $circle = sprintf ('<circle cx="9" cy="9" r="8" stroke="%s" stroke-width="1" fill="%s"></circle>', $color, $color);
    $colors .= sprintf ("<li><svg>%s</svg><span>%s</span></li>", $circle, $description);
    $previous = $key;
  }
}
?>

<h2>
  A Compilation of <i>V</i><sub><i>S</i>30</sub> Values in the United States
</h2>

<p>
  <i>V</i><sub><i>S</i>30</sub>, the time-averaged shear-wave velocity
  (<i>V<sub>S</sub></i>) in the upper 30 meters, is a key index adopted by
  the earthquake engineering community to account for seismic site conditions.
  USGS has compiled measured <i>V</i><sub><i>S</i>30</sub> funded by the USGS
  and other governmental agencies for <span class="number">approximately
  3000</span> sites in the United States.
</p>

<div id="map"></div>

<h2><i>V</i><sub><i>S</i>30</sub> Ranges (m/s)</h2>
<ul class="scale">
  <?php print ''; /*$colors*/; ?>
</ul>

<h2>Download <i>V</i><sub><i>S</i>30</sub> Data (.csv format)</h2>
<ul class="downloads">
  <li><a href="README.txt">README.txt</a></li>
  <li><a href="./vs30.csv.php" download>All data points</a></li>
</ul>

<h2>Suggested Citation</h2>
<ul class="referencelist">
  <li>
    Yong, A., Thompson, E.M., Wald, D., Knudsen, K.L., Odum, J.K.,
    Stephenson, W.J., and Haefner, S., 2015, Compilation of
    <i>V</i><sub><i>S</i>30</sub> Data for the United States: U.S.
    Geological Survey Data Series 978, 8 p., <a href="http://dx.doi.org/10.3133/ds978">http://dx.doi.org/10.3133/ds978</a>.
  </li>
</ul>
