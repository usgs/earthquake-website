<?php
  // Author: Lisa Wald
  // Contact: Dan McNamara,
  // Last modified: 08/27/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Software to Download';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2>PQLX: A Software Tool to Evaluate Seismic Station Performance</h2>

<figure class='right'>
  <img src="images/pqlx.jpg" alt="PQLX screenshot snippet" width="312" height="256"/>
</figure>

<ul>
  <li>
    <a href="http://wush.net/svn/PQLX/tars">Download Software TARfiles</a>
    <p>username: PQLXtars<br/>
      password: getPQLX
    </p>
  </li>
  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/mcnamara/PQLX/pqlx.sampdata.tar.gz">
      Sample Dataset
    </a>
  </li>
  <li><a href="http://pubs.usgs.gov/of/2010/1292/">User Manual</a></li>
</ul>

<p>
  PQLX  is open-source software system for evaluating seismic station
  performance and data quality. The software consists of a server and client
  but also includes data extraction and manipulation tools. Given waveform
  data and instrument response files, PQLX server calculates trace
  statistics, Power Spectral Densities (PSD), and Probability Density
  Functions (PDF) and writes the results to a MySQL database for quick
  access.
</p>
<p>
  The PSD and PDF calculations are based on the algorithm by D.E.
  McNamara and R.P. Buland, Ambient Noise Levels in the Continental United
  States, Bull. Seism. Soc. Am., 94, 4, 1517-1527, 2004. PQLX is compatible
  with the Linux, Mac OSX, and Solaris operating systems. Waveform data are
  supported in Mini-SEED, SAC, SEGY, AH, nano, and DR100 data formats and
  response files must be in SEED RESP file format.
</p>
<p>
  The PQLX client used to access these results includes a GUI which is comprised of three parts:

<ol>
  <li>
    <strong>Trace Viewer:</strong> The Trace Viewer has the same functionality as PQLII (PASSCAL
    Quick Look II). The user can view trace data, filter, and calculate
    spectra.
  </li>
  <li>
    <strong>PDF Viewer:</strong> Accessing PSD and PDF information in the database,
    the PDF Viewer displays PDF plots using predefined and/or user-defined time
    windows.
  </li>
  <li>
    <strong>Station Viewer:</strong> After connecting to the database, the Station
    Viewer displays trace statistics (e.g. max/min values and gap counts), PDF
    thumbnails, and available trace data. The trace data is not stored in the
    MySQL database, but must be available via either the filesystem or a
    supported webservice. Additional waveform analysis functionality is in
    development.
  </li>
</ol>

<h2>Related Links:</h2>

<ul>
  <li>
    <a href="https://geohazards.usgs.gov/staffweb/mcnamara/PDFweb/Noise_PDFs.html">
    Ambient Noise Probability Functions
  </a> - detailed discussion of the noise PDFs: methods and interpretation
  </li>
  <li>Noise PDFs available on the web:
    <ul>
      <li>
        <a href="ftp://hazards.cr.usgs.gov/web/mcnamara/NEIC/PDFs/">USGS NEIC PDFs for all channels</a>
      </li>
      <li>
        <a href="https://geohazards.usgs.gov/staffweb/mcnamara/ANSSPDFweb/ANSSPDFweb.html">ANSS backbone network Noise PDF Research</a>
      </li>
    </ul>
  </li>
  <li>
    <a href="http://www.iris.washington.edu/servlet/quackquery/budFileSelector.do;jsessionid=68613AEAC7F94F09F4E42B5A7E650C1F">
      IRIS DMC QUACK
    </a> (II, IU, IM, UW, GE, GR, TA)
  </li>
  <li>
    <a href="http://anf.ucsd.edu/stations.php">
      Earthscope Array Network Facility Station Book</a>
  </li>
  <li>
    <a href="http://www.orfeus-eu.org/Organization/Newsletter/vol7no1/QCM/QCM.html">
      ORFEUS
    </a>
  </li>
</ul>

<h2>Related Publications:</h2>

<ul class='referencelist'>
  <li>
    McNamara, D.E. and R.P. Buland, <a href="http://bssa.geoscienceworld.org/cgi/content/abstract/94/4/1517">Ambient Noise Levels in the Continental United States</a>, Bull. Seism. Soc. Am., 94, 4, 1517-1527, 2004.
  </li>
  <li>
    McNamara, D. E., R.I. Boaz, Seismic Noise Analysis System, <a href="http://pubs.usgs.gov/of/2005/1438/">Power Spectral Density Probability Density Function: Stand-Alone Software Package</a>, United States Geological Survey Open File Report, NO. 2005-1438, 30p., 2005.
  </li>
  <li>
    McNamara, D. E., H.M. Benz and W. Leith, <a href="http://pubs.usgs.gov/of/2005/1077/">An Assessment of Seismic Noise Levels for the ANSS Backbone and Selected Regional Broadband Stations</a>, United States Geological Survey, Open-File Report, NO. 2005-1077, 19p., 2005.
  </li>
  <li>
    McNamara, D.E., R.P. Buland, R.I. Boaz, B. Weertman, and T. Ahern, <a href="https://geohazards.usgs.gov/staffweb/mcnamara/Pubs/papers_pdf/mcnamaraetal_globalnoise.pdf">Ambient Seismic Noise</a>, Seis. Res. Lett., in review, 2005.
  </li>
</ul>
