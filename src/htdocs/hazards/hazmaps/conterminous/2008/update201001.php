<?php
  // Author: Lisa Wald
  // Contact:
    if (!isset($TEMPLATE)) {
      $TITLE = '2008 U.S. Hazard Maps - Revision III, January 2010';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<p>
	Since Revision II, when the maps were submitted to the Building Seismic Safety
	Council, the following additional changes are recommended for future updates
	of the hazard maps.
</p>

<ol>
	<li>
		For the CEUS background seismicity, the software computes a mean distance
		for a finite, random-striking fault with given moment magnitude (M) if
		M&ge;6.0. The Revision II maps used the nearest mbLg to M6, but then continued
		using mbLg as the magnitude for conversion of magnitude to surface-rupture
		length (SRL) for M&gt;6, using the Wells and Coppersmith (1994) relation.
		It is more correct to always use M because that is what the original Wells
		and Coppersmith regression assumed. Revision III converts all
		mbLg to M before computing surface-rupture length. For larger values of
		mbLg, near the Mmax for the region (7.5 &plusmn; dM for extended margin),
		mbLg is lower than M, and converting to M yields a larger mean SRL, a
		nearer average distance, and a slightly greater hazard. For the stable
		craton, with lower Mmax (7.0 &plusmn; dM), the effect of using mbLg
		instead of M in these SRL calculations is minimal. This change results in
		0.5&#37; to 2&#37; changes in the ground motions.
	</li>
	<li>
		For the New Madrid faults, the Somerville finite fault GMPE was given
		the distance to rupture surface (Rcd) rather than the distance projected
		to the earth surface (Rjb). Using Rjb in the Revision II curves
		increases the hazard at sites over the fault, because the top of fault
		is assumed to be at depth 10 km. Effects of this error diminish rapidly
		with distance from the fault. This change results in 2&#37; to 4&#37;
		changes over the Reelfoot fault in the New Madrid seismic zone.
	</li>
	<li>
		One of the instruction files for summing WUS fault-hazard contributions
		had a few typographic errors for the 5-Hz spectral acceleration (SA).
		These typos increased the hazard estimate over some WUS faults in
		Wyoming,New Mexico, Arizona, and Idaho. These typos are corrected in
		Revision III. Only 5-Hz or 0.2-s SA is affected by these typos, and only
		in those states. The correction reduces the hazard by a few percent near
		the more active faults in those states. One such example is the Teton
		fault in western Wyoming.
	</li>
	<li>
		The computation of nonlinear site response in the Chiou-Youngs relation
		(2008) for background seismicity had a term for inter-event uncertainty,
		or tau, that is magnitude but not distance dependent. The  map data had
		introduced a distance dependence that in effect reduced tau for larger
		distances, thereby reducing probabilistic hazard contributions from more
		distant background sources. Because contributions from these distant
		background sources tend to be of very limited significance at most
		places, correcting this error has little effect on the mean hazard
		estimate. In a modest way, this error affected 1- and 5- Hz SA and PGA
		calculations in the maps of Revision II.
	</li>
</ol>

	<h2>Figures</h2>
	<p>
		Figures 1 – 3 show ratios of the peak horizontal ground acceleration
		(PGA), 0.2-s, and 1-s spectral accelerations. The ratios represent
		ground motions that were developed using the changes described above
		(Revision III below) divided by the December 2008 hazard model (Revision
		II below).
	</p>

	<a href="ftp://hazards.cr.usgs.gov/web/nshm/conterminous/2008/update_201001/figure1.png"><img src="ftp://hazards.cr.usgs.gov/web/nshm/conterminous/2008/update_201001/figure1-464.png" width="464" height="295"
		alt="Ratio PGA with 2% in 50 Year PE"/></a>

	<p>
		Figure 1. Ratio of peak horizontal ground acceleration at a 2&#37;
		probability of exceedance in 50 years. The ratios represent ground
		motions that were developed using the changes of Revision III divided by
		the December 2008 hazard model (Revision II).
	</p>

	<a href="ftp://hazards.cr.usgs.gov/web/nshm/conterminous/2008/update_201001/figure2.png"><img src="ftp://hazards.cr.usgs.gov/web/nshm/conterminous/2008/update_201001/figure2-464.png" width="464" height="295"
		alt="Ratio 5Hz SA with 2% in 50 Year PE"/></a>
	<p>
		Figure 2. Ratio of 5-Hz (0.2-s) SA ground motions at a 2&#37;
		probability of exceedance in 50 years. The ratios represent ground
		motions that were developed using the changes of Revision III divided by
		the December 2008 hazard model (Revision II).
	</p>

	<a href="ftp://hazards.cr.usgs.gov/web/nshm/conterminous/2008/update_201001/figure3.png"><img src="ftp://hazards.cr.usgs.gov/web/nshm/conterminous/2008/update_201001/figure3-464.png" width="464" height="295"
		alt="Ratio 1Hz SA with 2% in 50 Year PE"/></a>
	<p>
		Figure 3. Ratio of 1-Hz (1-s) SA ground motions at a 2&#37; probability
		of exceedance in 50 years. The ratios represent ground motions that were
		developed using the changes of Revision III divided by the December 2008
		hazard model (Revision II).
	</p>

  <h2>References</h2>
  <ul class="referencelist">
    <li>
      Atkinson, G. M. and D. M. Boore (2008) <em>Erratum to</em> Empirical
      Ground-Motion Relations for Subduction Zone Earthquakes and Their
      Application to Cascadia and Other Regions.
      <em>Bull. Seism. Soc.  Amer.</em> <strong>98</strong> (5) 2567 – 2569.
    </li>
    <li>
      Boore, D. M. and G. M. Atkinson (2008) Ground-Motion Prediction
      Equations for the Average Horizontal Component of PGA, PGV, and
      5&#37;-Damped PSA at Spectral Periods between 0.01 s and 10.0 s.
      <em>Earthquake Spectra</em> <strong>24</strong> (1) 99 – 138.
    </li>
    <li>
      Chiou, B. and R. R. Youngs (2008) Chiou–Youngs PEER-NGA empirical
      ground motion model for the average horizontal component of peak
      acceleration and pseudo-spectral acceleration for spectral periods of
      0.01 to 10 seconds. <em>Earthquake Spectra</em> <strong>24</strong> (1)
      173 - 206.
    </li>
    <li>
      Wells, D. L. and K. J. Coppersmith (1994) New Empirical Relationships
      among Magnitude, Rupture Length, Rupture Width, Rupture Area, and
      Surface Displacement. <em>Bull. Seism. Soc. Amer.</em>
      <strong>84</strong> (4) 974 – 1002.
    </li>
  </ul>
