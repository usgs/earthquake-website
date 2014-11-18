<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Home Page';
	$HEAD = '<link rel="stylesheet" href="index.css"/>';
	include 'template.inc.php';
}

?>

<div class="main-featured row two-up">
  <h2 class>Latest Earthquakes</h2>
  <div class="column">
    <img src="/images/mapinterface.gif" alt="Map Interface Icon"/>
  </div>
  <div class="column">
    <p>
      View recent events or search for past earthquakes.
      Optimized for mobile and desktop.
    </p>
    <a  href="http://earthquake.usgs.gov/earthquakes/map/"><button class="cta">Latest Earthquakes</button></a>
  </div>
</div>

<ul class="sub-features">
  <li>
    <h2><a href="http://www.seismo.unr.edu/">Ongoing Earthquake Swarm in Northwestern Nevada</a></h2>
    <p>
      A swarm of earthquakes in a sparsely populated area of far northwest
      Nevada that began on July 12, 2014, has increased in intensity over the
      past several days. This activity is located about 40 miles southeast of
      Lakeview, OR, and 40 miles northeast of Cedarville, CA.
    </p>
    <p>
      <a href="http://www.seismo.unr.edu/">Nevada Seismological Laboratory News
      Release</a> - click on link under Seismology Announcements
    </p>
    <p>
      <a href="http://earthquake.usgs.gov/earthquakes/map/#%7B%22feed%22%3A%227day_all%22%2C%22search%22%3Anull%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Atrue%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B41.64777522274766%2C-119.93980407714844%5D%2C%5B42.030424218536325%2C-119.29367065429688%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%2C%22faults%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Earthquakes in Last 7 Days in Swarm Area</a>
    </p>
  </li>
  <li>
    <h2><a href="http://www.usgs.gov/newsroom/article.asp?ID=4028#.VGtzJ_nF8U0">Seismometers to Measure DC Shaking</a></h2>
    <p>
      Thirty seismometers are being installed in the Nation’s capital this
      winter to monitor ground tremors to better estimate the intensity of
      ground shaking that can be expected during future earthquakes in the area.
    </p>
  </li>
</ul>

<section class="two-up sections row">
  <ul class="column">
    <li>
      <h3><a href="/earthquakes/">Earthquakes</a></h3>
      <div class="row">
        <img src="/images/earthquakes_button_square.gif" alt="Earthquakes Icon" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Information about real-time earthquakes, online catalog search of
          archives, seismicity maps and statistics.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/hazards/">Hazards</a></h3>
      <div class="row">
        <img src="/images/hazards_button_square.gif" alt="Hazards Icon" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          US faults, information about seismic hazards in various areas,
          tools for seismic design values.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/data/">Data &amp; Products</a></h3>
      <div class="row">
        <img src="/images/data_products.jpg" alt="Data &amp; Products Icon" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Monitoring, station, and other various seismic data available for
          download. Data products to view and download.
        </p>
      </a>
    </li>
  </ul>
  <ul class="column">
    <li>
      <h3><a href="/learn/">Learn</a></h3>
      <div class="row">
        <img src="/images/learn_button_square.gif" alt="Learn Icon" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          The science of earthquakes, FAQ, glossary, links to earthquake
          topics, Earthquakes for kids.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/monitoring">Monitoring</a></h3>
      <div class="row">
        <img src="/images/monitoring_button_square.gif" alt="Monitoring Icon" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Global, national and regional networks recording earthquakes and
          crustal movements, maps, station information, real-time seismic
          waveforms.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/research/">Research</a></h3>
      <div class="row">
        <img src="/images/research_button_square.jpg" alt="Research Icon" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Research projects in the Earthquake Hazards Program, external
          research support, science center activities, software.
        </p>
      </a>
    </li>
  </ul>
</section>

