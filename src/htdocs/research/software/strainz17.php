<?php
  // Author: Lisa Wald
  // Contact: Paul Spudich,
  // Last modified: 08/29/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Software to Download';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2>strainz17: Earthquake Strains and Rotations</h2>

<p>
  <strong>strainz17.m</strong> and associated software is for inference of dynamic ground strains and rotations and their errors from short baseline array observations of ground motions.
</p>

<p>
  We present Matlab&reg;-language software that implements the method of Spudich et al. (1995) and Spudich and Fletcher (2008) to calculate the best fitting uniform strain and rigid-body rotation time series and their formal errors, given array measurements of ground motions. This example includes example input, example output, and a script for running the example.
</p>

<a href="ftp://hazards.cr.usgs.gov/web/software/example17a.zip">
  <strong>Download strainz17 ZIP file (700 Kb)</strong>
</a>
<p>
  Compressed file containing 21 files. This file may be uncompressed on a Windows machine using PKUNZIP, WinZip, or other software. On a Mac this file can be uncompressed using StuffIt Expander or other software. On linux/unix the file may be uncompressed using the <em>unzip</em> command.
</p>

<h3>Contents of the zip file: </h3>

<ul>
  <li>
    <strong>strainz17.m</strong> - Matlab language function for calculation of strain, rotation, and their errors from array data. This function takes its input and output through data structures. The exact definition of the input and output structures is described in the comments of the m-file.
  </li>
  <li>
    <strong>RUN_THE_EXAMPLE.m</strong> - Matlab script that runs the example.
  </li>
  <li>
    <strong>make_example_in_structure.m</strong> - Matlab function that reads the <em>stn*.txt</em> files and builds the structure input to <em>strainz17.m</em>.
  </li>
  <li>
    <strong>plot_save_strainz_output1.m</strong> - Matlab function that extracts, plots, and saves the results of the <em>strainz17</em> calculation.
  </li>
  <li>
    <strong>stn1.txt, stn2.txt, ... stn14.txt</strong> - ascii text files, each of which contains an example three-component ground displacement time series from one station of a 14-station seismic array.
  </li>
  <li><strong>our_example_ascii_output.txt</strong> - an ascii text file containing the rotation and strain time series that we obtain when we run the example.
  </li>
  <li>
    <strong>our_example_strainz_output1.mat</strong> - a Matlab '.mat' file containing the full results that we obtain when we run the example.
  </li>
  <li>
    <strong>our_example_strainz_output1.pdf</strong> - a pdf file containing the example plotted output.
  </li>
</ul>

<h3>Comments on the Example </h3>

<p>
  This  example has four goals: 1)  to verify that when you run <em>strainz17</em>, you obtain the same results that we obtain with the same input,  2) to show how to set up the input variables for the case in which the analysis is done for a 10-station subarray of a 14-station array, 3) to show the Matlab novice user how to take seismograms from ascii data files and place them into the input structure that <em>strainz17</em> requires, and 4) to show the Matlab novice how to extract, plot, and save  numerical output from the <em>strainz17</em> output structure. The function <em>make_example_in_structure.m</em> is aimed at goal 3, and the function <em>plot_save_strainz_output1.m</em> is aimed at goal 4. Both of these functions are not intended to be general input or output routines. Instead, they are written to be simple and easily understandable.
</p>
<p>The time series of the example are not real seismograms. </p>

<h3>Running the Example</h3>

<p>
  To run this example, uncompress the zip file. A folder/directory named <em>example17a</em> should be created. Make that directory your current/working directory while in the Matlab environment. At the Matlab '&gt;&gt;' prompt, invoke the script by typing <em>RUN_THE_EXAMPLE</em>, and if all goes well you will see the following:
