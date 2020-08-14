<?php
// Author: Lisa Wald
// Contact: Kate Allstadt
  if (!isset($TEMPLATE)) {
    $TITLE = 'Ground Failure';
    $NAVIGATION = true;
    $HEAD = '
      <link rel="stylesheet" href="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.css"/>
      <link rel="stylesheet" href="index.css"/>
    ';
    $FOOT = '
      <script src="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.js"></script>
      <script src="index.js"></script>
    ';
    include 'template.inc.php';
  }
?>
<p>
  Earthquake-triggered landslides and liquefaction, collectively referred to as ground failure, can be a significant contributor to earthquake losses. The USGS Ground Failure (GF) earthquake product provides near-real-time spatial estimates of earthquake-triggered landslide and liquefaction hazard following significant earthquakes worldwide.
</p>

<div class="row right-to-left">

  <div class="column two-of-five">
      <h3>Ground Failure, Past 7 Days</h3>

      <div class="recent-products" style="overflow:scroll; height:400px; background:#f4f4f4;">

        <noscript class="error alert">
          Javascript is used to load event data. If you can not enable Javascript,
          you can <a href="/earthquakes/feed/v1.0/summary/all_day.csv">view
          the raw data here</a>.
        </noscript>
      </div>

      <h4>View Map and List of Ground Failure Events</h4>
      <ul>
        <li><a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=losspager&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22starttime%22:%22-1%20day%22,%22producttype%22:%22losspager%22,%22orderby%22:%22time%22%7D%7D">Past 24 Hours</a></li>
        <li><a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=losspager&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22starttime%22:%22-7%20days%22,%22producttype%22:%22losspager%22,%22orderby%22:%22time%22%7D%7D">Past 7 Days</a></li>
        <li><a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=losspager&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22starttime%22:%22-30%20days%22,%22producttype%22:%22losspager%22,%22orderby%22:%22time%22%7D%7D">Past 30 Days</a></li>
      </ul>

    </div>

    <div class="column three-of-five">

      <ul class="no-style linklist">

        <li>
          <a href="/earthquakes/search/#%7B%22feed%22%3A%221530216152430%22%2C%22sort%22%3A%22newest%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22viewModes%22%3A%5B%22list%22%2C%22map%22%5D%2C%22autoUpdate%22%3Afalse%2C%22search%22%3A%7B%22id%22%3A%221530216152430%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%222018-05-29%2000%3A00%3A00%22%2C%22endtime%22%3A%222018-06-28%2023%3A59%3A59%22%2C%22minmagnitude%22%3A2.5%2C%22orderby%22%3A%22time%22%2C%22producttype%22%3A%22ground-failure%22%7D%7D%7D">
          <h4>Search Ground Failure Archives</h4>
          <img src="images/search-2x.gif" alt="" width="75"/></a>
          <p>
            Search for events that include the Ground Failure (GF) earthquake product. The Search form link from here is already configured to return only events with GF products. You enter additional search parameters. The default time window is the past 30 days.
          </p>
        </li>

        <li>
          <a href="background.php">
          <h4>Ground Failure Scientific Background</h4>
          <img src="images/niigata_apts.jpg" alt="" width="75"/></a>
          <p>
            How to use the Ground Failure product, how it works, and how the alert levels are determined.
          </p>

        </li>
      </ul>

    </div>
  </div>
