<?php
// Author: Lisa Wald
// Contact: David Wald, wald@usgs.gov

if (!isset($TEMPLATE)) {
  $TITLE = 'ShakeMap';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<p>
  ShakeMap is a product of the USGS Earthquake Hazards Program in conjunction with the regional seismic networks. ShakeMaps provide near-real-time maps of ground motion and shaking intensity following significant earthquakes. These maps are used by federal, state, and local organizations, both public and private, for post-earthquake response and recovery, public and scientific information, as well as for preparedness exercises and disaster planning.
</p>

<div class="row right-to-left" >

  <div class="column two-of-five">
      <h3>ShakeMaps, Past 7 Days</h3>

      <div class="recent-products" style="overflow:scroll; height:400px; background:#f4f4f4;">

        <noscript class="error alert">
          Javascript is used to load event data. If you can not enable Javascript,
          you can <a href="/earthquakes/feed/v1.0/summary/all_day.csv">view
          the raw data here</a>.
        </noscript>
      </div>

      <h4><a href="http://usgs.github.io/shakemap/manual3_5/products.html#real-time-product-distribution-automatic-access-and-feeds">Real-time Feeds</a></h4>

      <h4>By Network (Past 30 Days)</h4>
      <img src="images/ANSS-2x.gif" alt="" width="150"/>
      <ul>
        <li>
          <a href="/earthquakes/map/?extent=24.04646,-126.82617&extent=42.9725,-107.51221&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:37.101,%22minlatitude%22:30.857,%22maxlongitude%22:-111.951,%22minlongitude%22:-122.388,%22contributor%22:%22ci%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          Southern California</a>
        </li>
        <li>
          <a href="/earthquakes/map/?extent=34.23451,-127.26563&extent=43.14909,-117.60864&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:42.336,%22minlatitude%22:35.149,%22maxlongitude%22:-119.202,%22minlongitude%22:-125.662,%22contributor%22:%22nc%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
            Northern California</a>
          </li>
        <li><a href="/earthquakes/map/?extent=38.95941,-130.14404&extent=54.49557,-110.83008&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:49.591,%22minlatitude%22:44.881,%22maxlongitude%22:-115.203,%22minlongitude%22:-125.771,%22contributor%22:%22uw%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          Pacific Northwest</a>
        </li>
        <li><a href="/earthquakes/map/?extent=33.85217,-121.89331&extent=42.81152,-112.23633&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:42.466,%22minlatitude%22:34.245,%22maxlongitude%22:-113.379,%22minlongitude%22:-120.74,%22contributor%22:%22nn%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          Nevada</a>
        </li>
        <li><a href="/earthquakes/map/?extent=34.8679,-116.30127&extent=43.70759,-106.64429&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:42.254,%22minlatitude%22:36.485,%22maxlongitude%22:-108.589,%22minlongitude%22:-114.368,%22contributor%22:%22uu%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          Utah</a>
        </li>
        <li><a href="/earthquakes/map/?extent=15.22059,-162.25708&extent=25.91853,-152.6001&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:23.507,%22minlatitude%22:17.794,%22maxlongitude%22:-153.545,%22minlongitude%22:-161.323,%22contributor%22:%22hv%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          Hawaii</a>
        </li>
        <li><a href="/earthquakes/map/?extent=34.59704,-205.48828&extent=77.87881,-128.23242&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:70.891,%22minlatitude%22:47.907,%22maxlongitude%22:-138.428,%22minlongitude%22:-188.174,%22contributor%22:%22ak%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          Alaska</a>
        </li>
        <li><a href="/earthquakes/map/?extent=31.88689,-94.36157&extent=41.07107,-84.70459&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22maxlatitude%22:40.534,%22minlatitude%22:32.495,%22maxlongitude%22:-85.825,%22minlongitude%22:-93.252,%22contributor%22:%22nm%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          New Madrid</a>
        </li>
        <li><a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=shakemap&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22contributor%22:%22us%22,%22producttype%22:%22shakemap%22,%22orderby%22:%22time%22%7D%7D">
          Global/NEIC</a>
        </li>
      </ul>

  </div>

  <div class="column three-of-five">

    <ul class="no-style linklist">

      <li>
        <a href="/earthquakes/search/#%7B%22feed%22%3A%221450204437509%22%2C%22search%22%3A%7B%22id%22%3A%221450204437509%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
        <h4>Search ShakeMap Archives</h4>
        <img src="images/search-2x.gif" alt="" width="75"/></a>
        <p>Search for events with ShakeMaps. The Search form link from here is already configured to return only events with ShakeMap products. You enter additional search parameters. The default time window is the past 30 days.</p>
      </li>

      <li>
        <a href="atlas/">
        <h4>Atlas</h4>
        <img src="images/atlas-2x.jpg" alt="" width="75"/></a>
        <p>The ShakeMap Atlas (~14,100 events, 1900-2019) provides a consistent and quantitative description of the distribution of shaking intensity for calibrating global earthquake loss estimation methodologies used in PAGER.</p>
      </li>

      <li>
        <a href="/scenarios/">
        <h4>Scenarios</h4>
        <img src="images/scenario-2x.jpg" alt="" width="75"/></a>
        <p>Earthquake Scenarios describe the expected ground motions and effects of specific hypothetical large earthquakes.</p>
      </li>

      <li>
        <a href="http://usgs.github.io/shakemap">
        <h4>ShakeMap Manual</h4>
        <img src="images/manual-2x.jpg" alt="" width="75"/></a>
        <p>USGS Publication - technical manual, user's guide, and software guide.</p>
      </li>

      <li>
        <a href="https://www.usgs.gov/software/shakecast">
          <h4>ShakeCast</h4>
          <img src="images/shakecast-2x.jpg" alt="" width="75"/></a>
        <p>
          An application for automating ShakeMap delivery to critical users and for facilitating notification of shaking levels at user-selected facilities.
        </p>
      </li>
    </ul>
  </div>
</div>
