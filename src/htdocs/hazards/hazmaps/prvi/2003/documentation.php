<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/28/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Documentation';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
	<!--$TITLE = 'Documentation';
	$WIDGETS = 'jquery,dialog';
	$SCRIPTS = 'index.js';
	$STYLES = "
		#io_wrapper p {text-align:right; margin:0;font-size:.8em;}
		#io_wrapper img {width:600px;}
		#content p { line-height: 1.75; }
		#figurelist {list-style:none;float:left;}
		#figurelist li {
			float:left;
			border:1px solid #333333;
			width:220px;
			margin:5px;
			padding:5px;
		}
		#figurelist img {width:220px;margin:0;padding:0;}
		#references li { margin-bottom:1em; }
		#tbl1 th, #tbl1 td {
			font-size:.9em;
			padding:.25em 1em;
			text-align:center;
		}
	";
	include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";
-->

<h2>Seismic Hazard Maps for Puerto Rico and the U. S. Virgin Islands</h2>
<p>
	C. S. Mueller, A. D. Frankel, M. D. Petersen, and E. V. Leyendecker<br />
	U. S. Geological Survey, Golden, CO
</p>

<h3>Introduction</h3>
<p>
	We present results of a new probabilistic seismic hazard assessment for
	Puerto Rico and the U. S. Virgin Islands (PRVI). The study area
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig01.gif" title="Figure 1" class="figure">Figure 1</a>) is
	located along the boundary between
	the northeastern Caribbean Sea and the Atlantic Ocean, at the intersection of
	the Greater and Lesser Antilles Island chains. These islands demarcate the
	boundary between the North American and Caribbean tectonic plates, with the
	North American plate moving west-southwestward relative to the Caribbean
	plate at a rate determined from GPS geodesy of 19.4 mm/yr (Jansma and others,
	2000). West of PRVI the two plates move along typical transform structures
	(the east-west-striking, left-lateral Oriente and Enriquillo - Plantain
	Garden faults, and related structures). Southeast of PRVI the North American
	plate subducts westward beneath the Caribbean plate, forming a typical
	volcanic island arc (the north-south-trending Lesser Antilles). Plate
	interaction near PRVI, in contrast, occurs in a 250-kilometer-wide,
	east-west-trending zone of complex transpressional deformation, delimited by
	the Puerto Rico Trench in the north and the Muertos Trough in the south.
	Puerto Rico and the Virgin Islands lie on a shallow submarine bank within
	this complex deformational zone.
</p>
<p>
	The region is home to approximately four million United States citizens, and
	has a long history of destructive earthquakes. Historical records show that
	major earthquakes have struck PRVI several times during the past 500 years,
	although the locations and sizes of events that have occurred more than a few
	decades ago are poorly known. Major earthquakes have damaged Puerto Rico in
	1520, 1615, 1751, 1776, 1787 (magnitude ~8.0, thought to have ruptured the
	plate interface south of the Puerto Rico Trench, offshore northern Puerto
	Rico), 1867 (~7.3, Anegada Passage, offshore southeastern Puerto Rico), 1918
	(~7.5, Mona Passage, offshore northwestern Puerto Rico), 1943 (~7.7, plate
	interface, offshore northwestern Puerto Rico), and 1946 (~8.0, plate
	interface, northeastern Hispaniola) (e.g., McCann, 1985; Dolan and Wald,
	1998). The 1867 and 1918 earthquakes were accompanied by destructive
	tsunamis.
</p>
<p>
	Seismicity near PRVI is primarily related to: 1) highly oblique subduction of
	the North American plate beneath the terranes of the plate boundary zone
	along the main plate interface south of the Puerto Rico Trench, and 2) the
	interactions of several probable microplates within the complex boundary
	zone. Geodesy and seismicity data suggest the existence of a Puerto Rico -
	northern Virgin Islands microplate that is relatively rigid and seismically
	quiescent internally (Masson and Scanlon, 1991; Jansma and others, 2000).
	Most of the major seismogenic sources are concentrated offshore; thus,
	estimates of activity rates on specific structures can be highly uncertain,
	often based on indirect evidence such as seismicity patterns and focal
	mechanisms, bathymetry and shallow seafloor seismic imagery, regional
	geodesy, kinematic reasoning, and tectonic analogs. The Great Northern and
	Great Southern Puerto Rico faults, major left-lateral strike-slip systems
	active on Puerto Rico from the early Cretaceous to the early Miocene are now
	considered largely quiescent, although they seem to be associated with very
	small earthquakes, and may represent inherited zones of weakness (McCann,
	1985). Prentice and others (2000) have determined a recurrence rate for one
	fault onshore southwestern Puerto Rico that they consider to be currently
	active; several other candidate faults have been identified in western
	Puerto Rico, but not yet evaluated paleoseismically.
