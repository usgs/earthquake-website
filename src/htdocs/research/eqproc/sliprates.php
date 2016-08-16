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

<h2>Fault Slip Rates</h2>

<figure class='left w300'>
	<img src="images/gpssites.jpg" alt=""/>
	<figcaption>
    The USGS has been monitoring the Bartlett Springs fault and Maacama fault with continuous and campaign GPS instruments since 2006. GPS and alinement arrays around these faults are designed to capture long-term movements as well as shallow creep rates.
  </figcaption>
</figure>

<p>
  Earth&rsquo;s crust typically moves a few millimeters to centimeters per year. In an actively deforming continental region, the crust often behaves like a set of nearly-rigid blocks separated by faults. The velocity within a block is nearly constant, but the velocity may differ substantially from one block to an adjacent one. Whether the transition in velocity across a bounding fault is abrupt or gradual depends on whether the fault is creeping (abrupt transition) or locked (gradual transition). The distinction is important because a gradual transition implies not only that the fault is locked but that it is accumulating stress that will eventually lead to earthquakes.
</p>

<p>
  An example is the horizontal crustal deformation field in the northern San Francisco Bay area. The crust is approximated as three blocks, their boundaries lying along the right-lateral strike-slip San Andreas fault, Macaama fault, and Bartlett Springs fault. Motions across the San Andreas fault, southern Macaama fault, and southern Bartlett Springs fault are gradual, but those across the northern Macaama fault and northern Bartlett Springs fault are abrupt in several areas, implying some degree of fault creep.
</p>

<p>
  A recent study by Murray, Minson, and Svarc employs use a Bayesian technique to interpret the GPS crustal velocity field to estimate deep slip rates and shallow surface creep. Their model indicates a deep slip rate of 20 mm/yr for the San Andreas fault, a deep slip rate of 13 mm/yr and shallow creep rate of 0 to 13 mm/yr on the Maacama fault, and a deep slip rate of 7 mm/yr and shallow creep rate of 0 to 7 mm/yr along the Bartlett Springs fault.
</p>

<br style="clear:left;"/>

<div class="row">
  <div class="column one-of-two">
    <figure>
    	<img src="images/velocity-field.png" alt=""/>
    	<figcaption>
        Horizontal velocity field in the northern San Francisco Bay area as measured by a combination of continuous (CGPS) and survey-mode (SGPS) GPS.
      </figcaption>
    </figure>
  </div>
  <div class="column one-of-two">
    <figure>
    	<img src="images/sliprates.jpg" alt=""/>
    	<figcaption>
        Shallow and deep fault slip rates inferred for the San Andreas fault, Macaama fault, and Bartlett Springs fault. Only the deep slip rate is shown for the SAF. The long-term slip rate of each fault is ideally its deep slip rate; the shallow portion of each faults catches up to the (generally higher) velocity of the deeper portion episodically, i.e. during earthquakes.  The higher the shallow slip rate, the more the fault is creeping, hence the lower the expected size of earthquakes.
      </figcaption>
    </figure>
  </div>
</div>

<h3>Reference</h3>

<ul class="referencelist">
	<li>
    Murray, J.R., Minson, S., and Svarc, J., Slip rates and spatially variable creep on faults of the northern San Andreas system inferred through Baysian inversion, J. Geophys. Res., submitted. (2014).
  </li>
</ul>
