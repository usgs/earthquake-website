<?php
  // Author: Lisa Wald
  // Contact: lisa@usgs.gov
  // Last modified: 03/01/2016
  if (!isset($TEMPLATE)) {

  date_default_timezone_set('UTC');
  $min_year = 1900;
  $current_year = intval(date('Y'));
  $year = isset($_GET['year']) ? intval($_GET['year']) : $current_year;
  if ($year < $min_year || $year > $current_year) {
    http_response_code(400);
    // TODO Print error message
    exit();
  }
  $options = array();
  $options['el'] = '#earthquake-list';
  $options['year'] = $year;

  $TITLE = 'Earthquake Lists, Maps, and Statistics';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<div class="row">

  <div class="column one-of-three">
    <h2>1900&ndash;Present</h2>

    <div class="alert">
      <h3>United States</h3>
      <ul class="no-style">
        <li><a href="10-largest-us.php">10 Largest</a></li>
        <li><a href="">Magnitude 8+</a></li>
        <li><a href="">Magnitude 7+</a></li>
      </ul>
      <h3>World</h3>
      <ul class="no-style">
        <li><a href="10-largest-world.php">10 Largest</a></li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221456876261795%22%2C%22search%22%3A%7B%22id%22%3A%221456876261795%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22minmagnitude%22%3A8%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Magnitude 8+</a></li>
        <li><a href="http://earthquake.usgs.gov/earthquakes/map/#%7B%22feed%22%3A%221456876261795%22%2C%22search%22%3A%7B%22id%22%3A%221456876261795%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22minmagnitude%22%3A7%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Magnitude 7+</a></li>
      </ul>
      <p class="alert info">Smaller magnitudes since 1900 will generate too many earthquakes. Use <strong>By Year</strong> instead.</p>
    </div>
  </div>

  <!--URLs below to access Search Output Map and List with $year inserted into starttime and endtime -->

  <div class="column one-of-three">
    <h2>By Year</h2>

    <div class="alert">

      <form action="significant.php?year=<?php echo $year ?>">
        <label for="year">
          <h4>Enter year:</h4>
        </label>

        <input type="number" class="significant-year" name="year" id="year"
            min="<?php echo $min_year ?>" max="<?php echo $current_year ?>"
            step="1" value="<?php echo $year ?>" autofocus/>
      </form>

      <h3>United States</h3>
      <ul class="no-style">
        <li>10 Largest</li>
        <li><a href="">Magnitude 8+</a></li>
        <li><a href="">Magnitude 7+</a></li>
        <li><a href="">Magnitude 6+</a></li>
        <li><a href="">Significant Earthquakes</a></li>
      </ul>
      <h3>World</h3>
      <ul class="no-style">
        <li><a href="">10 Largest</a></li>
        <li><a href="">Magnitude 8+</a></li>
        <li><a href="">Magnitude 7+</a></li>
        <li><a href="">Magnitude 6+</a></li>
        <li><a href="">Significant Earthquakes</a></li>
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
      <a href="/earthquakes.search/">Search Earthquake Catalog</a>
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

<p class="alert info">
  The United States (except the "10 Largest") results are derived from an Earthquake Catalog search using a rectangular area. The rectangle, and thus the results, contain areas that are just outside of the U.S., and do not include Alaska or Hawaii.
</p>

<h2><a href="stats.php">Statistics</a></h2>

<p>World-wide, United States, and average annual statistics for earthquake counts.</p>
