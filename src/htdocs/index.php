<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'USGS Earthquake Hazards Program';
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget.css"/>
    <link rel="stylesheet" href="index.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<div class="row right-to-left">

<!-- RIGHT COLUMN: LATEST EQS and SIGNIFICANT EQS -->
  <div class="column one-of-two">

    <!-- Latest EQs and Significant EQs List -->
    <a href="earthquakes/map/"><h2>Latest Earthquakes</h2></a>
    <p class='alert'>
      <a href="earthquakes/map/">
        <img class='nehrp' src="images-home/latesteqs-300.jpg" width="150" alt=""/>
      </a>
      Latest earthquakes map and list (past 24 hours, M2.5+). Tap/click on "gear icon" for options and settings.
    </p>

    <!-- Significant EQs List -->
    <a href="/earthquakes/map/#%7B%22feed%22%3A%2230day_sig%22%2C%22search%22%3Anull%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Atrue%2C%22restrictListToMap%22%3Afalse%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-78.49055166160312%2C74.8828125%5D%2C%5B78.42019327591201%2C325.1953125%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
     <h2>Significant Earthquakes, Past 30 Days</h2>
   </a>

    <div id="significant-earthquakes" class="height_scroll" style="overflow:scroll; background:#f4f4f4;">

      <noscript class="error alert">
        Javascript is used to load event data. If you can not enable Javascript,
        you can <a href="feed/v1.0/summary/significant_month.csv">view
        the raw data here</a>.
      </noscript>
    </div>
  </div>


<!-- LEFT COLUMN: WEBSITE SECTIONS and HIGHLIGHTS -->
  <div class="column one-of-two">

    <!-- Featured Items -->
    <div class='alert'>
      <?php
      include_once '_features.inc.php';
      echo $EQ_FEATURES->toHtml();
      ?>

      <a href="atom.php"><img style="padding-right:16px;" src="images-home/rssfeed.gif" alt="ATOM feed">Subscribe to Earthquake Hazards Program Highlights</a>
    </div>

    <!-- 6 Sections of Website -->
    <div class="sections">

          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="/earthquakes/">
                <img class="sections-img" src="/images-home/home-earthquakes150x150.gif" alt="" />
                <h2>Earthquakes</h2>
              </a>
                <p>
                  Information about real-time earthquakes, online catalog search of archives, seismicity maps and statistics.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="/hazards/">
                <img class="sections-img" src="/images-home/home-hazards150x150.gif" alt="" />
                <h2>Hazards</h2>
              </a>
                <p>
                  US faults, information about seismic hazards in various areas,
                  tools for seismic design values.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="/data/">
                <img class="sections-img" src="/images-home/home-data150x150.jpg" alt="" />
                <h2>Data &amp; Products</h2>
              </a>
                <p>
                  Monitoring, station, and other various seismic data available for
                  download. Data products to view and download.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li>
              <a href="/learn/">
                <img class="sections-img" src="/images-home/home-learn150x150.jpg" alt="" />
                <h2>Learn</h2>
              </a>
                <p>
                  The science of earthquakes, FAQ, glossary, links to earthquake
                  topics, Earthquakes for kids.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="/monitoring">
                  <img class="sections-img" src="/images-home/home-monitoring150x150.jpg" alt="" />
                  <h2>Monitoring</h2>
                </a>
                <p>
                  Global, national and regional networks recording earthquakes and crustal movements, maps, station information, real-time seismic waveforms.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="/research/">
                    <img class="sections-img" src="/images-home/home-research150x150.jpg" alt="" />
                    <h2>Research</h2>
                  </a>
                <p>
                  Research projects in the Earthquake Hazards Program, external
                  research support, science center activities, software.
                </p>
            </li>
          </ul>
    </div>

    <p class='alert'>
      <img class="nehrp" src="images-home/nehrp.png">
      The USGS Earthquake Hazards Program is part of the <a href="http://www.nehrp.gov/">National Earthquake Hazards Reduction Program (NEHRP)</a>, established by Congress in 1977. We monitor and report earthquakes, assess earthquake impacts and hazards, and research the causes and effects of earthquakes.
    </p>

  </div>
</div>
