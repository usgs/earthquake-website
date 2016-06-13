<?php
  // Author: Lisa Wald
  // Contact: lisa@usgs.gov
  // Last modified: 03/01/2016
  if (!isset($TEMPLATE)) {
  $current_year = intval(date('Y'));
  $TITLE = 'Earthquake Lists, Maps, and Statistics';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/theme/css/alert.css"/>
    <link rel="stylesheet" href="/lib/earthquake-list-widget.css"/>
  ';
  include 'template.inc.php';
  }
?>

<div class="row">

  <!-- All Earthquakes ---------------------------------------------->
  <div class="column one-of-three">
    <h2>All Earthquakes</h2>

    <div class="alert">
      <h3>United States</h3>
      <ul class="no-style">
        <!--  <li><a href="10-largest-us.php">10 Largest</a></li>-->
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221461353942365%22%2C%22search%22%3A%7B%22id%22%3A%221461353942365%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22endtime%22%3A%222016-04-22%2023%3A59%3A59%22%2C%22maxlatitude%22%3A72.299%2C%22minlatitude%22%3A18.01%2C%22maxlongitude%22%3A-66.973%2C%22minlongitude%22%3A-195.645%2C%22minmagnitude%22%3A8%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-4.740675384778361%2C-188.7890625%5D%2C%5B77.46602847687329%2C-63.80859374999999%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Magnitude 8+</a></li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221461353942365%22%2C%22search%22%3A%7B%22id%22%3A%221461353942365%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22endtime%22%3A%222016-04-22%2023%3A59%3A59%22%2C%22maxlatitude%22%3A72.299%2C%22minlatitude%22%3A18.01%2C%22maxlongitude%22%3A-66.973%2C%22minlongitude%22%3A-195.645%2C%22minmagnitude%22%3A7%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-4.740675384778361%2C-188.7890625%5D%2C%5B77.46602847687329%2C-63.80859374999999%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Magnitude 7+</a></li>
      </ul>
      <h3>World</h3>
      <ul class="no-style">
        <!--<li><a href="10-largest-world.php">10 Largest</a></li>-->
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221456876261795%22%2C%22search%22%3A%7B%22id%22%3A%221456876261795%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22minmagnitude%22%3A8%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Magnitude 8+</a></li>
        <li><a href="http://earthquake.usgs.gov/earthquakes/map/#%7B%22feed%22%3A%221456876261795%22%2C%22search%22%3A%7B%22id%22%3A%221456876261795%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22minmagnitude%22%3A7%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Magnitude 7+</a></li>
      </ul>
    </div>
  </div>


<!-- Earthquakes by Year ---------------------------------------------->
    <div class="column one-of-three">
    <h2>By Year</h2>

    <div class="alert">
      <!--

      <h3>United States</h3>
      <ul class="no-style">
        <li><a href="us-m6.php">Magnitude 6+</a></li>
        <li><a href="us-m5.php">Magnitude 5+</a></li>
        <li><a href="">Significant Earthquakes</a></li>
      </ul>
    -->

      <h3>World</h3>
      <ul class="no-style">
        <li><a href="m8-world.php">Magnitude 8+</a></li>
        <li><a href="m7-world.php">Magnitude 7+</a></li>
        <li><a href="m6-world.php">Magnitude 6+</a></li>
        <li><a href="significant.php">Significant Earthquakes</a></li>
      </ul>
    </div>
  </div>

  <div class="column one-of-three">
    <h2>By Location</h2>

<div class="alert">
  <p>
    Use the Eearthquake Catalog Search to find earthquakes within a certain distance of any location. Expand "Advanced Options" and fill in the "Circle" fields.
  </p>

  <p>
    <button>
      <a href="/earthquakes/search/">Search Earthquake Catalog</a>
    </button>
  </p>
</div>
    <!-- Beginning of By Location section

    <div class="alert">
      <p>Latitude:</p>
      <p>Longitude:</p>
      <p>OR</p>
      <p>INSERT MAP LOCATION WIDGET HERE</p>
      <ul class="no-style">
        <li>Magnitude 8+ within 250km</li>
        <li>Magnitude 7+ within 100km</li>
        <li>Magnitude 6+ within 50km</li>
        <li>Magnitude 5+ within 25km</li>
        <li>All Magnitudes within 10km</li>
      </ul>
    </div>
  </div>
End of By Location section -->
</div>
</div>

<p class="alert info">United States earthquake lists (except "10 Largest") also include some earthquakes outside the U.S. since the search area is a rectangle.</p>

<h2><a href="stats.php">Statistics</a></h2>

<p>
  Worldwide, United States, and average annual statistics for earthquake counts. U.S. and worldwide deaths per year. Earthquake counts by U.S. State.
</p>