</p>
<p>
	Seismic sources related to deformation along the main plate boundary include:
	megathrust faulting along the plate interface, southward-deepening intraslab
	faulting within the subducting North American plate, and strike-slip faulting
	along several structures that strike subparallel to the Puerto Rico trench
	north and northwest of Puerto Rico
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig01.gif" title="Figure 1" class="figure">Figure 1</a>).
	These include the
	Septentrional fault, the major plate boundary structure in central
	Hispaniola, which extends eastward across the northern Mona Passage toward
	Puerto Rico, and the so-called North and South Puerto Rico Slope fault zones
	and related structures. Sources related to microplate interactions include
	two broad zones of roughly east-west tectonic extension, one west of Puerto
	Rico roughly coincident with the Mona Passage, and one southeast of Puerto
	Rico roughly coincident with the Anegada Passage. Extension within these
	zones is thought to be related to differences in rates of eastward motion
	(relative to North America) of crustal blocks south of the main plate
	boundary (e.g., McCann and others, 1987; Jansma and others, 2000): the
	Caribbean plate moves eastward relatively unrestricted, while blocks within
	the boundary zone are restricted by relatively high-standing tectonic
	features like the Bahama Bank and Main Ridge
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig01.gif" title="Figure 1" class="figure">Figure 1</a>).
	As discussed above, we include one
	terrestrial fault, the South Lajas fault onshore southwestern Puerto Rico
	(Prentice and others, 2000), in the hazard model.
</p>
<p>
	We apply the probabilistic hazard methodology developed by the U.S.
	Geological Survey (USGS) as described by Frankel and others (1996, 2002),
	and present maps of probabilistic ground motions: peak ground acceleration
	(pga), 1.0-second spectral response, and 0.2-second spectral response, with
	2&#37; and 10&#37; probability of exceedance in 50 years, corresponding to
	return times of approximately 2500 and 500 years, respectively. Like others
	in the USGS seismic hazard series, these maps will be used in earthquake
	mitigation and response planning, and derived engineering-design-motion maps
	will be considered for adoptin in future updates of building codes and other
	structural design standards (Leyendecker and others, 2000). The USGS
	methodology is based primarily on 1) gridded and smoothed historical
	seismicity, generalized using exponential magnitude distributions with
	regionally determined <em>b</em> values, and 2) specific fault sources with
	published slip-rate or recurrence information. Where there is reason to
	suspect that the seismicity or fault components of the model are incomplete,
	they can be supplemented with sources based on geodetic or other deformation
	data. Earthquakes are assumed to occur randomly in time; the probabilistic
	ground motions represent time-independent seismic hazard.
</p>
<p>
	Specific components of the PRVI hazard model
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig02.gif" title="Figure 2" class="figure">Figure 2</a>)
	include: gridded and smoothed historical
	seismicity (moment magnitude greater than or equal to 4.5, 1963-2001) divided
	into four depth ranges, megathrust faulting along the main subduction
	interface south of the Puerto Rico trench, Mona Passage and Anegada Passage
	extensional zones with seismic activity rates determined from GPS geodesy,
	the Septentrional fault, the South Puerto Rico Slope fault, and the South
	Lajas fault. Because some sources overlap spatially, magnitude ranges in the
	model are adjusted to avoid double counting hazard contributions. Like
	LaForge and McCann (2003), we exclude the North Puerto Rico Slope fault zone
	from our model because it is located more than 100 km from the north shore of
	Puerto Rico and only a few kilometers south of the deformation front of the
	south-dipping Puerto Rico Trench
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig01.gif" title="Figure 1" class="figure">Figure 1</a>)
	subduction interface (also
	Dolan and Wald, 1998). We exclude the Muertos Trough
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig01.gif" title="Figure 1" class="figure">Figure 1</a>)
	and related structures offshore southern
	Puerto Rico from our model because their rates of activity are very poorly
	known. (We note that LaForge and McCann, who include these structures in
	their model, suggest that rates of activity on these structures must be low
	in comparison with other model components, and agree with them that their
	proximity to the south coast of Puerto Rico makes them important targets for
	future research.)
</p>
<p>
	Alternative ground-motion-prediction relations for a uniform NEHRP
	B/C-boundary (V<sub>s</sub><sup>30</sup> = 760 m/s) site condition are
	included using a logic-tree formalism. For the shallow-seismicity,
	extensional-zone, and crustal-fault sources, we use a mix of relations for
	crustal earthquakes derived from western North American and worldwide data.
	For the deep-seismicity and subduction sources, we use a mix of intraslab and
	interplate relations, respectively, derived from worldwide data. (Specific
	ground-motion relations are discussed below for each hazard-model element.)
	A new ground-motion relation recently developed from Caribbean data by
	Motazedian and Atkinson (2003) (M&amp;A) is included for the
	shallow-seismicity, extensional-zone, and crustal-fault sources. (Roughly
	2/3 of the earthquakes in their dataset are shallower then 50 km; they do not
	distinguish between shallow and deep seismicity in their relation, but we use
	it for crustal sources only.) We adjust their relation for NEHRP B/C-boundary
	site conditions using factors calculated from equations in Boore and others
	(1997). Geologically, one might expect ground motion attenuation to be lower
	in PRVI than in western North America, but we are concerned that
	high-frequency ground motions from the new relation are much higher than
	those from comparable western North American relations (see the Discussion
	below). Pending further evaluation of the new M&amp;A relation, it receives
	roughly one half the weight given to more established relations in the
	ground-motion-relation logic tree.
