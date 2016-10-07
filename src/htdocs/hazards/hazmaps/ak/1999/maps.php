<?php
      //	Author:	Tiffany Kalin
      //	Contact: Mark Peterson
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
					<td>.2 second SA (5 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p2s_10p50.png" title="135 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p2s_10p50.pdf" title="135 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p3s_10p50.png" title="135 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p3s_10p50.pdf" title="135 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_1p0s_10p50.png" title="126 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_1p0s_10p50.pdf" title="126 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p0s_10p50.png" title="128 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p0s_10p50.pdf" title="128 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.2 second SA (5 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p2s_2p50.png" title="142 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p2s_2p50.pdf" title="142 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p3s_2p50.png" title="141 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p3s_2p50.pdf" title="141 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_1p0s_2p50.png" title="133 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_1p0s_2p50.pdf" title="133 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p0s_2p50.png" title="135 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/images/Alaska_1999_0p0s_2p50.pdf" title="135 kB">PDF</a> ]</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="column one-of-three">
		<h2>Select Hazard Curves</h2>

		<a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/curves/juneau.pdf" title="Download full size Juneau">
			<img src="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/curves/juneau.png" alt="Juneau"/>
		</a>
		<a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/curves/anchorage.pdf" title="Download full size Anchorage">
			<img src="ftp://hazards.cr.usgs.gov/web/nshm/ak/1999/maps/curves/anchorage.png" alt="Anchorage"/>
		</a>

	</div>
</div>
