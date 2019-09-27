<?php
      //  Author:  Tiffany Kalin
      //  Contact: Scott Haefner or Greg Smoczyk
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Google Earth/KML Files';
      $NAVIGATION  = true;
      $HEAD='
        <link rel="stylesheet" href="kml.css"/>
      ';
      include  'template.inc.php';
      }
?>

<div class="row">
  <div class="column three-of-five">
    <ul class="linklist">
      <li>
        <a href="/earthquakes/feed/v1.0/kml.php">
          <h4>Real-Time Earthquakes</h4>
          <img src="/earthquakes/events/1868calif/virtualtour/images/RealTimeEQ3.jpg" alt="Real Time Earthquakes"/>
        </a>
        <p>
          Display real-time earthquakes,
          seismicity animations, and several real-time
          earthquake options including color by age/depth.
        </p>
      </li>
      <li>
        <a href="/static/lfs/nshm/qfaults/qfaults.kmz">
          <h4>Quaternary Faults &amp; Folds in the U.S.</h4>
          <img src="images/faults.jpg" alt="Faults"/>
        </a>
        <p>
          Faults and associated folds in
          the United States that are believed to be sources of M&gt;6
          earthquakes during the Quaternary (the past 1,600,000 years). 20MB ZIP file
        </p>
      </li>
      <li>
        <a href="/earthquakes/search/">
          <h4>Earthquakes in Catalog</h4>
          <img src="images/eq-catalog.jpg" alt="Earthquakes Catalog"/>
        </a>
        <p>
          View past earthquakes in Google Earth. Search the ComCat earthquake catalog, and choose KML for the output format.
        </p>
      </li>
      <li>
        <a href="/earthquakes/browse/tectonic-summ2000-2015.kmz">
          <h4>Tectonic Summaries for M7+ Earthquakes 2000-2015</h4>
          <img src="images/tectonic-summ.gif" alt="Tectonic Summary"/>
        </a>
        <p>
          Pop-up displays tectonic summaries for each M7+ earthquake from 2000 to 2015 with basic event information and a link to the event data in the earthquake catalog.
        </p>
      </li>
      <li>
        <a href="/learn/plate-boundaries.kmz">
          <h4>Tectonic Plate Boundaries</h4>
          <img src="images/plate-boundaries-2x.jpg" alt="Plate Boundaries"/>
        </a>
        <p>
          The outermost shell of the Earth consists of a mosaic of rigid &ldquo;plates&rdquo; that have been moving relative to one another for hundreds of millions of years.
        </p>
      </li>
      <li>
        <a href="/education/geologicmaps/">
          <h4>San Francisco Bay Area Geologic Maps</h4>
          <img src="images/bayarea.jpg" alt="Bay Area"/>
        </a>
        <p>
          Explore multiple Google Earth layers related to the geology and geologic hazards of the greater Bay Area.
        </p>
      </li>
      <li>
        <a href="/earthquakes/events/1868calif/virtualtour/">
          <h4>Virtual Tour of the 1868 Hayward Earthquake</h4>
          <img src="/earthquakes/events/1868calif/virtualtour/images/modernHaz.jpg" alt="Modern Hazard"/>
        </a>
        <p>
          Using this self-guided, virtual tour of the 1868 quake in
          Google Earth you can learn about the 1868 earthquake, visualize its
          effects, and better plan for its expected repeat. You can view historic
          damage photographs side-by-side with modern photos taken from the same
          vantage point.  You can also learn how urbanization has changed the Bay
          Area landscape since 1868.
        </p>
      </li>
      <li>
        <a href="/earthquakes/events/1906calif/virtualtour/">
          <h4>Virtual Tour of the 1906 San Francisco Earthquake</h4>
          <img src="/earthquakes/events/1906calif/virtualtour/images/RuptureSlip.jpg" alt="Rupture Slip"/>
        </a>
        <p>
          Interactive tour of San Francisco
          Bay Area faults and earthquake history featuring ground-shaking
          maps, historic photographs, quotes from earthquake survivors, and more.
        </p>
      </li>
      <li>
        <a href="/data/NoCal_GeoES_LiDAR_hs.kmz">
          <h4>Northern California LiDAR Hillshades</h4>
          <img src="/data/images/google_lidar.gif" alt="Google LiDAR"/>
        </a>
        <p>
          1-meter resolution bare earth hillshades from the Northern California
          GeoEarthScope LiDAR topography dataset. By downloading this file and
          opening it in Google Earth, users are able to browse hillshades with
          two illumination angles (315 and 45 degrees) for faults in the northern
          San Andreas fault system. The extent of the LiDAR data is shown by the
          cyan colored outlines. The hillshades will load once the user has
          zoomed into an area of interest.
        </p>
      </li>
      <li>
        <a href="/education/haywardfault/">
          <h4>Digital Map of the Hayward Fault</h4>
          <img src="/education/haywardfault/images/stadium_sm.jpg" alt="Hayward Fault Stadium"/>
        </a>
        <p>
          Map showing active fault traces within the Hayward Fault Zone,
          including a virtual tour of the
          Hayward fault in the east San Francisco Bay Region that can be
          viewed in the Google Earth.
        </p>
      </li>
      <li>
        <a href="http://geomaps.wr.usgs.gov/sfgeo/geologic/downloads.html">
          <h4>San Francisco Bay Region Geology and Faults</h4>
          <img src="images/sf_geo.jpg" alt="San Francisco Geology"/>
        </a>
        <p>
          <p><a href="http://geomaps.wr.usgs.gov/sfgeo/geologic/downloads.html">
          Geologic maps</a> |
          <a href="http://geomaps.wr.usgs.gov/sfgeo/quaternary/downloads.html">
          Quaternary Faults</a>
        </p>
      </li>
    </ul>
  </div>
  <div class="column two-of-five">
    <h2>About Google Earth&trade;</h2>
    <ul>
      <li><a href="http://earth.google.com/">Download Google Earth</a></li>
      <li><a href="http://support.google.com/earth/?hl=en">Learn more about navigating in Google Earth </a></li>
    </ul>
  </div>
</div>