</p>
<p>
	With a site grid spacing of 0.05 degree in latitude and longitude, we compute
	hazard curves for approximately 16000 sites within the area mapped in
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig02.gif" title="Figure 2" class="figure">Figure 2</a>.
</p>

<h3>Catalog and Gridded Seismicity</h3>
<p>
	A uniform seismicity catalog is constructed from four source catalogs:
</p>
<ol>
	<li>
		A compilation by Engdahl and Villasenor of large, carefully relocated global
		earthquakes (called EV here, downloaded from ftp site
		<a href="ftp://ciei.colorado.edu/pub/user/engdahl/Handbook/"
		>ciei.colorado.edu/pub/user/engdahl/Handbook/CENT.CAT</a>).
	</li>
	<li>
		The International Seismological Centre global catalog (ISC, downloaded from
		the USGS National Earthquake Information Center).
	</li>
	<li>
		The USGS Preliminary Determination of Epicenters global catalog (PDE,
		downloaded from the USGS National Earthquake Information Center).
	</li>
	<li>
		The Panamerican Institute of Geology and History catalog (IPGH, downloaded
		from the web site of the Middle America Seismograph Consortium:
		midas.upr.clu.edu/mds-ipgh.html).
	</li>
</ol>
<p>
	Aware of well-documented past problems with magnitude determinations (e.g.,
	LaForge and McCann, 2003), we choose not to include data from the local
	Puerto Rico Seismic Network catalog. The four source catalogs are
	reformatted, concatenated, and chronologically sorted. We remove duplicates
	and dependent events generally following the approach described by Mueller
	and others (1997): duplicates are removed using the above order of
	source-catalog preference, and aftershocks and foreshocks are removed (in
	order to insure the statistical independence of the earthquakes used in the
	hazard analysis) using the algorithm of Gardner and Knopoff (1974). Our final
	PRVI catalog is judged to be complete down to moment magnitude 4.5 from 1963
	to 2001, and contains 15 EV events, 354 ISC events, 137 PDE events, and 20
	IPGH events.
</p>
<p>
	The catalog is divided into four subcatalogs by depth: 0-50 km, 50-80,
	80-120, and greater than 120. Spatial relationships of the deeper-than-50-km
	hypocenters suggest that these earthquakes are primarily associated with
	(located within) the southward-subducting North American plate. The
	seismicity data, both shallow and deep, are consistent with a <em>b</em>
	value of 1.0 (which is subsequently applied for all hazard model elements).
	10<sup>a</sup>-value grids are computed for each subcatalog (Weichert, 1980)
	and spatially smoothed (using a two-dimensional Gaussian function with a
	50-km correlation distance for the 0-50-km-deep seismicity, and a 30-km
	Gaussian for the deeper seismicity). These grids are used to compute the
	hazard contribution from seismicity for distance range 0 to 200 km and
	moment-magnitude range 5.0 to 7.0. (For grid cells that fall within the Mona
	and Anegada extensional zones, the maximum magnitude for the 0-50-km
	seismicity is reduced from 7.0 to 6.5 to avoid overlapping hazard
	contributions - see below.) For the 0-50-km seismicity we use the new M&amp;A
	ground-motion relation plus four well-established relations for shallow
	crustal earthquakes with coefficients for reverse-oblique (or averaged
	reverse-slip / strike-slip) faulting: Boore and others (1997) for
	V<sub>s</sub><sup>30</sup> = 760 m/s, Sadigh and others (1997) for rock,
	Campbell and Bozorgnia (2003) adjusted for V<sub>s</sub><sup>30</sup> = 760
	m/s, and Abrahamson and Silva (1997) for rock. The latter four relations were
	used for the non-extensional western US in the 2002 update of the USGS
	national hazard maps (Frankel and others, 2002). M&amp;A receives 10&#37;
	weight and each of the other four 22.5&#37; in the ground-motion-relation
	logic tree. For seismicity deeper than 50 km we use two intraplate
	ground-motion relations: Youngs and others (1997) and Atkinson and Boore
	(2003) - each with equal 50&#37; weight. Maps of probabilistic pga for the
	shallow and deep seismicity models are shown in
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig03a.gif" title="Figure 3A" class="figure">Figure 3A</a>
	and
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig03b.gif" title="Figure 3B" class="figure">Figure 3B</a>
	respectively.
</p>

