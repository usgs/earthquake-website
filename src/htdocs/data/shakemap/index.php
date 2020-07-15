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
          <a href="/earthquakes/map/#%7B%22feed%22%3A%221450200835246%22%2C%22search%22%3A%7B%22id%22%3A%221450200835246%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A37.101%2C%22minlatitude%22%3A30.857%2C%22maxlongitude%22%3A-111.951%2C%22minlongitude%22%3A-122.388%2C%22contributor%22%3A%22ci%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B30.857%2C-122.388%5D%2C%5B37.101%2C-111.951%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
          Southern California</a>
        </li>
        <li>
          <a href="/earthquakes/map/#%7B%22feed%22%3A%221450201167595%22%2C%22search%22%3A%7B%22id%22%3A%221450201167595%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A42.336%2C%22minlatitude%22%3A35.149%2C%22maxlongitude%22%3A-119.202%2C%22minlongitude%22%3A-125.662%2C%22contributor%22%3A%22nc%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B35.149%2C-125.662%5D%2C%5B42.336%2C-119.202%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
            Northern California</a>
          </li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221450201712346%22%2C%22search%22%3A%7B%22id%22%3A%221450201712346%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A49.591%2C%22minlatitude%22%3A44.881%2C%22maxlongitude%22%3A-115.203%2C%22minlongitude%22%3A-125.771%2C%22contributor%22%3A%22uw%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B44.881%2C-125.771%5D%2C%5B49.591%2C-115.203%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
          Pacific Northwest</a>
        </li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221450203409532%22%2C%22search%22%3A%7B%22id%22%3A%221450203409532%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A42.466%2C%22minlatitude%22%3A34.245%2C%22maxlongitude%22%3A-113.379%2C%22minlongitude%22%3A-120.74%2C%22contributor%22%3A%22nn%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B34.245%2C-120.74%5D%2C%5B42.466%2C-113.379%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
          Nevada</a>
        </li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221450203576783%22%2C%22search%22%3A%7B%22id%22%3A%221450203576783%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A42.254%2C%22minlatitude%22%3A36.485%2C%22maxlongitude%22%3A-108.589%2C%22minlongitude%22%3A-114.368%2C%22contributor%22%3A%22uu%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B36.182224980422525%2C-115.6201171875%5D%2C%5B42.52069952914966%2C-107.33642578124999%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
          Utah</a>
        </li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221450203767094%22%2C%22search%22%3A%7B%22id%22%3A%221450203767094%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A23.507%2C%22minlatitude%22%3A17.794%2C%22maxlongitude%22%3A-153.545%2C%22minlongitude%22%3A-161.323%2C%22contributor%22%3A%22hv%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B16.783505561927786%2C-161.575927734375%5D%2C%5B24.457150524185852%2C-153.292236328125%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
          Hawaii</a>
        </li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221450203880276%22%2C%22search%22%3A%7B%22id%22%3A%221450203880276%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A70.891%2C%22minlatitude%22%3A47.907%2C%22maxlongitude%22%3A-138.428%2C%22minlongitude%22%3A-188.174%2C%22contributor%22%3A%22ak%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B44.59046718130883%2C-200.0390625%5D%2C%5B74.84492867694821%2C-133.76953125%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
          Alaska</a>
        </li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221450204048684%22%2C%22search%22%3A%7B%22id%22%3A%221450204048684%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22maxlatitude%22%3A40.534%2C%22minlatitude%22%3A32.495%2C%22maxlongitude%22%3A-85.825%2C%22minlongitude%22%3A-93.252%2C%22contributor%22%3A%22nm%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B32.495%2C-93.252%5D%2C%5B40.534%2C-85.825%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
          New Madrid</a>
        </li>
        <li><a href="/earthquakes/map/#%7B%22feed%22%3A%221450204116962%22%2C%22search%22%3A%7B%22id%22%3A%221450204116962%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22contributor%22%3A%22us%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
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
