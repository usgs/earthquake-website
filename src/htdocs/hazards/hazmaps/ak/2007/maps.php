<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/4/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Alaska Maps';
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
					<td>0.1 second SA (10 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_010_10p50.png" title="136 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_010_10p50.pdf" title="136 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.2 second SA (5 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_020_10p50.png" title="138 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_020_10p50.pdf" title="138 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_030_10p50.png" title="137 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_030_10p50.pdf" title="137 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.5 second SA (2 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_050_10p50.png" title="134 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_050_10p50.pdf" title="134 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_100_10p50.png" title="128 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_100_10p50.pdf" title="128 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>2.0 second SA (0.5 Hz)</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_200_10p50.png" title="121 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_200_10p50.pdf" title="121 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>10% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_pga_10p50.png" title="129 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_pga_10p50.pdf" title="129 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.1 second SA (10 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_010_2p50.png" title="143 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_010_2p50.pdf" title="143 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.2 second SA (5 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_020_2p50.png" title="144 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_020_2p50.pdf" title="144 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_030_2p50.png" title="143 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_030_2p50.pdf" title="143 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.5 second SA (2 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_050_2p50.png" title="141 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_050_2p50.pdf" title="141 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_100_2p50.png" title="136 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_100_2p50.pdf" title="136 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>2.0 second SA (0.5 Hz)</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_200_2p50.png" title="128 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_200_2p50.pdf" title="128 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>2% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_pga_2p50.png" title="137 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_pga_2p50.pdf" title="137 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.1 second SA (10 Hz)</td>
					<td>5% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_010_5p50.png" title="140 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_010_5p50.pdf" title="140 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.2 second SA (5 Hz)</td>
					<td>5% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_020_5p50.png" title="141 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_020_5p50.pdf" title="141 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.3 second SA (3.33 Hz)</td>
					<td>5% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_030_5p50.png" title="140 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_030_5p50.pdf" title="140 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>0.5 second SA (2 Hz)</td>
					<td>5% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_050_5p50.png" title="137 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_050_5p50.pdf" title="137 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>1.0 second SA (1.0 Hz)</td>
					<td>5% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_100_5p50.png" title="132 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_100_5p50.pdf" title="132 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>2.0 second SA (0.5 Hz)</td>
					<td>5% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_200_5p50.png" title="125 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_200_5p50.pdf" title="125 kB">PDF</a> ]</td>
				</tr>
				<tr>
					<td>Peak Ground Acceleration</td>
					<td>5% in 50 years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_pga_5p50.png" title="133 kB">PNG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/images/Alaska_2007_pga_5p50.pdf" title="133 kB">PDF</a> ]</td>
				</tr>
			</tbody>
		</table>
	</div>
	 <!-- 09/23/09  EMM: Waiting on Hazard Curve Files from Oliver */ -->
	<div class="column one-of-three">
		<h2>Select Hazard Curves</h2>
		<a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/curves/juneau.pdf" title="Download full size Juneau"
			><img src="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/curves/juneau.png" alt="Juneau"/></a>
		<a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/curves/anchorage.pdf" title="Download full size Anchorage"
			><img src="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/maps/curves/anchorage.png" alt="Anchorage"/></a>
	</div>
</div>
