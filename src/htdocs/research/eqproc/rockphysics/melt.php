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

<h2>Surface Melt Produced on Faults During Laboratory Stick-Slip Experiments</h2>

<figure class='right'>
	<img src="images/Shearing1.jpg" alt="photo of Cylindrical samples containing a diagonal sawcut"/>
</figure>

<p>
  Much recent interest is focused on determining the frictional properties of rock at coseismic slip speeds.  In these new studies, high transient surface temperatures developed in rock-shearing experiments that resulted in surface melt on bare surfaces of granite.
</p>

<p>
  Cylindrical samples containing a diagonal sawcut (simulated fault) were placed inside a pressure vessel at up to 400 MPa (58,000 psi) confining pressure. Steady axial loading of the rock sample caused ‘stick-slip’ behavior on the fault - the laboratory equivalent of earthquakes. That is, as the load on the sample increased, the two surfaces remained locked together by the confining pressure until the shear strength of the fault was exceeded. At this point, the fault slipped violently, releasing energy stored in the rock and steel driving piston. The sudden slip lasted for only 100 to 500 microseconds, and resulted in intense frictional heating that melted the fault surface. Multiple stick-slip events show evidence of re-working of the glassy material.
</p>
<p>
  Experiments conducted under a range of pressures showed that at room temperature, dynamic heating during stick-slip will produce surface melting in granite at confining pressures above about 200 MPa (29,000 psi).  In contrast, repeated stick-slip cycles at lower confining pressures produced fine-grained fault gouge but showed no evidence of surface melting.  This type of experiments helps us understand and model the dynamic rupture process.
</p>

<div class='row'>
  <div class='column one-of-two'>
    <figure>
    	<img src="images/Shearing2.jpg" alt="Photo of granite surface before"/>
    	<figcaption>
        Before: Granite surface roughened with 600 grit abrasive. Image is about 60 microns across.
      </figcaption>
    </figure>
  </div>
  <div class='column one-of-two'>
    <figure>
    	<img src="images/Shearing3.jpg" alt="Photo of granite surface after"/>
    	<figcaption>
        After: SEM image of glassy melt structures on a granite fault surface after stick-slip at 400 MPa confining pressure.
      </figcaption>
    </figure>
  </div>
</div>
