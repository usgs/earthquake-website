<?php
  // Author: Lisa Wald
  // Contact:
    if (!isset($TEMPLATE)) {
      $TITLE = '2002 U.S. Hazard Maps - Revision II, October 2002';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<p>
		In October 2003 we slightly revised the national maps in limited portions
		of California, Oregon and Washington. The changes only affect a limited
		area along the hanging wall of thrust or reverse faults. The changes
		involve at most an increase of about 2-3% in the probabilistic ground
		motions in the maps. These changes are not large enough to be visible in
		the maps posted in the website, so we did not post new maps.
	</p>
	<p>
		It came to our attention that we used an incomplete definition of the
		hanging wall for the Abrahamson and Silva (1997) attenuation relation for
		thrust or reverse faults, one of the four attenuation relations used in
		the hazard maps for non-extensional areas. In that paper they state, “the
		hanging wall term should be used for sites on the hanging wall and within
		the edge of rupture.” (p.106). We interpreted this to mean that the
		hanging wall term was to be used only for sites within the surface
		projection of the rupture zone, i.e., the fault plane. We also had a
		miscommunication with the lead author on this point. In fact, the authors
		intended that the hanging wall term should also be invoked for sites
		behind the surface projection of the fault plane, although a distance
		taper makes this a limited area. This definition was presented in
		Abrahamson and Somerville (1996), although the angle used for the
		expanding zone behind the surface projection was not specified in that
		paper. This paper was not referenced in Abrahamson and Silva (1997),
		contributing to this misinterpretation.
	</p>
	<p>
		For the October, 2003 revision we corrected the definition of the hanging
		wall in our hazard calculations to make it completely consistent with the
		definition of the authors of these attenuation relations. This leads to a
		small increase in probabilistic ground motions for thrust and reverse
		faults in limited areas behind the surface projection of the fault planes.
		We used an angle of 22.5 degrees in map view, as specified by N.
		Abrahamson (pers. comm., 2003) to describe the widening of the hanging
		wall zone in map view behind the projection of the fault plane. We did not
		apply the hanging wall term to sites behind the surface projection of
		thrust faults with dips less than 30 degrees, because the geometrical
		justification for the term being used behind the surface projection of the
		fault plane is less valid for very shallowly dipping faults. We still used
		the hanging wall term for sites over the surface projection of the fault
		plane for the shallowly dipping thrust faults and all the other thrust and
		reverse faults, as was done in the original 2002 maps.
	</p>

	<h2>References</h2>
	<ul>
		<li>
			Abrahamson, N.A. and P.G. Somerville (1996). Effects of the hanging
			wall and footwall on ground motions recorded during the Northridge,
			California, earthquake, Bull. Seism. Soc. Am., v. 86, no. 1B, pp.
			S93-99.
		</li>
		<li>
			Abrahamson, N.A. and W.J. Silva (1997). Empirical response spectral
			attenuation relations for shallow crustal earthquakes, Seis Res.
			Letts., v. 68, no. 1, pp. 94-127.
		</li>
	</ul>
