<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/4/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Afghanistan Software';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>
	For the preliminary Probabilistic Seismic Hazard Maps of Afghanistan, we make
	available the software source-code that was used to generate the maps and
	data. While this page makes this content available and also attempts to
	explain some basic steps involved to run the software, significant
	subject-matter and computer background knowledge are required in order to
	re-run this process yourself. Nonetheless, simply viewing the source code
	involved in generating these maps can provide useful insight into the hazard
	estimates.
</p>

<h2>Configuration Files</h2>
<a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/software/ConfigFiles.zip">Download Configuration Files (3.1 kB)</a>
<p>
	These files contain configuration information needed to produce a
	probabilistic seismic hazard map and include input and output directories
	and files, weights for each input file, and the probability level to
	extract from the hazard curve, for example, the ground motions expected to
	be exceeded with a 2&#37; probability in 50 years. The download contains
	nine configuration files, one for each of the nine maps.
</p>

<h2>Input Files</h2>
<a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/software/InputFiles.zip">Download Input Files (272 kB)</a>
<p>
	These files contain input parameters to the Fortran source code used to
	generate the hazard curves from which the hazard maps are derived. The
	input files specify the grid over which hazard curves are calculated,
	ground-motion attenuation relationships, and specifics about the source,
	for example, location, magnitude and annual rate. In order to re-create
	the maps produced by the USGS, these files should not be modified. They
	should be placed in a folder called &ldquo;InF&rdquo;. In any case,
	insure that the directories and file names of the input files indicated
	in the configurations files are pointing to the correct locations.
</p>

<h2>Source Code</h2>
<a href="ftp://hazards.cr.usgs.gov/web/nshm/afghanistan/software/SourceFiles.zip">Download Source Files (52 kB)</a>
<p>
	These files are the source code that make up the software that generated
	the hazard curves and maps. It is a mixture of Fortran and C code and
	requires that you have appropriate compilers for each installed on your
	machine if you plan to re-compile (the code was compiled with gfortan and
	gcc). If you plan to re-compile the source code, you may need to modify
	the &ldquo;Makefile&rdquo; to suit your system environment. Executables
	will be placed in a directory called &ldquo;bin&rdquo;. At this point you
	should be able to run the software.
</p>
