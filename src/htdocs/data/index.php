<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald,
  // Last modified: 6/15/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Data and Products';
  $NAVIGATION = false;
  $HEAD = '
    <link rel="stylesheet" href="index.css"/>
  ';
  include 'template.inc.php';
  }
?>

<div class="row">

<!-- Data -->
  <section class="column one-of-two">
    <h2>Data</h2>
    <nav class="jumplist">
      <a href="#web">Web Services</a>
      <a href="#eq">Earthquakes</a>
      <a href="#wave">Seismic Waveforms</a>
      <a href="#sta">Seismic Stations</a>
      <a href="#geod">Geodetic Data</a>
      <a href="#earth">Earth Structure and Site Response</a>
      <a href="#site">Ground Motion and Site Conditions</a>
      <a href="#model">Hazard Assessment Data and Models</a>
      <a href="#other">Other Data Sources</a>
      <a href="#info">Information and Data Outside of USGS</a>
    </nav>
<!-- end of Jumplist navigation -->

    <div class="alert" style="margin-bottom:16px">
      <h3 id="eq">Web Services</h3>
      <p><a href="/ws/">Web Services</a> for real-time and catalog earthquakes, hazard maps, slabs, and more.
      </p>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/latesteqs.gif" width="75" alt=""/>
      </figure>
      <h3>Earthquakes</h3>

      <ul>
        <li><a href="/earthquakes/feed/">Real-time Data Feeds</a></li>
        <li><a href="comcat/">ANSS Comprehensive Earthquake Catalog (ComCat) Documentation</a></li>
        <li><a href="pde.php">Preliminary Determination of Epicenters (PDE)</a></li>
        <li><a href="/monitoring/">Regional Seismic Networks</a></li>
      </ul>

      <h4>Specialized Earthquake Catalogs</h4>
      <ul>
        <li>Double Difference Relocation Catalogs:
        <ul>
          <li><a href="http://www.ldeo.columbia.edu/~felixw/NCAeqDD/">Double-difference Earthquake Catalog for Northern California (1984-2009)</a></li>
          <li><a href="http://www.data.scec.org/research-tools/datasets.html">Southern California Earthquake Center (SCEC) Data Center Special Data Sets</a></li>
        </ul>
        </li>
        <li><a href="centennial/">Centennial Earthquake Catalog</a></li>
        <li><a href="/earthquakes/eqarchives/mineblast/">NEIC Mining Seismicity Catalog</a></li>
        <li><a href="russia_seismicity/">Seismicity of Russia and the Former Soviet Union</a></li>
        <li><a href="iss_summ.php">International Seismological Summary (ISS) Earthquake Catalog (1918-1963)</a></li>
        <li><a href="scr_catalog.php">Earthquake Catalog for Stable Continental Regions - Intraplate Earthquakes (495-2002)</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/waveforms.gif" width="75" alt=""/>
      </figure>
      <h3 id="wave">Seismic Waveforms</h3>

      <ul>
    		<li>Real-time:
    			<ul>
    				<li><a href="/monitoring/operations/heliplots_gsn.php">GSN Stations</a></li>
    				<li><a href="/monitoring/operations/heliplots_anss.php">ANSS Backbone Stations</a></li>
    				<li><a href="monitoring/netquakes/map/">Netquake Volunteer Stations</a></li>
    				<li><a href="/monitoring/spectrograms/">Spectrograms</a></li>
    			</ul>
    		</li>
    		<li><a href="http://www.iris.edu/data/seismograms/">Broadband Data - Incorporated Research Institutions for Seismology (IRIS)</a></li>
    		<li>Strong Motion Data:
    		<ul>
    			<li><a href="http://www.strongmotioncenter.org/">USGS-CGS Center for Engineering Strong Motion Data</a></li>
    			<li><a href="/monitoring/nsmp/data.php">USGS National Strong Motion Program (NSMP) Data</a></li>
    		</ul>
    		</li>
    		<li>Weak Motion data from regional networks:
    		<ul>
    			<li><a href="http://www.data.scec.org/">Southern California Earthquake Data Center (SCECDC)</a></li>
    			<li><a href="http://www.ncedc.org/">Northern California Earthquake Data Center (NCECDC) </a></li>
    		</ul>
    		</li>
    		<li><a href="http://www.iris.edu/data/seismograms/">Aftershock Deployments</a></li>
    		<li><a href="http://escweb.wr.usgs.gov/nsmp-data/GEOS/geos.html">General Earthquake Observation System (GEOS)</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/stations.jpg" width="75" alt=""/>
      </figure>
      <h3 id="sta">Seismic Stations</h3>

      <ul>
        <li><a href="http://www.isc.ac.uk/registries/">International Registry of Stations</a></li>
        <li><a href="/monitoring/operations/network.php">GSN &amp; ANSS Station Info and Network Status</a></li>
        <li><a href="/regional/asl/data/">Albuquerque Seismo Lab Station Data</a>:
        <ul>
          <li>Instrument Response</li>
          <li>Travel-time Dataset</li>
          <li>Probability Density Plots</li>
          <li>Historical WWSSN Data</li>
        </ul>
        <li>Also see <a href="/monitoring/">Monitoring</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/geodetic.jpg" width="75" alt=""/>
      </figure>
      <h3 id="geod">Geodetic Data</h3>

      <p>
        Currently to make geodetic observations the USGS uses the Global Positioning System (GPS) and also other techniques (<a href="/monitoring/deformation/data/instruments.php">creepmeters, tiltmeters, strainmeters, magnetometers, pore pressure monitors</a>).
      </p>
    	<ul>
    		<li><a href="/monitoring/deformation/data/">Crustal Deformation Data</a> </li>
    		<li><a href="/monitoring/deformation/data/plots/">Crustal Deformation Data Plots</a></li>
    		<li><a href="http://www.ncedc.org/survey-gps/">Unprocessed USGS Campaign GPS data and Bay Area Continuous GPS data (raw and RINEX)</a> at NCEDC</li>
    		<li><a href="http://garner.ucsd.edu/">Unprocessed USGS Southern California Continuous GPS data (raw and RINEX)</a> at SOPAC</li>
    		<li><a href="/monitoring/gps/">USGS GPS Time Series and Station Velocities</a></li>
    		<li>Real-time GPS Positions:
    		<ul>
    			<li><a href="http://escweb.wr.usgs.gov/share/highrate-gps/">San Francisco Bay Area</a></li>
    			<li><a href="http://www.scign.org/realtime/">Southern California</a></li>
    		</ul>
    		</li>
    		<li>USGS once used Electronic Distance Measurement (EDM) with two different instruments:
    		<ul>
    			<li><a href="/monitoring/deformation/geodolite/">Geodolite (1970 to 1992)</a></li>
    			<li><a href="/monitoring/edm/ ">Two Color EDM (1984 to 2005)</a></li>
    		</ul>
    		</li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/earthstruct.gif" width="75" alt=""/>
      </figure>
      <h3 id="earth">Earth Structure and Site Response</h3>

      <ul>
    		<li><a href="crust/database.php">Global Crustal Database</a></li>
    		<li><a href="/hazards/apps/vs30/">USGS Global Vs30 Server</a></li>
    		<li><a href="http://geohazards.usgs.gov/cfusion/reflection/">USGS Vibroseis Seismic Reflection Data</a></li>
    		<li><a href="http://walrus.wr.usgs.gov/infobank/">USGS Marine Seismic Reflection Data</a></li>
    		<li>Maps of Quaternary Deposits:
    		<ul>
    			<li><a href="/research/external/reports/05HQGR0151.pdf">Maps of Quaternary Deposits and Liquefaction Susceptibility in the Central San Francisco Bay Region, California</a></li>
    			<li><a href="/research/external/reports/06HQAG0125.pdf">The Quaternary Geology of the Seattle-Tacoma Urban Corridor - Building the Foundation for Geologic-Hazard Mapping</a></li>
    		</ul>
    		</li>
    		<li><a href="http://geomaps.wr.usgs.gov/sfgeo/quaternary/">San Francisco Bay Region Geology and Fault Maps</a></li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/grdmotion.gif" width="75" alt=""/>
      </figure>
      <h3 id="site">Ground Motion and Site Conditions</h3>

      <p>The data obtained from active source studies are archived at <a href="http://www.iris.edu/data/seismograms/">IRIS</a> and/or at the <a href="http://www.ngdc.noaa.gov/mgg/aboutmgg/aboutwdcmgg.html">National Geophysical Data Center</a>.  USGS also provides access to certain data sets.</p>
    	<ul>
      	<li><a href="/research/cpt/">Cone Penetration Testing</a></li>
      	<li><a href="/learn/photos.php">Photographs Showing Ground Failure and Earthquake Damage</a></li>
      	<li>Landslide hazard maps:
      	<ul>
      		<li><a href="http://landslides.usgs.gov/hazards/nationalmap/">Landslide Overview Map of the Conterminous United States</a></li>
      		<li><a href="http://www.conservation.ca.gov/cgs/rghm/landslides/">California Geological Survey - Caltrans Corridor Landslides Maps </a></li>
      		<li><a href="http://gis.abag.ca.gov/website/Hazards/?hlyr=cgsLndsldZones">California Geological Survey Study Zones: Earthquake-Induced Landslides</a></li>
      	</ul>
      	</li>
      	<li><a href="http://escweb.wr.usgs.gov/nsmp-data/GEOS/geos.html">GEOS earthquake and aftershock data</a></li>
      	<li><a href="/research/groundmotion">Ground Motion Field Investigations &amp; Seismic Arrays</a></li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/hazards.jpg" width="75" alt=""/>
      </figure>
      <h3 id="model">Hazard Assessment Data and Models</h3>

      <ul>
  			<li><a href="/hazards/products/foreign/">International Hazard Map Data</a></li>
  			<li><a href="/hazards/products/">National Hazard Map Data</a></li>
  			<li><a href="/hazards/products/urban/">Urban Hazard Map Data</a></li>
  		</ul>

  		<ul>
  			<li><a href="/regional/nca/soiltype/">Soil Type and Shaking Hazard in the San Francisco Bay Area</a></li>
  			<li><a href="/regional/nca/alameda/shaking.php">Shaking Hazard in Alameda County, CA</a></li>
  			<li><a href="/regional/nca/qmap/">Liquefaction Hazard in San Francisco Bay Area, NW Alameda County, N Santa Clara Valley, CA</a></li>
  		</ul>

  	   <h4>Faults and Folds</h4>

  		<ul>
    		<li><a href="NoCal_GeoES_LiDAR_hs.kmz">Northern California LiDAR Hillshades (KMZ)</a></li>
    		<li>LiDAR databases:
    		<ul>
    			<li><a href="http://www.opentopography.org/">OpenTopography</a></li>
    			<li><a href="http://pugetsoundlidar.ess.washington.edu/lidardata/">Puget Sound Lidar Consortium</a></li>
    		</ul>
    		</li>
    		<li><a href="http://geomaps.wr.usgs.gov/sfgeo/geologic/">San Francisco Bay Region Geology and Geological Hazards</a> (maps)</li>
    		<li>Quaternary Fault Maps (publications):
    		<ul>
    		<li><a href="http://pubs.usgs.gov/ds/2006/177/">Digital database of recently active traces of the Hayward Fault, California</a></li>
    		<li><a href="http://pubs.er.usgs.gov/publication/ds541">Recently active traces of the Bartlett Springs Fault, California: a digital database</a></li>
    		</ul>
    		</li>
    		<li><a href="/hazards/qfaults/">National Quaternary Fault &amp; Fold Database and Maps</a></li>
  		</ul>

    	<h4>Geologic and Seismic Models</h4>

    	<ul>
    		<li><a href="slab/">Slab Models for Subduction Zones</a></li>
    		<li><a href="http://www.data.scec.org/research-tools/3d-velocity.html">SCEC Community Velocity Model</a></li>
    		<li><a href="/research/cus_seisvelmodel/">New Madrid Velocity Model</a></li>
    		<li><a href="3dgeologic/">3D Geologic and Seismic Velocity Models of the San Francisco Bay Region</a></li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <h3 id="other">Other Data Sources</h3>

      <ul>
        <li><a href="/regional/nca/maps/">San Francisco Bay Area Data &amp; Maps</a></li>
        <li><a href="/research/parkfield/livedata.php">Parkfield Geophysical Data</a></li>
        <li><a href="/regional/nca/1868/">1868 Hayward Fault Data &amp; Products</a></li>
        <li><a href="/regional/nca/1906/">1906 San Francisco Earthquake Data &amp; Products</a></li>
        <li><a href="/regional/nca/1989/">1989 Loma Prieta, CA Earthquake Data &amp; Products</a></li>
        <li><a href="/research/parkfield/2003site.php">SAFOD Data</a></li>
        <li><a href="/learn/topics/flinn_engdahl.php">Flinn-Engdahl Regionalization Files</a></li>
        <li><a href="/research/rupture/">Rupture Directions for Selected Northern California Earthquakes</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <h3 id="info">Information and Data Outside of USGS</h3>

      <p>
        Non-USGS sites that host various geophysical, geodetic, and geologic data pertinent to earthquake studies:
      </p>
      <ul>
        <li>ANSS Regional Networks</li>
        <li><a href="http://www.iris.edu/data/seismograms/">IRIS-Incorporated Research Institutions for Seismology</a></li>
        <li><a href="http://www.ngdc.noaa.gov/mgg/aboutmgg/aboutwdcmgg.html">NGDC-National Geophysical Data Center</a></li>
        <li><a href="http://www.isc.ac.uk/">ISC-International Seismological Centre</a></li>
        <li><a href="http://www.unavco.org/">UNAVCO</a></li>
        <li><a href="http://www.consrv.ca.gov/cgs/">CGS-California Geological Survey</a></li>
        <li><a href="http://www.globalquakemodel.org/">GEM-Global Earthquake Model</a></li>
        <li><a href="http://www.emdat.be/">EM-DAT: The International Disaster Database</a></li>
        <li><a href="http://equake-rc.info/SRCMOD/">Finite-Source Rupture Model Database</a> - eQuake-RC</li>
      </ul>
    </div>

  </section>


