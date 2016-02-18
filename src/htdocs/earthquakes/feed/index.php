<?php
// Author: Lisa Wald
// Contact: Web Development Team,
// Last modified: 02/17/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Feeds and Notifications';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<div class="row">
  <section class="one-of-two column">
    <h2>Real-time Feeds</h2>

    <ul class="no-style linklist">
      <li>
        <a href="v1.0/atom.php">
          <h3>ATOM Syndication</h3>
          <img src="images/atom.png" alt="ATOM feed icon" width="75"/>
        </a>
        <p>
          A basic syndication format supported by a variety of feed readers.
          This is a good option for casually subscribing to earthquake
          information.
        </p>
      </li>

      <li>
        <a href="v1.0/kml.php">
          <h3>Google Earth&trade; KML</h3>
          <img src="images/kml.png" alt="Google Earth icon" width="75"/>
        </a>
        <p>
          This feed format is suitable for loading into applications that
          understand Keyhole Markup Language (KML) such as Google
          Earth&trade;
        </p>
      </li>

      <!--
        Icon Source: www.iconspedia.com
        Author: Tempest, http://tempest.deviantart.com/
        License: CC Attribution Non-Commercial No Derivatives
      -->

      <li>
        <a href="v1.0/csv.php">
          <h3>Spreadsheet Format</h3>
          <img src="images/csv.png" alt="Spreadsheet icon"  width="75"/>
        </a>
        <p>
          A simple text format suitable for loading data into spreadsheet
          applications like Microsoft Excel&trade;. This is a good option for
          manual scientific analysis.
        </p>
      </li>

      <li>
        <a href="v1.0/quakeml.php">
          <h3>QuakeML</h3>
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

  <section class="one-of-two column">
    <h2>Real-time Notifications</h2>

    <ul class="no-style linklist">
      <li>
        <a href="https://sslearthquake.usgs.gov/ens/">
          <h3>Earthquake Notification Service</h3>
          <img src="images/ens-x2.png" class='feeds-list-image'
              alt="Earthquake Notification Service icon"  width="75"/>
        </a>
        <p>
          The Earthquake Notification Service (ENS) is a free service that
          sends you automated notifications to your email or cell phone when
          earthquakes happen.
        </p>
      </li>

      <li>
        <a href="/earthquakes/ted/">
          <h3>Tweet Earthquake Dispatch</h3>
          <img src="images/ted.png" alt="Tweet Earthquake Dispatch icon"  width="75"/>
        </a>
        <p>
          Tweet Earthquake Dispatch (TED) offers two Twitter accounts. On
          average, each account will produce about one tweet per day.
        </p>
      </li>
    </ul>

    <h2>For Developers</h2>

    <ul>
      <li>
        <a href="/fdsnws/event/1/">API Documentation - EQ Catalog</a>
      </li>
      <li>
        <a href="v1.0/geojson.php">GeoJSON Summary Feed</a>
      </li>
      <li>
        <a href="v1.0/geojson_detail.php">
            GeoJSON Detail Feed</a>
      </li>
      <li>
        <a href="v1.0/changelog.php">Change Log</a>
      </li>
      <li>
        <a href="policy.php">
            Feed Lifecycle Policy</a>
      </li>
      <li>
        <a href="https://github.com/usgs/devcorner">Developers Corner</a> - tools for obtaining specific products from earthquake catalog
      </li>
      <li>
        <a href="v1.0/glossary.php">
            Glossary - Earthquake Catalog Data Terms</a>
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
  </section>
</div>
