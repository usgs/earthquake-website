<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Solving for Rupture Direction and Rupture Velocity';
  $HEAD = '';
  $FOOT = '';

  include 'template.inc.php';
}

?>

<p>We use a simple and robust inversion of peak ground motions to determine rupture direction and rupture velocity for moderate earthquakes (Boatwright, 2007).  Sets of peak ground acceleration (<em>PGA</em>) or peak ground velocity (<em>PGV</em>) are obtained from the <a href="/earthquakes/shakemap/list.php?x=1&n=nc">Northern California ShakeMap</a> database.  These data (writing <em>PG</em> for either <em>PGA</em> or <em>PGV</em>) are corrected
<span class="formula">
  ln &Delta;<em>PG<sub>i</sub></em> = ln <em>PG<sub>i</sub></em> &ndash; ln <em>s<sub>i</sub></em> + <em>&gamma;</em> ln <em>r<sub>i</sub></em> + <em>&eta;r<sub>i</sub></em>
</span>
for the site amplification at station <em>i</em> using standard station corrections, and for source-receiver distance <em>r<sub>i</sub></em> where <em>&gamma;</em> = 1.5 or 1.0 for moderate or large earthquakes, respectively, and <em>&eta;</em> &asymp; 0.004 km<sup>-1</sup>. We fit these residual peak motions &Delta;<em>PG</em> with the directivity function for a unilateral line source,
<span class="formula">
  <em>D</em> = [1- (<em>&nu;</em> / <em>&beta;</em>) cos &theta;<sub>ri</sub>]<sup>-1</sup>
</span>
where <em>&nu;</em> is the rupture velocity and &theta;<sub>ri</sub> is the angle between the rupture direction and the takeoff angle of the S-wave to station <em>i</em>.  We limit the rupture velocity to be less than the Rayleigh-wave velocity, <em>&nu;</em> &le; 0.9<em>2&beta;</em>, to stabilize the inversion when the direction of rupture is poorly sampled: limited rupture velocities (<em>&nu;</em> = 0.92<em>&beta;</em>) are poorly constrained if no peak motions are obtained near the rupture direction.</p>
<ul class="referencelist">
  <li>Boatwright, J., (2007). The persistence of directivity in small earthquakes, <em>Bull. Seism. Soc. Am.</em>, <strong>97</strong>, in press.</li>
</ul>
<p>&laquo; <a href="./">Back</a></p>
