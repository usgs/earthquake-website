<?php
// Author: Lisa Wald
// Contact: David Wald, wald@usgs.gov

if (!isset($TEMPLATE)) {
  $TITLE = 'Did You Feel It?';
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
  Did You Feel It? (DYFI) collects information from people who felt an
  earthquake and creates maps that show what people experienced and the extent of damage.
</p>

<div class="row right-to-left" >

  <div class="column two-of-five">
    <h2>Report it Here - Tell Us!</h2>

    <p>Find the earthquake you felt, and then tell us about it. Not in the list?
      <br/>
        <a href="/earthquakes/eventpage/tellus">
          <button class="green">
            Report an Unknown Event
          </button>
        </a>

    </p>

        <h3>DYFI, Past 24 Hours</h3>

      <div class="recent-products" style="overflow:scroll; height:400px; background:#f4f4f4;">

        <noscript class="error alert">
          Javascript is used to load event data. If you can not enable Javascript,
          you can <a href="/earthquakes/feed/v1.0/summary/all_day.csv">view
          the raw data here</a>.
        </noscript>
      </div>

      <h3>View Map and List of Felt Events</h3>
      <ul>
        <li>
          <a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=dyfi&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22starttime%22:%22-1%20day%22,%22producttype%22:%22dyfi%22,%22orderby%22:%22time%22%7D%7D">Past 24 Hours</a>
        </li>
        <li>
          <a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=dyfi&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22starttime%22:%22-1%20week%22,%22minfelt%22:5,%22producttype%22:%22dyfi%22,%22orderby%22:%22time%22%7D%7D">Past 7 Days</a>
        </li>
        <li>
          <a href="/earthquakes/map/?extent=-89.80838,-128.67188&extent=89.80838,489.375&range=search&format=dyfi&listOnlyShown=true&baseLayer=terrain&timeZone=utc&search=%7B%22name%22:%22Search%20Results%22,%22params%22:%7B%22minfelt%22:5,%22producttype%22:%22dyfi%22,%22orderby%22:%22time%22%7D%7D">Past 30 Days
        </a>
        </li>
    </ul>
  </div>

  <div class="column three-of-five">

    <h2>Search and View Past Earthquakes</h2>
    <ul class="no-style linklist">
      <li>
        <a href="/earthquakes/search/#%7B%22feed%22%3A%221437493916387%22%2C%22search%22%3A%7B%22id%22%3A%221437493916387%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22producttype%22%3A%22dyfi%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22dyfi%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D>
          <h4>Search DYFI Archives</h4>
          <img src="/data/shakemap/images/search-2x.gif" alt="" width="75"/>
        </a>
        <p>This search is configured to return only events with DYFI products. You may enter additional search parameters for magnitude threshold, time window, and geographic area.</p>
      </li>
      <li>
        <a href="summary-maps.php">
          <h4>Summary Maps</h4>
          <img src="images/dyfi-summary-us-2x.gif" alt="" width="75"/>
        </a>
        <p>Cumulative and yearly response maps for earthquakes in the
        U.S. and around the world.
        </p>
      </li>
      <li>
        <a href="faq.php">
          <h4>FAQ</h4>
          <img src="images/Q&A.gif" alt="" width="75"/>
        </a>
        <p>Questions and answers about Did You Feel It?</p>
      </li>
      <li>
        <a href="background.php">
          <h4>Scientific Background</h4>
          <img src="/data/shakemap/images/sci-2x.jpg" alt="" width="75"/>
        </a>
        <p>
          Explore our collection of citizen science data, report your experience of an earthquake, or learn more about this citizen science project - how it's done, how you can contribute, and what we do with your data.
        </p>
      </li>
    </ul>
  </div>
</div>
