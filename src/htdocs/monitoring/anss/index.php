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
<p>
	As part of its monitoring activities, the ANSS includes a national
	<a href="/monitoring/anss/backbone.php">Backbone network</a>, the
	<a href="/contactus/golden/neic.php"> National Earthquake Information Center (NEIC)</a>
	, the <a href="/monitoring/nsmp/">National Strong Motion Project</a>
	, and 15 regional seismic networks operated by USGS and its partners.
	When earthquakes strike, ANSS delivers
	<a href="/monitoring/anss/products/">real-time information</a>
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

<div class="row">
	<div class="column one-of-two">
		<ul class="no-style linklist">
			<li>
				<a href="../operations/network.php?virtual_network=ANSS">
					<h4>ANSS Network Stations (status page)</h4>
					<img src="" alt="" height="75px" width="75px"/>
				</a>
				<p>
					Station information and operation status.
				</p>
			</li>
			<li>
				<a href="../operations/heliplot.php?virtual_network=ANSS">
					<h4>Heliplots</h4>
					<img src="" alt="" height="75px" width="75px"/>
				</a>
				<p>
					<b>NEED TEXT HERE</b>
				</p>
			</li>
			<li>
				<a href="regions/">
					<h4>Regional Networks</h4>
					<img src="" alt="" height="75px" width="75px"/>
				</a>
				<p>
					<ul style="margin-left:75px">
						<li>Alaska</li>
						<li>California</li>
						<li>Hawaii</li>
						<li>Intermountain West</li>
						<li>Central &amp; Eastern US</li>
						<li>Pacific Northwest</li>
						<li>Puerto Rico &amp; US Territories</li>
					</ul>
				</p>
			</li>
			<li>
				<a href="products/">
					<h4>Products &amp; Services</h4>
					<img src="" alt="" height="75px" width="75px"/>
				</a>
				<p>
					<b>NEED TEXT HERE</b>
				</p>
			</li>
		</ul>
	</div>
	<div class="column one-of-two">
		<img src ="" alt="" height="300px" width="300px"/>
		<ul class="no-style">
			<li><a href="mission.php">Mission</a></li>
			<li><a href="milestones.php">Accomplishments</a></li>
			<li><a href="funding.php">Funding</a></li>
			<li><a href="committees.php">Committees</a></li>
			<li><a href="partners.php">Partners</a></li>
			<li><a href="documents.php">Publications</a></li>
			<li>Contacts
				<ul>
					<li><a href="mailto:benz@usgs.gov"><b>ANSS Technical Manager</b> - Harley Benz (benz@usgs.gov)</a></li>
					<li><a href="mailto:cwolfe@usgs.gov"><b>ANSS Coordinator</b> - Cecily Wolfe (cwolfe@usgs.gov)</a></li>
				</ul>
			</li>


		</ul>
	</div>
</div>




<!--
<h2>Network Codes</h2>
<p>
	The following network codes are assigned by the FDSN archive (IRIS DMC) to
	provide uniqueness to seismological data streams.  This is the complete list
	of seismic networks that are active in the United States:
</p>

