<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/27/2016
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
			not currently available. Using the gridded ground motion data files you
			can re-create any or all of the maps presented available for download. To
			do this you can <a href="/static/lfs/nshm/ak/1999/software/makemaps.tgz">download the mapping package</a>.
			This mapping package requires the <a href="http://gmt.soest.hawaii.edu/"
			>Generic Mapping Tools (GMT)</a> along with <a
			href="http://www.imagemagick.org/script/binary-releases.php"
			>ImageMagick</a> to convert the generated output files to viewable image
			formats.
		</p>
	</div>
	<div class="column one-of-three">
		<h2>Additional Links</h2>
		<ul>
			<li><a href="/static/lfs/nshm/ak/1999/software/makemaps.tgz">Mapping Scripts</a></li>
		</ul>
	</div>
</div>
