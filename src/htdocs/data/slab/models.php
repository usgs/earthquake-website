<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	1/18/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Slab Model';
      $NAVIGATION	= true;
      $HEAD = '<link rel="stylesheet" href="styles.css" />';
      include	'template.inc.php';
      }
?>
<ul>
<li><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/allslabs.kmz">Download all slab models in Google Earth format - <?php //print formatSize('models/allslabs.kmz'); ?></a></li>
<li><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/allslabs.tgz">Download all slab models in NetCDF format - <?php //print formatSize('models/allslabs.tgz'); ?></a></li>
<li><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/slab.zip">Download all slab model contour shapefiles</a></li>
</ul>
<table class="slab ten column">
	<tr class="header">
		<th scope="col" style="width: 144px">Region</th>
		<th scope="col">Depth Grid<small></small></th>
		<th scope="col">Strike Grid<small></small></th>
		<th scope="col">Dip Grid<small></small></th>
		<th scope="col">Contours<small></small></th>
		<th scope="col">Model Limits<small></small></th>
	</tr>

	<tr>
		<th rowspan="2" scope="row">
		<strong>Alaska-Aleutians</strong>
		<a href="images/alu_slab1.jpg">
			<img src="thumbnails/alu_slab1.jpg" alt="Aleutian Islands Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/alu_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: November 16, 2011
		</td>
	</tr>

	<tr>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_clip.grd'); ?><br />
		  <small>alu_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_clip.xyz'); ?><br />
		  <small>alu_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_strclip.grd'); ?><br />
		  <small>alu_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_strclip.xyz'); ?><br />
			<small>alu_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_dipclip.grd'); ?><br />
			  <small>alu_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0_dipclip.xyz'); ?><br />
		  <small>alu_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_contours.in'); ?><br /><small>alu_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_slab1.0.clip'); ?> <br />
		  <small>alu_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_top.in'); ?> <br />
		  <small>alu_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/alu_base.in'); ?> <br />
		  <small>alu_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr class="row2">
		<th rowspan="2" scope="row">
		<strong>Central America</strong>
		<a href="images/mex_slab1.jpg">
			<img src="thumbnails/mex_slab1.jpg" alt="Central America Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/mex_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: July 22, 2011
		</td>
	</tr>

	<tr class="row2">
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_clip.grd'); ?><br />
		  <small>mex_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_clip.xyz'); ?><br />
		  <small>mex_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_strclip.grd'); ?><br />
		  <small>mex_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_strclip.xyz'); ?><br />
			<small>mex_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_dipclip.grd'); ?><br />
			  <small>mex_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0_dipclip.xyz'); ?><br />
		  <small>mex_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_contours.in'); ?><br /><small>mex_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_slab1.0.clip'); ?> <br />
		  <small>mex_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_top.in'); ?> <br />
		  <small>mex_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/mex_base.in'); ?> <br />
		  <small>mex_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr>
		<th rowspan="2" scope="row">
		<strong>Cascadia</strong>
		<a href="images/cas_slab1.jpg">
			<img src="thumbnails/cas_slab1.jpg" alt="Cascadia Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/cas_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		<p>Cascadia model generated by a different methodology than other Slab1.0 models owing to the sparsity of slab earthquakes.
		It is included here for global completeness.  See <a href="http://www.agu.org/journals/jb/jb1209/2012JB009407/">McCrory et al. (2012)</a>
		for discussion of methodology; see <a href="http://pubs.usgs.gov/ds/633">Blair et al. (2012)</a> for additional ArcGIS files.</p>
		Last Updated: September 1, 2012
		</td>
	</tr>

	<tr>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_clip.grd'); ?><br />
		  <small>cas_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_clip.xyz'); ?><br />
		  <small>cas_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_strclip.grd'); ?><br />
		  <small>cas_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_strclip.xyz'); ?><br />
			<small>cas_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_dipclip.grd'); ?><br />
			  <small>cas_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0_dipclip.xyz'); ?><br />
		  <small>cas_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_contours_dep.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_contours_dep.in'); ?><br /><small>cas_contours_dep.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/cas_slab1.0.clip'); ?> <br />
		  <small>cas_slab1.0.clip [4]</small></a></p>
		</td>
	</tr>

	<tr class="row2">
		<th rowspan="2" scope="row">
		<strong>Izu-Bonin</strong>
		<a href="images/izu_slab1.jpg">
			<img src="thumbnails/izu_slab1.jpg" alt="Izu-Bonin Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/izu_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: November 16, 2011
		</td>
	</tr>

	<tr class="row2">
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_clip.grd'); ?><br />
		  <small>izu_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_clip.xyz'); ?><br />
		  <small>izu_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_strclip.grd'); ?><br />
		  <small>izu_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_strclip.xyz'); ?><br />
			<small>izu_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_dipclip.grd'); ?><br />
			  <small>izu_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0_dipclip.xyz'); ?><br />
		  <small>izu_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_contours.in'); ?><br /><small>izu_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_slab1.0.clip'); ?> <br />
		  <small>izu_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_top.in'); ?> <br />
		  <small>izu_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/izu_base.in'); ?> <br />
		  <small>izu_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr>
		<th rowspan="2" scope="row">
		<strong>Kermadec-Tonga</strong>
		<a href="images/ker_slab1.jpg">
			<img src="thumbnails/ker_slab1.jpg" alt="Kermadec-Tonga Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/ker_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: November 16, 2011
		</td>
	</tr>

	<tr>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_clip.grd'); ?><br />
		  <small>ker_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_clip.xyz'); ?><br />
		  <small>ker_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_strclip.grd'); ?><br />
		  <small>ker_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_strclip.xyz'); ?><br />
			<small>ker_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_dipclip.grd'); ?><br />
			  <small>ker_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0_dipclip.xyz'); ?><br />
		  <small>ker_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_contours.in'); ?><br /><small>ker_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_slab1.0.clip'); ?> <br />
		  <small>ker_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_top.in'); ?> <br />
		  <small>ker_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ker_base.in'); ?> <br />
		  <small>ker_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr class="row2">
		<th rowspan="2" scope="row">
		<strong>Kamchatka/Kurils/Japan</strong>
		<a href="images/kur_slab1.jpg">
			<img src="thumbnails/kur_slab1.jpg" alt="Kamchatka/Kurils/Japan Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/kur_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: July 22, 2011
		</td>
	</tr>

	<tr class="row2">
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_clip.grd'); ?><br />
		  <small>kur_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_clip.xyz'); ?><br />
		  <small>kur_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_strclip.grd'); ?><br />
		  <small>kur_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_strclip.xyz'); ?><br />
			<small>kur_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_dipclip.grd'); ?><br />
			  <small>kur_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0_dipclip.xyz'); ?><br />
		  <small>kur_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_contours.in'); ?><br /><small>kur_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_slab1.0.clip'); ?> <br />
		  <small>kur_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_top.in'); ?> <br />
		  <small>kur_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/kur_base.in'); ?> <br />
		  <small>kur_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr>
		<th rowspan="2" scope="row">
		<strong>Philippines</strong>
		<a href="images/phi_slab1.jpg">
			<img src="thumbnails/phi_slab1.jpg" alt="Philippines Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/phi_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: November 16, 2011
		</td>
	</tr>

	<tr>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_clip.grd'); ?><br />
		  <small>phi_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_clip.xyz'); ?><br />
		  <small>phi_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_strclip.grd'); ?><br />
		  <small>phi_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_strclip.xyz'); ?><br />
			<small>phi_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_dipclip.grd'); ?><br />
			  <small>phi_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0_dipclip.xyz'); ?><br />
		  <small>phi_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_contours.in'); ?><br /><small>phi_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_slab1.0.clip'); ?> <br />
		  <small>phi_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_top.in'); ?> <br />
		  <small>phi_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/phi_base.in'); ?> <br />
		  <small>phi_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr class="row2">
		<th rowspan="2" scope="row">
		<strong>Ryukyu</strong>
		<a href="images/ryu_slab1.jpg">
			<img src="thumbnails/ryu_slab1.jpg" alt="Ryukyu  Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/ryu_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: November 16, 2011
		</td>
	</tr>

	<tr class="row2">
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_clip.grd'); ?><br />
		  <small>ryu_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_clip.xyz'); ?><br />
		  <small>ryu_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_strclip.grd'); ?><br />
		  <small>ryu_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_strclip.xyz'); ?><br />
			<small>ryu_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_dipclip.grd'); ?><br />
			  <small>ryu_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0_dipclip.xyz'); ?><br />
		  <small>ryu_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_contours.in'); ?><br /><small>ryu_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_slab1.0.clip'); ?> <br />
		  <small>ryu_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_top.in'); ?> <br />
		  <small>ryu_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/ryu_base.in'); ?> <br />
		  <small>ryu_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr>
		<th rowspan="2" scope="row">
		<strong>Santa Cruz Islands/Vanuatu/Loyalty Islands</strong>
		<a href="images/van_slab1.jpg">
			<img src="thumbnails/van_slab1.jpg" alt="Santa Cruz Islands/Vanuatu/Loyalty Islands Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/van_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: November 16, 2011
		</td>
	</tr>

	<tr>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_clip.grd'); ?><br />
		  <small>van_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_clip.xyz'); ?><br />
		  <small>van_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_strclip.grd'); ?><br />
		  <small>van_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_strclip.xyz'); ?><br />
			<small>van_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_dipclip.grd'); ?><br />
			  <small>van_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0_dipclip.xyz'); ?><br />
		  <small>van_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_contours.in'); ?><br /><small>van_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_slab1.0.clip'); ?> <br />
		  <small>van_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_top.in'); ?> <br />
		  <small>van_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/van_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/van_base.in'); ?> <br />
		  <small>van_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr class="row2">
		<th rowspan="2" scope="row">
		<strong>Scotia</strong>
		<a href="images/sco_slab1.jpg">
			<img src="thumbnails/sco_slab1.jpg" alt="Scotia Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/sco_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: November 16, 2011
		</td>
	</tr>

	<tr class="row2">
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_clip.grd'); ?><br />
		  <small>sco_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_clip.xyz'); ?><br />
		  <small>sco_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_strclip.grd'); ?><br />
		  <small>sco_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_strclip.xyz'); ?><br />
			<small>sco_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_dipclip.grd'); ?><br />
			  <small>sco_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0_dipclip.xyz'); ?><br />
		  <small>sco_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_contours.in'); ?><br /><small>sco_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_slab1.0.clip'); ?> <br />
		  <small>sco_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_top.in'); ?> <br />
		  <small>sco_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sco_base.in'); ?> <br />
		  <small>sco_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr>
		<th rowspan="2" scope="row">
		<strong>Solomon Islands</strong>
		<a href="images/sol_slab1.jpg">
			<img src="thumbnails/sol_slab1.jpg" alt="Solomon Islands Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/sol_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: July 22, 2011
		</td>
	</tr>

	<tr>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_clip.grd'); ?><br />
		  <small>sol_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_clip.xyz'); ?><br />
		  <small>sol_slab1.0_clip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_strclip.grd'); ?><br />
		  <small>sol_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_strclip.xyz'); ?><br />
			<small>sol_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_dipclip.grd'); ?><br />
			  <small>sol_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0_dipclip.xyz'); ?><br />
		  <small>sol_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_contours.in'); ?><br /><small>sol_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_slab1.0.clip'); ?> <br />
		  <small>sol_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_top.in'); ?> <br />
		  <small>sol_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sol_base.in'); ?> <br />
		  <small>sol_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr class="row2">
		<th rowspan="2" scope="row">
		<strong>South America</strong>
		<a href="images/sam_slab1.jpg">
			<img src="thumbnails/sam_slab1.jpg" alt="South America Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/sam_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: July 22, 2011
		</td>
	</tr>

	<tr class="row2">
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_clip.grd'); ?><br />
		  <small>sam_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_clip.xyz'); ?><br />
		  <small>sam_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_strclip.grd'); ?><br />
		  <small>sam_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_strclip.xyz'); ?><br />
			<small>sam_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_dipclip.grd'); ?><br />
			  <small>sam_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0_dipclip.xyz'); ?><br />
		  <small>sam_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_contours.in'); ?><br /><small>sam_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_slab1.0.clip'); ?> <br />
		  <small>sam_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_top.in'); ?> <br />
		  <small>sam_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sam_base.in'); ?> <br />
		  <small>sam_base.in [5]</small></a></p>
		</td>
	</tr>

	<tr>
		<th rowspan="2" scope="row">
		<strong>Sumatra-Java</strong>
		<a href="images/sum_slab1.jpg">
			<img src="thumbnails/sum_slab1.jpg" alt="Sumatra-Java Figure" />
			See detailed figure
		</a>
		<small>
			[<a href="images/sum_slab1.jpg">JPEG</a>]
			[<a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0.pdf">PDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0.pdf'); ?></a>]
		</small>
		 </th>

		<td colspan="5">
		Last Updated: July 22, 2011
		</td>
	</tr>

	<tr>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_clip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_clip.grd'); ?><br />
		  <small>sum_slab1.0_clip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_clip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_clip.xyz'); ?><br />
		  <small>sum_slab1.0_clip.xyz [2]</small></a></p></td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_strclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_strclip.grd'); ?><br />
		  <small>sum_slab1.0_strclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_strclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_strclip.xyz'); ?><br />
			<small>sum_slab1.0_strclip.xyz [2]</small></a></p>
		</td>
		<td><p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_dipclip.grd">NetCDF - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_dipclip.grd'); ?><br />
			  <small>sum_slab1.0_dipclip.grd [1]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_dipclip.xyz">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0_dipclip.xyz'); ?><br />
		  <small>sum_slab1.0_dipclip.xyz [2]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_contours.in">ASCII - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_contours.in'); ?><br /><small>sum_contours.in [3]</small></a></p>
		</td>
		<td>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0.clip">Perimeter - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_slab1.0.clip'); ?> <br />
		  <small>sum_slab1.0.clip [4]</small></a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_top.in">Top - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_top.in'); ?> <br />
		  <small>sum_top.in [5]</small> </a></p>
		<p><a href="ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_base.in">Base - <?php //print formatSize('ftp://hazards.cr.usgs.gov/web/data/slab/models/sum_base.in'); ?> <br />
		  <small>sum_base.in [5]</small></a></p>
		</td>
	</tr>


</table>
<br />

<h3>Notes</h3>
<p>For instructions on use, see <a href="SlabInstructions.php">these directions</a>.</p>
<ul class="nobullet">
	<li>[1] grd format. For use with GMT grdimage.</li>
	<li>[2] ascii format. Listed as xyz (lat, lon, depth).</li>
	<li>[3] ascii format, multi-segment file, contours in 20 km intervals.</li>
	<li>[4] ascii format. Clipping mask for grid (region of grid applicability). For use with GMT grdclip.</li>
	<li>[5] ascii format. Top and base of model region.</li>
</ul>

<b>For further information, please use the <a href="/contactus/?to=ghayes@usgs.gov">contact form</a> or email <a href="mailto:ghayes@usgs.gov">Gavin Hayes</a>.</b>

<script type="text/javascript">
$(document).ready( function() {
	$("#more-info").hide();
	$("#more-link").css('display', 'block');
	$("#more-link").show();

	$("#more-link").click( function(e) {
		e.preventDefault();
		if( $("#more-info").is(":hidden") ) {
			$("#more-info").slideDown();
			$(this).text("Show Less Information");
		}
		else {
			$("#more-info").slideUp();
			$(this).text("Show More Information");
		}
	});
});
</script>
