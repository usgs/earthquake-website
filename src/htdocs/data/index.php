<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald,
  if (!isset($TEMPLATE)) {
  $TITLE = 'Data';
  $NAVIGATION = false;
  $HEAD = '
    <link rel="stylesheet" href="index.css"/>
  ';
  include 'template.inc.php';
  }
?>

<div class="alert info">
  <h3><a href="/moving.php">The Earthquake Hazards Program website is moving.</a>
</div>

<div class="row">

<!-- Data -->
  <section class="column one-of-one">

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/webservices-150.gif" width="75" alt=""/>
      </figure>
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
        <li><a href="comcat/catalog/us/">Preliminary Determination of Epicenters (PDE)</a></li>
      </ul>

      <h4>Specialized Earthquake Catalogs</h4>
      <ul>
        </li>
        <li><a href="mineblast/">Routine United States Mining Seismicity</a></li>
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
            <li><a href="/monitoring/helicorders.php">Seismogram Displays Worldwide</a></li>
            <li><a href="/monitoring/operations/heliplot.php?virtual_network=GSN">GSN Stations</a></li>
            <li><a href="/monitoring/operations/heliplot.php?virtual_network=ANSS">ANSS Backbone Stations</a></li>
            <li><a href="/monitoring/netquakes/viewdata">Netquake Volunteer Stations</a></li>
            <li><a href="/monitoring/spectrograms/24hr">Spectrograms</a></li>
          </ul>
        </li>
        <li><a href="http://ds.iris.edu/ds/nodes/dmc/data/types/waveform-data/">Waveform Data - Incorporated Research Institutions for Seismology (IRIS)</a></li>
        <li>Strong Motion Data:
        <ul>
          <li><a href="http://www.strongmotioncenter.org/">USGS-CGS Center for Engineering Strong Motion Data</a></li>
          <li><a href="/monitoring/nsmp/nsmpdata.php">USGS National Strong Motion Program (NSMP) Data</a></li>
        </ul>
        </li>
        <li><a href="https://escweb.wr.usgs.gov/nsmp-data/GEOS/geos.html">General Earthquake Observation System (GEOS)</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/stations.jpg" width="75" alt=""/>
      </figure>
      <h3 id="sta">Seismic Stations</h3>
      <ul>
        <li><a href="http://www.isc.ac.uk/registries/">International Registry of Stations</a></li>
        <li><a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/gsn-global-seismographic-network">GSN Station Info and Network Status</a></li>
        <li><a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/anss-advanced-national-seismic-system">ANSS Station Info and Network Status</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/geodetic.jpg" width="75" alt=""/>
      </figure>
      <h3 id="geod">Geodetic Data</h3>
      <ul>
        <li><a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/crustal-deformation-monitoring">Geodetic Data</a> </li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/earthstruct.gif" width="75" alt=""/>
      </figure>
      <h3 id="earth">Earth Structure and Site Response</h3>

      <ul>
        <li><a href="vs30/">Vs30 Data</a></li>
        <li><a href="/research/cpt/">Cone Penetration Testing (CPT) Data</a></li>
        <li><a href="https://www.sciencebase.gov/catalog/item/57c8269fe4b0f2f0cec02347?community=Geologic+Hazards+Science+Center">Vibroseis Seismic Reflection Data</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/grdmotion.gif" width="75" alt=""/>
      </figure>
      <h3 id="site">Ground Motion and Site Conditions</h3>

      <p>The data obtained from active source studies are archived at <a href="http://ds.iris.edu/ds/nodes/dmc/data/types/waveform-data/">IRIS</a> and/or at the <a href="https://www.ngdc.noaa.gov/">National Geophysical Data Center</a>.  USGS also provides access to certain data sets.</p>
      <ul>
        <li>Landslide hazard maps:
        <ul>
          <li><a href="https://landslides.usgs.gov/hazards/nationalmap/">Landslide Overview Map of the Conterminous United States</a></li>
      </ul>
        </li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/hazards.jpg" width="75" alt=""/>
      </figure>
      <h3 id="model">Hazard Assessment Data and Models</h3>
      <ul>
        <li>
          <a href="/hazards/">International, National, and Urban Hazard Map Data</a>
        </li>
      </ul>

       <h4>Faults and Folds</h4>
      <ul>
        <li><a href="/hazards/qfaults/">National Quaternary Fault &amp; Fold Interactive Map and Database</a></li>
      </ul>

      <h4>Geologic and Seismic Models</h4>
      <ul>
        <li><a href="slab/">Slab Models for Subduction Zones</a></li>
        <li><a href="/data/cus_seisvelmodel/">Central US Seismic Velocity Model and M7.7 Simulation</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <h3 id="other">Other Data Sources</h3>

      <ul>
        <li><a href="/learn/parkfield/livedata.php">Parkfield Geophysical Data</a></li>
        <li><a href="/learn/parkfield/2003site.php">SAFOD Data</a></li>
        <li><a href="/data/flinn_engdahl.php">Flinn-Engdahl Regionalization Files</a></li>
        <li><a href="/data/rupture/">Rupture Directions for Selected Northern California Earthquakes</a></li>
        <li><a href="https://cmgds.marine.usgs.gov/">Marine Seismic Reflection Data</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <h3 id="info">Information and Data Outside of USGS</h3>

      <p>
        Non-USGS sites that host various geophysical, geodetic, and geologic data pertinent to earthquake studies:
      </p>
      <ul>
        <li><a href="https://www.uss.gov/natural-hazards/earthquake-hazards/monitoring">U.S. Regional and Cooperating Networks</a></li>
        <li><a href="http://scedc.caltech.edu/">SCEDC-Southern California Earthquake Data Center</a></li>
        <li><a href="http://www.ncedc.org/">NCEDC-Northern California Earthquake Data Center</a></li>
        <li><a href="http://ds.iris.edu/ds/nodes/dmc/data/types/waveform-data/">IRIS-Incorporated Research Institutions for Seismology</a></li>
        <li><a href="https://www.ngdc.noaa.gov/hazard/earthqk.shtml">NOAA Earthquake Data and Information</a></li>
        <li><a href="http://www.isc.ac.uk/">ISC-International Seismological Centre</a></li>
        <li><a href="http://www.unavco.org/">UNAVCO</a></li>
        <li><a href="https://maps.conservation.ca.gov/geologichazards/">California Dept. of Conservation Interactive Geologic Hazards Map</a></li>
        <li><a href="https://www.globalquakemodel.org/">GEM-Global Earthquake Model</a></li>
        <li><a href="http://www.emdat.be/">EM-DAT: The International Disaster Database</a></li>
        <li><a href="http://equake-rc.info/SRCMOD/">Finite-Source Rupture Model Database</a> - eQuake-RC</li>
        <li><a href="http://scedc.caltech.edu/research-tools/3d-velocity.html">SCEC Community Velocity Model</a></li>
        <li><a href="http://ds.iris.edu/ds/products/esec/">Exotic Seismic Events Catalog</a> - IRIS</li>
        <li>LiDAR databases:
        <ul>
          <li><a href="http://www.opentopography.org/">OpenTopography</a></li>
          <li><a href="http://pugetsoundlidar.ess.washington.edu/lidardata/">Puget Sound Lidar Consortium</a></li>
          <li><a href="http://www.oregongeology.org/lidar/">Oregon Lidar Consortium</a></li>
        </ul>
        </li>
      </ul>
    </div>

  </section>
</div>
