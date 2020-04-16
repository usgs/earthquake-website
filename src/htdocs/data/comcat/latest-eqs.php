<?php
  // Author: Lisa Wald
  // Contact: Jeremy Fee, jmfee@usgs.gov
  // Last modified: 07/08/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'ComCat Documentation - Latest Earthquakes';
  $HEAD = '
    <link rel="stylesheet" href="comcat.css"/>
  ';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<!-- TABLE of CONTENTS -->
<h2>Table of Contents</h2>
<ul>
  <li><a href="#interface">Interface</a></li>
  <li><a href="#list">List</a>
    <ul>
      <li><a href="#downloads">Downloads</a></li>
    </ul>
  </li>
  <li><a href="#map">Map</a></li>
  <li><a href="#map-layers">Map Layers</a></li>
  <li><a href="#settings">Settings</a></li>
  <li><a href="#search">Search Earthquake Archives</a></li>
  <li><a href="#print">How to Print</a></li>
  <li><a href="#browser-support">Browser Support</a></li>
  <li><a href="#bugs">Known Bugs</a></li>
  <li><a href="#disclaimer">Disclaimer</a></li>
</ul>
<!-- END TABLE of CONTENTS -->


<h2 id="interface" class="section-header">Interface</h2>

<p>
  The 4 icons in the top right corner toggle the following content in and out
  of view:
</p>

<ul>
  <li>
    <span class="modeIcon small float" title="List">List</span>
    <span class="text">List</span>
  </li>
  <li>
    <span class="modeIcon small float map" title="Map">Map</span>
    <span class="text">Map</span>
  </li>
  <li>
    <span class="modeIcon small float settings" title="Settings">Settings</span>
    <span class="text">Settings</span>
  </li>
  <li>
    <span class="modeIcon small float help" title="Help">Help</span>
    <span class="text">Help</span>
  </li>
</ul>


<h2 id="list" class="section-header">List</h2>
<p>The list is loaded by default the first time you open the interface.
  The list can be toggled in and out of view by clicking on
  <span class="modeIcon small inline" title="List">List</span> in the top right
  corner. The list provides the least resource intensive method for viewing
  earthquakes.  The list loads all earthquakes from the currently selected feed
  (<a href="#settings-earthquakes">Settings &gt; Earthquakes</a>), and by
  default shows the most recent earthquake first
  (<a href="#settings-sort">Settings &gt; List Sort Order</a>).
</p>
<ul>
  <li>List items in bold are magnitude 4.5 and greater.</li>
  <li>
    List items with red text have been identified as "significant",
    based on a combination of magnitude, PAGER alert level, and the number of
    Did You Feel It? responses.
  </li>
  <li>
    Selecting an earthquake in the list will highlight the event in the list
    and on the map. It will also open a pop-up with basic information for that
    event.   A "button" will appear for DYFI, ShakeMap, Pager, and a tsunami
    message if these products are available.
  </li>
</ul>
<h3 id="downloads">Downloads</h3>
<ul>
  <li>The download link is found at the top of the list.</li>
  <li>
    Downloads  are available in the following formats: ATOM, CSV, GeoJSON,
    GeoJSONP, KML and QuakeML.
  </li>
  <li>
    The CSV format is compatible with Microsoft Excel and other spreadsheet
    software. Open Excel and choose the &ldquo;Import&hellip;&rdquo; option.
    Make sure it is using the &ldquo;comma-delimited with quotes for
    strings&rdquo; format.
  </li>
  <li>Downloading a list of earthquakes will download the worldwide list of
    earthquakes not just those in the map view. See
    <a href="/fdsnws/event/1/#extensions">Earthquake
        Search and Web Service API Documentation.</a>
  </li>
</ul>


<h2 id="map" class="section-header">Map</h2>

<dl class="vertical">
  <dt>Map Projection</dt>
  <dd>
    The earthquake map projection is Web Mercator.
  </dd>

  <dt>Map Reference Model</dt>
  <dd>
    The reference model is WGS-84.
  </dd>

  <dt>Map Software</dt>
  <dd>
    Interactive map interface powered by
    <a href="http://leafletjs.com/" target="_blank">Leaflet</a>.
  </dd>

