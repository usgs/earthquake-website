<?php
// Author: Lisa Wald
// Contact: David Wald, wald@usgs.gov
// Last modified: 11/13/2015
if (!isset($TEMPLATE)) {
  $TITLE = 'PAGER';
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
  The PAGER system provides fatality and economic loss impact estimates following significant earthquakes worldwide.
</p>

<div class="row right-to-left" >

  <div class="column two-of-five">
      <h3>PAGER, Past 7 Days</h3>

      <div class="recent-products" style="overflow:scroll; height:400px; background:#f4f4f4;">
        <noscript class="error alert">
          Javascript is used to load event data. If you can not enable Javascript,
          you can <a href="/earthquakes/feed/v1.0/summary/all_day.csv">view
          the raw data here</a>.
        </noscript>
      </div>

        <h3>View Map and List of PAGER Events</h3>
        <ul>
          <li>
            <a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=losspager&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22starttime%22:%22-1%20day%22,%22producttype%22:%22losspager%22,%22orderby%22:%22time%22%7D%7D">Past 24 Hours</a>
          </li>
          <li>
            <a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=losspager&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22starttime%22:%22-1%20week%22,%22minfelt%22:5,%22producttype%22:%22losspager%22,%22orderby%22:%22time%22%7D%7D">Past 7 Days</a>
          </li>
          <li>
            <a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=losspager&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22minfelt%22:5,%22producttype%22:%22losspager%22,%22orderby%22:%22time%22%7D%7D">Past 30 Days
          </a>
          </li>
      </ul>

  </div>

  <div class="column three-of-five">

    <ul class="no-style linklist">

      <li>
        <a href="/earthquakes/search/#%7B%22feed%22%3A%221437493916387%22%2C%22search%22%3A%7B%22id%22%3A%221437493916387%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22producttype%22%3A%22losspager%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22losspager%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
        <h4>Search PAGER Archives</h4>
        <img src="/data/shakemap/images/search-2x.gif" alt="" width="75"/></a>
        <p>Search for events that include PAGER. The Search form link from here is already configured to return only events with PAGER products. You enter additional search parameters. The default time window is the past 30 days.</p>
      </li>

      <li>
        <a href="onepager.php">
        <h4>onePAGER</h4>
        <img src="images/onepager-2x.gif" alt="" width="75"/></a>
        <p>Graphical guide to the PAGER information.</p>
      </li>

      <li>
        <a href="references.php">
        <h4>Data, Products, and References</h4>
        <img src="images/products-2x.gif" alt="" width="75"/></a>
        <p>All things PAGER.</p>
      </li>

      <li>
        <a href="faq.php">
          <h4>FAQ</h4>
          <img src="/data/dyfi/images/Q&A.gif" alt="" width="75"/>
        </a>
        <p>Questions and answers about PAGER.</p>
      </li>
      <li>
        <a href="background.php">
          <h4>Scientific Background</h4>
          <img src="/data/shakemap/images/sci-2x.jpg" alt="" width="75"/>
        </a>
        <p>
          How was the PAGER system created and what is the process for determining PAGER alert levels?
        </p>
      </li>

    </ul>
  </div>
</div>
