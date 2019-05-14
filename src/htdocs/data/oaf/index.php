<?php
// Author: Lisa Wald
// Contact: Jeanne Hardebeck
  if (!isset($TEMPLATE)) {
    $TITLE = 'Operation Aftershock Forecast';
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

<div class="row right-to-left" >

  <div class="column two-of-five">
      <h3>Aftershock Forecasts, Past 1 Year</h3>

      <div class="recent-products" style="overflow:scroll; height:400px; background:#f4f4f4;">
        <noscript class="error alert">
          Javascript is used to load event data. If you can not enable Javascript,
          you can <a href="/fdsnws/event/1/query.geojson?producttype=oaf&starttime=-1+year">view
          the raw data here</a>.
        </noscript>
      </div>

        <h3>View Map and List of Aftershock Forecast Events</h3>
        <ul>
          <li>
            <a href="/earthquakes/map/#<?php

                $id = "" . time();
                $params = array(
                  "feed" => $id,
                  "search" => array(
                    "id" => $id,
                    "name" => "Aftershock Forecasts, Past Year",
                    "isSearch" => true,
                    "params" => array(
                      "starttime" => "-1 year",
                      "producttype" => "oaf"
                    )
                  ),
                  "basemap" => "terrain",
                  "listFormat" => "shakemap",
                  "mapposition" => array(
                    array(-85, 0),
                    array(85, 360)
                  ),
                  "timeZone" => "utc",
                  "viewModes" => array(
                    "map" => true,
                    "list" => true
                  )
                );
                echo rawurlencode(json_encode($params));

            ?>">Past Year</a>
          </li>
      </ul>

      <ul class="no-style linklist">

    </div>

    <div class="column three-of-five">
      <ul>
        <li>
          <a href="/earthquakes/search/#<?php

              $id = "" . time();
              $params = array(
                "feed" => $id,
                "search" => array(
                  "id" => $id,
                  "name" => "Aftershock Forecasts",
                  "isSearch" => true,
                  "params" => array(
                    "producttype" => "oaf"
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
            <h4>Search Aftershock Forecast Archives</h4>
            <img src="/data/shakemap/images/search-2x.gif" alt="" width="75"/>
          </a>
          <p>Search for events that include Aftershock Forecasts. The Search form link from here is already configured to return only events with Aftershock Forecast products. You enter additional search parameters. The default time window is the past 30 days.</p>
        </li>
        <li>
          Aftershock Forecast Overview
        </li>
        <li>
          Aftershock Forecast Scientific Background
        </li>
      </ul>
    </div>