</dl>

<p>
  To show (or hide on desktop) the map, click
  <span class="modeIcon small inline map" title="map">Map</span> in the top
  right corner. Earthquakes from the currently selected feed (Settings &gt;
  Earthquakes) are loaded onto the map.
</p>
<ul>
  <li>
    Earthquakes are plotted on the map as circles and non-earthquakes are
    plotted as diamonds (in most browsers).  For users of older browsers, all
    events may be plotted as squares.
  </li>
  <li>
    Earthquake sizes are relative to the magnitude of the seismic event. The
    markers will scale depending on your device type and the zoom level of
    the map.
  </li>
  <li>
    Earthquake colors are relative to the age of the earthquake (red = past
    hour, orange = past day, yellow = past week, and white = older than
    past week).
  </li>
  <li>
    Selecting an earthquake marker on the map will highlight the marker on
    the map and in the list.  It will also open a pop up   with basic
    information for that event.  A "button" will appear for DYFI, ShakeMap,
    Pager, and a tsunami message if these products are available.
  </li>
</ul>
<h3>Map Controls</h3>
<dl class="vertical">
  <dt>Plus/ Minus</dt>
  <dd>
    Click the plus or minus control to zoom in or out, respectively.
  </dd>

  <dt>Magnifying Glass</dt>
  <dd>
    Click the magnifying glass control to enable box zoom.  With the crosshair
    cursor, click and drag, to define a box on the map.  The map will zoom in
    on the defined area.
  </dd>

  <dt>Zoom to&hellip;</dt>
  <dd>
    Select a place from the "Zoom to" drop-down control, to pan and zoom the
    map to the specified location.
  </dd>
</dl>
<h3>Map Interactions</h3>
<dl class="vertical">
  <dt>Zoom</dt>
  <dd>
    Use the keyboard plus and minus keys, map controls (+,-), box zoom tool
    (magnifying glass), mouse scroll wheel, or double click the map to zoom.
  </dd>
  <dt>Pan</dt>
  <dd>
    Click and drag, or use the arrow keys (left,right,up,down) to pan the map.
  </dd>
  <dt>Select</dt>
  <dd>
    Click on an event marker to open a pop-up summary of the event (bottom-left
    corner of screen). Click the "X" in the upper-right corner of the event
    summary to close the pop-up.
  </dd>
  <dt>Hover</dt>
  <dd>
    Hover over a U.S. fault, when the fault layer is visible, to display a
    tooltip with the fault name (Settings &gt; Map Layers &gt; U.S. Faults).
  </dd>
</dl>
<h3 id="map-layers">Map Layers</h3>
<p>
  Map Layers can be changed in
  <a href="#settings-map">Settings &gt; Map Layers</a>.
