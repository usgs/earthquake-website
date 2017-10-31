<?php
      //	Author:	Tiffany Kalin
      //	Contact: Mark Peterson
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Alaska Data';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

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
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p1s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p1s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.2 Second (5Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p2s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p2s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.3 Second (3.33Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p3s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p3s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.5 Second (2Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p5s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p5s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>1.0 Second (1Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_1p0s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_1p0s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>2.0 Second (0.5Hz)</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_2p0s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_2p0s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>Peak Ground Acceleration</td>
			<td>10% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p0s_10p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p0s_10p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.1 Second (10Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p1s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p1s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.2 Second (5Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p2s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p2s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.3 Second (3.33Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p3s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p3s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>0.5 Second (2Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p5s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p5s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>1.0 Second (1Hz)</td>
			<td>2% in 50 Years</td>
			<td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_1p0s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_1p0s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
		</tr>
		<tr>
			<td>Ground Motion</td>
			<td>2.0 Second (0.5Hz)</td>
			<td>2% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_2p0s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_2p0s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>Peak Ground Acceleration</td>
      <td>2% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p0s_2p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p0s_2p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>0.1 Second (10Hz)</td>
      <td>5% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p1s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p1s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>0.2 Second (5Hz)</td>
      <td>5% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p2s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p2s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>0.3 Second (3.33Hz)</td>
      <td>5% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p3s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p3s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>0.5 Second (2Hz)</td>
      <td>5% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p5s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p5s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>1.0 Second (1Hz)</td>
      <td>5% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_1p0s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_1p0s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>2.0 Second (0.5Hz)</td>
      <td>5% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_2p0s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_2p0s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
    <tr>
      <td>Ground Motion</td>
      <td>Peak Ground Acceleration</td>
      <td>5% in 50 Years</td>
      <td>[ <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p0s_5p50_2007.txt" title="7 Mb">TEXT</a> | <a href="/static/lfs/nshm/ak/2007/data/downloads/ak_gm_0p0s_5p50_2007.bin" title="1 Mb">BINARY</a> ]</td>
    </tr>
  </tbody>
</table>

<h2>File Formats</h2>
<p>
  <h3>Text File Formats</h3>
  These files are simple white-space delimited files. The format should be
  farily easy to decipher without much guidance.
</p>
<p>
  <h3>Binary File Formats</h3>
  These files were created from the text files and have the same format. In
  order to help with programatic reading of these files there is additional
  header information at the top of these files. Header information contains:
</p>
<ul>
  <li>
    FileType (int)<br/>
    0 &rarr; Hazard Curve File<br/>
    1 &rarr; Ground Motion File<br/>
  </li>
  <li>Minimum Latitude (double)</li>
  <li>Maximum Latitude (double)</li>
  <li>Minimum Longitude (double)</li>
  <li>Maximum Longitude (double)</li>
  <li>
    Grid Spacing (double) - The decimal degree increment between adjacent latitudes/longitudes
  </li>
  <li>
    Num Curve Points (int) - The number of points per hazard curve. This value is only present
      in hazard curve files.
  </li>
</ul>
<p>
  For convenience we provide sample binary file readers for potential
  developers to examine the source and get a better idea of how to read the
  file format. <a href="/static/lfs/nshm/conterminous/2002/data/USParser.jar" >Download our reader</a> (requires
  <a target="_blank" href="http://www.java.com">Java</a>&trade;). To use
  this application, open a command line terminal and type: <code>java -jar
  HIParser.jar &lt;datafile&gt;</code>.
