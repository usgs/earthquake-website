<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'USGS Earthquake Hazards Program';
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.css"/>
    <link rel="stylesheet" href="index.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<div class="alert info">
  <h3><a href="https://www.usgs.gov/center-news/earthquake-forecast-salton-sea-swarm-august-2020">Earthquake Forecast for the Salton Sea Swarm of August 2020</a></h3>
</div>

<div class="row right-to-left">

<!-- RIGHT COLUMN: LATEST EQS and SIGNIFICANT EQS -->
  <div class="column one-of-two">

    <!-- Latest EQs and Significant EQs List -->
    <div class='alert'>
      <a href="earthquakes/map/">
        <h2>Latest Earthquakes - new interface!</h2>
        <img class='nehrp' src="images-home/latesteqs-ANSSlogo-300.gif" width="150" alt="ANSS logo"/>
      </a>
      <strong>Advanced National Seismic System</strong><br />
      Latest earthquakes map and list (past 24 hours, M2.5+). Tap/click on "gear icon" for options and settings.<br />

      <ul class="gobelow">
        <li><a href="/data/dyfi/">Did You Feel It? Report it Here!</a></li>
        <li><a href="/ens/">Subscribe to Earthquake Notifications</a></li>
        <li><a href="/data/shakealert">ShakeAlert® Earthquake Early Warning</a></li>
    </ul>
    </div>

    <!-- Significant EQs List -->
    <a href="/earthquakes/map/?extent=-85.34533,45.70313&extent=85.28792,354.72656&range=month&magnitude=significant&baseLayer=terrain&timeZone=utc">
     <h2>Significant Earthquakes, Past 30 Days</h2>
   </a>

    <div id="significant-earthquakes" class="height_scroll" style="overflow:scroll; background:#f4f4f4;">

      <noscript class="error alert">
        Javascript is used to load event data. If you can not enable Javascript,
        you can <a href="feed/v1.0/summary/significant_month.csv">view
        the raw data here</a>.
      </noscript>
    </div>

    <p>
      <a href="earthquakes/browse/significant.php">Significant Earthquakes Archive</a>
    </p>
    <p>
      <a href="earthquakes/search/">Search Earthquake Catalog</a>
    </p>

  </div>

<!-- LEFT COLUMN: WEBSITE SECTIONS and HIGHLIGHTS -->
  <div class="column one-of-two">

      <!-- Featured Items -->
      <div class='alert'>
        <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards">
          <h2>News and Highlights</h2>
          <img src="images-featured/seis-earth-1900-2018.png" class="nehrp" width="150" alt="seismicity of the earth map"/>
        </a>
        <ul class="no-style">
          <li><a href="https://www.usgs.gov/natural-hazards/earthquake-hazards">View News and Highlights</a></li>
          <li><a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/news">News and Highlights Archives</a></li>
        </ul>
          <p><a href="https://www.usgs.gov/programs/1774/news/feed"><img style="padding-right:12px;" src="images-home/rssfeed.gif" alt="ATOM feed">Subscribe</a></p>
      </div>

          <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/faqs-category">
      <img class="faq" src="images/main-faq.gif" width="150" alt="FAQ"/>
    </a>
    <p><strong><a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/faqs-category">FAQ - Frequently Asked Questions</a></strong><br/>
       Seriously, check here first.</p>

    <h2>Explore the Website</h2>
    <!-- 6 Sections of Website -->
    <div class="sections">

          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/earthquakes">
                <img class="sections-img" src="/images-home/home-earthquakes150x150.gif" alt="Earthquakes section thumbnail" />
                <h2>Earthquakes</h2>
              </a>
                <p>
                  Information about real-time earthquakes, online catalog search of archives, seismicity maps and statistics.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/hazards">
                <img class="sections-img" src="/images-home/home-hazards150x150.gif" alt="Hazards section thumbnail" />
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
              <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/data-tools">
                <img class="sections-img" src="/images-home/home-data150x150.jpg" alt="Data section thumbnail" />
                <h2>Data</h2>
              </a>
                <p>
                  Monitoring, station, and other various seismic data available for download.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li>
              <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/education">
                <img class="sections-img" src="/images-home/home-learn150x150.jpg" alt="Learn section thumbnail" />
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
              <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/monitoring">
                  <img class="sections-img" src="/images-home/home-monitoring150x150.jpg" alt="Monitoring section thumbnail" />
                  <h2>Monitoring</h2>
                </a>
                <p>
                  Global, national and regional networks recording earthquakes and crustal movements, maps, station information, real-time seismic waveforms.
                </p>
            </li>
          </ul>
          <ul class="sections-list">
            <li class="sections-listitem">
              <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/research">
                    <img class="sections-img" src="/images-home/home-research150x150.jpg" alt="Research section thumbnail" />
                    <h2>Research</h2>
                  </a>
                <p>
                  Research projects in the Earthquake Hazards Program, external
                  research support, science center activities, software.
                </p>
            </li>
          </ul>

          <p class='alert'>
            <img class="nehrp" src="images-home/nehrp.png" alt="NEHRP">
            The USGS Earthquake Hazards Program is part of the <a href="http://www.nehrp.gov/">National Earthquake Hazards Reduction Program (NEHRP)</a>, established by Congress in 1977, and the USGS <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/anss-advanced-national-seismic-system">Advanced National Seismic System (ANSS)</a> was established by Congress as a NEHRP facility.  The USGS and its partners monitor and report earthquakes, assess earthquake impacts and hazards, and perform research into the causes and effects of earthquakes.
          </p>

    </div>

  </div>
</div>
