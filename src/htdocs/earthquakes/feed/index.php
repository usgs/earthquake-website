<?php
// Author: Lisa Wald
// Contact: Web Development Team
  if (!isset($TEMPLATE)) {
  $TITLE = 'Real-time Notifications, Feeds, and Web Services';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
// Use Earthquake level nav file
  include_once 'functions.inc.php';
  ob_start();
  include '../_navigation.inc.php';
  $NAVIGATION = ob_get_clean();

  include 'template.inc.php';
  }
?>

<h2>Real-time Notifications</h2>
<div class="row">
  <section class="three-of-three column">
    <p class="alert info">
      Know about earthquakes just after they happen. The ENS and TED services each offer something different, depending on your interests.
    </p>
  </section>
</div>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="/ens/">
          <h4>Earthquake Notification Service (ENS)</h4>
          <img src="images/ens-x2.png" class='feeds-list-image'
              alt="Earthquake Notification Service icon"  width="75"/>
        </a>
        <p>
          The Earthquake Notification Service (ENS) is a free service that gruntsends you automated notifications to your email or cell phone when earthquakes happen.
        </p>
      </li>
    </ul>
  </section>

    <section class="one-of-three column">
      <ul class="no-style linklist">
      <li>
        <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/science/earthquake-information-social-media-and-rss-feeds">
          <h4>Earthquake Information Social Media and RSS Feeds</h4>
          <img src="images/atom.png" alt="RSS icon"  width="75"/>
        </a>
        <p>
          A list and description of all the earthquake-related social media accounts and RSS feeds.
        </p>
      </li>
    </ul>
  </section>
</div>

<hr/>
<h2>Real-time Feeds <img class="anss-logo" src="/earthquakes/images/ANSS_logo.gif" alt="logo"/></h2>
<div class="row">
  <section class="three-of-three column">
      <p class="alert info">
        To subscribe to a real-time feed, select a format (ATOM is the best choice for most), then select which feed you want from the list on that page, and copy the URL into your feed reader of choice.
      </p>
    </section>
</div>

<div class="row">
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="v1.0/atom.php">
          <h4>ATOM Syndication</h4>
          <img src="images/atom.png" alt="ATOM feed icon" width="75"/>
        </a>
        <p>
          A basic syndication format supported by a variety of feed readers.
          This is a good option for casually subscribing to earthquake
          information.
        </p>
      </li>
    </ul>
  </section>

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="v1.0/kml.php">
          <h4>Google Earth&trade; KML</h4>
          <img src="images/kml.png" alt="Google Earth icon" width="75"/>
        </a>
        <p>
          This feed format is suitable for loading into applications that
          understand Keyhole Markup Language (KML) such as Google
          Earth&trade;
        </p>
      </li>
    </ul>
  </section>

      <!--
        Icon Source: www.iconspedia.com
        Author: Tempest, http://tempest.deviantart.com/
        License: CC Attribution Non-Commercial No Derivatives
      -->

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="v1.0/csv.php">
          <h4>Spreadsheet Format</h4>
          <img src="images/csv.png" alt="Spreadsheet icon"  width="75"/>
        </a>
        <p>
          A simple text format suitable for loading data into spreadsheet
          applications like Microsoft Excel&trade;. This is a good option for
          manual scientific analysis.
        </p>
      </li>
    </ul>
  </section>
</div>

<div class="row">

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="v1.0/quakeml.php">
          <h4>QuakeML</h4>
          <img src="images/quakeml.png" alt="QuakeML icon"  width="75"/>
        </a>
        <p>
          A flexible, extensible and modular XML representation of
          seismological data which is intended to cover a broad range of
          fields of application in modern seismology.
        </p>
      </li>
    </ul>
  </section>

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="v1.0/geojson.php">
          <h4>GeoJSON Summary Feed</h4>
          <img src="images/geojson.jpg" alt="GeoJSON icon" width="75"/>
        </a>
        <p>
          A format for encoding a variety of geographic data structures. This feed contains a subset of the event data for the event lists. If you prefer the full suite of event data for a single event, use the <a href="v1.0/geojson_detail.php">GeoJSON Detail Feed</a>.
        </p>
      </li>
    </ul>
  </section>

</div>

<hr/>
<h2>For Developers</h2>

    <ul>
      <li>
        <a href="/fdsnws/event/1/">API Documentation - Earthquake Catalog</a>
      </li>
      <li>
      <a href="v1.0/geojson.php">GeoJSON Summary Feed</a>
      </li>
      <li>
      <a href="v1.0/geojson_detail.php">GeoJSON Detail Feed</a>
      </li>
      <li>
        <a href="v1.0/changelog.php">Change Log</a>
      </li>
      <li>
        <a href="policy.php">Feed Lifecycle Policy</a>
      </li>
      <li>
        <a href="https://github.com/usgs/devcorner">Developers Corner</a> - Earthquake catalog bulk access via scripts and programs, tools for obtaining specific products from earthquake catalog
      </li>
      <li>
        <a href="/ws/">Web Services</a>
      </li>
      <li>
        <a href="https://geohazards.usgs.gov/mailman/listinfo/realtime-feeds">
            Mailing List - Announcements</a>
      </li>
      <li>
        <a href="https://geohazards.usgs.gov/mailman/listinfo/realtime-feed-users">
            Mailing List - Forum/Questions</a>
      </li>
    </ul>
