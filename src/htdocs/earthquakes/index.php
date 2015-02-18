<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquakes';
  $HEAD = '<link rel="stylesheet" href="/lib/earthquake-list-widget.css"/>' .
      '<link rel="stylesheet" href="index.css"/>';
  $FOOT = '<script src="/lib/earthquake-list-widget.js"></script>' .
      '<script src="index.js"></script>';
  include 'template.inc.php';
}
?>

<div class = "row">
  <div class="column one-of-three">
    <h2 class="h3">
       <a href="/earthquakes/map/#%7B%22feed%22%3A%2230day_sig%22%2C%22search%22%3Anull%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Atrue%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22local%22%2C%22mapposition%22%3Anull%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
        Significant Earthquakes
        <span class="subtext">Past 30 Days</span>
      </a>
    </h2>
    <div id="significant-earthquakes" class="height_scroll"></div>
  </div>

  <div class="column one-of-three">
    <h2 class="h3">Today&rsquo;s Earthquake Fact</h2>
    <div>
      Thousands of earthquakes occur every day around the world, although most
      are so small they can only be detected by sensitive seismographs. As more
      and more seismographs are installed, more earthquakes can be and have been
      located. However, the number of large earthquakes (magnitude 6.0 and
      greater) that occur each year has stayed relatively constant.
    </div>
    <h2>Today in Earthquake History</h2>
    <img src="images/calendar.jpg" width="64" height="41"
      alt="calendar
    icon" class="left" />
    <p><strong>November 12, 1999</strong>
      M 7.2, Turkey – At least 894 people killed and 4,948 injured, mostly in
      the Bolu-Duzce area. Casualties occurred as far as Eskisehir, Yalova and
      Zonguldak. Extensive…
    <a style="font-size:.9em;" href="/learn/today/">Read More</a>
    </p>
  </div>

  <div class="column one-of-three">
    <h2 class="h3">
      <a href="/earthquakes/map/#%7B%22feed%22%3A%221day_m25%22%2C%22search%22%3Anull%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Atrue%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22local%22%2C%22mapposition%22%3Anull%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
          Magnitude 2.5+ Earthquakes
        <span class="subtext">Past Day</span>
      </a>
    </h2>
    <div id="m2pastDay-earthquakes" class="height_scroll"></div>
  </div>
</div>

<h2>Real-time &amp; Historical Earthquake Information</h2>
<div class="row">
  <div class="one-of-three column">
    <ul class="no-style">
      <li>
        <h3><a href="/earthquakes/map/">Latest Earthquakes</a></h3>
        <div class="row">
          <img src="images/earthquakes.gif" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            View recent event or search for past earthquakes
          </div>
        </div>
      </li>
      <li>
        <h3>
          <a href="feed/">Real-time Feeds &amp; Notifications</a>
        </h3>
        <div class="row">
          <img src="images/feeds.gif" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Get real&#45;time earthquake notifications sent to you using a
            number of popular mediums: Feeds, Email, Twitter etc. &hellip;
          </div>
        </div>
      </li>
      <li>
        <h3>Search Earthquake Archives</h3>
        <div class="row">
          <img src="images/search.gif" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Online catalog search.
          </div>
        </div>
      </li>
        <p>
          <a href="eqinthenews/">
            Significant Earthquake Archive
          </a>
        </p>
        <p>
          <a href="errata.php">
            Errata for Latest Earthquakes
          </a>
        </p>
    </ul>
  </div>
  <div class="one-of-three column">
    <ul class="no-style">
      <li>
        <h3><a href="region.php">Info by Region</a></h3>
        <div class="row">
          <img src="images/infobyregion.gif" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            By state or by country.
          </div>
        </div>
      </li>
      <li>
        <h3><a href="states/seismicity/">US Seismicity Map</a></h3>
        <div class="row">
          <img src="images/seis_us.png" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Entire US and regional maps.
          </div>
        </div>
      </li>
      <li>
        <h3>
          <a href="images/seis_world.png">
            World Seismicity Maps
          </a>
        </h3>
        <div class="row">
          <img src="images/seis_us.png" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Entire world and regional maps.
          </div>
        </div>
      </li>
      <li>
        <h3>
          <a href="eqarchives/">
            Earthquake &ldquo;Top 10&rdquo; Lists &amp; Maps
          </a>
        </h3>
        <div class="row">
          <img src="images/top10.gif" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Earthquake lists, maps, and statistics.
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="one-of-three column">
    <ul class="no-style">
      <li>
        <h3><a href="dyfi/">Did You Feel It?</a></h3>
        <div class="row">
          <img src="images/dyfi.png" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Feel an earthquake? Report it here.
          </div>
        </div>
      </li>
      <li>
        <h3><a href="shakemap/">ShakeMap</a></h3>
        <div class="row">
          <img src="images/dyfi.png" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Earthquake shaking maps and data.
          </div>
        </div>
      </li>
      <li>
        <h3><a href="pager/">PAGER</a></h3>
        <div class="row">
          <img src="images/pager.png" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
            Estimates of earthquake impacts, monetary and human losses.
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
