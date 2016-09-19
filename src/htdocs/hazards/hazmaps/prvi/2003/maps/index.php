<?php
	if (!isset($TEMPLATE)) {
		$TITLE = 'Maps';
		$STYLES = "
			#tblfiles td, #tblfiles th { color: #333333; padding:3px 8px; }
			#tblfiles th { font-weight:bold; border-bottom:1px solid #333333; }
			#tblfiles th.header {cursor:pointer;}
			#tblfiles td.downloads {font-size:.9em;}
			.column.four img {float:left;}
		";
		$WIDGETS = 'jquery';
		$SCRIPTS = '/template/js/jquery.tablesorter.js';

		function fileMarkup($file) {
			return sprintf('<tr><td class="sa">%s</td><td class="pe">%s</td>' .
				'<td class="downloads">%s</td></tr>', getSa($file), getPe($file),
				getDownloads($file)
			);
		}
		function getSa($file) {
			if (strpos($file, '0p0')) {
				return 'Peak Ground Acceleration';
			} else if (strpos($file, '0p2')) {
				return '0.2 second SA (5 Hz)';
			} else if (strpos($file, '0p3')) {
				return '0.3 second SA (3.33 Hz)';
			} else if (strpos($file, '1p0')) {
				return '1.0 second SA (1.0 Hz)';
			} else {
				return 'Unknown';
			}
		}
		function getPe($file) {
			if (strpos($file, '2p50')) {
				return '2&#37; in 50 years';
			} else if (strpos($file, '10p50')) {
				return '10&#37; in 50 years';
			} else {
				return 'Unknown';
			}
		}
		function getDownloads($file) {
			$png = $file;
			$pdf = str_replace('.png', '.pdf', $file);
			$dir = str_replace("\n", '', `pwd`);
			return sprintf('[ <a href="%s" title="%s">PNG</a> | <a href="%s" ' .
				'title="%s">PDF</a> ]', $png, simpleFileSize("${dir}/${png}"),
				$pdf, simpleFileSize("${dir}/${png}")
			);
		}

		$files = glob('images/*.png');
		include_once $_SERVER['DOCUMENT_ROOT'] . '/template/template.inc.php';
	}
?>

<div class="column six">
	<?php if (!empty($files)) { /* We have files to show, show them. */ ?>
	<h2>Mapped Ground Motion Hazard Values</h2>
	<table cellpadding="0" cellspacing="0" border="0" id="tblfiles">
		<thead>
			<tr>
				<th scope="col" class="sa">Spectral Acceleration</th>
				<th scope="col" class="pe">Probability of Exceedance</th>
				<th scope="col" class="downloads">File Format</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($files as $file) { print fileMarkup($file); } ?>
		</tbody>
	</table>
	<?php } else { /* No files to show. Say so. */ ?>
	<p class="error">There are currently no maps available for download.</p>
	<?php } /* END: if(!empty($files)) */ ?>
</div>
<div class="column four">
	<h2>Select Hazard Curves</h2>

	<a href="curves/sanjuan.pdf" title="Download full size San Juan"
		><img src="curves/sanjuan.png" alt="San Juan"/></a>
	<a href="curves/mayaguez.pdf" title="Download full size Mayaguez"
		><img src="curves/mayaguez.png" alt="Mayaguez"/></a>
	<a href="curves/ponce.pdf" title="Download full size Ponce"
		><img src="curves/ponce.png" alt="Ponce"/></a>
	<a href="curves/charlotteamalie.pdf" 
		title="Download full size Charlotte Amalie"
		><img src="curves/charlotteamalie.png" alt="Charlotte Amalie"/></a>
	<a href="curves/christiansted.pdf" title="Download full size Christiansted"
		><img src="curves/christiansted.png" alt="Christiansted"/></a>
	<a href="curves/swpr.pdf" title="Download full size Southwest Puerto Rico"
		><img src="curves/swpr.png" alt="Southwest Puerto Rico"/></a>

</div>

<script type="text/javascript">/* <![CDATA[ */
$(document).ready(function(_event) {
	$('#tblfiles').tablesorter({
		headers:{2:{sorter:false}},sortList:[[1,0],[0,0]]
	});
});
/* ]]> */</script>
