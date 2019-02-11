<?php
// Author: Lisa Wald
// Contact: Glenn Biasi, gbiasi@usgs.gov

if (!isset($TEMPLATE)) {
  $TITLE = 'ShakeAlert';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget-1.0.0/earthquake-list-widget.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget-1.0.0/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<p>
  The ShakeAlert earthquake early warning system monitors for significant earthquakes and issues alerts to warn that strong shaking is expected imminently.  In the United States, the ShakeAlert system is being developed to cover California, Oregon, and Washington.
</p>

<div class="row right-to-left" >

  <div class="column two-of-five">
      <h3>ShakeAlerts, Past 7 Days</h3>

      <div class="recent-products" style="overflow:scroll; height:400px; background:#f4f4f4;">
        <noscript class="error alert">
          Javascript is used to load event data. If you can not enable Javascript,
          you can <a href="/earthquakes/feed/v1.0/shakealert.geojson">view
          the raw data here</a>.
        </noscript>
      </div>

      <h3>View Map and List of ShakeAlert Events</h3>
      <ul>
        <li>
          <a href="/earthquakes/map/#<?php

            $id = "" . time();
            $params = array(
              "feed" => $id,
              "search" => array(
                "id" => $id,
                "name" => "ShakeAlerts, Past 7 days",
                "isSearch" => true,
                "params" => array(
                  "starttime" => "-1 week",
                  "contributor" => "ew",
                  "includedeleted" => true
                )
              ),
              "basemap" => "terrain",
              "timeZone" => "utc",
              "viewModes" => array(
                "map" => true,
                "list" => true
              )
            );
            echo rawurlencode(json_encode($params));

          ?>">Past 7 Days</a>
        </li>
        <li>
          <a href="/earthquakes/map/#<?php

            $id = "" . time();
            $params = array(
              "feed" => $id,
              "search" => array(
                "id" => $id,
                "name" => "ShakeAlerts, Past 30 days",
                "isSearch" => true,
                "params" => array(
                  "contributor" => "ew",
                  "includedeleted" => true
                )
              ),
              "basemap" => "terrain",
              "timeZone" => "utc",
              "viewModes" => array(
                "map" => true,
                "list" => true
              )
            );
            echo rawurlencode(json_encode($params));

          ?>">Past 30 Days</a>
        </li>
    </ul>

  </div>

  <div class="column three-of-five">

    <ul class="no-style linklist">

      <li>
        <a href="/earthquakes/search/#%7B%22feed%22%3A%221450204437509%22%2C%22search%22%3A%7B%22id%22%3A%221450204437509%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
        <h4>Search ShakeAlert Archives</h4>
        <img src="/data/shakemap/images/search-2x.gif" alt="" width="75"/></a>
        <p>Search for alerts issued by ShakeAlert.  The search is configured to return only earthquakes for which an alert was issued.</p>
      </li>
    </ul>
  </div>
</div>

<!--
      <li>
        <a href="performance.php">
          <h4>About ShakeAlert Performance</h4>
          <img src="images/???" alt="" width="75"/></a>
        <p>
          Descriptive and visual guide to ShakeAlert information.
        </p>
      </li>

      <li>
        <a href="references.php">
        <h4>Data, Products, and References</h4>
        <img src="images/???" alt="" width="75"/></a>
        <p>All things ShakeAlert</p>
      </li>

      <li>
        <a href="faq.php">
          <h4>FAQ</h4>
          <img src="/data/dyfi/images/Q&A.gif" alt="" width="75"/>
        </a>
        <p>Questions and answers about ShakeAlert.</p>
      </li>

      <li>
        <a href="background.php">
          <h4>Scientific Background</h4>
          <img src="images/???" alt="" width="75"/>
        </a>
        <p>
          How was the ShakeAlert system created?
        </p>
      </li>
 -->   
