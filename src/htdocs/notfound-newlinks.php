<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = "The webpage you are trying to reach has moved.";
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<h2>Please update your bookmark accordingly:</h2>

<div class="horizontal-scrolling">
<table>
  <thead>
    <tr><th>Name of Webpage</th><th>Old URL</th><th>New URL</th></tr>
  </thead>

  <tr>
    <td>Earthquakes in the News</td>
    <td>http://earthquake.usgs.gov/earthquakes/eqinthenews/</td>
    <td>
      <a href="/earthquakes/browse/">
        https://earthquake.usgs.gov/earthquakes/browse/
      </a>
    </td>
  </tr

  <tr>
    <td>Advanced National Seismic System (ANSS)</td>
    <td>http://earthquake.usgs.gov/research/monitoring/anss/</td>
    <td>
      <a href="/monitoring/anss/">
        https://earthquake.usgs.gov/monitoring/anss/
      </a>
    </td>
  </tr>

  <tr>
    <td>Historic Earthquakes</td>
    <td>http://earthquake.usgs.gov/earthquakes/eqarchives/</td>
    <td>
      <a href="/earthquakes/browse/significant.php">
        https://earthquake.usgs.gov/earthquakes/browse/significant.php
      </a>
    </td>
  </tr>

  <tr>
    <td>National Earthquake Information Center (NEIC)</td>
    <td>http://earthquake.usgs.gov/regional/neic/</td>
    <td>
      <a href="/contactus/golden/neic.php">
        https://earthquake.usgs.gov/contactus/golden/neic.php
      </a>
    </td>
  </tr>

  <tr>
    <td>Recent Earthquakes</td>
    <td>http://earthquake.usgs.gov/recenteqs/</td>
    <td>
      <a href="/earthquakes/map/">
        https://earthquake.usgs.gov/earthquakes/map/
      </a>
    </td>
  </tr>

  <tr>
    <td>Recent Earthquakes in California/Nevada</td>
    <td>http://earthquake.usgs.gov/earthquakes/recenteqscanv/</td>
    <td>
      <a href="/earthquakes/map/">
        https://earthquake.usgs.gov/earthquakes/map/
      </a>
    </td>
  </tr>

  <tr>
    <td>Recent Earthquakes in the U.S.</td>
    <td>http://earthquake.usgs.gov/recenteqsus/</td>
    <td>
      <a href="/earthquakes/map/">
        https://earthquake.usgs.gov/earthquakes/map/
      </a>
    </td>
  </tr>

  <tr>
    <td>Recent Earthquakes: World-wide, U.S., Maps and Lists</td>
    <td>http://earthquake.usgs.gov/eqcenter/</td>
    <td>
      <a href="/earthquakes/map/">
        https://earthquake.usgs.gov/earthquakes/map/
      </a>
    </td>
  </tr>

  <tr>
    <td>Recent Earthquakes World-wide</td>
    <td>http://earthquake.usgs.gov/earthquake/recenteqsww/</td>
    <td>
      <a href="/earthquakes/map/">
        https://earthquake.usgs.gov/earthquakes/map/
      </a>
    </td>
  </tr>

  <tr>
    <td>Recent Earthquakes World-wide List</td>
    <td>http://earthquake.usgs.gov/recenteqsww/quakes/quakes_all.php</td>
    <td>
      <a href="/earthquakes/map/">
        https://earthquake.usgs.gov/earthquakes/map/
      </a>
    </td>
  </tr>

  <tr>
    <td>ShakeMaps (Northern CA, Southern CA, Alaska, Hawaii, Utah, Nevada)</td>
    <td>http://earthquake.usgs.gov/data/shakemap/list.php</td>
    <td>
      <a href="/data/shakemap/">
        https://earthquake.usgs.gov/data/shakemap/
      </a>
    </td>
  </tr>

</table>
</div>