</p>
<dl class="vertical">
  <dt>Grayscale Map</dt>
  <dd>
    <p>
      This layer is from an Esri GIS service titled “Light Gray Canvas”.  This
      minimal map is used as the default because it loads more quickly in the
      browser than the other maps, and it emphasizes the earthquakes.
      <a href="http://www.arcgis.com/home/item.html?id=8b3d38c0819547faa83f7b7aca80bd76"
          target="_blank">
          Detailed information about this map is on the Esri website</a>.
    </p>

    <p>
      Sources: Esri, DeLorme, NAVTEQ.
    </p>
  </dd>

  <dt>Terrain Map</dt>
  <dd>
    <p>
      This layer is from an Esri GIS service titled “National Geographic World
      Map”.  The map was developed by National Geographic and Esri and reflects
      the distinctive National Geographic cartographic style in a multi-scale
      reference map of the world.  <a href="http://www.arcgis.com/home/item.html?id=b9b1b422198944fbbd5250b3241691b6"  target="_blank">
      Detailed information about this map is on the Esri website</a>.
    </p>
    <p>
      Sources: National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS,
      NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC.
    </p>
  </dd>

  <dt>Street Map</dt>
  <dd>
    <p>
      Map tiles courtesy <a href="http://www.mapquest.com/"  target="_blank">
      MapQuest</a>. Portions of the data courtesy
      <a href="http://www.nasa.gov"  target="_blank">NASA/JPL-Caltech</a> and
      <a href="http://www.fsa.usda.gov/FSA/"  target="_blank">U.S. Dept. of
      Agriculture</a>, Farm Service Agency.
    </p>
  </dd>

  <dt>Satellite Map</dt>
  <dd>
    <p>
      Map tiles courtesy <a href="http://www.mapquest.com/"  target="_blank">
      MapQuest</a>. Portions of the data courtesy
      <a href="http://www.nasa.gov"  target="_blank">NASA/JPL-Caltech</a> and
      <a href="http://www.fsa.usda.gov/FSA/"  target="_blank">U.S. Dept. of
      Agriculture</a>, Farm Service Agency.
    </p>
  </dd>

  <dt>Plate Boundaries</dt>
  <dd>
  <p>
    This data was constructed as part of the USGS <a href="/earthquakes/byregion/">Seismicity of the Earth Map Series</a>,  modified from the <a href="http://peterbird.name/publications/2003_PB2002/2003_PB2002.htm">Peter Bird Plate Boundary Model</a> (Bird, G^3, 2003).
  </p>
  </dd>

  <dt>U.S. Faults</dt>
  <dd>
    <p>
      The data used for these features was acquired from the
      <a href="https://earthquake.usgs.gov/cfusion/hazfaults_2014_search/query_main.cfm">Hazard Faults
      Database for the United States</a>. See the <a href="/hazards/qfaults/">
      Quaternary Fault and Fold Database of the United States</a> for more
      information.
    </p>

    <h4 class="subheader">
      Known hazardous faults and fault zones in California and Nevada
    </h4>

    <p>
      The
      <a href="https://pubs.usgs.gov/of/1996/532/fig25ss.gif" target="_blank">
      known active fault segments in California and Nevada can be seen in Figure
      25</a> of <a href="https://pubs.usgs.gov/of/1996/532/"  target="_blank">
      USGS Open-File Report 96-532: National Seismic Hazard Maps, June 1996:
      Documentation</a> by Arthur Frankel, Charles Mueller, Theodore Barnhard,
      David Perkins, E.V. Leyendecker, Nancy Dickman, Stanley Hanson, and
      Margaret Hopper.
    </p>

    <p>
      For northern California, the potential sources of earthquakes larger than
      magnitude 6 are documented in
      <a href="https://pubs.usgs.gov/of/1996/0705/" target="_blank">
      Open-File Report 96-705: Database of Potential Sources for Earthquakes
      Larger than Magnitude 6 in Northern California</a> by the Working Group on
      Northern California Earthquake Potential (chaired by Jim Lienkaemper).
    </p>

    <p>
      For the state as a whole, see
      <a href="http://pubs.er.usgs.gov/publication/ofr96706" target="_blank">
      USGS Open-File Report 96-706: Probabilistic seismic hazard assessment for
      the State of California</a> by Petersen, M. D., Bryant, W.A., Cramer,
      C.H., Cao, T., Reichle, M.S., Frankel, A.D., Lienkaemper, J.J., McCrory,
      P.A., and Schwartz, D.P, 1996 (published jointly as
      <a href="http://www.conservation.ca.gov/cgs/rghm/psha/ofr9608/"
          target="_blank">
      California Division of Mines and Geology Open-File Report 96-08</a>.  The
      faults and fault zones described in these reports are known to have been
      active in the last 2 million years and are thought to pose a measurable
      hazard.
    </p>

    <p>
      For California the faults on the individual zoomed-in and special maps
      come from the three categories of faults believed to have been active in
      the last 700,000 years shown on the “Preliminary Fault Activity Map of
      California” by C.W. Jennings (1992, California Division of Mines and
      Geology Open-File Report 92-03). This map has been superseded by Jennings,
      C.W., 1994, Fault activity map of California and adjacent areas, with
      locations and ages of recent volcanic eruptions: California Division of
      Mines and Geology, Geologic Data Map No. 6, map scale 1:750,000.
    </p>

    <p>
      For Nevada the faults on the individual zoomed-in and special maps come
      from USGS Open-File Report 96-532 mentioned above.
    </p>

    <p>
      For more information on files and images discussed above visit the
      <a href="/hazards/products/conterminous/1996/documentation/">1996 Hazard
      Maps Documentation Page</a>.
    </p>
  </dd>

  <dt>U.S. Hazards</dt>
  <dd>
    <p>
      US hazard is from the <a href="/hazards/">USGS Seismic Hazard Mapping
      Project (NSHM)</a>
    </p>
  </dd>
</dl>


<h2 id="settings" class="section-header">Settings</h2>
<p>
  To show settings (or hide on desktop), click
  <span class="modeIcon small inline settings" title="Settings">Settings</span>
  in the top right corner. You can save your settings or search results by
  bookmarking the resulting URL in your browser.
<p>
<h3 id="settings-earthquakes">Earthquakes</h3>
<h4 id="settings-earthquakes-update" class="subheader">Auto Update</h4>
<p>
  This option will automatically update the earthquake data every minute.
  Auto update defaults to ON for desktop devices and OFF for mobile devices.
</p>
<h4 id="settings-earthquakes-feeds" class="subheader">Feeds</h4>
<p>
  The default feed is set to display earthquakes of magnitude 2.5 and greater
  during the past 24 hrs (1 Day, Magnitude 2.5+). You can choose from the
  following options:
</p>
<ul>
  <li>1 Day, Magnitude 2.5+ [default]</li>
  <li>1 Day, All Magnitudes</li>
  <li>7 Days, Magnitude 4.5+</li>
  <li>7 Days, Magnitude 2.5+</li>
  <li>7 Days, All Magnitudes</li>
  <li>30 Days, Magnitude 4.5+</li>
  <li>30 Days, Magnitude 2.5+</li>
</ul>
<h4 id="settings-earthquakes-search" class="subheader">
  Search Earthquake Archives
</h4>
<p>
  See <a href="#search-earthquake-archives">Search Earthquake Archives</a>
  for more details on how to search the catalog.
</p>
<h3 id="settings-sort">List Sort Order</h3>
<h4 id="settings-sort-order">Sort Order</h4>
<p>Choose the order to display the earthquakes in the list:</p>
<ul>
  <li>Newest first [default]</li>
  <li>Oldest first</li>
  <li>Largest magnitude first</li>
  <li>Smallest magnitude first</li>
</ul>
<h3 id="settings-map">Map Layers</h3>
<p>
  See <a href="#map-layers">Map Layers</a> for more information on each layer.
</p>
<h3 id="settings-map-basemaps" class="subheader">Base Maps</h3>
<p>Choose from one of four base maps: </p>
<ul>
  <li>Grayscale [default]</li>
  <li>Terrain</li>
  <li>Street</li>
  <li>Satellite</li>
</ul>
<h3 id="settings-map-overlays" class="subheader">Overlays</h3>
<p>You can enable/ disable any of the overlays on the map: </p>
<ul>
  <li>Plate Boundaries [default=ON]</li>
  <li>U.S. Faults</li>
  <li>U.S. Hazards</li>
</ul>
<h3 id="settings-timezone">TimeZone</h3>
<p>
  The time for the earthquakes displayed in this interface will be based on:
</p>
<ul>
  <li>Local System Time – the time setting of your device</li>
  <li>UTC – Universal Coordinated Time (similar to GMT)</li>
</ul>


<h2 id="search-earthquake-archives" class="section-header">
  Search Earthquake Archives
</h2>
<p>
  If you want to display earthquakes older than 30 days, or you want to search
  the earthquake catalog, click on "Search Earthquake Archives".
</p>
<ul>
  <li>Search results are limited to 20,000 events.</li>
  <li>
    Your search results will be saved and listed in this section until you
    close the browser window or load a different search URL.
  </li>
</ul>
<h3 id="search-options">Search Options</h3>
<p>
  See <a href="/fdsnws/event/1/" >Earthquake Search
      and Web Service API Documentation.</a>
</p>


<h2 id="print" class="section-header">How to Print</h2>
<h3>Map</h3>
<p>To print the map, take a screenshot by following these instructions:</p>
<ul>
  <li>
    <strong>PC:</strong>
    Click the browser window, and press [Alt] + [Print Screen] to capture a
    screenshot of the map. The screenshot can be printed by pasting it into
    Microsoft PowerPoint, etc.
  </li>
  <li>
    <strong>Mac:</strong>
    Click the browser window, and press [Command] + [Shift] + [4] to capture
    a screenshot of the map.  The captured image is saved to the Desktop.
  </li>
</ul>
<h3>List</h3>
<p>
  Using your browser's print feature will print the list of earthquakes in a
  printer friendly format.
</p>

<h2 id="browser-support" class="section-header">Browser Support</h2>
<p>
  <strong>
    We support the two most recent versions of Chrome, Firefox, Safari, and
    Internet Explorer.
  </strong>
  As soon as a new version is released, we drop support of the third oldest
  version and work on supporting the newest stable release. If you are having
  problems with the earthquake map, upgrading your browser to the most current
  version may resolve the issue.
</p>
<h3>Desktop</h3>
<h4 class="subheader">Supported &amp; Tested</h4>
<ul>
  <li>
    <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">
        Chrome</a>
  </li>
  <li>
    <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">
        Firefox</a>
  </li>
  <li>
    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie"
        target="_blank">
        Edge</a>
    <a href="#compatibility_disclaimer"
        title="Edge Compatibility View Disclaimer">
        *</a>
  </li>
  <li><a href="http://www.apple.com/support/safari/" target="_blank">
      Safari</a>
  </li>
</ul>
<h4 class="subheader">Not Tested</h4>
<ul>
  <li>Opera</li>
</ul>
<p class="disclaimer" id="compatibility_disclaimer">
  * Edge is only tested in standards mode; compatibility view is
  not supported. If your browser has rendered the application in compatibility
  view, you will need to
  <a href="http://windows.microsoft.com/en-us/internet-explorer/use-compatibility-view#ie=ie-10"
      target="_blank" >
      disable this setting</a>.
</p>
<h3>Mobile</h3>
<p>
  Android users, we recommend using the Chrome browser or Firefox browser app
  in place of the default native browser on your android device.
</p>
<h4 class="subheader">Supported &amp; Tested</h4>
<ul>
  <li>Android Native Browser</li>
  <li>Chrome Browser App for Android</li>
  <li>Firefox Browser App for Android</li>
  <li>Safari iOS </li>
</ul>
<h4 class="subheader">Not Tested</h4>
<ul>
  <li>BlackBerry Native Browser</li>
  <li>Opera Mini</li>
</ul>

    <h2 id="bugs" class="section-header">Known Bugs</h2>
    <dl class="vertical">
      <dt>Browser Crashes</dt>
      <dd>
        If your browser crashes, it's probably because you're trying to view too
        many earthquakes. See our <a href="#disclaimer">disclaimers</a> for tips
        on how to avoid crashing a resource strapped device.
      </dd>
      <dt>Issues Reported in GitHub</dt>
      <dd>See USGS <a href="https://github.com/usgs/earthquake-latest-earthquakes/issues">earthquake-latest-earthquakes</a> issues.
      </dd>
    <p>
      Report other problems that you experience by entering a GitHub issue or by <a href="/contactus/">sending us a message</a>.
    </p>

    <h2 id="disclaimer" class="section-header">Disclaimer</h2>
    <p>The new Earthquake Map/List pages are slower than the older generation
      earthquake maps (recenteqs) because they provide additional benefits to
      viewing and interacting with the earthquake data.
    </p>

      <p>
      If you are using a mobile device to view the earthquake pages, or have
      limited bandwidth, here are a few steps you can take to improve your
      experience using the interface:
      </p>
        <ul>
          <li>
            Avoid loading large feeds (7 Days, All Magnitudes &amp; 30 Days,
            Magnitude 2.5+).
          </li>
          <li>
            Use the Grayscale Maps (<a href="#settings-map">Settings &gt; Map
            Layers &gt; Grayscale</a>).
          </li>
          <li>
            View earthquakes in the List, instead of on the Map.
          </li>
        </ul>
