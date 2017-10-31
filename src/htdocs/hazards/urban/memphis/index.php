<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/19/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Memphis Earthquake Hazard Mapping Project';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<p>
	<b>Memphis has a dense urban population near faults capable of producing major earthquakes.</b>
</p>
<figure class="right" style="max-width:400px">
	<img src="images/Memphis_1.jpg" alt="Memphis riverfront"/>
</figure>
<p>
	A high probability of a moderate earthquake in the near future (e.g., a 25-40% probability
	of a magnitude 6.0 or greater in the next 50 years), and relatively low regional attenuation
	(in other words, seismic waves do damage over a greater area in this region than
	for the same magnitude earthquake in the west).
	Memphis lies within the New Madrid seismic zone, which is the most seismically active
	and well-studied region in the Central and Eastern U.S.
</p>


<h2>Ground Shaking Maps</h2>

<p>
	<a href="https://pubs.usgs.gov/of/2004/1294/">The Memphis, Shelby County, Tennessee, Seismic Hazard Maps (OFR-2004-1294)</a> - Technical documentation
</p>

<p>
	<a href="https://pubs.usgs.gov/fs/2005/3142/pdf/FS05-3142_508.pdf">Urban Seismic Hazard Mapping for Memphis, Shelby County, Tennessee (FS-2005-3142)</a> - Non-technical documentation
</p>

<div class="row">
	<div class="column one-of-two">
		<h3>Deterministic (scenario) ground shaking maps</h3>

		<p>
			<a href="grid_download.php#Deterministic">Deterministic ground motion maps</a>
			show different types of motions for a single specific hypothetical earthquake
			(scenario or magnitude and location).
		</p>

		<div>
			<figure style="max-width:500px">
				<img src="images/determ.jpg" alt="Deterministic seismic hazard map"/>
				<figcaption>
					Deterministic seismic hazard map showing ground motions expected from a M7.7 earthquake located northwest of Memphis, on a fault coincident with the southern linear zone of modern seismicity. As above, motions are accelerations with oscillation periods of 1 second for the same area shown in the above inset map and include site amplification effects.
				</figcaption>
			</figure>
		</div>
	</div>
	<div class="column one-of-two">
		<h3>Probabilistic ground shaking maps</h3>
		<p>
			<a href="grid_download.php#Probabilistic">Probabilistic ground motion maps</a>
			show different types of motions for various probability levels.
			View these online or download graphic or grid files.
		</p>

		<div>
			<figure style="max-width:500px">
				<img src="images/prob.jpg" alt="Probabilistic seismic hazard map showing ground motions with a 2% probability of being exceeded in 50 years." />
				<figcaption>
					Probabilistic seismic hazard map showing ground motions with a 2% probability of being exceeded in 50 years.  Motions are accelerations with oscillation periods of 1 second. Inset map of the Memphis area includes site amplification effects,  superimposed on the national seismic hazard map, which does not account for local geologic structure.
				</figcaption>
			</figure>
		</div>
	</div>
</div>

<div class="row">
	<div class="column one-of-two">
		<a id="liquefaction" name="liquefaction"></a>
		<h2>Liquefaction Potential Maps</h2>

		<ul>
			<li><a href="liq_download.php">Maps</a></li>
			<li><a href="/static/web/nshm/urban/memphis/Memphis_LPI.pdf">Technical Documentation</a></li>
			<li><a href="liquefaction.php">Non-technical Documentation</a></li>
		</ul>

		<div>
			<figure style="max-width:250px">
				<img src="images/liquefaction.gif" alt="Probabilistic liquefaction showing the probability of severe liquefaction with a 2% chance of being exceeded in the next 50 years."/>
				<figcaption>
					Probabilistic liquefaction showing the probability of severe liquefaction with a 2% chance of being exceeded in the next 50 years.
				</figcaption>
			</figure>
		</div>
	</div>
	<div class="column one-of-two">
		<a id="geologic"></a>
		<h2>Surficial geologic maps</h2>

		<ul>
			<li><a href="https://pubs.usgs.gov/sim/2004/2822" target="_blank">Southeast Memphis, TN Quadrangle</a></li>
			<li><a href="https://pubs.usgs.gov/sim/2004/2823" target="_blank">Southwest Memphis, TN Quadrangle</a></li>
			<li><a href="https://pubs.usgs.gov/sim/2004/2839" target="_blank">Northeast Memphis, TN Quadrangle</a></li>
			<li><a href="https://pubs.usgs.gov/sim/2004/2838" target="_blank">Northwest Memphis, TN Quadrangle</a></li>
			<li><a href="https://pubs.usgs.gov/sim/2004/2836" target="_blank">Ellendale, TN Quadrangle</a></li>
			<li><a href="https://pubs.usgs.gov/sim/2004/2837" target="_blank">Germantown, TN Quadrangle</a></li>
		</ul>
	</div>
</div>
