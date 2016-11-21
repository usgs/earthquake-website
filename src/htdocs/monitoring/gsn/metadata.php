<?php
      //  Author:  Tiffany Kalin
      //  Contact:
      //  Last  modified:  11/10/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'GSN Station Metadata';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>
<p>
  Waveform data from the GSN and ANSS backbone are transmitted from the station to the USGS National Earthquake Information Center in near-real time, where they are used for rapid earthquake response.&nbsp; A small number of stations do not have telemetry, and data from those sites are transmitted to the USGS via media such as tapes or CDs.&nbsp; As part of GSN and backbone operations, waveform data are reviewed during quality control.&nbsp; GSN and backbone data are available from the IRIS Data Management Center.
</p>

<div class="row">
  <div class="column two-of-three">
  	<h3>Available data:</h3>
  	<p>
      <a href="http://www.iris.edu/data/data.htm" target="_blank">Data available from IRIS</a> - Information on how to access data from the IRIS Data Management Center
    </p>

  	<p>
      Instrument response information
    </p>
    	<ul>
    	  <li>Dataless SEED volumes:
      		<ul>
            <li><a href="ftp://aslftp.cr.usgs.gov/pub/dataless/">IU,IC, CU, and related network codes (including historical data)</a></li>
      	  	<li><a href="ftp://hazards.cr.usgs.gov/ANSS/dataless/">IW and US network codes</a></li>
      		</ul>
    	  </li>
    	  <li>RESP files (compatible with EVALRESP software):
    			<ul>
            <li><a href="ftp://aslftp.cr.usgs.gov/pub/responses/">IU,IC, CU, and related network codes (including historical data)</a></li>
    	  		<li><a href="ftp://hazards.cr.usgs.gov/ANSS/responses/">IW and US network codes</a></li>
    			</ul>
    	  </li>
    	</ul>

  	<p>
      <a href="ttdata.php">Travel Time Dataset</a>--A dataset compiled during the QC operations at the ASL
    </p>

  	<p>
      <a href="http://geohazards.cr.usgs.gov/staffweb/mcnamara/Software/PQLX.html">Probability Density Function</a> plots:
    </p>
    	<ul>
    	  <li><a href="ftp://hazards.cr.usgs.gov/web/mcnamara/NEIC/PDFs/">NEIC real-time channels</a> (includes many stations in addition to the GSN &amp; backbone)</li>
    	  <li><a href="ftp://aslftp.cr.usgs.gov/pub/users/McNamara/PDFs/">GSN archive</a> (includes historical networks)</li>
    	</ul>
  </div>
  <div class="column one-of-three">
  	<h3>Announcements:</h3>
      <p>
        <a href="STS1.php">Problems with STS-1 sensitivities Oct 1, 2011</a>
      </p>
      <p>
        <a href="timing.php">Timing errors in the GSN Q680 dataloggers</a>
      </p>
      <p>
        <a href="wwssnhist.php">WWSSN historical data</a>
      </p>

      <h3>Examples:</h3>
        <p>
          <a href="quake_examples.php">Earthquake Examples</a>--New Mexico and other nearby earthquakes
        </p>
  </div>
</div>
