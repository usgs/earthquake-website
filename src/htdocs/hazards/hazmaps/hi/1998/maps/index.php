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
		<p>
			In this release of hazard maps we present eight maps with varying
			parameters available for download below. Each of these maps were produced
			assuming firm rock soil conditions at 760 m/sec.
		</p>
		<table cellpadding="0" cellspacing="0" border="0" id="tblfiles">
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
					<td>[ <a href="images/Hawaii_1998_0p2s_10p50.png" title="49 kB">PNG</a> | <a href="images/Hawaii_1998_0p2s_10p50.pdf" title="49 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="images/Hawaii_1998_0p3s_10p50.png" title="49 kB">PNG</a> | <a href="images/Hawaii_1998_0p3s_10p50.pdf" title="49 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="images/Hawaii_1998_1p0s_10p50.png" title="46 kB">PNG</a> | <a href="images/Hawaii_1998_1p0s_10p50.pdf" title="46 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>10% in 50 years</td>
					<td>[ <a href="images/Hawaii_1998_0p0s_10p50.png" title="47 kB">PNG</a> | <a href="images/Hawaii_1998_0p0s_10p50.pdf" title="47 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.2 second SA (5 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/Hawaii_1998_0p2s_2p50.png" title="50 kB">PNG</a> | <a href="images/Hawaii_1998_0p2s_2p50.pdf" title="50 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/Hawaii_1998_0p3s_2p50.png" title="50 kB">PNG</a> | <a href="images/Hawaii_1998_0p3s_2p50.pdf" title="50 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/Hawaii_1998_1p0s_2p50.png" title="48 kB">PNG</a> | <a href="images/Hawaii_1998_1p0s_2p50.pdf" title="48 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>2% in 50 years</td>
					<td>[ <a href="images/Hawaii_1998_0p0s_2p50.png" title="48 kB">PNG</a> | <a href="images/Hawaii_1998_0p0s_2p50.pdf" title="48 kB">PDF</a> ]</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="column one-of-three">
		<h2>Select Hazard Curves</h2>
		<a href="curves/hilo.pdf" title="Download full size Hilo">
			<img src="curves/hilo.png" alt="Hilo"/>
		</a>
		<a href="curves/honolulu.pdf" title="Download full size Honolulu">
			<img src="curves/honolulu.png" alt="Honolulu"/>
		</a>
		<a href="curves/kihei.pdf" title="Download full size Kihei">
			<img src="curves/kihei.png" alt="Kihei"/>
		</a>
	</div>
</div>
