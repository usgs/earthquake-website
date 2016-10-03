<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/27/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Data';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<div class="row">
	<div class="column two-of-three">
	<h2>Download Available Files</h2>
	<p>
		Data files are presented in two formats, text and binary. Both formats for
		a given file contain the same information. The text file is white-space
		delimited and can easily be imported into your favorite spreadsheet
		application (i.e. Microsoft Excel&trade;) for further analysis. The binary
		format is more useful for programatic access from custom pieces of software.
	</p>
	<p>
		Full <a href="curves.php">hazard curve data</a> is also available for
		download.
	</p>
	<table>
	<thead>
		<tr>
			<th>File Contents</th>
			<th>Spectral Acceleration</th>
			<th>Return Period</th>
			<th>Downloads</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Ground Motion</td>
			<td>0.1 Second (10Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p1s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p1s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.2 Second (5Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p2s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p2s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.3 Second (3.33Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p3s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p3s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.5 Second (2Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p5s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p5s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>1.0 Second (1Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_1p0s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_1p0s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>2.0 Second (0.5Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_2p0s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_2p0s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>Peak Ground Acceleration</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p0s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p0s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.1 Second (10Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p1s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p1s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.2 Second (5Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p2s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p2s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.3 Second (3.33Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p3s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p3s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.5 Second (2Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_0p5s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p5s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>1.0 Second (1Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="downloads/ak_gm_1p0s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_1p0s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>2.0 Second (0.5Hz)</td>
			<td class="pe">2% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_2p0s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_2p0s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">Peak Ground Acceleration</td><td class="pe">2% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_0p0s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p0s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">0.1 Second (10Hz)</td><td class="pe">5% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_0p1s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p1s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">0.2 Second (5Hz)</td><td class="pe">5% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_0p2s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p2s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">0.3 Second (3.33Hz)</td><td class="pe">5% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_0p3s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p3s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">0.5 Second (2Hz)</td><td class="pe">5% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_0p5s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p5s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">1.0 Second (1Hz)</td><td class="pe">5% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_1p0s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_1p0s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">2.0 Second (0.5Hz)</td><td class="pe">5% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_2p0s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_2p0s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr><tr><td class="type">Ground Motion</td><td class="sa">Peak Ground Acceleration</td><td class="pe">5% in 50 Years</td><td class="downloads">[ <a href="downloads/ak_gm_0p0s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="downloads/ak_gm_0p0s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td></tr></tbody>
	</table>

	<div class="column one-of-three">
		<h2>More About File Formats</h2>
		<p>
			<strong>Text File Formats</strong><br />
			These files are simple white-space delimited files. The format should be
			fairly easy to decipher without much guidance.
		</p>
		<p>
			<strong>Binary File Formats</strong><br />
			These files were created from the text files and have the same format. In
			order to help with programatic reading of these files there is additional
			header information at the top of these files. Header information contains:
		</p>
		<ul>
			<li>
				<label>FileType (int)</label>
				<span>0 &rarr; Hazard Curve File</span>
				<span>1 &rarr; Ground Motion File</span>
			</li>
			<li><label>Minimum Latitude (double)</label></li>
			<li><label>Maximum Latitude (double)</label></li>
			<li><label>Minimum Longitude (double)</label></li>
			<li><label>Maximum Longitude (double)</label></li>
			<li>
				<label>Grid Spacing (double)</label>
				<span>
					The decimal degree increment between adjacent latitudes/longitudes
				</span>
			</li>
			<li>
				<label>Num Curve Points (int)</label>
				<span>
					The number of points per hazard curve. This value is only present
					in hazard curve files.
				</span>
			</li>
		</ul>
		<p>
			For convenience we provide sample binary file readers for potential
			developers to examine the source and get a better idea of how to read the
			file format. <a href="AKParser.jar" >Download our reader</a> (requires
			<a target="_blank" href="http://www.java.com">Java</a>&trade;). To use
			this application, open a command line terminal and type: <code>java -jar
			AKParser.jar &lt;datafile&gt;</code>.
	</div>
</div>