</p>
<pre>
&gt;&gt; RUN_THE_EXAMPLE
Vp =
1.9300
Vs =
0.3260
Reading data from file stn1.txt
Reading data from file stn2.txt
Reading data from file stn3.txt
Reading data from file stn4.txt
Reading data from file stn5.txt
Reading data from file stn6.txt
Reading data from file stn7.txt
Reading data from file stn8.txt
Reading data from file stn9.txt
Reading data from file stn10.txt
Reading data from file stn11.txt
Reading data from file stn12.txt
Reading data from file stn13.txt
Reading data from file stn14.txt
In strainz17, matrix condition number = 5.3522
Saving plot in file plot_save_strainz_output1.pdf
Saving numerical results in file plot_save_strainz_output1.mat
Saving numerical results in ascii file ascii_output.txt
</pre>

<p>The example creates a plot on the screen and three output files:</p>
<ol>
  <li>
    <strong>plot_save_strainz_output1.pdf</strong> - a <em>pdf</em> version of the figure on the monitor.
  </li>
  <li>
    <strong>plot_save_strainz_output1.mat</strong> - a Matlab '.mat' file containing the complete numerical output of <em>strainz17</em> in full precision. See the <em>strainz17.m</em> comments for a detailed description of the output. The file <em>plot_save_strainz_output1.mat</em> contains a structure name <em>szo</em> which can be compared with the identically-named structure in our output file <em>our_example_strainz_output.mat</em>, included in the zip file. Your results should agree with ours to 13 or 14 significant figures.
  </li>
  <li>
    <strong>ascii_output.txt</strong> - an ascii file containing a subset of the rotation and strain time series printed to limited precision. This file should agree exactly with our output file <em>our_example_ascii_output.txt</em> included in the zip file. Row/record<em> i</em> of <em>ascii_output.txt</em> contains:
  </li>
</ol>

<p>
  Column 1: <em>t(i)</em>, an artificial example time assigned to row <em>i</em><br>
  Column 2: maximum shear strain at time <em>t(i)</em><br>
  Column 3: dilatation at time <em>t(i)</em><br>
  Column 4: rotation (rad) about the <em>x1</em> axis at time <em>t(i)</em><br>
  Column 5: rotation (rad) about the <em>x2</em> axis at time <em>t(i)</em><br>
  Column 6: rotation (rad) about the <em>x3</em> axis at time <em>t(i)</em><br>
  Column 7: mistfit ratio at time <em>t(i)</em>
</p>

<h3>Development Environment and Warning About Line Ends</h3>

<p>
  The distributed files were created on an Apple Macintosh computer runing OS X version 10.5.5 using Matlab Version R2008a. ASCII files on the Mac (e.g. *.m, *.txt) use the <em>newline</em> character as the line/record terminator. PCs use <em>carriage-return newline</em>. If our text files do not wrap text properly on your computer, you might need to  replace our line-end characters with yours.
</p>

<h3>Disclaimer</h3>

<p>
  It is the complete responsibility of the users of this software to verify that the software produces results that are sufficiently accurate to be acceptable to the user. Although this software has been used by the US Geological Survey, no warranty, expressed or implied, is made by the USGS or the United States Government as to the accuracy and functioning of the software and related program material, nor shall the fact of distribution constitute any such warranty, and no responsibility is assumed by the USGS  in connection therewith.
</p>

<h3>References</h3>

<ul class="referencelist">
  <li>
    Spudich, P., Steck, L.K., Hellweg, M., Fletcher, J., and Baker, L.M., 1995, Transient stresses at Parkfield, California, produced by the M7.4 Landers earthquake of June 28, 1992: observations from the UPSAR dense seismograph array:  J. Geophys. Res. , v. 100, 675-690. doi:10.1029/94JB02477
  </li>
  <li>
    Spudich, P., and Fletcher, J., 2008. Observation and prediction of dynamic ground strains, tilts and torsions caused by the M6.0 2004 Parkfield, California, earthquake and aftershocks, derived from UPSAR array observations: Bull. Seismol. Soc. Am. , 98, 1898 &ndash; 1914. DOI: 10.1785/0120070157
  </li>
</ul>
