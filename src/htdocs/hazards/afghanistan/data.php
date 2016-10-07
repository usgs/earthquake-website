<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/4/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Afghanistan Data';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>
	Data files are presented in two formats, text and binary. Both formats for a
	given file contain the same information. The text file is white-space
	delimited and can easily be imported into your favorite spreadsheet
	application (i.e. Microsoft Excel&trade;) for further analysis. The binary format
	is more useful for programmatic access from custom software.
</p>

<div class="row">
	<div class="column one-of-two">
		<h2>Data Sets</h2>
		<ul class="no-style">
			<li>
				<a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/HazardCurveAfghanistan-Text.zip">Download All Text Hazard Curve Files (26 MB)</a>
			</li>
			<li>
				<a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/HazardCurveAfghanistan-Binary.zip">Download All Binary Hazard Curve Files (42 MB)</a>
			</li>
			<li>
				<a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/GroundMotionAfghanistan-Text.zip">Download All Text Ground Motion Files (2.3MB)</a>
			</li>
			<li>
				<a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/GroundMotionAfghanistan-Binary.zip">Download All Binary Ground Motion Files (2.9MB)</a>
			</li>
		</ul>
	</div>

	<div class="column one-of-two">
		<h2>File Formats</h2>
		<ul class="no-style">
			<li>
				<a href="#gm_text">Ground Motion Text Format</a>
			</li>
			<li>
				<a href="#gm_binary">Ground Motion Binary Format</a>
			</li>
			<li>
				<a href="#hc_text">Hazard Curve Text Format</a>
			</li>
			<li>
				<a href="#hc_binary">Hazard Curve Binary Format</a>
			</li>
			<li>
				<a href="#hc_types">Hazard Curve File Types</a>
			</li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="column one-of-one">
		<h2>Individual Data Files</h2>
		<table>
			<thead>
				<tr>
					<th>File Type</th>
					<th>Return Period</th>
					<th>Spectral Acceleration</th>
					<th>Download</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Ground Motion</td>
					<td>10% in 50 years</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/1Hz10p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/1Hz10p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>2% in 50 years</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/1Hz2p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/1Hz2p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>5% in 50 years</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/1Hz5p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/1Hz5p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>10% in 50 years</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/5Hz10p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/5Hz10p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>2% in 50 years</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/5Hz2p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/5Hz2p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>5% in 50 years</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/5Hz5p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/5Hz5p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>10% in 50 years</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/PGA10p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/PGA10p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>2% in 50 years</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/PGA2p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/PGA2p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>5% in 50 years</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/PGA5p50.bin" title="817 kB">Binary (817 kB)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/PGA5p50.txt" title="1 Mb">Text (1 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFD4)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD4.out_rev1.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD4.out_rev1.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFD4)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD4.out_rev1.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD4.out_rev1.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFD4)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD4.out_rev1.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD4.out_rev1.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFD5)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD5.out_rev1.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD5.out_rev1.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFD5)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD5.out_rev1.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD5.out_rev1.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFD5)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD5.out_rev1.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFD5.out_rev1.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFDEEP)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEP.out_rev0.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEP.out_rev0.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFDEEP)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEP.out_rev0.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEP.out_rev0.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFDEEP)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEP.out_rev0.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEP.out_rev0.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFDEEPER)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEPER.out_rev1.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEPER.out_rev1.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFDEEPER)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEPER.out_rev1.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEPER.out_rev1.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFDEEPER)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEPER.out_rev1.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFDEEPER.out_rev1.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_C_ASB)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_ASB.out_rev1.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_ASB.out_rev1.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_C_ASB)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_ASB.out_rev1.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_ASB.out_rev1.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_C_ASB)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_ASB.out_rev1.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_ASB.out_rev1.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_C_WUS)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_WUS.out_rev1.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_WUS.out_rev1.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_C_WUS)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_WUS.out_rev1.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_WUS.out_rev1.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_C_WUS)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_WUS.out_rev1.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_C_WUS.out_rev1.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_GR_ASB)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_ASB.out_rev1.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_ASB.out_rev1.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_GR_ASB)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_ASB.out_rev1.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_ASB.out_rev1.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_GR_ASB)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_ASB.out_rev1.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_ASB.out_rev1.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_GR_WUS)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_WUS.out_rev1.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_WUS.out_rev1.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_GR_WUS)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_WUS.out_rev1.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_WUS.out_rev1.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFF_GR_WUS)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_WUS.out_rev1.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFF_GR_WUS.out_rev1.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFML75)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev1b.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev1b.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFML75)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev1b.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev1b.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFML75)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev1b.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev1b.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFML75)</td>
					<td>Not Applicable</td>
					<td>5Hz (0.2 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev2.020.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev2.020.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFML75)</td>
					<td>Not Applicable</td>
					<td>1Hz (1.0 Second)</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev2.100.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev2.100.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curve (AFML75)</td>
					<td>Not Applicable</td>
					<td>Peak Ground Acceleration</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev2.pga.bin" title="2 Mb">Binary (2 Mb)</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/data/downloads/AFML75.out_rev2.pga.txt" title="6 Mb">Text (6 Mb)</a> ]</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<h2 id="fileformats">File Formats</h2>
