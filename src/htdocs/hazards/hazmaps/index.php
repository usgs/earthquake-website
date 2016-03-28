<?php
  // Author: Lisa Wald
  // Contact: Mark Peterson,
  // Last modified: 03/21/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Hazard Maps and Site-Specific Data';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<div class="row">
  <section class="column one-of-two">
    <h2>Seismic Hazard Maps and Data</h2>

    <h3><a href="/hazards/products/">National Seismic Hazard Maps</a></h3>
    <figure class="left">
      <img src="images/us2014.gif" width="75" alt=""/>
    </figure>
    <p>Includes Lower 48, Alaska, Hawaii, Puerto Rico and the U.S. Virgin Islands, Guam and Marianas, Samoa and Pacific Islands.</p>

    <h3><a href="/hazards/products/urban/">Urban and Regional Hazard Maps</a></h3>
    <figure class="left">
      <img src="images/pnw.gif" width="75" alt=""/>
    </figure>
    <p>Includes California, Central and Eastern U.S., Pacific Northwest.</p>

    <br style="clear:left;"/>

    <h3><a href="/hazards/products/scenario/">Scenarios</a></h3>
    <figure class="left">
      <img src="images/intensity.gif" width="75" alt=""/>
    </figure>
    <p>
      Earthquake Scenarios describe the expected ground motions and effects of specific hypothetical large earthquakes.
    </p>

    <br style="clear:left;"/>

    <h3><a href="/hazards/products/tdep/">Time-Dependent Earthquake Probability Maps</a></h3>
    <figure class="left">
      <img src="images/tdep.gif" width="75" alt=""/>
    </figure>

    <br style="clear:left;"/>

    <h3><a href="/hazards/products/foreign/">Foreign Hazard Maps</a></h3>
    <figure class="left">
      <img src="images/foreign.gif" width="75" alt=""/>
    </figure>
    <p>
      Includes Afghanistan, Sumatra, State of Gujarat,India.  See also <a href="http://www.seismo.ethz.ch/static/gshap/">Global Seismic Hazard Assessment Program (GSHAP)</a>
    </p>

  </section>



  <section class="column one-of-two">
    <h2>Seismic Hazard Analysis Tools</h2>

    <h3>Custom Hazard Maps</h3>
    <figure class="left">
      <img src="images/cmaps.gif" width="75" alt=""/>
    </figure>
    <p>
  		Replot local portions of the national hazard maps. You define center and
  		span in addition to several other customization parameters.
  	</p>
    <p>Versions available: <a href="http://geohazards.usgs.gov/hazards/apps/cmaps/">All Editions</a>

    <br style="clear:left;"/>

  	<h3>Custom EQ Probability Maps</h3>
    <figure class="left">
  	   <img src="images/probability.gif" width="75" alt=""/>
    </figure>
    <p>
      Map of probability of earthquake larger than given magnitude within
      selected distance. Earthquake probability maps use the most recent
      earthquake rate and probability models. These models are derived from
      earthquake rate, location, and magnitude data from the USGS National
      Seismic Hazard Mapping Project.
    </p>
    <p>Version available: <a href="http://geohazards.usgs.gov/eqprob/2009/index.php">2009</a></p>

    <h3>Hazard Curves</h3>
    <figure class="left">
  	   <img src="images/curves.png" width="75" alt=""/>
     </figure>
     <p>
   		View hazard curves and dynamically generate uniform hazard response spectra (UHRS). Provides instructions for programmatic access to the 2008 National Seismic Hazard Mapping Program data.
   	</p>
    <p>Version available: <a href="http://geohazards.usgs.gov/hazardtool/">2008</a></p>

    <h3>V<sub>S</sub><sup>30</sup></h3>
    <figure class="left">
      <img src="images/vs30.gif" width="75" alt=""/>
    </figure>
    <p>
  		Allows a user to select from a map or input a
  		rectangular region of interest. Provides (optionally) a Vs30 grid
  		in ASCII or GMT grid format, and a JPEG Vs30 map.
  	</p>
    <p>Versions available: <a href="vs30/">All Editions</a></p>

    <h3>Interactive Deaggregations</h3>
    <figure class="left">
      <img src="images/deaggint.gif" width="75" alt=""/>
    </figure>
    <p>Versions available:
      <a href="http://geohazards.usgs.gov/deaggint/2008/">2008 - US</a> |
      <a href="/hazards/apps/samoa/">2008 - Samoa</a> |
      <a href="http://geohazards.usgs.gov/deaggint/2002/">2002</a> - US, Puerto Rico |
      <a href="http://geohazards.usgs.gov/deaggint/1996/">1996</a> - US, Alaska, Hawaii
    </p>
  	<p>
  		<a href="/hazards/products/conterminous/1996/deagg/">1996 Fixed Cities Deaggregation</a> - for a given location, what are the relative contribution for different
  		magnitude-distance combinations?
  	</p>

  	<h3>Banded Deaggregations</h3>
    <figure class="left">
      <img src="images/deaggband.gif" width="75" alt=""/>
    </figure>
    <p>
      For a given location, generates a plot of ground motion in bands versus rate as well as an ascii text file of the hazard matrices for each ground motion band.
    </p>
    <p>Version available: <a href="http://geohazards.usgs.gov/deaggband/2009/">2009 - US</a></p>

  	<h3>Other Hazard Software</h3>
    <figure class="left">
      <img src="images/opensha.gif" width="75" alt=""/>
    </figure>
    <p>
      <a href="http://www.opensha.org/">OpenSHA</a> is a joint venture between
      the Southern California Earthquake Center (SCEC), and the USGS. The
      primary goal of OpenSHA is to improve seismic hazard analysis by providing
      a platform that can accomodate both past and future models.
    </p>

  </section>

</div>
