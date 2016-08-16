<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Earthquake Processes and Effects';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
      include 'template.inc.php';
    }
?>

<h2>Post-Earthquake Motions</h2>

<figure class='right w300'>
  <img src="images/hectormine.jpg" alt=""/>
  <figcaption>
    One of the most illuminating examples of using GPS data
to learn about afterslip and relaxation is in the aftermath
of the M7.1 October 16, 1999, Hector Mine, California,
earthquake.
</figcaption>
</figure>

<p>
  After a large earthquake, the crust does not stop moving.  Earthquakes such as the 1994 M6.7 Northridge, California, or 1989 M6.9 Loma Prieta, California, earthquakes are followed by hundreds of aftershocks, some of them damaging. Many aftershocks occur on the causative fault or its extension into the deeper earth.  The slip associated with these aftershocks is termed afterslip.   It may occur in the form of ordinary earthquakes or as slow slip that is not felt.
</p>
<p>
  Another process that occurs after an earthquake is relaxation of the ductile rock that underlies the uppermost crust.  While most earthquakes occur in the uppermost crust because frictional resistance is high (and hence stress builds up over long periods of time), few occur in the deeper crust or underlying mantle because the rock temperature is too high to permit accumulation of stress.  Instead, stress is accommodated by flow of the rock.  The depth where the transition from brittle friction to ductile flow is called the brittle-ductile transition, and it generally coincides with the maximum depth of earthquakes, typically 10-20 km (<a href="http://pubs.usgs.gov/of/2003/of03-214/WG02_OFR-03-214_AppendixA.pdf">Implications of the Depth of Seismicity for the Rupture Extent of Future Earthquakes in the San Francisco Bay Area</a>).
</p>
<p>
  Understanding these processes is important for estimating how faults interact with one another through stress transfer, which can change the seismic hazard for years after an earthquake.  Part of this understanding comes from better knowledge of the temperature and composition of rocks deep beneath earth&rsquo;s surface.
</p>

<div class="row">
  <div class="column one-of-two">
    <figure>
  		<img src="images/afterslip.png" alt="afterslip"/>
  		<figcaption>Afterslip</figcaption>
    </figure>
  </div>
  <div class="column one-of-two">
    <figure>
		<img src="images/relaxation.png" alt="relaxation"/>
		<figcaption>Lower crust and upper mantle relaxation</figcaption>
	</figure>
  </div>
</div>

<figure>
  <figcaption>
    Areas colored yellow either slip or flow after a large earthquake. Both the afterslip and relaxation processes occur deep under the faults (schematic red lines) that originally slipped in the earthquake. UC, Upper Crust; LC, Lower Crust; UM, Upper Mantle. The UC/LC boundary is schematically the brittle-ductile transition.  Determining whether afterslip or relaxation occur after an earthquake is an active research area. Figure is courtesy of Liz Hearn.
  </figcaption>
</figure>

<div class='row'>
  <div class='column one-of-four'>
    <figure><img src="images/coseismic.png" alt="coseismic"/></figure>
  </div>
  <div class='column one-of-four'>
    <figure><img src="images/5year.png" alt="5year"/></figure>
  </div>
  <div class='column one-of-four'>
    <figure><img src="images/20year.png" alt="20year"/></figure>
  </div>
  <div class='column one-of-four'>
    <figure><img src="images/50year.png" alt="50year"/></figure>
  </div>
</div>
<figure>
  <figcaption>
    An example of the postseismic motions occurring over the year following a thrust (Northridge-type) earthquake is illustrated here.  The co-seismic motions occur suddenly at the time of the earthquake, the postseismic motions gradually after the earthquake through the relaxation process.  The earthquake originally occurs in the upper gray layer (low-temperature rock), overlying a deeper high-temperature region.
  </figcaption>
</figure>

<h3>Case Study: M7.1 October 16, 1999 Hector Mine, California, Earthquake</h3>

<p>
  The Hector Mine earthquake occurred in the central Mojave Desert and produced several meters of slip along faults of total length ~40 km.   It was well-recorded by continuous GPS sites of the SCIGN Network that were already in place in the aftermath of the 1992 M7.3 Landers earthquake, as well as new continuous and survey-mode GPS that were installed in the region by scientists soon after the Hector Mine quake.
</p>
<p>
  Both afterslip on thin zones below the causative fault and relaxation of the flowing lower crust and mantle occurred in the months and years after the Hector Mine earthquake.
</p>
<p>
  2.5 years after the 1999 Hector Mine quake quake, almost all regional motions above the &lsquo;background&rsquo; tectonic motions are due to flow of rock in the lower crust and upper mantle.  This motion can be tracked unambiguously up to 10.46 years after the 1999 Hector Mine quake, at which time the M7.2 April 4, 2010 El Mayor-Cucapah earthquake changed the regional flow pattern. A model of the flow based on the laboratory behavior of wet olivine and mafic granulite compositions (Thatcher and Pollitz, 2008) agrees well with observed motions.
</p>

<br style="clear:left;"/>

<div class='row'>
  <div class='column one-of-two'>
    <figure>
      <img src="images/observed-modeled.png" alt="observed-modeled"/>
    </figure>
  </div>
  <div class='column one-of-two'>
    <figure>
      <img src="images/vertical-rate.jpg" alt="vertical-rate"/>
    </figure>
  </div>
</div>

<div class='row'>
  <div class='column one-of-two'>
    <figure>
      <img src="images/afterslip-hm.png" alt=""/>
      <figcaption>
        Afterslip up to a few meters occurred during the first few months after the 1999 Hector Mine quake.  Most was deep under the northwest branch of the earthquake rupture.
      </figcaption>
    </figure>
  </div>
  <div class='column one-of-two'>
    <figure>
      <img src="images/vicosity.png" alt="vicosity"/>
    </figure>
  </div>
</div>

<h4>References</h4>

<ul class="referencelist">
	<li>Pollitz, F.F., in preparation (2014).  Post-earthquake relaxation evidence for laterally variable viscoelastic  structure and elevated water concentration in the southwestern California mantle.</li>
	<li>Thatcher, W. and Pollitz, F.F. (2008).  Temporal evolution of continental lithospheric strength in actively deforming regions, GSA Today, 18, 4-11.</li>
</ul>
