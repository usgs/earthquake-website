<?php

if (!isset($TEMPLATE)) {
  date_default_timezone_set('UTC');
  $min_year = 2010;
  $current_year = intval(date('Y'));
  $year = isset($_GET['year']) ? intval($_GET['year']) : $current_year;
  if ($year < $min_year || $year > $current_year) {
    http_response_code(400);
    // TODO Print error message
    exit();
  }
  $year = 2010;
  $options = array();
  $options['el'] = '#earthquake-list';
  $options['year'] = $year;


  $TITLE = ' Errata for Latest Earthquakes - ' . $year;
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget-1.0.0/earthquake-list-widget.css"/>
    <link rel="stylesheet" href="significant.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget-1.0.0/earthquake-list-widget.js"></script>
    <script>
      var options = ' . json_encode($options) . ';
    </script>
    <script src="errata.js"></script>
  ';
  include 'template.inc.php';
}

?>

<p>
Beginning in 2010, we have posted information here regarding errors in the
Real-time Earthquake system that led to erroneous information getting posted
on the website or distributed.
</p>

<p>
The USGS and networks contributing to the Advance National Seismic System
(ANSS) take great effort to provide accurate and timely earthquake information.Occasionally our systems produce erroneous information that is released to the
public via our web pages or Earthquake Notification System. These mistakes are
generally promptly identified by seismologists, removed from our web pages, and
“delete” e-mails are sent through ENS. In the interest of rapidly providing
earthquake information to the public, most of the information about earthquakes
that occur in the USA is automatically posted to the web and ENS if it meets
quality standards. There is a trade-off between the speed of our earthquake notifications and number of false alarms in the same way that any kind of
"breaking news" story may have substantial changes or corrections as more information is received. The faster we release earthquake locations and
magnitudes, the more likely it is that the information may be erroneous.
Experience demonstrates that imposing more restrictive quality standards
prevents the release of legitimate earthquake information. Here we document
serious errors that have resulted in the distribution of flawed information to response organizations and the public. Hopefully this discussion will provide
our users with a better understanding of our system.
</p>


<div class="significant-wrapper">
<!--
  <form action="significant.php?year=<?php echo $year ?>">
    <label for="year" class="significant-year-label">
      Enter a year from <?php echo $min_year ?> to
          <?php echo $current_year ?>
    </label>

    <input type="number" class="significant-year" name="year" id="year"
        min="<?php echo $min_year ?>" max="<?php echo $current_year ?>"
        step="1" value="<?php echo $year ?>" autofocus/>
    <button type="submit" class="significant-year-button">Search</button>
  </form>
-->

  <div id="earthquake-list">
    <noscript>
      This page requires javascript.
      Please enable javascript and refresh, or
        <a href="/earthquakes/search/">use the Earthquake Search</a>.
    </noscript>
  </div>
</div>
