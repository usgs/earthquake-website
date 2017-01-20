<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	1/18/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Slab Models for Subduction Zones';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<div class="row">
	<div class="column two-of-three">
		<p>Slab1.0 is a three-dimensional compilation of global subduction geometries, separated into regional models for each major subduction zone. Each model is based on a probabilistic non-linear fit to data from a combined catalog consisting of several independent data sets - historic earthquake catalogs, CMT solutions, active seismic profiles, global plate boundaries, bathymetry and sediment thickness information.</p>
		<p>A key step in many earthquake source inversions requires knowledge of the geometry of the fault on which the earthquake occurred. Our knowledge of this surface is often uncertain, however, and as a result fault geometry mislocation can map into significant error in the final temporal and spatial slip patterns of these inversions. Relying solely on an initial hypocenter and CMT mechanism can be risky when establishing rupture characteristics needed for rapid tsunami and ground shaking estimates. The initial motivation for the SIGA project was to improve the quality of fast finite-fault inversion results by combining several independent and complementary datasets to more accurately constrain the geometry of the seismic rupture plane of subducting slabs. Unlike previous analyses aimed at defining the general form of the plate interface, we require mechanisms and locations of the seismicity considered in our inversions to be consistent with their occurrence on the plate interface, by limiting events to those with well-constrained depths and with CMT solutions indicative of shallow-dip thrust faulting. We construct probability density functions about each location based on formal assumptions of their depth uncertainty and use these constraints to solve for the 'most likely' planar and non-planar fault interface. In the case of large events (M > ~7.5), these planes can be used directly in new finite fault in versions. For smaller events, this method provides a quick analysis of the tectonic setting of an event and a 'most likely' depth assuming the earthquake occurred on the subduction interface, which can be used as a check against other depth estimates produced at the NEIC (for examples, see the "individual events" tab).</p>
		<p>Outside of realtime analyses, we have used this approach to build a suite of 2D cross-sections of global subduction geometries where data coverage is sufficiently dense to sample the interface. To improve data coverage, we have supplemented our original data sets (catalogs of historic earthquakes, mechanisms, trench locations and bathymetry, and seafloor sediment thickness data) with locally collected active source seismic data, which images the shallow aseismic thrust interface that is otherwise unconstrained in our models. We use these 2D cross-sections in a three-dimensional interpolation scheme to produce the models available below.</p>
  </div>
<div class="column one-of-three">
<img src="images/alu_eqdz.jpg" alt="AK image"/>
<ul>
<li><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/allslabs.kmz">Download all slab models in Google Earth format - <?php //print formatSize('models/allslabs.kmz'); ?></a></li>
<li><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/allslabs.tgz">Download all slab models in NetCDF format - <?php //print formatSize('models/allslabs.tgz'); ?></a></li>
<li><a href="http://www.agu.org/pubs/crossref/2012/2011JB008524.shtml">Hayes, G. P., D. J. Wald, and R. L. Johnson (2012), Slab1.0: A three-dimensional model of global subduction zone geometries, J. Geophys. Res., 117, B01302, doi:10.1029/2011JB008524.</a></li>
</ul>

</div>
</div>