<table cellpadding="0" cellspacing="0" border="0" class="tabular" id="tbldata">

	<thead>
		<tr>
			<th scope="col" class="code">Network Code</th>
			<th scope="col" class="name">Network Name</th>
			<th scope="col" class="operator">Operated by</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>AE</td>
			<td>Arizona Broadband Seismic Network</td>
			<td>Arizona Geological Survey</td>
		</tr>
		<tr>
			<td>AG</td>
			<td>Arkansas Seismic Network</td>
			<td>Arkansas Geological Survey</td>
		</tr>
		<tr>
			<td>AK</td>
			<td>Alaska Regional Network</td>
			<td>University of Alaska-Fairbanks</td>
		</tr>
		<tr>
			<td>AO</td>
			<td>Arkansas Seismic Observatory</td>
			<td>University of Arkansas at Little Rock</td>
		</tr>
		<tr>
			<td>AR</td>
			<td>Northern Arizona Network</td>
			<td>Arizona Earthquake Information Center</td>
		</tr>
		<tr>
			<td>AT</td>
			<td>Alaska Tsunami Warning Seismic System</td>
			<td>West Coast & Alaska Tsunami Warning Center</td>
		</tr>
		<tr>
			<td>AV</td>
			<td>Alaska Volcano Observatory</td>
			<td>USGS - Anchorage, University of Alaska, Geophysical Institute</td>
		</tr>
		<tr>
			<td>AZ</td>
			<td>ANZA Regional Network</td>
			<td>University of California, San Diego - USGS Menlo Park</td>
		</tr>
		<tr>
			<td>BK</td>
			<td>Berkeley Digital Seismic Network (BDSN)</td>
			<td>University of California, Berkeley</td>
		</tr>
		<tr>
			<td>CC</td>
			<td>Cascade Chain Volcano Monitoring</td>
			<td>USGS/Cascade Volcano Observatory</td>
		</tr>
		<tr>
			<td>CE</td>
			<td>California Strong Motion Instrumentation Program</td>
			<td>
				California Geological Survey (formerly California Division of Mines and
				Geology) - Earthquake Engineering
			</td>
		</tr>
		<tr>
			<td>CG</td>
			<td>Coso Microearthquake Network</td>
			<td>Geothermal Program Office, US Navy, China Lake</td>
		</tr>
		<tr>
			<td>CI *</td>
			<td>Southern California Seismic Network</td>
			<td>California Institute of Technology / USGS - Pasadena</td>
		</tr>
		<tr>
			<td>CO</td>
			<td>South Carolina Seismic Network</td>
			<td>University of South Carolina at Columbia</td>
		</tr>
		<tr>
			<td>CU</td>
			<td>CariUSGS Caribbean Network</td>
			<td>USGS, Albuquerque Seismological Laboratory</td>
		</tr>
		<tr>
			<td>EP</td>
			<td>UTEP Seismic Network</td>
			<td>University of Texas, El Paso</td>
		</tr>
		<tr>
			<td>ET</td>
			<td>CERI Southern Appalachian Seismic Network</td>
			<td>University of Memphis</td>
		</tr>
		<tr>
			<td>HV</td>
			<td>Hawaiian Volcano Observatory Network</td>
			<td>Hawaiian Volcano Observatory</td>
		</tr>
		<tr>
			<td>HW</td>
			<td>Hanford Washington Seismic Network</td>
			<td>Pacific Northwest National Laboratory</td>
		</tr>
		<tr>
			<td>IE</td>
			<td>Idaho National Engineering Laboratory</td>
			<td>University of Utah, Network Contact</td>
		</tr>
		<tr>
			<td>II</td>
			<td>IRIS/IDA Network</td>
			<td>University of California, Scripps Institute of Oceanography</td>
		</tr>
		<tr>
			<td>IU</td>
			<td>IRIS/USGS Network</td>
			<td>USGS Albuquerque Seismological Laboratory</td>
		</tr>
		<tr>
			<td>IW</td>
			<td>Intermountain West Seismic Network</td>
			<td>United States Geological Survey</td>
		</tr>
		<tr>
			<td>KY</td>
			<td>Kentucky Seismic and Strong Motion Network</td>
			<td>Kentucky Geological Survey</td>
		</tr>
		<tr>
			<td>LB</td>
			<td>Leo Brady Network</td>
			<td>Sandia National Laboratory</td>
		</tr>
		<tr>
			<td>LD</td>
			<td>Lamont-Doherty Cooperative Seismographic Network</td>
			<td>Lamont-Doherty Earth Observatory of Columbia University</td>
		</tr>
		<tr>
			<td>MB</td>
			<td>Montana Regional Seismic Network</td>
			<td>Montana Bureau of Mines and Geology</td>
		</tr>
    <tr>
			<td>N4</td>
			<td>Central and Eastern US Network</td>
			<td>University of California San Diego</td>
		</tr>
		<tr>
			<td>NC</td>
			<td>USGS Northern California Regional Network</td>
			<td>USGS-Menlo Park, California</td>
		</tr>
		<tr>
			<td>NE</td>
			<td>Northeastern United States Networks</td>
			<td>Boston College</td>
		</tr>
		<tr>
			<td>NM</td>
			<td>Cooperative New Madrid Seismic Network</td>
			<td>St. Louis University and University of Memphis</td>
		</tr>
		<tr>
			<td>NN</td>
			<td>Western Great Basin/Eastern Sierra Nevada</td>
			<td>University of Nevada, Reno</td>
		</tr>
		<tr>
			<td>NP</td>
			<td>United States National Strong-Motion Network</td>
			<td>USGS - National Strong-Motion Program</td>
		</tr>
		<tr>
			<td>NQ</td>
			<td>NetQuakes</td>
			<td>USGS Menlo Park, California</td>
		</tr>
		<tr>
			<td>OH</td>
			<td>Ohio Seismic Network</td>
			<td>Ohio Geological Survey</td>
		</tr>
		<tr>
			<td>OK</td>
			<td>Oklahoma Seismic Network</td>
			<td>University of Oklahoma</td>
		</tr>
		<tr>
			<td>PE</td>
			<td>Penn State Network</td>
			<td>Penn State University</td>
		</tr>
		<tr>
			<td>PG</td>
			<td>PG &amp; E, Diablo Canyon</td>
			<td>Pacific Gas and Electric</td>
		</tr>
		<tr>
			<td>PR</td>
			<td>
				Puerto Rico Seismic Network (PRSN) &amp; Puerto Rico Strong Motion
				Program (PRSMP)
			</td>
			<td>University of Puerto Rico at Mayaguez</td>
		</tr>
		<tr>
			<td>PT</td>
			<td>Pacific Tsunami Warning Seismic System</td>
			<td>Pacific Tsunami Warning Center, Ewa Beach, Hawaii</td>
		</tr>
		<tr>
			<td>RE</td>
			<td>US Bureau of Reclamation Seismic Networks</td>
			<td>US Bureau of Reclamation, Denver Federal Center</td>
		</tr>
		<tr>
			<td>SC</td>
			<td>New Mexico Tech Seismic Network</td>
			<td>New Mexico Tech, Socorro, New Mexico</td>
		</tr>
		<tr>
			<td>SE</td>
			<td>Southeastern Appalachian Cooperative Seismic Network</td>
			<td>
				Virginia Tech, University of Memphis, Tennessee Valley Authority, and
				University of North Carolina
			</td>
		</tr>
		<tr>
			<td>SF</td>
			<td>San Andreas Fault Observatory at Depth (SAFOD)</td>
			<td>Stanford University and USGS Menlo Park, Earthscope Project</td>
		</tr>
    <tr>
			<td>TA</td>
			<td>Transportable Array</td>
			<td>University of California San Diego</td>
		</tr>
		<tr>
			<td>UO</td>
			<td>University of Oregon Regional Network</td>
			<td>University of Oregon</td>
		</tr>
		<tr>
			<td>US</td>
			<td>US National Seismic Network</td>
			<td>
				ANSS Backbone of the USGS-NEIC and USGS-ASL and Earthscope Project of
				IRIS
			</td>
		</tr>
		<tr>
			<td>UU</td>
			<td>University of Utah Regional Network</td>
			<td>University of Utah Seismograph Stations</td>
		</tr>
		<tr>
			<td>UW</td>
			<td>Pacific Northwest Regional Seismic Network</td>
			<td>University of Washington</td>
		</tr>
		<tr>
			<td>WR</td>
			<td>California Division of Water Resources</td>
			<td>California Division of Water Resources</td>
		</tr>
		<tr>
			<td>WY</td>
			<td>Yellowstone Volcano Observatory Seismic Network</td>
			<td>
				University of Utah Seismograph Stations (formerly operated by the USGS
				Menlo Park)
			</td>
		</tr>
	</tbody>

</table>

<p>
	* (beginning 9/1997 some stations from network code TS now appear as network
	code CI)
</p>
-->
