<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Download the 3-D Geologic and Seismic Velocity Models of the San Francisco Bay Region';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>
<h2>Geologic Block Model</h2>

<ul>
  <li>Detailed model
    <ul>
      <li>Zone and fault surfaces
	<a href="docs/USGSBayAreaBM-05.1.0_allsurfs.tgz"
	   >USGSBayAreaBM-05.1.0_allsurfs.tgz</a> (42.3 MB)
	<p>Tarball of tsurf files for all zone and fault surfaces for
	  the detailed geologic block model.</p></li>
      <li>Fault surfaces only
	<a href="docs/USGSBayAreaBM-05.1.0_faultsurfs.tgz"
	   >USGSBayAreaBM-05.1.0_faultsurfs.tgz</a> (8.0 MB)
	<p>Tarball of tsurf files for fault surfaces for the detailed
	  geologic block model.</p></li>
    </ul></li>
  <li>Regional model
    <ul>
      <li>Zone and fault surfaces
	<a href="docs/USGSBayAreaBMExt-05.1.0_allsurfs.tgz"
	   >USGSBayAreaBMExt-05.1.0_allsurfs.tgz</a> (2.8 MB)
	<p>Tarball of tsurf files for mantle, lower crust, and
	  topography/bathymetry zone surfaces and the San Andreas fault
	  surface for the regional geologic block model.</p></li>
  </ul></li>
</ul>

<h2>Seismic Velocity Model</h2>

<ul>
<li>Detailed model
  <a href="ftp://ehzftp.wr.usgs.gov/baagaard/cencalvm/database/USGSBayAreaVM-08.3.0.etree.gz"
  >USGSBayAreaVM-08.3.0.etree.gz</a> (1.6 GB)
  <p>Etree database file for inner, fine resolution model covering the San Francisco Bay area</p></li>
<li>Regional model
  <a href="ftp://ehzftp.wr.usgs.gov/baagaard/cencalvm/database/USGSBayAreaVMExt-08.3.0.etree.gz"
  >USGSBayAreaVMExt-08.3.0.etree.gz</a>(1.1 GB)
  <p>Etree database file for outer, coarser resolution model. The model fits around the detailed model and extends the region covered by the model. If you are only interested in the volume covered by the detailed model, you do not need to download this model.</p></li>
<li>Checksums for database files
  <p>For use with <a href="http://en.wikipedia.org/wiki/Md5sum">md5sum</a> software to verify the integrity of downloaded files.</p>
  <ul>
  <li><a href="ftp://ehzftp.wr.usgs.gov/baagaard/cencalvm/database/MD5SUMS_GZIPPED">Compressed files</a></li>
  <li><a href="ftp://ehzftp.wr.usgs.gov/baagaard/cencalvm/database/MD5SUMS">Unompressed files</a></li>
  </ul>
<li>Model query software
  <p>This software library is required to query the seismic velocity model for physical properties. The software and its documentation are available at <a href="https://https://github.com/baagaard-usgs/cencalvm">github.com/baagaard-usgs/cencalvm</a>.</p>
</ul>
