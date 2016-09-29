<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald,
  // Last modified: 6/15/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Data and Products';
  $NAVIGATION = false;
  $HEAD = '
    <link rel="stylesheet" href="index.css"/>
  ';
  include 'template.inc.php';
  }
?>

<div class="row">

<!-- Data -->
  <section class="column three-of-five">
    <figure class="right">
      <img src="images/webservices-150.gif" width="150" alt=""/>
    </figure>

    <h2>Data</h2>
    <ul>
      <li><a href="data.php#web">Web Services</a></li>
      <li><a href="data.php#eq">Earthquakes</a></li>
      <li><a href="data.php#wave">Seismic Waveforms</a></li>
      <li><a href="data.php#sta">Seismic Stations</a></li>
      <li><a href="data.php#geod">Geodetic Data</a></li>
      <li><a href="data.php#earth">Earth Structure and Site Response</a></li>
      <li><a href="data.php#site">Ground Motion and Site Conditions</a></li>
      <li><a href="data.php#model">Hazard Assessment Data and Models</a></li>
    </ul>


<!-- Products -->
    <figure class="right">
    <img src="/scenarios/images/scenario.jpg" width="150" alt=""/>
  </figure>

    <h2>Products</h2>
    <ul>
      <li><a href="products.php#rt">Real-time Earthquakes</a></li>
      <li><a href="products.php#scenario">Scenarios</a></li>
      <li><a href="products.php#haz">Hazard Maps</a></li>
      <li><a href="products.php#kml">Google Earth/KML Files</a></li>
      <li><a href="products.php#sfbay">San Francisco Bay Area Maps</a></li>
      <li><a href="products.php#pubs">Publications</a></li>
      <li><a href="products.php#soft">Software</a></li>
    </ul>
  </section>

  <section class="column two-of-five">
    <div class="alert" style="margin-bottom:16px">

      <p><img src="images/sf1906-2x.jpg" width="384"/></p>
      <h3>See Also</h3>

    <ul>
      <li><a href="/earthquakes/browse/specialstudies.php">Special Earthquake Studies</a></li>
      <li><a href="data.php#other">Other Data Sources</a></li>
      <li><a href="data.php#info">Information and Data Outside of USGS</a></li>
    </ul>
  </div>
  </section>
</div>
