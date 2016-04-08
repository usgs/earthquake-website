<?php
  // Author: Lisa Wald
  // Contact: David Wald, wald@usgs.gov
  // Last modified: 3/29/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Scenarios';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<figure class="right">
  <img src="images/scenario.jpg" width="300px" alt="example of scenario ShakeMap"/>
  <figcaption>Scenario for Cascadia Rising Exercise</figcaption>
</figure>

<p>
  A scenario represents one realization of a potential future earthquake by assuming a particular magnitude, location, and fault-rupture  geometry and estimating shaking using a variety of strategies.
</p>
<p>
  In planning and coordinating emergency response, utilities, local government, and other organizations are best served by conducting training exercises based on realistic earthquake situations—ones similar to those they are most likely to face. ShakeMap Scenario earthquakes can fill this role. They can also be used to examine exposure of structures, lifelines, utilities, and transportation corridors to specified potential earthquakes.
</p>
<p>
  A ShakeMap earthquake scenario is a predictive ShakeMap with an assumed magnitude and location, and, optionally, specified fault geometry.
</p>

<br style="clear:right;"/>

<div class="row">

  <section class="column one-of-two">
    <ul class="no-style linklist">
      <li>
        <a href="catalog/">
          <h2>USGS "Off-the-Shelf" Scenarios Collection</h2>
          <img src="images/scenario-coll.jpg" width="75px" alt=""/>
        </a>
        <p>
          Map and list of scenarios determined using the <a href="/hazards/">2014 National Seismic Hazard fault database</a>.
        </p>
      </li>
    </ul>
  </section>

  <section class="column one-of-two">
    <ul class="no-style linklist">
      <li>
        <a href="related.php">
          <h2>Related Scenarios</h2>
          <img src="images/related.jpg" width="75px" alt=""/>
        </a>
        <p>
          Related scenario efforts include ongoing and past ShakeOut exercises, drills, and 3-D simulations.
        </p>
      </li>
    </ul>
  </section>
</div>

<div class="row">

<!-- remove this section when the Search link becomes functional. -->
  <section class="column one-of-two">
    <ul class="no-style linklist">
      <li>
      </li>
    </ul>
  </section>

<!-- This is not functional yet.
  <section class="column one-of-two">
    <ul class="no-style linklist">
      <li>
        <a href="">
          <h2>Search Scenario Collection</h2>
          <img src="images/search-2x.gif" width="75px" alt=""/>
        </a>
        <p>
          Search for Scenario events. The Search form link from here is already configured to return only Scenario events. You enter additional search parameters. The default is ...
        </p>
      </li>
    </ul>
  </section>
-->

  <section class="column one-of-two">
    <h2>ShakeMap Scenario Documentation</h2>
    <p>
      (links to <a href="http://usgs.github.io/shakemap/shakemap_archives.html#shakemap-scenarios">ShakeMap Manual section 3.3.3</a>)
    </p>
    <ul>
      <li>
        <a href="http://usgs.github.io/shakemap/shakemap_archives.html#generating-earthquake-scenarios">Generating Earthquake Scenarios</a>
      </li>
      <li>
        <a href="http://usgs.github.io/shakemap/shakemap_archives.html#standardizing-earthquake-scenarios">Standardizing Earthquake Scenarios</a>
      </li>
    </ul>
  </section>
</div>