<div class="row">
	<div class="column one-of-two">
		<h3 id="gm_binary">Ground Motion Binary Files</h3>
		<p>
			Binary file downloads contain longitude, latitude, and ground motion
			(&#37;g) values in that order. Each value is a binary
			&ldquo;double&rdquo; floating point number which occupies 8 bytes on
			disk. Data are gridded at 0.1&deg; intervals between each location.
			The first entry in the data file represents the north-west corner of
			the data. Subsequent entries in the data file proceed first east and
			then south. The last entry in the data file represents the south-eash
			corner of the data.
		</p>

		<h3 id="hc_binary">Hazard Curve Binary Files</h3>
		<p>
			Binary file downloads contain header information with the following
			format:
		</p>
		<ul class = "no-style">
			<li>
				<strong>Meta Header Text</strong><br/>
				180 bytes (character data)<br/>
				Suggestion: <em>Discard</em><br/><br/>
			</li>
			<li>
				<strong>Period</strong><br/>
				4 bytes (decimal data)<br/>
				Suggestion: <em>Discard</em><br/><br/>
			</li>
			<li>
				<strong>Num Levels</strong><br/>
				4 bytes (decimal data)<br/>
				Suggestion: <em>Keep for later reference</em><br/><br/>
			</li>
			<li>
				<strong>X-Values</strong><br/>
				4 bytes * 20 (decimal data)<br/>
				Suggestion: <em>Keep first &ldquo;Num Level&rdquo;, then discard</em><br/><br/>
			</li>
			<li>
				<strong>Extra Meta</strong><br/>
				4 bytes * 10 (mixed data)<br/>
				Suggestion: <em>Discard</em>
			</li>
		</ul>

		<p>
			Following this header information begins the actual hazard curve data.
			Hazard curve data starts at the north-west corner of the gridded region
			working first east across longitudes and then south across latitudes
			with a 0.1&deg; grid spacing between each point. Each grid point in the
			file contains &ldquo;Num Levels&rdquo; values, each corresponding, in
			order, to the &ldquo;X-Values&rdquo; from the header. Each value is
			4-byte decimal data.
		</p>
	</div>
	<div class="column one-of-two">

		<h3 id="gm_text">Ground Motion Text Files</h3>
		<p>
			Text file downloads contain longitude, latitude, and ground motion
			(&#37;g) values in that order. Each value is separated by one or more
			white-space characters and there is one location per line. Data are
			gridded at 0.1&deg; intervals between each location. The first line in
			the file represents the north-west corner of the data. Subsequent lines
			proceed first east and then south. The last line in the file represents
			the south-east corner of the data.
		</p>

		<h3 id="hc_text">Hazard Curve Text Files</h3>
		<p>
			Text file downloads also start with header information similar to that
			which can be found in the binary files. The hazard curve data follows
			the header information with one geographic location per line. Each line
			starts with longitude and latitude indicating the lines geographic
			position. The subsequent values in the line correspond to the X-Values
			which can be read from the header information. Curve data starts in the
			north-west corner of the region moving first east along longitudes then
			south along latitues with a 0.1&deg; grid spacing between each point.
		</p>
	</div>
</div>
	<h2 id="hc_types">Hazard Curve Types</h2>
	<ul class="no-style">
		<li>
			<strong>AFML75_rev1b</strong><br/>
			Background seismicity (0-50 km depth), Ambrayseys and others ground
			motion relation.<br/><br/>
		</li>
		<li>
			<strong>AFML75_rev2</strong><br/>
			Background seismicity (0-50 km depth), Western US ground motion
			relations.<br/><br/>
		</li>
		<li>
			<strong>AFDEEP</strong><br/>
			Background seismicity (50-100 km depth), Young&rsquo;s intraslab and
			Atkinson and Boore subduction zone attenuation relations.<br/><br/>
		</li>
		<li>
			<strong>AFDEEPER</strong><br/>
			Background seismicity (100-150 km depth), Young&rsquo;s intraslab
			attenuation relation.<br/><br/>
		</li>
		<li>
			<strong>AFD4</strong><br/>
			Background seismicity (150-200 km depth), Young&rsquo;s intraslab
			attenuation relation.<br/><br/>
		</li>
		<li>
			<strong>AFD5</strong><br/>
			Background seismicity (200-250 km depth), Young&rsquo;s intraslab
			attenuation relation.<br/><br/>
		</li>
		<li>
			<strong>AFF_C_ASB</strong><br/>
			Fault sources, Characteristic behavior, Ambrayseys and others ground
			motion relation.<br/><br/>
		</li>
		<li>
			<strong>AFF_C_WUS</strong><br/>
			Fault sources, Characteristic behavior, Western US ground motion
			relations.<br/><br/>
		</li>
		<li>
			<strong>AFF_GR_ASB</strong><br/>
			Fault sources, Gutenberg-Richter behavior, Ambrayseys and others ground
			motion relation.<br/><br/>
		</li>
		<li>
			<strong>AFF_GR_WUS</strong><br/>
			Fault sources, Gutenberg-Richter behavior, Western US ground motion
			relations.<br/><br/>
		</li>
	</ul>
