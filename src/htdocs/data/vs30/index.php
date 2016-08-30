<?php
  // Author: Lisa Wald
  // Contact: Dave Wald, wald@usgs.gov
  // Last modified: 08/30/2016, Tiffany Kalin
    if (!isset($TEMPLATE)) {
      $TITLE = 'V<sub>s</sub><sup>30</sup> Data';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<p>
  <strong>The following resources are available for V<sub>s</sub><sup>30</sup> data:</strong>
</p>

  <h2><a href="https://github.com/usgs/earthquake-global_vs30">Global Vs30 Model</a></h2>
  <p>
    Based on topographic slope, with custom embedded maps - GitHub (for technical users, GMT required)
  </p>
  <p>
    V<sub>s</sub><sup>30</sup> measurements (the average shear-velocity down to 30 m) are correlated against topographic slope to develop two sets of coefficients for deriving Vs30: one for active tectonic regions that possess dynamic topographic relief, and one for stable continental regions where changes in topography are more subdued. These coefficients have been applied to continental U.S. by Wald and Allen, and in other regions around the world by Allen and Wald (USGS Open File Report, 2007, in review).
  </p>
  <p>
    <a href="ftp://hazards.cr.usgs.gov/web/data/???">Download Global V<sub>s</sub><sup>30</sup> Data</a> (?? MB ZIP)
  </p>

  <h2><a href="us/">Compilation of V<sub>s</sub><sup>30</sup> Values in the United States</a></h2>

  <p>
    Compiled V<sub>s</sub><sup>30</sup> measurements obtained by studies funded by the U.S. Geological Survey (USGS) and other governmental agencies. Thus far, there are 2,997 sites in the United States, along with metadata for each measurement from government-sponsored reports, Web sites, and scientific and engineering journals. Most of the data originated from publications directly reporting the work of field investigators. A small subset (less than 20 percent) of V<sub>s</sub><sup>30</sup> values was previously compiled by the USGS and other research institutions. Whenever possible, V<sub>s</sub><sup>30</sup> originating from these earlier compilations were crosschecked against published reports.
  </p>
  <p>
    Both downhole and surface-based V<sub>s</sub><sup>30</sup> estimates are represented. Most of the VS30 data are for sites in the western contiguous United States (2,141 sites), whereas 786 V<sub>s</sub><sup>30</sup> values are for sites in the Central and Eastern United States; 70 values are for sites in other parts of the United States, including Alaska (15 sites), Hawaii (30 sites), and Puerto Rico (25 sites).
  </p>
