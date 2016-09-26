<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/21/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Maps';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<div class="row">
	<div class="column two-of-three">
		<h2>Mapped Ground Motion Hazard Values</h2>
		<table>
			<thead>
				<tr>
					<th>Spectral Acceleration</th>
					<th>Probability of Exceedance</th>
					<th>File Format</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>0.2 second SA (5 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_0p2s_10p50.png" title="33 kB">PNG</a> | <a href="images/PuertoRico_2003_0p2s_10p50.pdf" title="33 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_0p3s_10p50.png" title="32 kB">PNG</a> | <a href="images/PuertoRico_2003_0p3s_10p50.pdf" title="32 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_1p0s_10p50.png" title="30 kB">PNG</a> | <a href="images/PuertoRico_2003_1p0s_10p50.pdf" title="30 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>10% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_0p0s_10p50.png" title="31 kB">PNG</a> | <a href="images/PuertoRico_2003_0p0s_10p50.pdf" title="31 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.2 second SA (5 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_0p2s_2p50.png" title="32 kB">PNG</a> | <a href="images/PuertoRico_2003_0p2s_2p50.pdf" title="32 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_0p3s_2p50.png" title="32 kB">PNG</a> | <a href="images/PuertoRico_2003_0p3s_2p50.pdf" title="32 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_1p0s_2p50.png" title="32 kB">PNG</a> | <a href="images/PuertoRico_2003_1p0s_2p50.pdf" title="32 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/PuertoRico_2003_0p0s_2p50.png" title="33 kB">PNG</a> | <a href="images/PuertoRico_2003_0p0s_2p50.pdf" title="33 kB">PDF</a> ]</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="column one-of-three">
		<h2>Select Hazard Curves</h2>
		<a href="curves/sanjuan.pdf" title="Download full size San Juan">
			<img src="curves/sanjuan.png" alt="San Juan"/>
		</a>
		<a href="curves/mayaguez.pdf" title="Download full size Mayaguez">
			<img src="curves/mayaguez.png" alt="Mayaguez"/>
		</a>
		<a href="curves/ponce.pdf" title="Download full size Ponce">
			<img src="curves/ponce.png" alt="Ponce"/>
		</a>
		<a href="curves/charlotteamalie.pdf" title="Download full size Charlotte Amalie">
			<img src="curves/charlotteamalie.png" alt="Charlotte Amalie"/>
		</a>
		<a href="curves/christiansted.pdf" title="Download full size Christiansted">
			<img src="curves/christiansted.png" alt="Christiansted"/>
		</a>
		<a href="curves/swpr.pdf" title="Download full size Southwest Puerto Rico">
			<img src="curves/swpr.png" alt="Southwest Puerto Rico"/>
		</a>
	</div>
</div>
