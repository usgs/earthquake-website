<?php
      //  Author:  Tiffany Kalin
      //  Contact:
      //  Last  modified:  11/10/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'GSN Data';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>
<p>
  Waveform data from the GSN and ANSS backbone are transmitted from the station to the USGS National Earthquake Information Center in near-real time, where they are used for rapid earthquake response.&nbsp; A small number of stations do not have telemetry, and data from those sites are transmitted to the USGS via media such as tapes or CDs.&nbsp; As part of GSN and backbone operations, waveform data are reviewed during quality control.&nbsp; GSN and backbone data are available from the IRIS Data Management Center.
</p>
<p>
  The ASL has scanned a small subset of the WWSSN records and a number of these are available at the IRIS Data Management Center through the <a href="http://www.iris.edu/spud/filmchip">Searchable Product Depository</a>.
</p>

<div class="row">
  <div class="column one-of-two">
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
      <a href="http://geohazards.cr.usgs.gov/staffweb/mcnamara/Software/PQLX.html">Probability Density Function</a> plots:
    </p>
    	<ul>
    	  <li><a href="ftp://hazards.cr.usgs.gov/web/mcnamara/NEIC/PDFs/">NEIC real-time channels</a> (includes many stations in addition to the GSN &amp; backbone)</li>
    	  <li><a href="ftp://aslftp.cr.usgs.gov/pub/users/McNamara/PDFs/">GSN archive</a> (includes historical networks)</li>
    	</ul>
  </div>
  <div class="column one-of-two">
    <h3>Examples:</h3>
    <p>
      <a href="ttdata.php">Travel Time Dataset</a> <br/>
      A dataset compiled during the QC operations at the ASL
    </p>
    <p>
      <a href="nm_quake.php">New Mexico Earthquakes</a> <br/>
      The January 4, 1998 Magnitude 3.8 earthquake, approximately 3 miles south of Willard, New Mexico.
    </p>
    <p>
      <a href="ANMO_12hr.php">Texas Earthquake</a> <br/>
      A magnitude 3.6 earthquake which occurred in West Texas at 10:33:42 on April 15, 1998 (4:33:42 am Mountain Daylight Time). The earthquake is recorded on the third trace from the top, about halfway across the page.
    </p>
    <p>
      <a href="ANMO_12hr-3.php">Utah Earthquake</a> <br/>
      A magnitude 3.8 earthquake which occurred in southern Utah at 11:00:40 on June 18, 1998 (05:00:40 am Mountain Daylight Time). The earthquake is recorded on the eighth trace from the top, near the left edge of the page.
    </p>
    <p>
      <a href="ANMO_12hr-2.php">Small explosion</a> <br/>
      A small test explosion on Kirtland Air Force Base (where ANMO station is located) at about 16:38 on May 28, 1998 (10:38 am Mountain Daylight Time). The explosion is recorded on the ninth trace from the top, about halfway across the page. These small test explosions are a routine occurrence on the Air Force base. The recording shows a large oscillation from the blast and then returns to normal almost immediately (unlike an earthquake).
  </div>
</div>
