<?php
  // Author: Lisa Wald
  // Contact: Justin Rubenstein
  // Last modified: Lisa Wald, 2016/08/22
    if (!isset($TEMPLATE)) {
      $TITLE = 'Induced Earthquakes';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
        include 'template.inc.php';
    }
?>

<figure class='right'>
	<img src="images/effects.jpg" alt="image depicting the effects of injection"/>
	<figcaption>
    Cartoon of the effects of fluid injection and withdrawal can have on nearby faults.
  </figcaption>
</figure>

<h2>Numerical Modeling</h2>

<p>
  The USGS uses computer simulations to evaluate the physical relationships between fluid injection (or extraction) and earthquakes. We can only indirectly study these relationships using observations, so computer simulations help us gain a better physical understanding for the processes that are likely responsible for occurrence of these earthquakes. Scientists can also use these simulations to understand complex patterns in seismicity collected by either <a href="studies.php">temporary or permanent seismic stations</a>.
</p>
<p>
  One Earth process the USGS simulates is how fluids flow from an injection well. Simulating fluid flow allows us to see how the fluid pressure underground changes in response to injection. Fluid pressure increases within faults are believed to be the main cause of induced earthquakes. A simulation of a scenario similar to injection in Oklahoma shows a detectable rise in fluid pressure out to 5 miles away from the well. After ten years that same pore pressure change can be seen at nearly 15 miles. Based on simulations like this, the USGS can evaluate whether pressure changes at a given location such as a known fault would be large enough to cause an earthquake.
</p>
<p>
  The USGS also models many other physical processes to better understand induced earthquakes. These include:  temperature, pressure, and stress changes associated with geothermal energy production; observable surface deformation associated with reservoir compaction around geothermal plants, and injection of liquid carbon dioxide at carbon sequestration plants.
</p>

<figure>
	<img src="images/pp_increase.png" alt="image showing pressure increase"/>
	<figcaption>
    Simulation of fluid pressure increases from injection into a reservoir over time.
  </figcaption>
</figure>
