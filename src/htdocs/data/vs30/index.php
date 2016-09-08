<?php
  // Author: Lisa Wald
  // Contact: Dave Wald, wald@usgs.gov
  // Last modified: 08/30/2016, Tiffany Kalin
    if (!isset($TEMPLATE)) {
      $TITLE = 'Vs30 Data';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<p>
  <strong>The following resources are available for Vs30 data:</strong>
</p>

<h2><a href="https://github.com/usgs/earthquake-global_vs30">Global Vs30 Model</a></h2>
<p>
  Based on topographic slope, with custom embedded maps - GitHub (for technical users, GMT required)
</p>
<p>
  Vs30 measurements (the average shear-velocity down to 30 m) are correlated against topographic slope to develop two sets of coefficients for deriving Vs30: one for active tectonic regions that possess dynamic topographic relief, and one for stable continental regions where changes in topography are more subdued. These coefficients have been applied to continental U.S. by Wald and Allen, and in other regions around the world by Allen and Wald (USGS Open File Report, 2007, in review).
</p>
<ul>
  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/data/global_vs30_grd.zip">Download GMT grd file for Global Vs30 Data</a> (631 MB ZIP)
  </li>
  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/data/global_vs30_tif.zip">Download geotiff and auxillary files for Global Vs30 Data</a> (631 MB ZIP)
  </li>
</ul>

<h4>Metadata:</h4>
<ul>
  <li>Grid resolution: 30 arc-seconds (0.0083333333 degrees)</li>
  <li>Latitude span: -56.0 to 84.0 degrees</li>
  <li>Longitude span: -180 to 180 degrees</li>
  <li>Vs30 units: meters per second</li>
  <li>Vs30 range: 98 to 2197 m/s</li>
  <li>Vs30 in water-covered areas: 600 m/s</li>
</ul>

<h2><a href="us/">Compilation of Vs30 Values in the United States</a></h2>

<p>
  Compiled Vs30 measurements obtained by studies funded by the U.S. Geological Survey (USGS) and other governmental agencies. Thus far, there are 2,997 sites in the United States, along with metadata for each measurement from government-sponsored reports, Web sites, and scientific and engineering journals. Most of the data originated from publications directly reporting the work of field investigators. A small subset (less than 20 percent) of Vs30 values was previously compiled by the USGS and other research institutions. Whenever possible, Vs30 originating from these earlier compilations were crosschecked against published reports.
</p>
<p>
  Both downhole and surface-based Vs30 estimates are represented. Most of the VS30 data are for sites in the western contiguous United States (2,141 sites), whereas 786 Vs30 values are for sites in the Central and Eastern United States; 70 values are for sites in other parts of the United States, including Alaska (15 sites), Hawaii (30 sites), and Puerto Rico (25 sites).
</p>

<h2>References</h2>

<ul class='referencelist'>
  <li>
    Allen, T. I., and Wald, D. J., 2009, On the use of high-resolution topographic data as a proxy for seismic site conditions (Vs30), Bulletin of the Seismological Society of America, 99, no. 2A, 935-943.
  </li>
  <li>
    Wald, D. J., and Allen, T. I.,2007, Topographic slope as a proxy for seismic site conditions and amplification, Bulletin of the Seismological Society of America, 97, no. 5, 1379-1395.
  </li>
  <li>
    Yong, A., Thompson, E.M., Wald, D., Knudsen, K.L., Odum, J.K., Stephenson, W.J., and Haefner, S., 2015, <a href="http://dx.doi.org/10.3133/ds978">Compilation of Vs30 Data for the United States</a>: U.S. Geological Survey Data Series 978, 8 p.
  </li>
</ul>
