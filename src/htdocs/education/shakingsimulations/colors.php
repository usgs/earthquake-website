<?php
if (!isset($TEMPLATE)){
  $TITLE='Explanation of Colors';
  $HEAD='';
  $FOOT='';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>
<figure class="left">
    <img src="./images/shakinglegend.png" alt="Shaking color legend" />
  </figure>
          <figcaption> <p>
    The movies color the landscape in each frame according
    to the maximum (peak) intensity of shaking (amplitude of the ground motion) up to that point in time. The color scale is the same as the one
    used in <a href="https://earthquake.usgs.gov/eqcenter/shakemap/">ShakeMap</a>. In order to show the intensity of
    the current shaking, the colors darken as the shaking
    intensifies. At some locations, the most intense
    shaking lasts for several seconds, so the colors will
    darken as seismic waves continue to cause strong
    shaking. The first example shows how the colors change
    as the shaking at a location progresses from no
    shaking through weak, moderate, and strong shaking,
    peaking at a violent shaking level (very dark red),
    before the shaking dies off (red becomes
    brighter). The second example shows the color
    progression for a location that peaks at a strong
    level of shaking.
  </p> </figcaption>

              <h2 style="clear: both;">Shaking Intensity</h2>

          <p>
     <ul>
      <li> MMI II-III (blue)
              <ul>
        <li>weakly felt</li>
        <li>no damage</li>
        <li>usually P wave in large event</li>
              </ul>
            </li>
      <li> MMI VII (orange)
              <ul>
        <li>perception of severe shaking</li>
        <li>potentially moderate damage to modern structures.</li>
        <li>often S wave in large event</li>
              </ul>
            </li>
      <li> MMI X (dark red)
              <ul>
        <li>extreme shaking</li>
        <li>potentially very heavy damage to structures</li>
              </ul>
            </li>
            </ul>
          </p>
