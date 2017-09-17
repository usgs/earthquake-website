<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'PRISM software: Processing and Review Interface for Strong Motion Data';
  $HEAD = '';
  $FOOT = '';

  include 'template.inc.php';
}

?>

<figure class="right">
  <img src="prism.png" class="left" />
</figure>

<p>PRISM is designed to be used for automatically processing raw strong-motion acceleration time series to produce compatible acceleration, velocity and displacement time series, acceleration, velocity and displacement response spectra, Fourier amplitude spectra, and standard earthquake-engineering intensity measures.</p>
<p><a href="https://www.strongmotioncenter.org/vdc/cosmos_format_1_20.pdf">Input to PRISM currently is limited to single-component data files in Consortium of Organizations for Strong-Motion Observation Systems (COSMOS) V0 format</a>. Output products are COSMOS V1, V2 and V3 files.</p>
<p>The PRISM software consists of two major components: a module-based record processing engine, and a review tool, which is an interactive graphical user interface (GUI) for visually inspecting, editing and processing. The processing engine is integrated into the GUI to help ensure consistency in processing.</p>
<p>Key design features of the processing engine include batch (automatic) processing without the need for human intervention, and tracking of key parameters used in each of the processing steps, which are embedded in the metadata of the data products to ensure the ability to replicate the processed record from the original input.</p>
<p>The PRISM code is written in Java. It is open source, and is easy to install and run as stand-alone software on common operating systems such as Linux, Mac OS X and Windows.</p>
<p>PRISM is intended to be used by strong-motion seismic networks, as well as by earthquake engineers and seismologists.</p>

<ul>
  <li><a href="PRISM-instructions.pdf">How to Run PRISM Using Command Line</a> (.pdf)</li>
  <li><a href="PRISM-1.0.2.zip">Download PRISM Processing Engine Executable File with Examples</a> (.zip)</li>
  <li><a href="https://github.com/usgs/prism">Download PRISM Processing Engine Source Code</a> (github)</li>
</ul>

<h2>Earthquake Seminar</h2>
<p>Erol Kalkan, USGS, gave a <a href="https://earthquake.usgs.gov/contactus/menlo/seminars/1106">seminar about PRISM software</a> on August 9, 2017 at USGS, Menlo Park.</p>

<h2>References</h2><ul class="referencelist">
  <li>Jones, J., Kalkan, E. and Stephens, C. (2017). Processing and Review Interface for Strong Motion Data (PRISM)—Methodology and Automated Processing, Version 1.0.0: U.S. Geological Survey Open-File Report, 2017–1008, 81 p., <a href="https://pubs.er.usgs.gov/publication/ofr20171008">https://pubs.er.usgs.gov/publication/ofr20171008</a>.</li>
  <li>Jones, J., Kalkan, E., Stephens, C. and Ng, P. (2017). PRISM Software: Processing and Review Interface for Strong-Motion Data, Seismological Research Letters, doi:10.1785/0220160200.</li>
  <li>Kalkan, E. and Stephens, C. (2017). Systematic comparisons between PRISM version 1.0.0, BAP, and CSMIP ground-motion processing: U.S. Geological Survey Open-File Report 2017–1020, 108 p., <a href="https://pubs.er.usgs.gov/publication/ofr20171020">https://pubs.er.usgs.gov/publication/ofr20171020</a>.</li>
</ul>