<h3>Subduction Zone</h3>
<p>
	We subdivide the subduction interface south of the Puerto Rico trench into
	Puerto Rico and Hispaniola segments
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig02.gif" title="Figure 2" class="figure">Figure 2</a>),
	generally following
	published ideas about tectonic segmentation, the estimated sizes of past
	megathrust earthquakes, and regional variations in seismic coupling along the
	thrust interface (e.g., Frankel and others, 1980; Dolan and Wald, 1998;
	LaForge and McCann, 2003). In our model, thrust interface earthquakes on the
	Puerto Rico segment are modeled as characteristic floating magnitude-7.9
	ruptures with 190-year recurrence times, corresponding to approximately
	20&#37; seismic coupling for a GPS-determined slip rate of 16.9 mm/yr between
	North America and PRVI (Jansma and others, 2000). Thrust interface
	earthquakes on the Hispaniola segment are modeled as characteristic floating
	magnitude-8.0 ruptures with 200-year recurrence times, corresponding to
	approximately 80&#37; seismic coupling. Historically, the 1943 northern Mona
	Passage and 1946 northeastern Hispaniola earthquakes ruptured the Puerto Rico
	and Hispaniola subduction segments, respectively (Dolan and Wald, 1998), and
	the great earthquake of 1787 probably ruptured the Puerto Rico subduction
	segment (McCann, 1985). Locations of the updip and downdip edges of the
	rupture zones correspond to plate-top depths of 10 and 40 km, respectively.
	We apply two ground-motion-relations for the subduction models: Youngs and
	others (1997) and Sadigh and others (1997), each with 50&#37; weight out to a
	crossover distance (58 km), beyond which the Youngs relation receives full
	weight. The Sadigh relation, developed from crustal earthquake data, offsets
	a tendency for relations based on the empirical interface-earthquake dataset
	alone to underpredict ground motions at short distances from simulated large
	thrust events (Youngs and others, 1997). Maps of probabilistic pga for the
	two subduction models are shown in
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig03c.gif" title="Figure 3C" class="figure">Figure 3C</a>
	and
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig03d.gif" title="Figure 3D" class="figure">Figure 3D</a>.
</p>

<h3>Mona Passage and Anegada Passage Extensional Zones</h3>
<p>
	The Mona Passage between Puerto Rico and Hispaniola coincides with a broad
	zone of active crustal extension. Bathymetry, subsea seismic imaging, and
	focal-mechanism data are all suggestive of normal faulting on generally
	north-south trending structures and east-west-directed extension. One of the
	largest bathymetric features in the Passage, the north-south-trending Mona
	Canyon, is thought to be normal-fault controlled, and was probably the site
	(Mercado and McCann, 1998) of a magnitude~7.5, tsunamigenic earthquake in
	1918 that damaged northwestern Puerto Rico with large losses of life and
	property (LaForge and McCann, 2003). We assign a rate of east-west extension
	of 5 mm/yr based on recent GPS geodesy results (Jansma and others, 2000),
	assume a <em>b</em> value of 1.0, and prorate faulting uniformly into each
	grid cell in the zone, using the method described by Frankel and others
	(1996) for computing hazard from areal zones. The corresponding
	10<sup>a</sup>-value grids are smoothed using a two-dimensional Gaussian
	function with a 20-km correlation distance, eliminating the sharp zone
	boundary. The zone shape
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig02.gif" title="Figure 2" class="figure">Figure 2</a>)
	is similar to that suggested by
	McCann (1998). It also accounts for increased seismicity in southwestern
	Puerto Rico that is seen in some maps of small earthquakes (e.g., LaForge and
	McCann, 2003), but not reflected in our catalog. Hazard is computed for the
	distance range 0 to 200 km and moment-magnitude range 6.5 to 7.5. (For grid
	cells that fall within 10 kilometers of the trace of the South Lajas fault,
	the maximum magnitude is reduced from 7.5 to 7.0 to avoid overlapping hazard
	contributions - see below.) The model predicts the occurrence of a
	moment-magnitude-6.5-or-greater earthquake in the zone about every 50 years;
	our catalog contains two M=6.5-or-greater earthquakes and nine
	M=6.0-or-greater earthquakes since 1860, including the M~7.5 event of 1918.
	Ground-motions are computed with the same group of five relations used above
	for shallow seismicity, using coefficients for strike-slip faulting, and
	adding a relation from Spudich and others (1999) for extensional tectonic
	regimes. M&amp;A receives 10&#37; weight, and each of the other five 18&#37;
	in the ground-motion-relation logic tree.
</p>
<p>
	The east-northeast-striking Anegada Passage, offshore southeastern Puerto
	Rico, coincides with a series of fault-bounded basins and a zone of tectonic
	transtension where displacement from the eastern end of the Muertos Trough is
	thought to be transferred to the Puerto Rico Trench (e.g., Jansma and others,
	2000). The extensional zone may have been initially formed during a previous
	episode of counterclockwise rotation of the PRVI microplate, but current
	tectonism is enigmatic, with negligible movement between GPS sites on St.
	Croix and Virgin Gorda constraining possible slip rates. The zone shape
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig02.gif" title="Figure 2" class="figure">Figure 2</a>)
	follows McCann (1993) as extended
	northeastward beyond the Virgin Islands (W. McCann, personal communication, 2
	003). Jansma and others propose that slip across the zone must be less than
	2 mm/yr. LaForge and McCann (2003) use 2.4 mm/yr for consistency with the
	rate assigned to the Muertos Trough system in their model. We assign 1 mm/yr
	of east-west extension to the Anegada Passage zone. The model predicts the
	occurrence of a moment-magnitude-6.5-or-greater earthquake in the zone about
	every 300 years; historically, the M~7.3 earthquake of 1867 occured in the
	Anegada Passage. The hazard analysis is similar to that described above for
	the Mona Passage extensional zone. A map of probabilistic pga for the Mona
	Passage and Anegada Passage models is shown in
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig03e.gif" title="Figure 3E" class="figure">Figure 3E</a>.
</p>

