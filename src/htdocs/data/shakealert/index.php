<?php
// Author: Lisa Wald
// Contact: Bob De Groot

if (!isset($TEMPLATE)) {
  $TITLE = 'ShakeAlert&reg;;';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<p>
  The ShakeAlert&reg; earthquake early warning system monitors for significant earthquakes and issues alerts to warn that strong shaking is expected imminently.  In the United States, the ShakeAlert system is being developed to cover California, Oregon, and Washington.
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

      <h3>View Map and List of ShakeAlert&reg; Events</h3>
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
        <a href="/earthquakes/search/#<?php

          $id = "" . time();
          $params = array(
            "feed" => $id,
            "search" => array(
              "id" => $id,
              "name" => "ShakeAlerts",
              "isSearch" => true,
              "params" => array(
                "contributor" => "ew"
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

        ?>">
          <h4>Search ShakeAlert&reg; Archives</h4>
          <img src="/data/shakemap/images/search-2x.gif" alt="" width="75"/>
        </a>
        <p>Search for alerts issued by ShakeAlert&reg;.  The search is configured to return only earthquakes for which an alert was issued.</p>
      </li>

      <li>
        <a href="https://www.usgs.gov/shakealert/">
          <h4>ShakeAlert Project</h4>
          <img src="/data/images/eew-project.gif" alt="timeline" width="75"/></a>
        <p>
          Current status, news, publications, and everything else ShakeAlert&reg;.
        </p>
      </li>

      <li>
        <a href="https://www.shakealert.org/">
          <h4>ShakeAlert.org</h4>
          <img src="/data/images/shakealert-org.jpg" alt="flowchart and map" width="75"/></a>
        <p>
          Collaborative website for ShakeAlert&reg; partners.
        </p>
      </li>

      <li>
        <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/early-warning">
          <h4>Earthquake Early Warning Research</h4>
          <img src="/data/images/eew-research.gif" alt="maps with dots" width="75"/></a>
        <p>
          The basic research overview for earthquake early warning.
        </p>
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
        <a href="background.php">
          <h4>Scientific Background</h4>
          <img src="images/???" alt="" width="75"/>
        </a>
        <p>
          How was the ShakeAlert system created?
        </p>
      </li>
 -->
