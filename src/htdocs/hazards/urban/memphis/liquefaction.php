<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/19/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Liquefaction Potential Maps for Memphis, Shelby County, Tennessee';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>
	New maps of liquefaction potential are now available for six, 7.5-minute quadrangles in Memphis, Shelby County (Figure 1).
</p>

<figure class="right">
	<img src="images/liq_NCS_LPI_15.jpg" alt="" />
	<figcaption>
		Figure 1. Liquefaction potential map showing the probabilities of major
		liquefaction-induced damage, or equivalently of a liquefaction potential
		index of LPI&gt;15, from a Mw = 7.7 earthquake on one of the major faults
		in the southwestern portion the New Madrid seismic zone. These
		probabilities vary primarily because the different sediments found
		throughout the city respond very differently to earthquake shaking.
	</figcaption>
</figure>

<p>
	Earthquake shaking caused by seismic waves can do significant damage to our built environment.
	In addition to the direct effects, seismic waves also can cause the ground to fail
	in a process called liquefaction.
	Liquefaction occurs when otherwise strong sediments are shaken and loose their ability
	to support any weight, as they effectively turning into a slurry of water and sediment.
	Memphis and surrounding Shelby County are vulnerable to earthquakes
	in the New Madrid seismic zone. This seismic zone, which extends from southeastern Missouri
	to northwestern Tennessee and northeastern Arkansas (Figure 2),
	hosted three large earthquakes in 1811-1812 with magnitudes between 7.5 and 8.0 (Tuttle et al., 2002)
	and thousands of aftershocks.
	Earthquakes of comparable size have happened at least twice before,
	around 1450 and 900 AD and therefore, we expect that they will happen again in the future.
	Liquefaction occurred over vast areas of the New Madrid seismic zone
	during the 1811-1812 earthquakes and is a significant hazard to consider when preparing for earthquakes.
	Our best estimates show there’s a 7-10% chance of such major earthquakes occurring
	in the next 50-years.
	Smaller, more frequent earthquakes also may cause liquefaction locally;
	the chance of a magnitude 6.0 or greater occurring somewhere in the New Madrid seismic zone
	in 50 years is high, between 25% and 40%.
</p>

<figure class="right" style="max-width:350px">
	<img src="images/nmsz_paleo.gif" alt=""/>
	<figcaption>
		Figure 2. Map showing liquefaction and the Mississippi embayment. (Click for larger version.)
	</figcaption>
</figure>

<p>
	Memphis and Shelby County are located within a geologic region called the Mississippi embayment
	(Figure 2), which has characteristics that profoundly affect how the ground shakes during earthquakes.
	The subsurface is like a southward-deepening trough that is filled with loose (unconsolidated) sediments.
	The depth of this trough, and thus the thickness of these sediments,
	ranges from a few meters (1 meter = 3 feet) along the embayment edges to more than 1,000 meters in the center.
	Memphis and Shelby County sit atop about 800 meters of sediments,
	although it is the composition of the top 30 meters (~100 feet)
	or less that is most important when considering the potential for liquefaction.
</p>
<p>
	To assess the potential for liquefaction in Memphis and Shelby County,
	the various geologic materials exposed at the surface have been mapped
	and their properties measured. Sediments deposited by rivers,
	and artificial fill used for construction, are of particular importance
	for assessing liquefaction potential. Noteworthy rivers in Memphis and Shelby County
	include the Mississippi and Wolf Rivers and Nonconnah Creek,
	each with its own sediment-covered floodplain extending beyond the current banks.
	These and the sediments of smaller tributaries are easily recognized by geologists
	and can be seen on new <a href="index.php#geologic">geologic maps</a>
	of the area.
	These maps also include many areas identified by geologists as artificial fill.
	Note that the susceptibility of artificial fill to liquefaction depends strongly
	on its composition and how it is engineered at the site where it’s used.
	The geologic maps identify most, but not all, areas with artificial fill,
	and its specific characteristics at any given site are not distinguished
	(because we don’t know them). We emphasize that all the Memphis maps should not be used
	for site-specific assessments, particularly when areas of artificial fill are of concern.
</p>
<p>
	Many of the sediments in the Mississippi embayment are susceptible to liquefaction.
	Geologic features buried in the sediment strata that are indicative of liquefaction
	from past earthquakes have been identified along the banks of the Wolf River,
	although the dates of the earthquakes that caused them are unknown.
	Several maps of liquefaction susceptibility in Memphis and Shelby County
	already exist (Broughton et al., 2001, Van Arsdale and Cox, 2003, Lin et al., 1996;
	Hwang et al., 1999) but these assign estimates of the potential for liquefaction qualitatively,
	based on either geologic or engineering measurements alone.
	These newer maps combine both types of measurements and quantify the liquefaction potential
	so that results are objective and reproducible.
	Additionally, unlike the previous maps, the new maps consider the required shaking levels
	and the severity of the liquefaction.
	The shaking levels expected in Memphis are shown
	in the <a href="index.php">earthquake ground motion maps</a> derived
	for the same area (see Cramer et al., 2004, 2006).
</p>
<p>
	The potential for liquefaction to occur with a particular severity is quantified
	in terms of the ‘liquefaction potential index’ (LPI) (Iwasaki et al., 1978; 1982).
	Given a particular severity level, for example major liquefaction corresponding
	to LPI&gt;15, the maps show the probabilities of such strong liquefaction occurring
	and how the probability varies throughout Memphis.
	We have produced two types of these liquefaction potential maps.
	The first are scenario maps (Figure 1), derived for the shaking levels expected
	for a particular earthquake (e.g. a magnitude 7.7 event northwest of Memphis)
	regardless of its likelihood of occurring.
	The second are ‘probabilistic’ maps, displaying the liquefaction potential
	for the shaking expected in a 50-year time window accounting for all earthquakes
	and the likelihoods of each occurring.
