<?php
  // Author: Lisa Wald
  // Contact: Dave Wald, wald@usgs.gov
  // Last modified:
    if (!isset($TEMPLATE)) {
      $TITLE = 'V<sub>s</sub><sup>30</sup> Data';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2></h2>

<p>
  Wald et al. (2004) first, and Wald and Allen (BSSA, 2007, in press), more fully, describe a methodology for deriving maps of seismic site conditions using topographic slope as a proxy. Vs30 measurements (the average shear-velocity down to 30 m) are correlated against topographic slope to develop two sets of coefficients for deriving Vs30: one for active tectonic regions that possess dynamic topographic relief, and one for stable continental regions where changes in topography are more subdued. These coefficients have been applied to continental U.S. by Wald and Allen, and in other regions around the world by Allen and Wald (USGS Open File Report, 2007, in review). They also compared topographic slope-based Vs30 maps to existing site condition maps based on geology and observed Vs30 measurements, where they were available, and found favorable results.
</p>
<p>
  Having a first-order assessment of seismic site conditions anywhere in the world provides a valuable tool in the prediction of ground-motions following a global earthquake, the primary motivation for this research. These Vs30 maps will enable us to better quantify possible ground-shaking and rapidly deliver these predictions to emergency managers and responders. However, the Vs30 maps for the Globe will also have practical applications for numerous related probabilistic- and scenario-based studies, hence this Web delivery service allows users to download maps and grids of seismic site conditions for specified regions.
</p>

<p>
  <strong>The following resources are available for V<sub>s</sub><sup>30</sup> data:</strong>
</p>
<ul>
  <li>
    <a href="https://github.com/usgs/earthquake-global_vs30">Global Vs30 model</a> based on topographic slope, with custom embedded maps - GitHub (for technical users, GMT required)
  </li>
  <li><a href="ftp://hazards.cr.usgs.gov/web/data/???">Global V<sub>s</sub><sup>30</sup> Data</a> (?? MB ZIP)</li>
  <li>
    <a href="/research/vs30/">Compilation of V<sub>s</sub><sup>30</sup> Values in the United States</a>
  </li>
</ul>
