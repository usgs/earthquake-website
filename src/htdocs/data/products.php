<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald,
  // Last modified: 6/15/2016
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
    		<li><a href="/data/eqarchives/poster/">Earthquake Summary Posters</a></li>
    	</ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/scenario.jpg" width="75" alt=""/>
      </figure>
      <h3 id="scenario">Earthquake Scenarios</h3>

    	<p>
        <a href="/hazards/products/scenario/">Earthquake Scenarios</a> describe the expected ground motions and effects of specific hypothetical large earthquakes.
      </p>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/hazards-2x.png" width="75" alt=""/>
      </figure>
      <h3 id="haz">Hazard Maps</h3>

    	<ul>
    		<li><a href="/hazards/products/foreign/">International Hazard Maps</a></li>
    		<li><a href="/hazards/products/">National Hazard Maps</a></li>
    		<li><a href="/hazards/products/urban/">Urban Hazard Maps</a></li>
    	</ul>

    	<ul>
      	<li><a href="http://pubs.usgs.gov/of/2007/1437/">Uniform California Earthquake Rupture Forecast (2008)</a></li>
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
        <img src="images/sf-2x.jpg" width="75" alt=""/>
      </figure>
    	<h3 id="sfbay">San Francisco Bay Area Maps</h3>
      <p>
        <a href="/regional/nca/maps/">San Francisco Bay Area Maps</a> for faults, shaking hazards, earthquake probabilities, and liquefaction hazards.
      </p>
    </div>


    <div class="alert" style="margin-bottom:16px">
      <figure class="right">
        <img src="images/sf1906-2x.jpg" width="75" alt=""/>
      </figure>
    	<h3 id="sigeq">Special Earthquake Collections</h3>

      <ul>
        <li><a href="/regional/nca/1868/">1868 Hayward Fault, CA Earthquake</a></li>
        <li><a href="/regional/nca/1906/">1906 San Francisco, CA Earthquake</a></li>
        <li><a href="/regional/nca/1989/">1989 Loma Prieta, CA Earthquake</a></li>
      </ul>
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
    		<li><a href="/learn/publications/">Selected USGS Earthquake Publications</a></li>
    		<li><a href="http://www.usgs.gov/pubprod/">USGS Publications Warehouse</a></li>
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
