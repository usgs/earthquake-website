<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/4/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Software';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<div class="row">
	<div class="column two-of-three">
		<h2>Summary of Downloads</h2>
		<p>
			For this update to the 2007 Alaska Probabilistic Hazard Maps we make
			available the software source-code that was used to generate the maps and
			data. While this page makes this content available and also attempts to
			explain some basic steps involved to run the software, a significant
			subject-matter and computer background knowledge are required in order to
			re-run this process yourself. Nonetheless, simply viewing the source code
			involved in generating these maps could still interesting to a seismic
			expert.
		</p>

		<h3>Configuration Files</h3>
		<p>
			These files contain configuration information specifying input and output
			directories and files used when creating a hazard map. There are
			twenty-one maps we produced and appropriately twenty-one configuration
			files contained in the download. These configuration files correspond in a
			one-to-one relationship with the generated maps. Note that if you modify
			the names of directories from what is recommended below, then you will
			need to correct these values contained in each of the configuration files
			in this download as well. Files contained in this download should be
			placed in a folder called, &ldquo;PARFilesF&rdquo;.
		</p>

		<h3>Input Files</h3>
		<p>
			These files contain input parameters to the Fortran source code used to
			generate the maps. These input parameters specify attenuation
			Relationships for various cases and parameters for each attentuation
			relationship. These files should not be modified in order to re-create the
			maps produced by the USGS. These files should be placed in a folder
			called, &ldquo;InF&rdquo;.
		</p>

		<h3>Source Code</h3>
		<p>
			These files are the source code behind the software that generated the
			maps and data. This is a mixture of Fortran and C code and requires you
			have appropriate compilers for each installed on your machine if you plan
			to re-compile. If you plan to re-compile the source code, you should
			modify the, &ldquo;Makefile&rdquo; to suit your system environment. These
			files should be placed in a folder called, &ldquo;Progs&rdquo;. In
			addition to this folder and each of the others you have created thus far,
			you must also create an empty folder called, &ldquo;bin&rdquo; and an
			empty folder called, &ldquo;OutF&rdquo;. At this point you should be able
			to run the software.
		</p>

	</div>
	<div class="column one-of-three">
		<h2>Download Files</h2>
		<ul>
			<li><a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/software/AK2007Configs.zip">Config Files</a></li>
			<li><a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/software/AK2007Inputs.zip">Input Files</a></li>
			<li><a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/software/AK2007Source.zip">Source Code Files</a></li>
		</ul>

		<h2>Other Software</h2>
		<ul>
			<li><a href="ftp://hazards.cr.usgs.gov/web/nshm/ak/2007/software/AK2007MakeMaps.zip">Create Map Images from Data</a></li>
		</ul>
	</div>
</div>
