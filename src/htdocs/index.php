<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Hazards Program';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  include 'template.inc.php';
}
include_once '_features.inc.php';
echo $EQ_FEATURES->toHtml();
?>

<hr/>

<section class="sections">
  <ul class="row two-up">

    <li class="column">
      <h2><a href="/earthquakes/">Earthquakes</a></h2>
      <div class="row">
        <img src="/images/home-earthquakes800for400.gif" alt="" />
        <p>
          Information about real-time earthquakes, online catalog search of
          archives, seismicity maps and statistics.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/hazards/">Hazards</a></h2>
      <div class="row">
        <img src="/images/home-hazards800for400.gif" alt="" />
        <p>
          US faults, information about seismic hazards in various areas,
          tools for seismic design values.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/data/">Data &amp; Products</a></h2>
      <div class="row">
        <img src="/images/home-data800for400.gif" alt="" />
        <p>
          Monitoring, station, and other various seismic data available for
          download. Data products to view and download.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/learn/">Learn</a></h2>
      <div class="row">
        <img src="/images/home-learn800for400.jpg" alt="" />
        <p>
          The science of earthquakes, FAQ, glossary, links to earthquake
          topics, Earthquakes for kids.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/monitoring">Monitoring</a></h2>
      <div class="row">
        <img src="/images/home-monitoring800for400.gif" alt="" />
        <p>
          Global, national and regional networks recording earthquakes and
          crustal movements, maps, station information, real-time seismic
          waveforms.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/research/">Research</a></h2>
      <div class="row">
        <img src="/images/home-research800for400.jpg" alt="" />
        <p>
          Research projects in the Earthquake Hazards Program, external
          research support, science center activities, software.
        </p>
      </a>
    </li>
  </ul>
</section>
