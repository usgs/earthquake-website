<?php
  // Author: Lisa Wald
  // Contact: Mark Peterson
  if (!isset($TEMPLATE)) {
  $TITLE = 'Seismic Hazard Maps and Site-Specific Data';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="index.css"/>
  ';
  include 'template.inc.php';
  }
?>

<div class="row">
  <section class="column one-of-two">
    <h2>U.S. Seismic Hazard Maps</h2>

    <figure>
      <img src="images/us2014.gif" alt=""/>
    </figure>
    <h3>United States - Lower 48</h3>
    <h4>Short-term Induced Seismicity Models</h4>
    <ul>
      <li><a href="conterminous/index.php#2018">2018</a></li>
      <li><a href="conterminous/index.php#2017">2017</a></li>
      <li><a href="conterminous/index.php#2016">2016</a></li>
    </ul>
    <h4>Long-term Models</h4>
    <ul>
      <li><a href="conterminous/index.php#2014">2014</a></li>
      <li><a href="conterminous/index.php#2008">2008</a></li>
      <li><a href="conterminous/index.php#2002">2002</a></li>
      <li><a href="conterminous/index.php#1996">1996</a></li>
    </ul>
    <h3>Alaska</h3>
    <ul>
      <li><a href="ak/index.php#2007">2007</a></li>
      <li><a href="ak/index.php#1999">1999</a></li>
    </ul>
    <h3>Hawaii</h3>
    <ul>
      <li><a href="islands.php#hi">1998</a></li>
    </ul>
    <h3>Puerto Rico and the U.S. Virgin Islands</h3>
    <ul>
      <li><a href="islands.php#prvi">2003</a></li>
    </ul>
    <h3>Guam and Marianas</h3>
    <ul>
      <li><a href="https://pubs.usgs.gov/of/2012/1015/">2012</a></li>
    </ul>
    <h3>Samoa and Pacific Islands</h3>
    <ul>
      <li><a href="islands.php#samoapacific">2012</a></li>
    </ul>

  </section>

  <section class="column one-of-two">

    <h2>Hazard Tools</h2>

    <a href="/hazards/interactive/">Unified Hazard Tool</a>
    <p>Replaces most of the previous individual tools.</p>

<!-- GEOHAZ SERVER TURNED OFF MARCH 1, 2017
    <a href="http://geohazards.usgs.gov/hazards/apps/cmaps/">
      <img class='tool' src="images/cmaps.gif" width="75" alt=""/>
      <p>Custom Hazard Maps<br/>
    </a>
  	Replot local portions of the national hazard maps. 1996, 2002, 2008.
  	</p>

    <a href="http://geohazards.usgs.gov/eqprob/2009/">
      <img class='tool' src="images/probability.gif" width="75" alt=""/>
      <p>Custom EQ Probability Maps<br/>
    </a>
    Map of probability of earthquake larger than given magnitude within
    selected distance. 2009.
    </p>

    <a href="http://geohazards.usgs.gov/hazardtool/">
      <img class='tool' src="images/curves.png" width="75" alt=""/>
      <p>Hazard Curves<br/>
    </a>
    View hazard curves and dynamically generate uniform hazard response spectra (UHRS). 2008.
   	</p>

    <img class='tool' src="images/deaggint.gif" width="75" alt=""/>
    <h4>Deaggregations</h4>
    <p>
      For a given location, what are the relative contribution for different magnitude-distance combinations?
    </p>
    <ul>
      <li><a href="http://geohazards.usgs.gov/deaggint/2008/">U.S. - 2008</a></li>
      <li><a href="/hazards/apps/samoa/">Samoa - 2008</a></li>
      <li><a href="http://geohazards.usgs.gov/deaggint/2002/">U.S., Puerto Rico - 2002</a></li>
      <li><a href="http://geohazards.usgs.gov/deaggint/1996/">U.S., Alaska, Hawaii - 1996</a></li>
      <li><a href="http://geohazards.usgs.gov/deaggband/2009/">Banded Deaggregation - U.S. - 2009</a></li>
 -->

    </ul>

    <h2>Other Products</h2>

    <ul>
      <li>
        <p>
          <a href="http://www.opensha.org/">OpenSHA</a><br/>
          Provides a platform that can accomodate both past and future models.
        </p>
      </li>

      <li>
        <p>
          <a href="http://www.wgcep.org/">Uniform California Earthquake Forecasts (UCERFs)</a><br/>
          Time-dependent earthquake probability maps for California from the Working Group on California Earthquake Probabilities.
        </p>
      </li>

      <li>
        <p>
          <a href="/data/vs30/">Vs30 Data</a><br/>
          Global data and U.S. data compilations.
        </p>
      </li>

      <li>
        <p>
          <a href="/hazards/urban/">Urban and Regional Hazard Maps</a><br/>
          Includes California, Central and Eastern U.S., Pacific Northwest.
        </p>

      <li>
        <p>
          <a href="/hazards/foreign.php">Foreign Hazard Maps</a><br/>
          Includes Afghanistan, Sumatra, State of Gujarat,India.  See also <a href="https://www.globalquakemodel.org/">Global Earthquake Model (GEM)</a>.
        </p>
      </li>
    </ul>

    <h2>See also:</h2>
    <ul>
      <li>
        <a href="https://www.conservation.ca.gov/cgs/earthquakes">California Hazard Maps</a> - California Geological Survey
      </li>
      <li>
        <a href="http://www.earthquakescanada.nrcan.gc.ca/hazard-alea/index-en.php">Canadian Hazard Maps</a> - Natural Resources Canada
      </li>
    </ul>
  </section>
</div>
