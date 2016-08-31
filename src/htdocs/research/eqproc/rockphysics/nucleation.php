<?php
// Author: Lisa Wald
// Contact: Nick Beeler
// Last modified: Lisa Wald, 2016/08/10
if (!isset($TEMPLATE)) {
  $TITLE = 'Rock Physics Labs - Current Projects';
  $NAVIGATION = true;
  // Use Earthquake level nav file
  include_once 'functions.inc.php';
  ob_start();
  include '_navigation.current.inc.php';
  $NAVIGATION = ob_get_clean();

  include 'template.inc.php';
}
  ?>

<h2>Earthquake Nucleation Studies Using a Biaxial Earthquake Apparatus</h2>

<figure class='right'>
	<img src="images/biaxial.png" width="384" alt="Schematic of a biaxial earthquake apparatus" />
	<figcaption>
    A schematic of the biaxial earthquake apparatus shows how the forces on the rock (red arrows) applied along the steel frame cause the fault to slip along the diagonal fault.  A typical earthquake signal, showing the vertical vibration of the rock surface, is shown above. Dynamic slip on the fault lasts for only about 5 milliseconds.
  </figcaption>
</figure>

<p>
  A key question in earthquake science is: &ldquo;How do earthquakes begin?&rdquo; Laboratory experiments, theoretical arguments, and numerical models all indicate that earthquakes begin relatively slowly in a process referred to as earthquake nucleation.
</p>

<p>
  We studied the initiation of stick-slip on a simulated fault, which is cut through a large laboratory specimen as an analogue for earthquake nucleation. This research was conducted on a large-scale biaxial earthquake apparatus. This unique facility is the largest of its kind in the world. Made in the 1970s by Jim Dieterich and Quentin Gorton, the apparatus accommodates samples 1.5 m by 1.5 m by 0.4 m in size and can apply over a million pounds of force to a 2 m long fault cut diagonally through the Sierra White granite sample.
</p>

<p>
  Since its construction in the 1970s, the instrumentation on the laboratory sample has been significantly improved, thanks to Brian Kilgore. The 2-meter-long fault is instrumented with arrays of high speed slip sensors and strain gages that are used to measure local fault slip and stress changes at many locations. In this large-scale experiment, one part of the fault may begin to slip while another part remains locked. Recently, Greg McLaskey has installed an array of 15 piezoelectric sensors on the sample. These sensors are the laboratory equivalent of a seismic network and record the ground motions due to seismic waves radiated from the fault when it ruptures in a simulated earthquake. These sensors have also allowed us to detect tiny foreshocks and aftershocks that occur on the fault when it slips slowly during nucleation and afterslip.
</p>

<div class='row'>
  <div class='column one-of-two'>
    <figure>
    	<img src="images/EarthquakeNucleation1.jpg" alt="photo of Greg McLaskey"/>
    	<figcaption>
        Greg McLaskey observes a natural fault surface at Corona Height in San Francisco, California.  In the laboratory, movements on faults such as this are simulated using artificially created faults.
      </figcaption>
    </figure>
  </div>
  <div class='column one-of-two'>
    <figure>
    	<img src="images/EarthquakeNucleation2.jpg" alt="photo of Brian Kilgore"/>
    	<figcaption>
        Brian Kilgore stands next to one of two pieces of Sierra White granite that will be placed in a biaxial compression machine to simulate a natural fault.  Each granite block weighs 2600 pounds, making this one of the largest earthquake machines in the world.
      </figcaption>
    </figure>
  </div>
</div>

<figure>
	<img src="images/EarthquakeNucleation3.jpg" alt="photo of triangular granite blocks"/>
	<figcaption>
    This picture show a pair of triangular granite blocks mounted in the blue steel loading frame. The highly instrumented fault runs diagonally from the lower left to the upper right. Earthquakes as large as magnitude -2 are generated on this fault. Equivalent sized earthquakes have been recorded by sensitive seismic networks on, for example, the San Andreas Fault, and in deep South African mines. (They would be too small to feel on the earth&rsquo;s surface.) The laboratory earthquakes occur quickly, lasting only a few milliseconds. Recording the dynamic sliding and stress changes produced during these fast events requires sampling rates of 10,000 to 1,000,000 samples per second.
  </figcaption>
</figure>
