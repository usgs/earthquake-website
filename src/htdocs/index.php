<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Hazards Program';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  include 'template.inc.php';
}

?>

<?php
  include_once '_features.inc.php';
  echo $EQ_FEATURES->toHtml();
?>

<hr/>

<section class="sections">
  <ul class="row two-up">
    <li class="column">
      <h2><a href="/earthquakes/">Earthquakes</a></h2>
      <div class="row">
        <img src="/images/earthquakes_button_square.gif" alt="" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Information about real-time earthquakes, online catalog search of
          archives, seismicity maps and statistics.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/hazards/">Hazards</a></h2>
      <div class="row">
        <img src="/images/hazards_button_square.gif" alt="" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          US faults, information about seismic hazards in various areas,
          tools for seismic design values.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/data/">Data &amp; Products</a></h2>
      <div class="row">
        <img src="/images/data_products.jpg" alt="" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Monitoring, station, and other various seismic data available for
          download. Data products to view and download.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/learn/">Learn</a></h2>
      <div class="row">
        <img src="/images/learn_button_square.gif" alt="" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          The science of earthquakes, FAQ, glossary, links to earthquake
          topics, Earthquakes for kids.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/monitoring">Monitoring</a></h2>
      <div class="row">
        <img src="/images/monitoring_button_square.gif" alt="" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Global, national and regional networks recording earthquakes and
          crustal movements, maps, station information, real-time seismic
          waveforms.
        </p>
      </a>
    </li>
    <li class="column">
      <h2><a href="/research/">Research</a></h2>
      <div class="row">
        <img src="/images/research_button_square.jpg" alt="" class="column mobile-one-of-four"/>
        <p class="column mobile-three-of-four">
          Research projects in the Earthquake Hazards Program, external
          research support, science center activities, software.
        </p>
      </a>
    </li>
  </ul>
</section>
