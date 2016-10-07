<?php
      //  Author:  Tiffany Kalin
      //  Contact: Mark Peterson
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Foreign Hazard Maps';
      $NAVIGATION  = true;
      $HEAD = '<link rel="stylesheet" href="styles.css"/>';
      include  'template.inc.php';
      }
?>
<div class="row">
  <div class="column two-of-three">

  	<h2>Afghanistan</h2>
  	<img class="right" src="images/afghanistan.gif" alt="Afghanistan"/>
  	<ul>
  		<li><a href="afghanistan/maps.php">Maps</a></li>
  		<li><a href="afghanistan/data.php">Data</a></li>
  		<li><a href="afghanistan/software.php">Software</a></li>
  		<li><a href="http://pubs.usgs.gov/of/2007/1137/">Documentation</a></li>
  	</ul>
  	<p>
  		Probabilistic seismic hazard maps have been prepared for Afghanistan
      portraying ground motion values (peak ground acceleration and spectral
      amplitude at periods of 0.2 and 1.0 seconds) at probabilities of
      exceedance of 2% 5% and 10% in 50 years. Preparation of these maps
      followed the same general strategy as that followed for the U.S.G.S.
      seismic hazard maps of the contiguous United States, combining hazard
      derived from spatially-smoothed historic seismicity with hazard from
      fault-specific sources.
  	</p>
  	<ul>
  		<li><a href="http://afghanistan.cr.usgs.gov/earthquake-hazards"
  				target="_blank" >USGS Projects in Afghanistan</a>
  		</li>
  	</ul>

  	<h2>Southeast Asia</h2>
  	<img class='right' src="images/sumatra.gif" alt="Sumatra"/>
  	<ul>
  		<li><a href="/hazards/products/images/SEASIA_2007.pdf">Documentation</a></li>
  	</ul>
  	<p>
  		The ground motion hazard for Sumatra and the Malaysian peninsula is
  		calculated in a probabilistic framework, using procedures developed for
  		the US National Seismic Hazard Maps. We constructed regional earthquake
  		source models and used standard published and modified attenuation
  		equations to calculate peak ground acceleration at 2&#37; and 10&#37;
  		probability of exceedance in 50 years for rock site conditions. We
  		developed or modified earthquake catalogs and declustered these
  		catalogs to include only independent earthquakes. The resulting
  		catalogs were used to define four source zones that characterize
  		earthquakes in four tectonic environments: subduction zone interface
  		earthquakes, subduction zone deep intraslab earthquakes, strike-slip
  		transform earthquakes, and intraplate earthquakes.
  	</p>
    <p>
      Reference:<br/><i>Petersen, M. D., Dewey, J., Hartzell, S., Mueller, C., Harmsen, S., Frankel, A., & Rukstales, K. (2004). Probabilistic seismic hazard analysis for Sumatra, Indonesia and across the Southern Malaysian Peninsula. Tectonophysics,390(1), 141-158.</i>
    </p>

  	<h2>State of Gujarat, India</h2>
  	<img class='right' src="images/gujarat.gif" alt="India"/>
  	<p>
  		We test the sensitivity of seismic hazard to three fault source
  		models for the northwestern portion of Gujarat, India. The models
  		incorporate different characteristic earthquake magnitudes on three
  		faults with individual recurrence intervals of either 800 or 1600
  		years. These recurrence intervals imply that large earthquakes occur
  		on one of these faults every 266&mdash;533 years, similar to
  		the rate of historic large earthquakes in this region during the
  		past two centuries and for earthquakes in intraplate environments
  		like the New Madrid region in the central United States.
  	</p>
    <p>
      Reference:<br/><i>Petersen, M. D., Rastogi, B. K., Schweig, E. S., Harmsen, S. C., & Gomberg, J. S. (2004). Sensitivity analysis of seismic hazard for the northwestern portion of the state of Gujarat, India. Tectonophysics, 390(1), 105-115.</i>
    </p>

  	<h2>South America</h2>
  	<img class='right' src="images/southamerica.jpg" alt="South America" />
  	<ul>
  		<li><a href="images/SAmer-Proceedings2010.pdf">2010 Conference Proceedings</a></li>
  	</ul>
  	<p>The USGS has developed a preliminary seismic hazard model using available
  		 seismic catalogs, fault databases, and hazard methodologies to help
  		facilitate discussions and to ascertain data requirements and availability.
  		This preliminary seismic hazard model follows the methodology that was
  		developed by the USGS for the United States (Petersen et al., 2008). The
  		SASHA source model includes a smoothed seismicity component applied across
  		the entire continent that accounts for earthquakes M 5-7, subduction zone
  		sources M 7-9.5, and crustal faults M 7-8. The primary tectonics for this
  		region involve subduction of the Nazca plate beneath the west portion of
  		the South American plate with related interface and intra-slab earthquakes
  		and shallow crustal earthquakes.</p>

  </div>

  <div class="column one-of-three">
  	<h2>Related Links</h2>
  	<ul>
  		<li><a href="seisrisk.php">SeisRisk III</a> - Pre-1996 US Hazard Maps and outside US hazard maps</li>
  		<li><a href="http://www.globalquakemodel.org/" target="_blank"
  				>Global Earthquake Model (GEM)</a></li>
  		<li><a href="http://www.seismo.ethz.ch/gshap/" target="_blank"
  				>Global Seismic Hazards Assesment Project (GSHAP)</a>
  				</li>
  	</ul>
  </div>
</div>