<h3>Eastern Septentrional fault and South Puerto Rico Slope fault</h3>
<p>
	The Septentrional fault system extends east-southeastward, subparallel to the
	Puerto Rico Trench, from northern Hispaniola toward Puerto Rico
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig02.gif" title="Figure 2" class="figure">Figure 2</a>).
	This transitional feature
	accommodates an increasing partition of left-lateral strike-slip motion with
	increasing distance west of PRVI, until it becomes the major plate boundary
	structure in central Hispaniola (e.g., Prentice and others, 1993, 2003) with
	upwards of 9 mm/yr of slip. A major concern in assessing the seismic hazard
	of Puerto Rico is estimating the importance of the eastern reach of the
	Septentrional fault and its possible eastward extension across Mona Canyon,
	the South Puerto Rico Slope fault zone. Deformation at the longitude of
	Puerto Rico may be taken up along other strike-slip structures that lie
	farther north, closer to the Puerto Rico Trench, such as the Northeastern
	Hispaniola Slope fault and the North Puerto Rico Slope fault zone (Grindlay
	and others, 1997; Dolan and others, 1998; LaForge and McCann, 2003; U. ten
	Brink, personal communication, 2003), structures that do not pose a
	significant ground motion threat to Puerto Rico. Unfortunately, it is
	difficult to estimate the relative importance of these structures directly.
</p>
<p>
	The eastern reach of the Septentrional fault apparently intersects Mona
	Canyon near 67.5 degrees west longitude, but does not offset the canyon, and
	its possible extension east of Mona Canyon is unknown. The 350-km total
	length of the fault correlates with magnitude 8.0, using the relations of
	Wells and Coppersmith (1994). Prentice and others (2003) find a slip rate of
	9 mm/yr in central Hispaniola from paleoseismic analysis. LaForge and McCann
	(2003) argue, however, that the slip rate and maximum magnitude must
	decrease along the eastern reach of the fault, and use a magnitude of 7.3 and
	a slip rate of 2 mm/yr in their model. There are no direct estimates of the
	slip rate, and about the only constraint on the parameters required for the
	seismic hazard calculation is the observation that there have been no major
	earthquakes associated with the eastern Septentrional fault historically. In
	Table 1 we consider several &ldquo;end member&rdquo; rupture scenarios, and
	use this weak constraint to test their plausibility. Recurrence times implied
	by the two high-slip-rate, moment-magnitude-7.3 scenarios are too short; the
	surviving four scenarios are combined as characteristic ruptures in a logic
	tree with equal 0.25 weights. Ground-motions are computed with the same
	group of four relations used for shallow seismicity, using coefficients for
	strike-slip faulting.
</p>

<table>
	<caption>Table 1. Septentrional fault scenarios</caption>
	<thead>
		<tr>
			<th scope="col">Moment Magnitude</th>
			<th scope="col">Slip Rate (mm/yr)</th>
			<th scope="col">Implied Recurrence (yr)</th>
			<th scope="col">Comment</th>
		</tr>
	</thead>
	<tbody>
		<tr><td>7.3</td><td>9</td><td>70</td><td>too frequent</td></tr>
		<tr><td>7.3</td><td>5</td><td>130</td><td>too frequent</td></tr>
		<tr><td>7.3</td><td>2</td><td>310</td><td>OK?</td></tr>
		<tr><td>8.0</td><td>9</td><td>770</td><td>OK</td></tr>
		<tr><td>8.0</td><td>5</td><td>1400</td><td>OK</td></tr>
		<tr><td>8.0</td><td>2</td><td>3600</td><td>OK</td></tr>
	</tbody>
</table>

