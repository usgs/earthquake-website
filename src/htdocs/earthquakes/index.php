<?php
// Author: Lisa Wald
// Contact: Lisa Wald, lisa@usgs.gov
// Last modified: 08/11/2015
if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquakes';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/theme/css/alert.css"/>
    <link rel="stylesheet" href="/lib/earthquake-list-widget.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<!-- OPTIONAL ANNOUNCEMENT
<div class="row">
  <p class="alert info">
  </p>
</div>
-->

<!-- FEATURED EARTHQUAKE
Insert code to display latest really significant EQ
and a link to Significant Earthquakes, Past 30 Days
-->

<div class = "row">
  <div class = "column three-of-five">

    <ul class="no-style linklist">
      <li>
        <a href="map/">
          <h4>Latest Earthquakes</h4>
          <img src="images/latesteqs-300for150.gif" width="150" alt="map of latest earthquakes"/>
        </a>
        <p>Latest earthquakes map and list (past 24 hours, M2.5+). Tap/click on "gear icon" for options and settings.
        </p>
      </li>
      <li>
        <a href="lists/">
          <h4>Earthquake Lists, Maps and Statistics</h4>
          <img src="images/lists-300for150.gif" width="150" alt="screenshot of EQ search form"/>
        </a>
        <p>10 largest earthquakes, significant events, lists and maps by magnitude, by year, or by location.</p>
      </li>
      <li>
        <a href="search/">
          <h4>Earthquake Catalog Search</h4>
          <img src="images/search-300for150.gif" width="150" alt="screenshot of EQ search form"/>
        </a>
        <p>Find past earthquakes that meet your criteria. Various output  formats, and links to earthquake details.</p>
      </li>
      <li>
        <a href="feed/">
          <h4>Real-time Feeds and Notifications</h4>
          <img src="images/feeds-300for150.gif" width="150" alt="screenshot of iphone EQ notification"/>
        </a>
        <p>Get real-time earthquake notifications sent to you on your phone or by email. Use real-time web services for your own applications.</p>
      </li>
      <li>
        <a href="byregion/">
          <h4>Information by Region</h4>
          <img src="images/byregion-300for150.gif" width="150" alt="US map"/>
        </a>
        <p>Information by state, and world seismicity maps. Links to earthquake-related information for each state.</p>
      </li>
    </ul>

  </div>

  <div class = "column two-of-five">

    <h3>
       <a href="/earthquakes/map/#%7B%22feed%22%3A%2230day_sig%22%2C%22search%22%3Anull%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Atrue%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22local%22%2C%22mapposition%22%3Anull%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
        Significant Earthquakes, Past 30 Days
      </a>
    </h3>

    <div id="significant-earthquakes" class="height_scroll" style="overflow:scroll; background:#f4f4f4;">
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="/theme/css/alert.css"/>
        <link rel="stylesheet" href="/lib/earthquake-list-widget.css"/>
      ';
      $FOOT = '
        <script src="/lib/earthquake-list-widget.js"></script>
        <script src="index.js"></script>
      ';
    </div>

    <h3><a href="errata.php">Errata for Latest Earthquakes</a></h3>
    <p>Mistakes happen. Here are the explanations.</p>

  </div>
</div>
