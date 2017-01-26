<?php
      //  Author:  Tiffany Kalin
      //  Contact:
      //  Last  modified:  1/18/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Instructions for using Slab1.0 Subduction Zone Geometry Models';
      $NAVIGATION  = true;
      $HEAD = '<link rel="stylesheet" href="styles.css" />';
      include  'template.inc.php';
      }
?>


<p>Written by Gavin Hayes, USGS/NEIC, 02/12/2010 - Updated 07/22/2011</p>

<p><a href="SlabInstructions.txt">Download these instructions as text</a></p>

<p>
Region-specific geometry models are currently provided in several different formats. Each is described here, as well as an example of their use. All files have a common naming format; for the examples included below, we will discuss the Sumatra-Java model (ID=sum). For other models, substitute "sum" with the relevant model ID.
</p>
<hr />
<p>
<strong>Depth Grids Note:</strong> All z-values (depth) are -ve (i.e. a depth of 100 km = -100).
</p>
<hr />
<p>
<strong>Depth Grid (1) NetCDF format.</strong> For use with GMT grdimage (<a href="http://gmt.soest.hawaii.edu/" target="_blank">http://gmt.soest.hawaii.edu/</a>)
</p>
<p>
The .grd file supplied through this link is a 3D grid formatted for use with GMT plotting routines. For information on the grid, use:
</p>
<p class="command">
> grdinfo sum_slab1.0_clip.grd
</p>
<p>
All supplied models are sampled evert 0.02 degrees in both the X (longitude) and Y (latitude) directions.
</p>
<p>
The "clip" label in the grid filename indicates that the file is clipped beyond the range of the model, as which point node values are equal to Nan. The clipping mask (perimeter) is available for download in the "Model Limits" column, under "Perimeter".
</p>
<p>
To plot the grid file with GMT, use the following command:
</p>
<p class="command">
> grdimage $GRDFILE -Cslab.cpt $PROJ $BOUNDS -K -P -O -V >> $OUTFILE
</p>
<p>
Where:
</p>
<p class="command">
	$GRDFILE = "sum_slab1.0_clip.grd"
	$PROJ = "-JM10" (or some such equivalent map projection setting for GMT plotting)
	$BOUNDS = "-R90/130/-15/15" (or some such equivalent map regional bounds)
	$OUTFILE = "sum_slab1.0.ps" (or some such equivalent postscript output file name)
	slab.cpt = A color palette file made with "makecpt"
</p>
<p>
To plot the clipping mask ($CLIPFILE = "sum_slab1.0.clip"):
</p>
<p class="command">
> psxy $CLIPFILE -J -R -P -W1p -O -K -V >> $OUTFILE
</p>
<p>
To plot contours of the grid file at 20 km intervals, without annotations:
</p>
<p class="command">
> grdcontour $GRDFILE -C20 -A- $PROJ $BOUNDS -P -O -K -V >> $OUTFILE
</p>
<p>
To plot all of these together, such that the grdfile is only plotted within the bounds of the clipping mask:
</p>
<p class="command">
> psclip $CLIPFILE $PROJ $BOUNDS -P -O -K -V >> $OUTFILE`;<br />
> grdimage $GRDFILE -Cslab.cpt -J -R -P -K -O -V >> $OUTFILE`;<br />
> grdcontour $GRDFILE -J -R -P -C20 -A- -O -K -V >> $OUTFILE`;<br />
> psclip $CLIPFILE -J -R -P -C -O -K -V >> $OUTFILE`;<br />
> psxy $CLIPFILE -J -R -P -W1p -O -K -V >> $OUTFILE`;
</p>
<hr />
<p>
<strong>Depth Grid (2) ASCII format.</strong> Text file, listing model as XYZ (longitude, latitude, depth).
</p>
<p>
XYZ representation of 3D model from (1). As with (1), the "clip" label in the filename indicates that the file is clipped beyond the range of the model, as which point node values are equal to Nan.
</p>
<p>
To convert the file to GMT .grd format, use "xyz2grd":
</p>
<p class="command">
> xyz2grd $ASCIIFILE -G$GRDFILE -I0.02/0.02 $BOUNDS
</p>
<p>
Where:
</p>
<p class="command">
	$ASCIIFILE = "sum_slab1.0_clip.xyz"
</p>
<p>
To assess the bounds of the ascii file, use "awk":
</p>
<p class="command">
> set maxlon = `awk 'BEGIN {max=-999}; {if ($1 > max) max=$1}; END {print max}' $ASCIIFILE`<br />
> set minlon = `awk 'BEGIN {min=999}; {if ($1 < min) min=$1}; END {print min}' $ASCIIFILE`<br />
> set maxlat = `awk 'BEGIN {max=-999}; {if ($2 > max) max=$2}; END {print max}' $ASCIIFILE`<br />
> set minlat = `awk 'BEGIN {min=999}; {if ($2 < min) min=$2}; END {print min}' $ASCIIFILE`
</p>
<hr />
<p>
"<strong>Strike Grids</strong>" and "<strong>Dip Grids</strong>" are offered in the same formats described above for the "Depth Grids". Rather than depth, the z-values in these files are, respectively, strike and interface dip.
</p>
<p>
<strong>NOTE:</strong> On 07/25/2011, strike grids were updated to reflect better methodology in the calculation of slab strike. At this time, the format of the z-value in these grids changed from dip direction (i.e. strike + 90deg), to strike.
</p>
<hr />
<p>
<strong>Contours, ASCII format.</strong> Delimited XYZ file of model contours (longitude, latitude, depth).
Delimiter = ">". Each delimiting header lists the z-value of the contour (also listed in column 3 of each contour block).
</p>
<p>
To plot the contour file with GMT:
</p>
<p class="command">
> psxy $CONTOURFILE -J -R -P -W1p,255/0/0 -O -K -V -M >> $OUTFILE
</p>
<p>Where:
</p>
<p class="command">
	$CONTOURFILE = "sum_contours.in"
</p>
<hr />
<p>
<strong>Model Limits</strong>: 3 files in ASCII format.
</p>
<ol>
<li>Perimeter - clipping mask of model (area of model applicability), as described above in depth grid section. XY values (longitude, latitude).</li>
<li>Top - XYZ values (longitude, latitude, depth) along top edge of model.</li>
<li>Base - XYZ values (longitude, latitude, depth) along bottom edge of model.</li>
</p>
<hr />
