<?php
	if (!isset($TEMPLATE)) {
		$TITLE = 'Puerto Rico Data Files';
		$STYLES = "
			#tbldownloads { margin:0 auto; width:544px; }
			#tbldownloads td, #tbldownloads th {
				color:#333333;
				padding:3px 8px;
			}
			#tbldownloads th { font-weight:bold; border-bottom:1px solid #666666; }
			#tbldownloads td.downloads {font-size:.8em;padding-bottom:.2em;}
			#formats p {font-size:.8em;}
			#formats ul {
				list-style-position:inside;
				font-size:.9em;
				margin:0;
				padding:0;
			}
			#formats li {margin:0;padding:0}
			#formats label {font-family:Monospace;font-weight:bold;}
			#formats ul span {display:block;margin-left:5px;font-size:.8em;}
			code {font-family:Monospace;}
		";
		$WIDGETS = 'jquery';
		$SCRIPTS = '/template/js/jquery.tablesorter.js';

		function parseType($filename) {
			if (strpos($filename, 'hc')) {
				return 'Hazard Curves';
			} else if (strpos($filename, 'gm')) {
				return 'Ground Motion';
			} else {
				return 'Unknown';
			}
		}
		function parseSA($filename) {
			if (strpos($filename, '0p3')) {
				return '0.3 Second (3.33Hz)';
			} else if (strpos($filename, '1p0')) {
				return '1.0 Second (1Hz)';
			} else if (strpos($filename, '0p2')) {
				return '0.2 Second (5Hz)';
			} else if (strpos($filename, '0p0')) {
				return 'Peak Ground Acceleration';
			} else {
				return 'Not Applicable';
			}
		}
		function parsePE($filename) {
			if (strpos($filename, '2p50')) {
				return '2&#37; in 50 Years';
			} else if (strpos($filename, '10p50')) {
				return '10&#37; in 50 Years';
			} else {
				return 'Not Applicable';
			}
		}
		function getDownloadsMarkup($filename) {
			$basedir = str_replace("\n", '', `pwd`);
			$txtfile = $filename;
			$binfile = str_replace('.txt', '.bin', $filename);
			return sprintf('[ <a href="%s" title="%s">TEXT</a> | ' .
			               '<a href="%s" title="%s">BINARY</a> ]',
								$txtfile, simpleFileSize("${basedir}/${txtfile}"),
								$binfile, simpleFileSize("${basedir}/${binfile}")
							);
		}
		function getRowMarkup($filename) {
			return sprintf('<tr><td class="type">%s</td><td class="sa">%s</td>' .
					'<td class="pe">%s</td><td class="downloads">%s</td></tr>',
					parseType($filename), parseSA($filename), parsePE($filename),
					getDownloadsMarkup($filename)
				);
		}
		include_once $_SERVER['DOCUMENT_ROOT'] . '/template/template.inc.php';
	}

	$files = glob('downloads/*.txt');

	if (!empty($files)) {
?>
<div class="column seven">
<h2>Download Available Files</h2>
<p>
	Data files are presented in two formats, text and binary. Both formats for
	a given file contain the same information. The text file is white-space
	delimited and can easily be imported into your favorite spreadsheet
	application (i.e. Microsoft Excel&trade;) for further analysis. The binary
	format is more useful for programatic access from custom pieces of software.
</p>
<table cellpadding="0" cellspacing="0" border="0" id="tbldownloads">
<thead>
	<tr>
		<th scope="col" class="type">File Contents</th>
		<th scope="col" class="sa">Spectral Acceleration</th>
		<th scope="col" class="period">Return Period</th>
		<th scope="col" class="downloads">Downloads</th>
	</tr>
</thead>
<tbody>
	<?php foreach($files as $file) { print getRowMarkup($file); } ?>
</tbody>
</table>
<p style="color:#666666;font-size:.8em;margin:0;padding:0;text-align:right;">
	Click a file header to re-sort table listing by that column.
</P>
</div>
<?php
	} else {
		print '<p class="error">No files currently available.</p>';
	}
?>
<div id="formats" class="column three">
	<h2>More About File Formats</h2>
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
		file format. <a href="PRParser.jar" >Download our reader</a> (requires 
		<a target="_blank" href="http://www.java.com">Java</a>&trade;). To use 
		this application, open a command line terminal and type: <code>java -jar 
		PRParser.jar &lt;datafile&gt;</code>.
</div>
<script type="text/javascript">/* <![CDATA[ */
$(document).ready(function(_event) {
	$('#tbldownloads').tablesorter({
		headers:{
			3:{sorter:false}
		},
		sortList:[[0,0],[2,0],[1,0]]
	});
});
/* ]]> */</script>
