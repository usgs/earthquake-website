<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Earthquake Processes and Effects';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
      include 'template.inc.php';
    }
?>

<h2>Ground Failure</h2>

<figure class='left w300'>
	<img src="images/grdfailure.jpg" alt="">
	<figcaption>
    Damaged house from October 17, 1989 M6.9 Loma Prieta, CA earthquake.
  </figcaption>
</figure>

<p>
	This research focuses on the ability to determine what areas are more prone to experiencing effects such as liquefaction and landslides when there is shaking from an earthquake. Cone penetration testing (CPT) provides much of the data.
</p>

<h3>Cone Penetration Testing (CPT)</h3>

<p>
  Cone Penetration Testing (CPT) is used to identify subsurface conditions in the upper 100 ft of the subsurface. The USGS CPT uses a 23-ton truck to push a “cone” into the ground. The weight of the truck is partially supported by both the tip of the cone and the sleeve of the cone. The “tip resistance” is determined by the force required to push the tip of the cone and the “sleeve friction” is determined by the force required to push the sleeve through the soil. The “friction ratio” is the ratio between sleeve friction and tip resistance, measured as a percentage. Soil type and thereby resistance to liquefaction can be inferred from these measurements.
</p>

<figure class='right'>
  <img src="images/shaking-truck.jpg" alt="photo of truck with sketch of instrument below surface"/>
</figure>

<figure class='right'>
  <img src="images/truckseis.jpg" alt="photo of shaking truck and person"/>
</figure>

<p>
  <a href="/research/cpt/data/">Data from the USGS cone,</a> which includes a seismometer, can also be used to predict how local shallow soil conditions can modify shaking. The capacity of local soil conditions to modify shaking is inversely proportional to the shear-wave velocity near the surface, which can be computed with data recorded with the seismometer. Seismic energy is created manually with a sledgehammer or automatically by a compressed air driven hammer. We measure the time it takes for the seismic energy to travel from the land surface, through the ground, to the seismometer mounted in the cone. The distance to the seismometer divided by the travel time of the shear-wave is approximately the average shear-wave velocity.
</p>
<p>
  Output from the cone as it penetrates the soil is digitally recorded by a computer and is collectively known as a sounding.
</p>

<h3>See also:</h3>
<ul>
  <li>
    <a href="http://geopubs.wr.usgs.gov/fact-sheet/fs028-03/">USGS Factsheet: Subsurface Exploration with the Cone Penetration Testing Truck</a>
  </li>
</ul>