<p>
	Estimates of the slip rate on the South Puerto Rico Slope fault zone range
	from 9 mm/yr (as the eastward extension of the Septentrional fault) to zero
	(the transverse component of deformation is fully accommodated along
	structures farther to the north). LaForge and McCann (2003 assign it a slip
	rate of 1 mm/yr in their model, but note that it may be inactive. The 160-km
	total length of the fault correlates with magnitude 7.6, using the relations
	of Wells and Coppersmith (1994). Following LaForge and McCann, we assign a
	slip rate of 1 mm/yr (corresponding to a recurrence of 3900 years), and use
	the same suite of four ground motion relations that were used for the
	Septentrional fault. The sensitivity of probabilistic ground motions in
	Puerto Rico to the choice of slip rate on the South Puerto Rico Slope fault
	zone is discussed below.
</p>

<h3>South Lajas fault</h3>
<p>
	Prentice and others (2000) have trenched the east-west-striking South Lajas
	fault in southwestern Puerto Rico, finding evidence for two
	surface-rupturing earthquakes in the last 7500 years. The 50-km total length
	of the fault (LaForge and McCann, 2003) correlates with moment magnitude 7.0
	using the relations of Wells and Coppersmith (1994). We include the fault in
	the hazard model as a characteristic earthquake with moment magnitude = 7.0
	and recurrence time = 3500 years, using the same suite of four ground motion
	relations that were used for the Septentrional fault.
</p>

<h3>Discussion</h3>
<p>
	Maps of probabilistic pga, 1.0-second spectral acceleration, and 0.2-second
	spectral acceleration, including the contributions from all modeled sources,
	for a probability of exceedance of 2&#37; in 50 years (approximately
	2500-year return time) are shown in
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig04.gif" title="Figure 4" class="figure">Figure 4</a>,
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig05.gif" title="Figure 5" class="figure">Figure 5</a>,
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig06.gif" title="Figure 6" class="figure">Figure 6</a>
	respectively. Corresponding maps for an exceedance probability of 10&#37; in
	50 years (approximately 500-year return time) are shown in
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig07.gif" title="Figure 7" class="figure">Figure 7</a>,
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig08.gif" title="Figure 8" class="figure">Figure 8</a>, and
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig09.gif" title="Figure 9" class="figure">Figure 9</a>.
</p>
<p>
	The range of probabilistic ground motions for PRVI is roughly comparable to
	that found in the Basin and Range province of the western United States.
	LaForge and McCann (2003) conduct a seismic hazard analysis for sites at the
	four corners of the island of Puerto Rico. For western Puerto Rico our pga
	values agree with theirs to within 5-10&#37; For eastern Puerto Rico our pga
	values are systematically 10-15&#37; greater than theirs. We note the strong
	clusters of seismicity near and north of the Virgin Islands
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig03a.gif" title="Figure 3A" class="figure">Figure 3A</a>,
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig03b.gif" title="Figure 3B" class="figure">Figure 3B</a>)
	that are strong contributors to the
	hazard in eastern Puerto Rico and the Virgin Islands in our model (see
	below), whereas background seismicity is distributed into a uniform areal
	zone in the LaForge and McCann approach. Additionally, we use a maximum
	moment-magnitude value of 7.0 for these sources, instead of their 6.5.
</p>
<p>
	The sensitivity of our results to the choice of slip rate on the South Puerto
	Rico Slope fault zone is explored in Figure 10 -
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig10.gif" title="Figure 10" class="figure">Figure 10</a>.
	The maps show probabilistic pga from
	all modeled sources, comparing 9-mm/yr (440-year recurrence) and 1-mm/yr
	(3900-year recurrence) characteristic scenarios for the SPRSFZ. Near the
	fault (upper-left corner of each map) there are significant pga differences,
	but closer sources dominate the hazard in Puerto Rico, and differences there
	are negligible (note, for example, the 50&#37;g contour that cuts across the
	northwest coast of the island).
</p>
<p>
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig11.gif" title="Figure 11" class="figure">Figure 11</a>
	and
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig12.gif" title="Figure 12" class="figure">Figure 12</a>
	explore the sensitivity of our results to the choice of weight given to the
	Motazedian and Atkinson (2003) relation in the ground-motion relation logic
	tree. The maps show probabilistic 0.2-second
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig11.gif" title="Figure 11" class="figure">Figure 11</a>)
	and 1.0-second
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig12.gif" title="Figure 12" class="figure">Figure 12</a>)
	spectral acceleration from all modeled sources, comparing 50&#37; and 10&#37;
	weights for the M&amp;A relation.
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig11.gif" title="Figure 11" class="figure">Figure 11</a>
	shows much larger 0.2-second ground
	motions for 50&#37; weight - as much as 60&#37; larger in the southwestern
	corner of Puerto Rico where the hazard is dominated by the Mona Passage
	extensional zone and South Lajas fault sources (see below), both of which use
	the M&amp;A relation. From a geologic point of view, one might expect lower
	attenuation in PRVI than in tectonically active California, but concern over
	the very large high-frequency motions accounts for the low weight used for
	M&amp;A in the final hazard model - pending further evaluation of the
	relation.
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig12.gif" title="Figure 12" class="figure">Figure 12</a>
	shows that 1.0-second ground motion differences are small.
</p>