<!-- Products -->
  <section class="column one-of-two">
    <h2>Products</h2>
    <nav class="jumplist">
      <a href="#rt">Real-time Earthquakes</a>
      <a href="#scenario">Scenarios</a>
      <a href="#haz">Hazard Maps</a>
      <a href="#kml">Google Earth/KML Files</a>
      <a href="#sfbay">San Francisco Bay Area Maps</a>
      <a href="#sigeq">Special Earthquake Collections</a>
      <a href="#pubs">Publications</a>
      <a href="#soft">Software</a>
    </nav>
<!-- end of Jumplist navigation -->

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/realtime.gif" width="75" alt=""/>
      </figure>
      <h3 id="rt">Real-time Earthquakes</h3>

    	<ul>
    		<li><a href="/data/dyfi/">Did You Feel It?</a></li>
    		<li><a href="/data/shakemap/">ShakeMap</a></li>
    		<li><a href="/data/pager/">PAGER</a></li>
    		<li><a href="/data/eqarchives/poster/">Earthquake Summary Posters</a></li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/scenario.jpg" width="75" alt=""/>
      </figure>
      <h3 id="scenario">Earthquake Scenarios</h3>

    	<p>
        <a href="/hazards/products/scenario/">Earthquake Scenarios</a> describe the expected ground motions and effects of specific hypothetical large earthquakes.
      </p>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/hazards-2x.png" width="75" alt=""/>
      </figure>
      <h3 id="haz">Hazard Maps</h3>

    	<ul>
    		<li><a href="/hazards/products/foreign/">International Hazard Maps</a></li>
    		<li><a href="/hazards/products/">National Hazard Maps</a></li>
    		<li><a href="/hazards/products/urban/">Urban Hazard Maps</a></li>
    	</ul>

    	<ul>
      	<li><a href="http://pubs.usgs.gov/of/2007/1437/">Uniform California Earthquake Rupture Forecast (2008)</a></li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/googleearth-2x.jpg" width="75" alt=""/>
      </figure>
    	<h3 id="kml">Google Earth/KML Files</h3>
      <p>
        <a href="/learn/kml.php">Google Earth/KML Files</a> for earthquakes, faults, and other special studies.
      </p>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/sf-2x.jpg" width="75" alt=""/>
      </figure>
    	<h3 id="sfbay">San Francisco Bay Area Maps</h3>
      <p>
        <a href="/regional/nca/maps/">San Francisco Bay Area Maps</a> for faults, shaking hazards, earthquake probabilities, and liquefaction hazards.
      </p>
    </div>


    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/sf1906-2x.jpg" width="75" alt=""/>
      </figure>
    	<h3 id="sigeq">Special Earthquake Collections</h3>

      <ul>
        <li><a href="/regional/nca/1868/">1868 Hayward Fault, CA Earthquake</a></li>
        <li><a href="/regional/nca/1906/">1906 San Francisco, CA Earthquake</a></li>
        <li><a href="/regional/nca/1989/">1989 Loma Prieta, CA Earthquake</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/publications.jpg" width="75" alt=""/>
      </figure>
    	<h3 id="pubs">Publications</h3>

    	<p>
        Open-File Reports, peer-reviewed journals, professional papers, fact sheets, maps, multi-media, etc
      </p>
    	<ul>
    		<li><a href="/learn/publications/">Selected USGS Earthquake Publications</a></li>
    		<li><a href="http://www.usgs.gov/pubprod/">USGS Publications Warehouse</a></li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/software.gif" width="75" alt=""/>
      </figure>
    	<h3 id="soft">Software</h3>

    	<p>
        <a href="/research/software/">Software programs</a> that are available for download.
      </p>
    </div>

  </section>

</div>
