<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/21/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Puerto Rico Data Files';
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
					<td>0.2 Second (5Hz)</td>
					<td>10% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p2s_10p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p2s_10p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>0.3 Second (3.33Hz)</td>
					<td>10% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p3s_10p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p3s_10p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>1.0 Second (1Hz)</td>
					<td>10% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_1p0s_10p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_1p0s_10p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>Peak Ground Acceleration</td>
					<td>10% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p0s_10p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p0s_10p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>0.2 Second (5Hz)</td>
					<td>2% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p2s_2p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p2s_2p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>0.3 Second (3.33Hz)</td>
					<td>2% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p3s_2p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p3s_2p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>1.0 Second (1Hz)</td>
					<td>2% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_1p0s_2p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_1p0s_2p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Ground Motion</td>
					<td>Peak Ground Acceleration</td>
					<td>2% in 50 Years</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p0s_2p50.txt" title="555 kB">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_gm_0p0s_2p50.bin" title="127 kB">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curves</td>
					<td>0.2 Second (5Hz)</td>
					<td>Not Applicable</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_0p2s.txt" title="3 Mb">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_0p2s.bin" title="2 Mb">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curves</td>
					<td>0.3 Second (3.33Hz)</td>
					<td>Not Applicable</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_0p3s.txt" title="3 Mb">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_0p3s.bin" title="2 Mb">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curves</td>
					<td>1.0 Second (1Hz)</td>
					<td>Not Applicable</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_1p0s.txt" title="3 Mb">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_1p0s.bin" title="2 Mb">BINARY</a> ]</td>
				</tr>
				<tr>
					<td>Hazard Curves</td>
					<td>Peak Ground Acceleration</td>
					<td>Not Applicable</td>
					<td>[ <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_0p0s.txt" title="3 Mb">TEXT</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/pr_hc_0p0s.bin" title="2 Mb">BINARY</a> ]</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="column one-of-three">
		<h2>File Formats</h2>
		<p>
			<strong>Text File Formats</strong><br />
			These files are simple white-space delimited files. The format should be
			farily easy to decipher without much guidance.
		</p>
		<p>
			<strong>Binary File Formats</strong><br />
			These files were created from the text files and have the same format. In
			order to help with programatic reading of these files there is additional
			header information at the top of these files. Header information contains:
		</p>
		<ul>
			<li>
				FileType (int)<br/>
				0 &rarr; Hazard Curve File<br/>
				1 &rarr; Ground Motion File
			</li>
			<li>Minimum Latitude (double)</li>
			<li>Maximum Latitude (double)</li>
			<li>Minimum Longitude (double)</li>
			<li>Maximum Longitude (double)</li>
			<li>
				Grid Spacing (double)<br/>
				The decimal degree increment between adjacent latitudes/longitudes
			</li>
			<li>
				Num Curve Points (int)<br/>
				The number of points per hazard curve. This value is only present
					in hazard curve files.
			</li>
		</ul>
		<p>
			For convenience we provide sample binary file readers for potential
			developers to examine the source and get a better idea of how to read the
			file format. <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/data/PRParser.jar" >Download our reader</a> (requires
			<a target="_blank" href="http://www.java.com">Java</a>&trade;). To use
			this application, open a command line terminal and type: <code>java -jar
			PRParser.jar &lt;datafile&gt;</code>.
    </p>
	</div>
</div>
