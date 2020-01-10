<?php
include '../_catalog.inc.php';
?>


<h2 id="description">Description</h2>

<h3 id="event-selection">Event Selection</h3>
<p>
  Seismic design codes often are based on a probabilistic seismic hazard
  analysis and also a deterministic seismic hazard analysis. While a
  probabilistic analysis accounts for all possible ruptures, a deterministic
  analysis only considers a representative subset of ruptures that are based on
  the same models of earthquake sources as the probabilistic analysis. The
  deterministic subset of ruptures are characteristic earthquakes on all known
  active faults. This catalog includes the deterministic ruptures from the
  2014 version of the USGS national seismic hazard maps.
</p>

<h3 id="ground-motion-models">Ground Motion Models</h3>
<p>
  For a given rupture, the ground motion shaking intensity parameters are
  computed using a weighted combination of ground motion models for reference
  rock conditions that is consistent with the 2014 version of the USGS national
  seismic hazard maps. More details are available in the
  <a href="http://dx.doi.org/10.3133/ofr20141091">
    documentation
  </a> for the 2014 update of the United States national seismic hazard maps.
</p>

<p>
  We have employed the OpenQuake hazard library
  (<a href="http://docs.openquake.org/oq-hazardlib/master/">hazardlib</a>)
  implementation of the ground motion models. OpenQuake hazardlib provides a broad
  range of well-tested open-source models.
</p>

<p>
  The ground motion parameters in ShakeMap are converted from the average horizontal
  component, which is given by most ground motion models, to the peak horizontal
  component.
  This is necessary for consistency with real-time ShakeMaps.
  Additional details are discussed in
  <a href="http://usgs.github.io/shakemap/manual3_5/tg_choice_of_parameters.html#use-of-peak-values-rather-than-mean">
    this section
  </a>
  of the ShakeMap manual.
</p>

<h3 id="site-response">Site Response</h3>
<p>
  The 2014 USGS seismic hazard maps do not account for site response directly.
  Site conditions are accounted for in the building code separately. However,
  the scenarios in this catalog include site response in the maps, based on
  maps of the time-averaged shear-wave velocity in the upper 30 m (Vs30).
  The
  <a href="https://github.com/usgs/earthquake-global_vs30">
    input Vs30 grids
  </a>
  are a combination of regionally variable models
  that are available at the USGS Global Vs30 GitHub repository.
</p>

<h3 id="extent">Extent</h3>

<p>This catalog includes ruptures in the coterminous US.</p>


<h3 id="contributors">Contributors</h3>
<ul>
  <li><a href="../../contributor/us/">US (Scenario Contributor)</a></li>
</ul>


<h2 id="references">References</h2>
<ul class="referencelist">

<li>
  Building Seismic Safety Council (BSSC) (2015). NEHRP Recommended Seismic
  Provisions for New Buildings and Other Structures, Volume 1: Part 1
  Provisions, Part 2 Commentary, FEMA P-1050-1, Washington, D.C., 555 pp.
</li>

<li>
  Luco, N., Bachman, R. E., Crouse, C. B., Harris, J. R., Hooper, J. D.,
  Kircher, C. A., Caldwell, P. J., and Rukstales, K. S. (2015). Updates to
  Building-Code Maps for the 2015 NEHRP Recommended Seismic Provisions,
  Earthquake Spectra, vol. 31, no. s1, pp. S245-S271,
  <a href="http://dx.doi.org/10.1193/042015EQS058M">
    http://dx.doi.org/10.1193/042015EQS058M
  </a>.
</li>

<li>
  Petersen, M.D., M. P. Moschetti, P. M. Powers, C. S. Mueller, K. M. Haller,
  A. D. Frankel, Y. Zeng, S. Rezaeian, S. C. Harmsen, O. S. Boyd, N. Field, R.
  Chen, K. S. Rukstales, N. Luco, R. L. Wheeler, R. A. Williams,
  and A. H. Olsen (2014). Documentation for the 2014 update of the
  United States national seismic hazard maps: U.S. Geological Survey
  Open-File Report 2014–1091, 243 p.,
  <a href="http://dx.doi.org/10.3133/ofr20141091">
    http://dx.doi.org/10.3133/ofr20141091
  </a>.
</li>
</ul>
