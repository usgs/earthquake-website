<?php
  // Author: Lisa Wald
  // Contact: Mark Peterson,
  // Last modified: 03/24/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Catalogs for 2016 One-Year Seismic Hazard Forecast';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<p>
  Catalogs and corresponding .ps graphics are from National Seismic Hazard Modeling Project.  A detailed description about the various catalog sources is in <a href="http://pubs.usgs.gov/of/2014/1091/">USGS OFR 2014-1091</a>. One key addition for OFR 2016-1035 is that the Oklahoma Geological Survey’s catalog is included as a source.
</p>

<h2>Download Catalog Files</h2>

<ul>
  <li>Full (non-declustered) catalog:
  <ul>
    <li><a href="emm_pi.c2.txt">Data - Probably Induced</a></li>
    <li><a href="emm_pi.c2.ps">Postscript file - Probably Induced</a></li>
    <li><a href="emm_pn.c2.txt">Data - Probably Natural</a></li>
    <li><a href="emm_pn.c2.ps">Postscript file - Probably Natural</a></li>
  </ul>
  </li>

  <li>Declustered catalog:
  <ul>
    <li><a href="emm_pi.c3.txt">Data - Probably Induced</a></li>
    <li><a href="emm_pi.c3.ps">Postscript file - Probably Induced</a></li>
    <li><a href="emm_pn.c3.txt">Data - Probably Natural</a></li>
    <li><a href="emm_pn.c3.ps">Postscript file - Probably Natural</a></li>
  </ul>
  </li>

</ul>

<h2>Coordinates for the zones of induced seismicity</h2>
<p>
  This zipped file is a folder that contains the latitude and longitude coordinates for the 21 zones.  There is also a document that explains the abbreviations and time windows.  See figure 1A and table 1 (as well as the text) of <a href="http://pubs.usgs.gov/of/2016/1035/">USGS OFR 2016-1035</a> for additional details.
</p>

<p><a href="polygons_2016.zip">Download Polygons-2016</a></p>

<h2>Filenames</h2>

<dl>
  <dt>c2</dt>
  <dd>
    - the full (non-declustered) catalog.  Anthropogenic events that are mining-related and/or explosions have been removed from this catalog.
  </dd>
  <dt>c3</dt>
  <dd>
    - the declustered catalog (dependent events removed) and will only include moment magnitude ≥ 2.5 events.
  </dd>
  <dt>pi</dt>
  <dd>
     - probably induced.  The zones of induced seismicity and the time windows used are outlined in figure 1A and table 1 of USGS OFR 2016-1035.
   </dd>
  <dt>pn</dt>
  <dd>
    - probably natural.  The pi and pn catalogs are mutually exclusive.
  </dd>
</dl>

<p>Magnitudes (first column in catalog files) are adjusted moment magnitudes.</p>
