<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald,
  if (!isset($TEMPLATE)) {
  $TITLE = 'Products';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="index.css"/>
  ';
  include 'template.inc.php';
  }
?>

<div class="row">

<!-- Products -->
  <section class="column one-of-one">

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/realtime.gif" width="75" alt=""/>
      </figure>
      <h3 id="rt">Real-time Earthquakes</h3>

      <ul>
        <li><a href="/data/dyfi/">Did You Feel It?</a></li>
        <li><a href="/data/shakemap/">ShakeMap</a></li>
        <li><a href="/data/pager/">PAGER</a></li>
        <li><a href="/data/oaf/">Aftershock Forecasts</a></li>
        <li><a href="/data/ground-failure/">Ground Failure</li>
        <li><a href="/data/finitefault/">Finite Fault</li>
        <li><a href="/data/posters.php">Earthquake Summary Posters</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/scenario.jpg" width="75" alt=""/>
      </figure>
      <h3 id="scenario">Earthquake Scenarios</h3>

      <p>
        <a href="/scenarios/">Earthquake Scenarios</a> describe the expected ground motions and effects of specific hypothetical large earthquakes.
      </p>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/hazards-2x.png" width="75" alt=""/>
      </figure>
      <h3 id="haz">Hazard Maps</h3>

      <ul>
        <li><a href="/hazards/foreign.php">International Hazard Maps</a></li>
        <li><a href="/hazards/hazmaps/">National Hazard Maps</a></li>
        <li><a href="/hazards/urban/">Urban Hazard Maps</a></li>
      </ul>

      <ul>
        <li><a href="https://pubs.usgs.gov/of/2007/1437/">Uniform California Earthquake Rupture Forecast (2008)</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/googleearth-2x.jpg" width="75" alt=""/>
      </figure>
      <h3 id="kml">Google Earth/KML Files</h3>
      <p>
        <a href="/learn/kml.php">Google Earth/KML Files</a> for earthquakes, faults, and other special studies.
      </p>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/publications.jpg" width="75" alt=""/>
      </figure>
      <h3 id="pubs">Publications</h3>

      <p>
        Open-File Reports, peer-reviewed journals, professional papers, fact sheets, maps, multi-media, etc
      </p>
      <ul>
        <li><a href="/learn/publications/pubs_factsheets.php">Selected USGS Fact Sheets</a></li>
        <li><a href="/learn/publications/pubs_geninfo.php">Selected USGS General Information Publications</a></li>
        <li><a href="/learn/publications/pubs_maps.php">Selected USGS Maps</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLIxlFowAfHBDV9pX14VT-XYn0fP5vsfhN">Selected USGS Videos</a></li>
        <li><a href="/learn/podcasts.php">Selected USGS PodCasts</a></li>
        <li><a href="/learn/publications/pubs_ofr_bull_circ.php">Selected USGS Open-Files, Bulletins, and Circulars</a></li>

        <li><a href="https://pubs.er.usgs.gov/">USGS Publications Warehouse</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/software.gif" width="75" alt=""/>
      </figure>
      <h3 id="soft">Software</h3>

      <p>
        <a href="/research/software/">Software programs</a> that are available for download.
      </p>
    </div>

  </section>

</div>
