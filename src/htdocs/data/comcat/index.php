<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'ANSS Comprehensive Earthquake Catalog (ComCat) Documentation <img class="anss-logo" src="/earthquakes/images/ANSS_logo.gif" alt="logo"/>';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    include 'template.inc.php';
  }
?>

<?php /* TABLE OF CONTENTS ----------------------------------------------- */ ?>

<p>
  The <strong>ANSS Comprehensive Earthquake Catalog (ComCat)</strong> contains
  earthquake source parameters (e.g. hypocenters, magnitudes, phase picks and
  amplitudes) and other products (e.g. moment tensor solutions, macroseismic
  information, tectonic summaries, maps) produced by contributing seismic
  networks.
</p>

<ul>
  <li><a href="/earthquakes/search/">Search Earthquake Catalog</a></li>
  <li><a href="/earthquakes/map/">Latest Earthquakes</a></li>
</ul>
<hr/>

<h2>Table of Contents</h2>
<ol>
  <li id="1"><strong>Data Types, Definitions, Format, Availability</strong>
    <ul>
      <li><a href="data-availability.php">Data Availability</a> - Date Ranges and Magnitude Thresholds</li>
      <li><a href="data-products.php">Data Products</a>
          <ul>
            <li><a href="data-products.php#dyfi">Did You Feel It?</a></li>
            <li><a href="data-products.php#ff">Finite Fault</a></li>
            <li><a href="data-products.php#fm">Focal Mechanisms</a></li>
            <li><a href="data-products.php#mt">Moment Tensors</a></li>
            <li><a href="data-products.php#orig">Origins</a></li>
            <li><a href="data-products.php#pager">PAGER</a></li>
            <li><a href="data-products.php#phase">Phase Data</a></li>
            <li><a href="data-products.php#shake">ShakeMap</a></li>
        </ul>
      </li>
      <li><a href="data-productterms.php">Product Terms</a>
        <ul>
          <li><a href="data-productterms.php#product_content">content</a></li>
          <li><a href="#data-productterms.phpproduct_id">id</a></li>
          <li><a href="#data-productterms.phpproduct_property">link</a></li>
          <li><a href="#data-productterms.phpproduct_property">property</a></li>
          <li><a href="#data-productterms.phpproduct_preferredWeight">preferredWeight</a></li>
          <li><a href="#data-productterms.phpproduct_status">status</a></li>
        </ul>
      </li>
      <li><a href="data-metadata.php">Metadata Terms</a>
        <ul>
          <li><a href="data-metadata.php#metadata_api">api</a></li>
          <li><a href="data-metadata.php#metadata_count">count</a></li>
          <li><a href="data-metadata.php#metadata_generated">generated</a></li>
          <li><a href="data-metadata.php#metadata_title">title</a></li>
          <li><a href="data-metadata.php#metadata_url">url</a></li>
          <li><a href="data-metadata.php#metadata_status">status</a></li>
        </ul>
      </li>
      <li><a href="data-eventterms.php">Event Terms</a>
        <ul>
          <li><a href="data-eventterms.php#alert">alert</a></li>
          <li><a href="data-eventterms.php#cdi">cdi</a></li>
          <li><a href="data-eventterms.php#code">code</a></li>
          <li><a href="data-eventterms.php#depth">depth</a></li>
          <li><a href="data-eventterms.php#depthError">depthError</a></li>
          <li><a href="data-eventterms.php#detail">detail</a></li>
          <li><a href="data-eventterms.php#dmin">dmin</a></li>
          <li><a href="data-eventterms.php#felt">felt</a></li>
          <li><a href="data-eventterms.php#gap">gap</a></li>
          <li><a href="data-eventterms.php#horizontalError">horizontalError</a></li>
          <li><a href="data-eventterms.php#id">id</a></li>
          <li><a href="data-eventterms.php#ids">ids</a></li>
          <li><a href="data-eventterms.php#latitude">latitude</a></li>
          <li><a href="data-eventterms.php#locationSource">locationSource</a></li>
          <li><a href="data-eventterms.php#longitude">longitude</a></li>
          <li><a href="data-eventterms.php#mag">mag</a></li>
          <li><a href="data-eventterms.php#magError">magError</a></li>
          <li><a href="data-eventterms.php#magNst">magNst</a></li>
          <li><a href="data-eventterms.php#magSource">magSource</a></li>
          <li><a href="data-eventterms.php#magType">magType</a></li>
          <li><a href="data-eventterms.php#mmi">mmi</a></li>
          <li><a href="data-eventterms.php#net">net</a></li>
          <li><a href="data-eventterms.php#nst">nst</a></li>
          <li><a href="data-eventterms.php#place">place</a></li>
          <li><a href="data-eventterms.php#rms">rms</a></li>
          <li><a href="data-eventterms.php#sig">sig</a></li>
          <li><a href="data-eventterms.php#sources">sources</a></li>
          <li><a href="data-eventterms.php#status">status</a></li>
          <li><a href="data-eventterms.php#time">time</a></li>
          <li><a href="data-eventterms.php#tsunami">tsunami</a></li>
          <li><a href="data-eventterms.php#type">type</a></li>
          <li><a href="data-eventterms.php#types">types</a></li>
          <li><a href="data-eventterms.php#tz">tz</a></li>
          <li><a href="data-eventterms.php#updated">updated</a></li>
          <li><a href="data-eventterms.php#url">url</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li id="2">Data Access
    <ul>
      <li>Real-time Notifications
        <ul>
          <li><a href="/ens/help/">ENS - Earthquake Notification Service</a></li>
          <li><a href="/earthquakes/ted/">TED - Tweet Earthquake Dispatch</a></li>
        </ul>
      </li>
      <li><a href="/earthquakes/feed/">Real-time Earthquake Feeds</a>
        <ul>
          <li>Formats
            <ul>
              <li><a href="/earthquakes/feed/v1.0/atom.php">ATOM</a></li>
              <li><a href="/earthquakes/feed/v1.0/csv.php">CSV/Spreadsheet</a></li>
              <li><a href="/earthquakes/feed/v1.0/geojson.php">GeoJSON Summary</a></li>
              <li><a href="/earthquakes/feed/v1.0/geojson_detail.php">GeoJSON Detail</a></li>
              <li><a href="/earthquakes/feed/v1.0/kml.php">KML</a></li>
              <li><a href="/earthquakes/feed/v1.0/quakeml.php">QuakeML</a></li>
            </ul>
          </li>
          <li><a href="/earthquakes/feed/policy.php">Lifecycle Policy</a></li>
          <li><a href="/earthquakes/feed/v1.0/changelog.php">Change Log</a></li>
        </ul>
      </li>
      <li><a href="/fdsnws/event/1/">Web Service API</a></li>
      <li><a href="/earthquakes/search/">Search Earthquake Catalog</a></li>
      <li><a href="https://github.com/usgs/devcorner">Python Scripts for Bulk Products</a></li>
      <li><a href="https://github.com/usgs/earthquake-event-ws">Web Service and Data Feeds</a> (GitHub)</li>
    </ul>
  </li>
  <li id="3"><a href="https://github.com/usgs/pdl">Contribute and Receive Data - PDL</a> (GitHub)</li>
  <li id="4">Sources of Data - Catalogs and Real-time
    <ul>
      <li><a href="catalog/">Catalogs</a></li>
      <li><a href="contributor/">Real-time</a></li>
    </ul>

  </li>
  <li id="5">Event Association</li>
  <li id="6"><a href="references.php">References</a></li>
</ol>