</p>
<p>
	The methodology employed to derive the liquefaction potential maps
	for Memphis is similar to that used by Holzer et al. (2002, 2006a, 2006b).
	A detailed description may be found in <a href="ftp://hazards.cr.usgs.gov/web/nshm/urban/memphis/download/Memphis_LPI.pdf">Rix and Romero (2006)</a>,
	and summarized as the following steps.
</p>
<ul>
	<li>
		1) Measure standard penetration test (SPT) and cone penetration test (CPT) profiles at many locations throughout Memphis.
	</li>
	<li>
		2) For each profile:
		<ul>
			<li>
				a. Identify the geologic materials at the surface at the profile location using the geologic map.
			</li>
			<li>
				b. Derive liquefaction resistance from the SPT and CPT profiles.
			</li>
			<li>
				c. For a suite of shaking amplitudes and durations:
				<ul>
					<li>
						i) Determine the factor of safety against liquefaction using the
						simplified procedure (Seed and Idriss, 1971; Youd et al., 2001).
					</li>
					<li>
						ii) Calculate the LPI for each profile based on the factor of safety against liquefaction.
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		3) Aggregate the estimated LPIs to obtain a distribution of LPIs for each shaking
		amplitude, duration, and surficial geologic material. From these distributions the
		probability of obtaining an LPI above a specified value (e.g. LPI&gt;15 as in the
		above example) at every site on the geologic map, and therefore throughout the City,
		can be estimated.
	</li>
</ul>

<p>
	All maps may be <a href="liq_download.php">downloaded</a> in image format. ArcGIS formats will be available October 2006.
</p>
<p>
	Maps were produced by Glenn Rix and Salome Romero-Hudock (Georgia Institute of Technology) under a grant from the USGS National Earthquake Hazards Reduction Program, Chris Cramer (USGS), and Kathleen Tucker (USGS, University of Memphis).
</p>

<h2>References</h2>
<ul class="referencelist">
	<li>Broughton, A.T., Van Arsdale, R.B., and Broughton, J.H., 2001. Liquefaction susceptibility mapping in the city of Memphis and Shelby County, Tennessee, Engineering Geology 62, 201-222.</li>
	<li>Cramer, C,H., Gomberg, J.S., Schweig, E.S., Waldron, B.A., and Tucker, K., 2004. The Memphis, Shelby County, Tennessee Seismic Hazard Maps, U.S. Geological Survey Open-File Report 04-1294.</li>
	<li>Cramer, C., J.S. Gomberg, E.S. Schweig, B.A. Waldron, and K. Tucker, 2006, First USGS urban hazard maps predict the effects of soils, Seismological Research Letters, 77, 23-29.</li>
	<li>Holzer, T.L., Bennett, M.J., Noce, T.E., Padovani, A.C., and Tinsley, J.C. III, 2002. Liquefaction Hazard and Shaking Amplification Maps of Alameda, Berkeley, Emeryville, Oakland, and Piedmont, California: a Digital Database, U.S. Geological Survey Open-File Report 02-296.</li>
	<li>Holzer, T.L., Bennett, M.J., Noce, T.E., Padovani, A.C., and Tinsley, J.C. III, 2006a. Liquefaction hazard mapping with LPI in the greater Oakland, California area, Earthquake Spectra, in press.</li>
	<li>Holzer, T.L., Blair, J.L., Noce, T.E., and Bennett, M.J., 2006b. Predicted liquefaction of East Bay fills during a repeat of a 1906 San Francisco earthquake, Earthquake Spectra, in press.</li>
	<li>Hwang, H., Chien, M.C., and Lin, Y.W., 1999. Investigation of soil conditions in Memphis, Tennessee, USGS Award No. 1434-HQ-98-GR-00002.</li>
	<li>Iwasaki, T., Tatsuoka, F., Tokida, K., and Yasuda, S., 1978. A practical method for assessing soil liquefaction potential based on case studies at various sites in Japan, in Proceedings 2nd International Conference on Microzonation, pp. 885-896.</li>
	<li>Iwasaki, T., Tokida, K., Tatsuoka, F., Watanabe, S., Yasuda, S., and Sato, H., 1982. Microzonation for soil liquefaction potential using simplified methods, in Proceedings 3rd International Conference on Microzonation, pp. 1319-1330.</li>
	<li>Lin, H., Hwang, H.H.M., and Chou, T., 1996. Estimation of liquefaction potential and permanent ground deformation using neural network technology and GIS, Center for Earthquake Research and Information, The University of Memphis.</li>
	<li>Rix, G.J. and S. Romero-Hudock, 2006, Liquefaction Potential Mapping in Memphis and Shelby County, Tennessee, Engineering Geology, 27 p., submitted.</li>
	<li>Tuttle, M.P., Schweig, E.S., Sims, J.D., Lafferty, R.H., Wolf, L.W., and Haynes, M.L., 2002. The earthquake potential of the New Madrid seismic zone, Bulletin of the Seismological Society of America, 92, 2080-2089.</li>
	<li>Van Arsdale, R.B. and Cox, R., 2003. Surficial geologic and liquefaction susceptibility mapping in Shelby County, Tennessee, USGS Award No. 00HQGR0031.</li>
</ul>
