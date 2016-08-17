<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Rock Physics Labs - Current Projects';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="../index.css"/>
      ';
      // Use Earthquake level nav file
        include_once 'functions.inc.php';
        ob_start();
        include '_navigation.current.inc.php';
        $NAVIGATION = ob_get_clean();

        include 'template.inc.php';
    }
    ?>

<h2>Mineralogy of Creeping Faults in the San Andreas System</h2>

<p>
  <a href="safod.php">The San Andreas Fault Observatory at Depth</a> (SAFOD) is a deep fault zone drilling program sited in the central creeping section of the San Andreas Fault near Parkfield, California. Core was recovered from two locations at ~2.7 km depth where the fault is known to be creeping. The two creeping strands of the fault are narrow zones filled with fault gouge that are the products of chemical reactions between serpentinite (the state rock of California) entrained in the fault and minerals in the adjoining sedimentary wall rocks. Both gouge zones consist of serpentinite and sedimentary rock dispersed in a matrix of magnesium-rich clays. Some serpentinite also contain assemblages of higher-temperature minerals such as talc, chlorite, and garnet, raising the possibility that the serpentinite and its alteration products may extend to significantly greater depths in the fault.
</p>
<p>
  The mineralogy of the SAFOD core supports the long-held view that serpentinite is associated with fault creep, as does at least one other creeping fault of the San Andreas System: the Bartlett Springs Fault, a right-lateral strike-slip fault located north of San Francisco, California. Its slip rate is estimated to be about 6 mm/yr, and along a segment that crosses Lake Pillsbury, half the surface slip rate is taken up by creep. An exposure of this fault segment consists of sheared serpentinite that has risen buoyantly through fluvial deposits and extruded onto the surface. Lighter-colored portions of the sheared body are dominated by antigorite serpentinite. Textures and mineral assemblages of the clay-rich gouge in this exposure of the Bartlett Springs fault are very similar to those observed in samples from the deforming zones at SAFOD, suggesting that here too, creep is associated with the presence of serpentine.
</p>

<div class='row'>
  <div class='column one-of-two'>
    <figure>
    	<img src="images/CreepingFaults1.jpg" alt="photo of Bartlett Springs fault"/>
    	<figcaption>
        The Bartlett Springs fault in Northern California.
      </figcaption>
    </figure>
  </div>
  <div class='column one-of-two'>
    <figure>
    	<img src="images/CreepingFaults2.jpg" alt="photo of Serpentine"/>
    	<figcaption>
        Serpentine in the Bartlett Springs fault. The contact with the brown gravel deposits is at left.
      </figcaption>
    </figure>
  </div>
</div>
