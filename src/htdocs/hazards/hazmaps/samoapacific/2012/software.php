<?php
//	Author:	Tiffany Kalin
//	Contact: Mark Peterson
if	(!isset($TEMPLATE))	{
  $TITLE	=	'Samoa and the Pacific Islands Software';
  $NAVIGATION	= true;
  include	'template.inc.php';
}
?>

<h2>Software</h2>
<ul>
  <li>
    <a href="/static/web/nshm/samoapacific/software/Samoa_2012_progs.zip">2012 Programs</a>
  </li>
  <li>
    <a href="/static/web/nshm/samoapacific/software/swapf.zip">Swap Utility</a>
  </li>
  <li>
    <a href="/static/web/nshm/samoapacific/software/Samoa.2012.input.txt">2012 Input File</a>
  </li>
</ul>

<h3>
	Notes on Running Samoa and the Pacific Islands Hazard Programs
</h3>
<p>
	These programs are written in Fortran 95 and can be compiled with the GNU g-fortran compiler or with intel compiler or several others.
	The main experience of USGS / NSHMP is with mainframe computers, SUN Solaris and others.
	However, we do run these programs on Macs and PCs.
	They work if you use the right flags when compiling.
	We state the flags in the comment lines at the beginning of the programs.
	For example, if you want to compile with gfortran, look for occurrences of the word gfortran in the comment lines and that should get you started.
	We do not supply makefiles for these codes.
</p>
<p>
	At least one of the codes, namely hazgridXnga.samoa.f,  may require some additional data files.
	These data files are read in as needed.
	Currently their names are hard-coded into the fortran.
	You will need to change the paths to ones that correspond to files on your computer.
	Most or all of these hard-wired files correspond to Central and Eastern US ground-motion equations or GMPEs.
	We do not use any of those GMPEs in the American Samoa PSHA work, so you should not encounter any of these special files if you use the same GMPEs that we used.
</p>
<p>
	There are several stages in a PSHA and there are several codes that correspond to doing the work (calculations) at each stage.
	For example, there are early stages.
	In one of them, you need to prepare activity-rate matrices, or agrids.
	We have supplied the codes, the catalogs, and the input files to do these early stage agrid calculations, but you may not want to repeat our work.
	We have not supplied the codes or analysis to compute the b-values of the Gutenberg Richter magnitude, frequency distributions.
	We have supplied our computed agrids, which you can use.
	The agrids are written as binary words (machine language) in scan-line order.
	The words are &ldquo;big-endian&rdquo; as expected on SUN mainframe machines.
	If you want to use these agrid files on a PC or other &ldquo;little-endian&rdquo; machine, you will need to convert the words to little-endian.
	A code &ldquo;swapf.c&rdquo; can be used to make this important conversion.
	An included  zip file swapf.zip in the Software folder contains this program, both source code and executable suitable for running on a PC.
	A companion program bin2xyzX.v2.f converts the binary words to ascii.
	You can actually look at ascii data and see if the numbers make sense.
	For example, activity rates should be on the order of 0 to 10 for the most part.
	None should be huge and none should be negative.
	One such ascii file has been included in the &ldquo;AmSam Poly&rdquo; folder.
	This is the uniform-event-rate agrid within the AmSam polygon.
	Within the polygon, the rates are about 5.1 (the number of M0+-0.05) events per year per cell.
	Outside the polygon the rates are 0.
	The cells all have dimension 0.1 by 0.1&deg;.
	The a-values differ slightly because they are normalized by the cell areas or volumes, which change due to the convergence of meridians at the South Pole.
</p>
<p>
	At a later stage, you need to run the hazard model.
	This means, compute the hazard curve for each source at each site in the study area.
	We have supplied all of the hazard codes and the input files to reproduce our work.
	See <a href="/static/web/nshm/samoapacific/software/Samoa.2012.input.txt">Samoa.2012.input.txt</a> for further information.
</p>
<p>
	At a later stage, you need to combine the hazard curves with appropriate weights.
	The combine steps are discussed in various readmes and in cshell scripts, and the combine files have been included.
	There are two programs for combining hazard curves.
	The first is hazallXL.v2.f, and the second is hazallXL.v4.f.
	The primary difference between these is that in the first (v2) all of the site or receiver regions must be the same.
	In the second (v4) code, the computed site regions need not be the same, but all of them must fit within a master region (the &ldquo;study area&rdquo;).
	In both versions, the spatial increments dlat and dlong (latitude and longitude increments in the site grids) must be the same in all files to be combined.
</p>
<p>
	The deaggregation of the seismic hazard models require yet other software.
	This set of codes has not been supplied here.
	The plan is to set up a web URL where users may deaggregate the American Samoa seismic hazard at their site of interest, including sites at a considerable distance from American Samoa, such as Fiji and Vanuatu.
</p>
<strong>
	<a href="mailto:Harmsen@usgs.gov">Stephen Harmsen</a>
	September 5, 2012
 </strong>
