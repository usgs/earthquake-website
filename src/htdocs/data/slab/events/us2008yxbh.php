<?php
// Author: Lisa Wald
// Contact: Gavin Hayes
  if (!isset($TEMPLATE)) {
    $TITLE = 'Subduction Zone Geometry Analysis';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<h2>Preliminary Result of the 2008/11/02  ANDREANOF ISLANDS, ALEUTIAN IS.  Earthquake</h2>
<p>
<h3> Gavin Hayes, NEIC</h3>
<hr />
<h2>Introduction </h2>
<p>
A key step in many earthquake source inversions requires knowledge of the geometry of the fault on which the earthquake occurred. Our knowledge of this surface is often uncertain, however, and as a result fault geometry mislocation can map into significant error in the final temporal and spatial slip patterns of these inversions. Relying solely on an initial hypocenter and CMT mechanism can be risky when establishing rupture characteristics needed for rapid tsunami and ground shaking estimates.
Here we attempt to improve the quality of fast finite-fault inversion results by combining several independent and complementary datasets to more accurately constrain the geometry of the seismic rupture plane of subducting slabs. Unlike previous analyses aimed at defining the general form of the plate interface, we require mechanisms and locations of the seismicity considered in our inversions to be consistent with their occurrence on the plate interface, by limiting events to those with well-constrained depths and with CMT solutions indicative of shallow-dip thrust faulting. We construct probability density functions about each location based on formal assumptions of their depth uncertainty and use these constraints to solve for the 'most likely' fault plane.
In the case of large events (M > ~7.5), these planes can be used directly in new finite fault inversions. For smaller events, this method provides a quick analysis of the tectonic setting of an event and a 'most likely' depth assuming the earthquake occurred on the subduction interface, which can be used as a check against other depth estimates produced at the NEIC.
</p>
<hr />
<h2>Data Filtering and Inversion </h2>
<p>
We filter the historic gCMT catalog to include only shallow thrust mechanisms within 250km of the main shock. We construct the reference profile by calculating the average strike of remaining CMTs deeper than the upper plate, projecting a line 250km downdip from the trench location nearest to the main shock. We remove events greater than 100km distance from the profile in a perpendicular direction. We retain the most accurate hypocenter of each event from a heirarcy of catalogs, first considering the EHB catalog (Engdahl et al., 1998), then the NEIC PDE, and finally the location in the gCMT catalog if neither of these exist. Next we construct probability density functions about the reported depth of the event in the chosen catalog, whose variance reflects the vertical uncertainty of the location. Finally, we calculate the Most Likely Interface Geometry following a maximum likelihood approach, fitting a planar interface through the trench location and the PDFs. The solution corresponds to the maximum probability over a range of dips from 0-60 degrees.
</p>
<h2>Most Likely Geometry: Strike = 249.46, Dip = 18.0</h2>
<hr />
<h2>Most Likely Depth if on Planar Slab Interface = 41.31 km</h2>
<hr />
<h2>Most Likely Depth if on Polynomial Slab Interface = 40.33 km</h2>
<hr />
<p>
</p>
<hr />
<h2>Result</h2>
<p>
<img src="/static/web/data/slab/events/us2008yxbh/ale_basemap.png" alt="" >
<br /><br />
Figure 1: Basemap of subduction zone showing the area of the trench constrained in this example. Earthquake locations from the gCMT catalog and EHB catalog (gray circles, sized according to magnitude) are shown. Maroon rectangle indicates the area shown in cross section (c); all earthquakes within this area may be used to constrain trench geometry.
</p>
<hr />
<p>
<a href="/static/web/data/slab/events/us2008yxbh/ale_crosssection2.png"><img src="/static/web/data/slab/events/us2008yxbh/ale_crosssection.png" alt="" ></a>
<br /><br />
Figure 2: Cross-section of subduction zone taken perpendicular to the average strike of gCMTs that match selection criteria and whose equivalent EHB or NEIC locations lie within the maroon box from Figure 1. Gold CMTs are mechanisms from the gCMT catalog plotted at their equivalent EHB catalog location, used to constrain trench strike and dip. Orange CMTs are mechanisms without EHB locations, placed instead at the equivalent event location in the NEIC catalog, and also used to constrain geometry. Light and dark gray circles are events from the EHB catalog south and north of the plane of the cross-section, respectively, but not used to constrain geometry because either (i) they did not have a corresponding mechanism in the gCMT catalog, or (ii) their mechanism in the gCMT catalog did not match selection criteria. The trench location is marked with a red square. Probability density functions for EHB and NEIC locations are shown as green lines, scaled by a factor of x20 for display purposes. The black solid line labeled 'most likely plane' describes the best fitting geometry. The initial locations of the 'new event' used to help constrain geometry are shown by black circles and marked with arrows corresponding to the gCMT epicentroid and NEIC epicenter. PDFs for these locations are shown in red; the most likely depth for each location is marked with a white star, at the intersection of the most likely subduction interface plane and the epicentroid/center location, assuming that the event represents rupture on the main subduction thrust. The best-fitting fault plane from the gCMT catalog for the new event is shown with a black dashed line and labeled 'CMT solution'. The red dashed line is the most likely interface following a polymonial SVD fit to the data, rather than planar.
</p>
<hr />
<p>
<img src="/static/web/data/slab/events/us2008yxbh/ale_dipdiscrepancy.png" alt="" >
<br /><br />
Figure 3: Variation in dip of best-fitting fault planes from the gCMT catalog for all events used to constrain trench geometry across the plane of the cross-section. Individual event dips are shown with small dark gray circles, sized with magnitude. Large mechanisms indicate the average dip in 20km bins across the plane of the cross-section. Light gray mechanisms represent a bulk average; dark gray represents a moment-weighted average.
</p>
<hr />
<p>
<img src="/static/web/data/slab/events/us2008yxbh/ale_prob1.png" alt="" >
<br /><br />
Figure 4: Maximum Likelihood probability function describing interface dip probability over a range of dips from 0-60 degrees. Vertical black dashed line indicates the planar solution with an SVD inversion.
</p>
<hr />
<p>
<img src="/static/web/data/slab/events/us2008yxbh/ale_prob2.png" alt="" >
<br /><br />
Figure 5: Least Squares R-squared correlation and RMS misfit functions describing interface dip likelihood over a range of dips from 0-60 degrees.
</p>
<hr />
<h2>Gavin's Comments:</h2>
Not Available Yet
<hr />
<h2>Summary Poster</h2>
<table width="600" border="0" cellspacing="0" >
<tr>
   <td colspan="1" width="200" border="1">
     <a href= /static/web/data/slab/events/us2008yxbh/ale_trench.pdf><b>PDF FORMAT</b></a>
   </td>
</tr>
</table>
</p>
<hr />
<h2>References</h2>
<p>
Hayes, G.P., and Wald, D.J., Developing framework to constrain the geometry of the seismic rupture plane in subduction zones a priori - a probabilistic approach, submitted to Geophys. J. Int., 2008
</p>
<p>
<hr />
<h2>Acknowledgement and Contact Information</h2>
<p>
This work is supported by National Earthquake Information Center (NEIC) of United States Geological Survey. This web page is built and maintained by <a href="mailto:ghayes@usgs.gov"> Dr. G. Hayes </a> at NEIC.
</p>
