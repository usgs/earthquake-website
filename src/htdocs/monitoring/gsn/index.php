<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	11/10/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'GSN - Global Seismographic Network';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<div align="center">
  <figure>
    <img src="images/GSNStations-2015.gif" alt="GSN stations worldwide"/>
  </figure>
</div>
<p>
  The Global Seismographic Network is a permanent digital network of
  state-of-the-art seismological and geophysical sensors connected by a
  telecommunications network, serving as a multi-use scientific facility
  and societal resource for monitoring, research, and education. Formed in
  partnership among the USGS, the <a href="http://www.nsf.gov/">National
  Science Foundation (NSF)</a> and the <a href="http://www.iris.edu">
  Incorporated Research Institutions for Seismology (IRIS)</a>, the GSN
  provides near-uniform, worldwide monitoring of the Earth, with over 150
  modern seismic stations distributed globally. GSN stations are operated
  by the USGS <a href="/regional/asl/">Albuquerque Seismological
  Laboratory</a>, the <a href="http://ida.ucsd.edu/">IDA group at UC San
  Diego</a>, and other affiliate organizations.
</p>
<p>
  Data from the GSN are archived at the
  <a href="http://ds.iris.edu/ds/nodes/dmc/">IRIS Data Management Center</a>.
</p>
<div class="row">
	<div class="column one-of-two">
		<ul class="no-style linklist">
			<li>
				<a href="../operations/network.php?virtual_network=GSN">
					<h4>GSN Stations</h4>
					<img src="images/KWAJ_1_sm.jpg" alt="KWAJ station" height="75px" width="75px"/>
				</a>
				<p>
					Station data and operational status.
				</p>
			</li>
			<li>
				<a href="../operations/heliplot.php?virtual_network=GSN">
					<h4>GSN Heliplots</h4>
					<img src="../anss/images/heli.gif" alt="heliplot" height="75px" width="75px"/>
				</a>
				<p>
					Real-time seismograms from GSN stations
				</p>
			</li>
			<li>
				<a href="../../contactus/albuquerque/">
					<h4>Albuquerque Seismological Laboratory</h4>
					<img src="images/asl-aerial-2x.jpg" alt="ASL aerial" height="75px" width="75px"/>
				</a>
				<p>
					The mission of the Albuquerque Seismological Laboratory (ASL) is to support the
					operation and maintenance of seismic networks. As part of this mission, the ASL
					is responsible for the USGS-portion of the Global Seismographic Network (GSN)
					and the ANSS backbone network.
				</p>
			</li>
			<li>
				<a href="metadata.php">
					<h4>Station Metadata</h4>
					<img src="images/LSA_3_sm.jpg" alt="LSA station" height="75px" width="75px"/>
				</a>
				<p>
					Waveform data from the GSN and ANSS backbone are transmitted from the station to
					the USGS National Earthquake Information Center in near-real time, where they
					are used for rapid earthquake response.
				</p>
			</li>
	</div>
	<div class="column one-of-two">
		<ul>
			<li>
				<h3>Partners:</h3>
				<ul>
					<li><a href="http://www.iris.edu" target="_blank">Incorporated Research Institutions for Seismology</a> (IRIS)</li>
					<li><a href="http://www.nsf.gov" target="_blank">National Science Foundation</a> (NSF)</li>
					<li><a href="http://ida.ucsd.edu/">University of California San Diego, IDA</a></li>
					<li><a href="http://www.ctbto.org/">Comprehensive Test Ban Treaty Organization</a></li>
					<li><a href="http://www.fdsn.org/">Federation of Digital Broad-Band Seismograph Networks</a> (FDSN)</li>
				</ul>
			</li>
			<li>
				<a href="http://pubs.usgs.gov/fs/2011/3021/" target="_blank">
				The Global Seismographic Network</a> (FS-2011-3021)
			</li>
		</ul>
	</div>
</div>
