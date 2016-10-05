<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/21/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Software';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<div class="row">
	<div class="column two-of-three">
		<p>
			Unfortunately the source code used to generate the data for this region is
			not currently available. Using the gridded ground motion data files you can
			re-create any or all of the maps presented available for download. To do
			this, <a href="ftp://hazards.cr.usgs.gov/web/nshm/prvi/2003/software/makemaps.tgz">download the mapping package</a>. This mapping
			package relies on <a href="http://gmt.soest.hawaii.edu/"
			>the generic mapping tools (GMT)</a> to do the mapping and along with <a
			href="http://www.imagemagick.org/script/binary-releases.php">ImageMagick</a>
			to convert the generated postscript files to viewable image formats.
		</p>
	</div>
	<div class="column one-of-three">
		<h2>Related Software</h2>
		<ul>
			<li>
				<a href="https://geohazards.usgs.gov/deaggint/2002/">Interactive Deaggregation Application</a>
			</li>
		</ul>
	</div>
</div>
