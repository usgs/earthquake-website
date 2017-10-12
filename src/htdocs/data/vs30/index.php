<?php
  // Author: Lisa Wald
  // Contact: Eric Thompson, emthompson@usgs.gov
    if (!isset($TEMPLATE)) {
      $TITLE = 'Vs30 Models and Data';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<p>
  The following resources are available for Vs30 (the time-averaged shear-wave velocity to 30 m depth) models and data.
</p>

<h2>Global Slope-Based Vs30</h2>

<p>
  Vs30 can be approximated via correlation to topographic slope. See Wald and Allen (2007) and Allen and Wald (2009) for details.
</p>
<ul>
  <li><a href="http://usgs.maps.arcgis.com/apps/webappviewer/index.html?id=8ac19bc334f747e486550f32837578e1">Browse and download data through the Vs30 map app</a>.</li>
</ul>

<h2>Global Vs30 Mosaic</h2>
<p>
  Based on topographic slope, with custom embedded maps (Worden et al., 2015).
</p>

<ul>
  <li><a href="https://github.com/usgs/earthquake-global_vs30">Source code repository on Github</a> (for technical users)</li>
  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/data/global_vs30_grd.zip">Download GMT grd file for Global Vs30 Data</a> (631 MB ZIP)
  </li>
  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/data/global_vs30_tif.zip">Download geotiff and auxillary files for Global Vs30 Data</a> (631 MB ZIP)
  </li>
  <li>
    <p>Metadata for GMT and geotiff downloads:</p>
    <ul>
      <li>Grid resolution: 30 arc-seconds (0.0083333333 degrees)</li>
      <li>Latitude span: -56.0 to 84.0 degrees</li>
      <li>Longitude span: -180 to 180 degrees</li>
      <li>Vs30 units: meters per second</li>
      <li>Vs30 range: 98 to 2197 m/s</li>
      <li>Vs30 in water-covered areas: 600 m/s</li>
    </ul>
  </li>
</ul>


<h2>U.S. Vs30 Compilation</h2>

<p>
  Compiled Vs30 measurements obtained by studies funded by the U.S. Geological Survey (USGS) and other governmental agencies. Thus far, there are 2,997 sites in the United States, along with metadata for each measurement from government-sponsored reports, Web sites, and scientific and engineering journals. Most of the data originated from publications directly reporting the work of field investigators. A small subset (less than 20 percent) of Vs30 values was previously compiled by the USGS and other research institutions. Whenever possible, Vs30 originating from these earlier compilations were crosschecked against published reports.
</p>
<p>
  Both downhole and surface-based Vs30 estimates are represented. Most of the VS30 data are for sites in the western contiguous United States (2,141 sites), whereas 786 Vs30 values are for sites in the Central and Eastern United States; 70 values are for sites in other parts of the United States, including Alaska (15 sites), Hawaii (30 sites), and Puerto Rico (25 sites).
</p>
<ul>
  <li><a href="/data/vs30/us/">Download data or browse the data in an interactive map.</a></li>
</ul>

<h2>References</h2>

<ul class='referencelist'>
  <li>
    Allen, T. I., and Wald, D. J., 2009, On the use of high-resolution topographic data as a proxy for seismic site conditions (Vs30), Bulletin of the Seismological Society of America, 99, no. 2A, 935-943.
  </li>
  <li>
    Wald, D. J., and Allen, T. I.,2007, Topographic slope as a proxy for seismic site conditions and amplification, Bulletin of the Seismological Society of America, 97, no. 5, 1379-1395.
  </li>
  <li>
    Worden, C. B., D. J. Wald, J. Sanborn, and E. M. Thompson, 2015, Development of an open-source hybrid global Vs30 model, Seismological Society of America Annual Meeting, 21-23 April, Pasadena, California.
  </li>
  <li>
    Yong, A., Thompson, E.M., Wald, D., Knudsen, K.L., Odum, J.K., Stephenson, W.J., and Haefner, S., 2015, <a href="http://dx.doi.org/10.3133/ds978">Compilation of Vs30 Data for the United States</a>: U.S. Geological Survey Data Series 978, 8 p.
  </li>
</ul>
