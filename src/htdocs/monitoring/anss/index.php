<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	11/10/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'ANSS - Advanced National Seismic System';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<p>
  <img src="images/ANSS_logo.gif" alt="logo"/>
</p>
<div class="row">
	<div class="column one-of-two">
    <p>
    	As part of its monitoring activities, the ANSS includes a national
    	Backbone network, the
    	<a href="/contactus/golden/neic.php"> National Earthquake Information Center (NEIC)</a>
    	, the <a href="nsmp/">National Strong Motion Project</a>
    	, and 15 regional seismic networks operated by USGS and its partners.
    	When earthquakes strike, ANSS delivers
    	real-time information
    	, providing situational awareness for emergency-response personnel.
    	In regions with sufficient seismic stations, that information includes
    	&ndash;within minutes&ndash;a ShakeMap showing the distribution of
    	potentially damaging ground shaking, information used to target
    	post-earthquake response efforts. When fully implemented, ANSS will provide
    	such dense station coverage for all at-risk urban areas. Information from
    	ANSS is a key input to the USGS
    	<a href="/hazards/">National Seismic Hazard Maps</a>, which help communities
    	in earthquake-prone regions develop safer building practices.
    </p>
		<ul class="no-style linklist">
			<li>
				<a href="../operations/network.php?virtual_network=ANSS">
					<h4>ANSS Network Stations</h4>
					<img src="images/station.jpg" alt="ANSS map" height="75px" width="75px"/>
				</a>
				<p>
					Station information and operation status.
				</p>
			</li>
			<li>
				<a href="../operations/heliplot.php?virtual_network=ANSS">
					<h4>ANSS Heliplots</h4>
					<img src="images/heli.gif" alt="heliplot image" height="75px" width="75px"/>
				</a>
				<p>
					Real-time seismograms from ANSS stations
				</p>
			</li>
			<li>
				<a href="regions/">
					<h4>Regional Networks</h4>
					<img src="images/reg-pnsn.gif" alt="regional pnsn image" height="75px" width="75px"/>
				</a>
				<p>
					<ul style="margin-left:75px">
						<li><a href="/data/comcat/contributor/ak/">Alaska</a></li>
						<li><a href="/data/comcat/contributor/nc/">Northern California</a></li>
            <li><a href="/data/comcat/contributor/ci/">Southern California</a></li>
						<li><a href="/data/comcat/contributor/hvo">Hawaii</a></li>
						<li><a href="/data/comcat/contributor/uu/">Intermountain West</a></li>
						<li><a href="/data/comcat/contributor/ceri">Central &amp; Eastern US</a></li>
						<li><a href="/data/comcat/contributor/uw/">Pacific Northwest</a></li>
						<li><a href="/data/comcat/contributor/pr/">Puerto Rico &amp; US Territories</a></li>
					</ul>
				</p>
			</li>
			<li>
				<a href="products/">
					<h4>Products</h4>
					<img src="images/prod-shakecast3.gif" alt="Shakecast 3 product" height="75px" width="75px"/>
				</a>
				<p>
          The ANSS data has been used to develop many real-time information products.
				</p>
			</li>
		</ul>
	</div>
	<div class="column one-of-two">
    <div class="alert">
      <figure style="max-width:915px">
  		  <img src ="images/ANSSstations_w2014Hazard.jpg" alt="ANSS stations location"/>
        <figcaption>
          The ANSS backbone is based on the core of the original US National Seismic Network. In partnership with the National Science Foundation, the USGS worked with the Earthscope program (through the USArray project and IRIS) in 2004-2006 to upgrade and install new backbone stations. This effort was completed in September 2006, with 15 new stations installed and 20 existing stations upgraded. Today, the ANSS Backbone consists of nearly 100 stations in the United States, many of them contributed by partner networks and organizations.
        </figcaption>
      </figure>
    </div>
		<ul class="no-style">
			<li><a href="mission.php">Mission</a></li>
			<li><a href="milestones.php">Accomplishments</a></li>
			<li><a href="committees.php">Committees</a></li>
			<li><a href="partners.php">Partners</a></li>
			<li><a href="documents.php">Publications</a></li>
			<li>Contacts
				<ul>
					<li>ANSS Technical Manager - <a href="mailto:benz@usgs.gov">Harley Benz </a></li>
					<li>ANSS Coordinator - <a href="mailto:cwolfe@usgs.gov">Cecily Wolfe </a></li>
				</ul>
			</li>


		</ul>
	</div>
</div>
