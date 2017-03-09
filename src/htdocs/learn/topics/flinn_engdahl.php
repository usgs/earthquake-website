<?php
//  Author:  Tiffany Kalin
//  Contact: Bruce Presgrave
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Flinn-Engdahl Regions';
  $NAVIGATION  = true;
  include  'template.inc.php';
}
?>

<p>
  The globe is broken down into regions based on geographic and political boundaries. Each region is assigned a unique number.
</p>
<p>
  The Flinn-Engdahl (F-E) seismic and geographical regionalization scheme was proposed in 1965, defined in 1974 and revised in 1995. <strong>The boundaries of these regions are defined at one-degree intervals and therefore differ from irregular political boundaries.</strong> For example, F-E region 545 (Northern Italy) also includes small parts of France, Switzerland, Austria and Slovenia and F-E region 493 (Chesapeake Bay Region) includes all of the State of Delaware, plus parts of the District of Columbia, Maryland, New Jersey, Pennsylvania and Virginia. Beginning with January 2000, the 1995 revision to the F-E code has been used in the QED and PDE listings. This revision includes 28 additional regions, which were defined by subdividing larger regions to provide better coverage for Northwest Africa, Southeast Asia and seismic zones along oceanic ridges.
</p>

<h2>Data Files</h2>
<ul>
  <li>
    <a href="ftp://hazards.cr.usgs.gov/feregion/fe_1995/">1995 (latest) revision
  of the Flinn-Engdahl (F-E) seismic and geographical regionalization scheme and programs</a><br/>
  Used by many seismologists to associate seismological data to general regions of the Earth.  This directory also includes a set of Fortran programs to install and run the regionalization package.  Note that the file names.asc contains the region names currently used by the USGS/NEIC (World Data Center for Seismology, Denver).
</li>
<li>
  <a href="ftp://hazards.cr.usgs.gov/web/hazdev-geoserve-ws/FE/">FE Region Boundary Coordinates</a> (WKT - well known text - format)
</li>
</ul>

<h2>
<a href="flinn_engdahl_list.php">Flinn-Engdahl Regions List</a>
</h2>

<h2>References</h2>
<ul class="referencelist">
  <li>
    Young, J.B., Presgrave, B.W., Aichele, H., Wiens, D.A. and Flinn, E.A., 1996,
    The Flinn-Engdahl Regionalisation Scheme: the 1995 revision, Physics of the
    Earth and Planetary Interiors, v. 96, p. 223-297.
  </li>
  <li>
    Flinn, E.A., Engdahl, E.R. and Hill, A.R., 1974, Seismic and geographical
    regionalization, Bulletin of the Seismological Society of America, vol. 64,
    p. 771-993.
  </li>
  <li>
    Flinn, E.A., and Engdahl, E.R., 1965, A proposed basis for geographical and
    seismic regionalization, Reviews of Geophysics, vol. 3, p. 123-149.
  </li>
</ul>