<p>
	Figure 13 shows hazard curves with contributions from individual model
	elements for six sites. At San Juan
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig13a.gif" title="Figure 13A" class="figure"
	>Figure 13A</a>) for both 2&#37; and 10&#37;
	probability of exceedance in 50 years (PE50) shallow seismicity, deep
	seismicity, and the Puerto Rico segment subduction account, about equally,
	for essentially all the hazard. At Mayaguez
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig13b.gif" title="Figure 13B" class="figure"
	>Figure 13B</a>) and Ponce
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig13c.gif" title="Figure 13C" class="figure"
	>Figure 13C</a>) the Mona Passage extensional zone
	dominates the hazard (increasingly at longer return times), with smaller
	contributions from shallow and deep seismicity. At Charlotte Amalie, St.
	Thomas
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig13d.gif" title="Figure 13D" class="figure"
	>Figure 13D</a>) shallow and deep seismicity
	dominate the hazard, equally at 2&#37; PE50, with much smaller contributions
	from the Puerto Rico segment subduction and the Anegada Passage extensional
	zone. At Christiansted, St. Croix
	(<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig13e.gif" title="Figure 13E" class="figure"
	>Figure 13E</a>) deep seismicity dominates the
	hazard (more so at 10&#37; PE50 than 2&#37; PE50), with smaller contributions
	from shallow seismicity and the Anegada extensional zone. Finally,
	<a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig13f.gif" title="Figure 13F" class="figure"
	>Figure 13F</a> shows pga hazard curves for a point in
	southwestern Puerto Rico near the South Lajas fault; its contribution equals
	that of the Mona Passage extensional zone for 2&#37; PE50, and dominates the
	hazard for longer return times, demonstrating the importance of targeting
	possible active onshore faults for future research.
</p>

<h3>List of Figures</h3>
<ul id="figurelist">
<?php
	$files = glob('ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/*.pdf');
	foreach($files as $file) {
		$file = str_replace('.pdf', '.gif', $file);
		printf(
			'<li>Figure %2$s' .
				'<a href="%1$s" title="Figure %2$s" class="figure">' .
					'<img src="%1$s" alt="Figure %2$s"/>' .
				'</a>' .
			'</li>',
			$file, strtoupper(
				str_replace('.gif', '', str_replace(
					'ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/figures/fig', '', $file)
				)
			)
		);
	}
?>
</ul>

<h3>Acknowledgements</h3>
<p>
	We gratefully acknowledge discussions with Roland LaForge, Bill McCann,
	Carol Prentice, Christa von Hillebrandt, Gail Atkinson, Dariush Motazedian,
	Steve Harmsen, and C. B. Crouse. We received valuable input from participants
	of the workshop on seismic and tsunami hazards of Puerto Rico held in San
	Juan in March 1999, and feedback on a preliminary version of the hazard model
	from members of the TS-1 subcommittee of the Building Seismic Safety
	Commission chaired by C. B. Crouse. The figures in this paper were made with
	the Generic Mapping Tools (GMT) software (Wessel and Smith, 1991).
</p>

<h3>References</h3>
<ul class="referencelist">
	<li>
		Abrahamson, N.A., and W.J. Silva (1997). Empirical response spectral
		attenuation relations for shallow crustal earthquakes, Seism. Res.
		Letts., v. 68, 94-127.
	</li>
	<li>
		Atkinson, G.M., and D.M. Boore (2003). Empirical ground-motion relations
		for subduction zone earthquakes and their applications to Cascadia and
		other regions, Bull. Seism. Soc. Am. - in review.
	</li>
	<li>
		Boore, D.M., W.B. Joyner, and T.E. Fumal (1997). Equations for estimating
		horizontal response spectra and peak acceleration from western North
		American earthquakes: a summary of recent work, Seism. Res. Letts., v.
		68, 128-153.
	</li>
	<li>
		Campbell, K.W., and Y. Bozorgnia (2003). Updated near-source ground motion
		(attenuation) relations for the horizontal and vertical components of peak
		ground acceleration and acceleration response spectra, Bull. Seism. Soc.
		Am. - in press.
	</li>
	<li>
		Dolan, J.F., H. T. Mullins, and D.J. Wald (1998), Active tectonics of the
		north-central Caribbean: Oblique collision, strain partitioning, and
		opposing subducted slabs, in Dolan, J.F. and Mann, P., eds., Active
		Strike-Slip and Collisional Tectonics of the Northern Caribbean Plate
		Boundary Zone, Geological Society of America Special Paper 326, Boulder,
		Colorado, 1-61.
	</li>
	<li>
		Dolan, J.F.,and D.J. Wald (1998), The 1943-1953 north-central Caribbean
		earthquakes: Active tectonic setting, seismic hazards, and implications
		for Caribbean &ucirc; North America plate motions, in Dolan, J.F. and
		Mann, P., eds., Active Strike-Slip and Collisional Tectonics of the
		Northern Caribbean Plate Boundary Zone, Geological Society of America
		Special Paper 326, Boulder, Colorado, 143-169.
	</li>
	<li>
		Frankel, A., W.R. McCann, and A.J. Murphy (1980). Observations from a
		seismic network in the Virgin Islands region: tectonic structures and
		earthquake swarms, Bull. Seism. Soc. Am., v.85, 2669-2678.
	</li>
	<li>
		Frankel, A., C. Mueller, T. Barnhard, D. Perkins, E. Leyendecker, N.
		Dickman, S. Hanson, and M. Hopper (1996). National Seismic Hazard Maps:
		Documentation June 1996, USGS Open-File Report 96-532, 70 pages.
	</li>
	<li>
		Frankel, A. D., M.D. Petersen, C.S. Mueller, K.M. Haller, R.L. Wheeler, E.
		V.  Leyendecker, R.L. Wesson, S.C. Harmsen, C.H. Cramer, D.M. Perkins, and
		K.S. Rukstales (2002). Documentation for the 2002 Update of theNational
		Seismic Hazard Maps, USGS Open-File Report 02-420, 33 pages.
	</li>
	<li>
		Gardner, J.K., and L. Knopoff (1974). Is the sequence of earthquakes in
		southern California, with aftershocks removed, Poissonian?, Bull. Seism.
		Soc.  Am., v. 64, 1363-1367.
	</li>
	<li>
		Grindlay, N., P. Mann, and J. Dolan (1997). Researchers investigate
		submarine faults north of Puerto Rico, EOS, Transactions, AGU, v.78, n.38,
		404.
	</li>
	<li>
		Jansma, P.E., G.S. Mattioli, A. Lopez, C. DeMets, T.H. Dixon, P. Mann, and
		E. Calais (2000). Neotectonics of Puerto Rico and the Virgin Islands,
		northeastern Caribbean, from GPS geodesy, Tectonics, v. 6, 1021-1037.
	</li>
	<li>
		LaForge, R.C., and W.R. McCann (2003). A seismic source model for Puerto
		Rico for use in probabilistic ground motion hazard analysis, submitted GSA
		Bulletin.
	</li>
	<li>
		Leyendecker, E.V., R.J. Hunt, A.D. Frankel, and K.S. Rukstales (2000).
		Development of maximum considered earthquake ground motion maps,
		Earthquake Spectra, v.16, 21-40.
	</li>
	<li>
		Masson, D.G., and K.M. Scanlon (1991). The neotectonic setting of Puerto
		Rico, Geol. Soc. Am. Bull., v. 103, 144-154.
	</li>
	<li>
		McCann, W. R. (1985). On the earthquake hazards of Puerto Rico and the
		Virgin Islands, Bull. Seism. Soc. Am., v.75, 251-262.
	</li>
	<li>
		McCann, W.R., J. Joyce, and C. Lithgow (1987). The Puerto Rico platelet at
		the northeastern edge of the Caribbean plate, EOS Trans. AGU, v.68, 1483.
	</li>
	<li>
		McCann, W.R. (1993). Seismic Hazard Map for Puerto Rico, Report to The
		Seismic Safety Commission of Puerto Rico, 60 pages.
	</li>
	<li>
		McCann, W.R. (1998). Tsunami hazard of western Puerto Rico from local
		sources: characteristics of tsunamigenic faults, Technical Report to the
		Department of Marine Sciences, University of Puerto Rico.
	</li>
	<li>
		Mercado, A., and W.R. McCann (1998). Numerical simulation of the 1918
		Puerto Rico tsunami, Natural Hazards, v.18, 57-76.
	</li>
	<li>
		Motazedian, D., and G. Atkinson (2003). Ground motion relations for Puerto
		Rico, submitted GSA Bulletin.
	</li>
	<li>
		Mueller, C., M. Hopper, and A. Frankel (1997). Preparation of earthquake
		catalogs for the national seismic hazard maps: contiguous 48 states, USGS
		Open-File Report 97-464, 36 pages.
	</li>
	<li>
		Prentice, C.S., P. Mann, F.W. Taylor, G. Burr, and S. Valastro (1993).
		Paleoseismicity of the North American Caribbean plate boundary
		(Septentrional fault), Dominican Republic, Geology, v. 21, 49-52.
	</li>
	<li>
		Prentice, C.S., P. Mann, P., and G. Burr (2000). Prehistoric earthquakes
		associated with a Late Quaternary fault in the Lajas Valley, southwestern
		Puerto Rico, EOS, Transactions of the American Geophysical Union, v. 81,
		F1182 (abstract).
	</li>
	<li>
		Prentice, C.S., P. Mann, L.R. Pena, and G. Burr (2003). Slip rate and
		earthquake recurrence along the central Septentrional fault, North
		American &ucirc; Caribbean plate boundary, Dominican Republic, in press
		Jour. Geophys.  Res.
	</li>
	<li>
		Sadigh, K., C.-Y. Chang, J.A. Egan, F. Makdisi, R.R. Youngs (1997).
		Attenuation relationships for shallow crustal earthquakes based on
		California strong motion data, Seism. Res. Letts., v. 68, 180-189.
	</li>
	<li>
		Spudich, P., W.B. Joyner, A.G. Lindh, D.M. Boore, B.M. Margaris, and J.B.
		Fletcher (1999). SEA99: A revised ground motion prediction relation for
		use in extentional tectonic regimes, Bull. Seism. Soc. Am., v. 89,
		1156-1170.
	</li>
	<li>
		Weichert, D.H. (1980). Estimation of earthquake recurrence parameters for
		unequal observation periods for different magnitudes, Bull. Seism. Soc.
		Am., v. 70, 1337-1356.
	</li>
	<li>
		Wells, D.L., and K.J. Coppersmith (1994). New empirical relationships
		among magnitude, rupture length, rupture width, rupture area, and surface
		displacement, Bull. Seism. Soc. Am., v.84, 974-1002.
	</li>
	<li>
		Youngs, R.R., S.-J. Chiou, W.J. Silva, and J.R. Humphrey (1997). Strong
		ground motion attenuation relationships for subduction zone earthquakes
		Seism. Res. Letts., v. 68, 58-73.
	</li>
	<li>
		Wessel, P. and W. H. F. Smith (1991). Free software helps map and display
		data, EOS Trans. AGU, 72, 441 &amp; 445-446.
	</li>
</ul>
