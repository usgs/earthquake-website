<?php

if (!isset($TEMPLATE)) {
  date_default_timezone_set('UTC');
  $min_year = 1900;
  $current_year = intval(date('Y'));
  $year = isset($_GET['year']) ? intval($_GET['year']) : $current_year;
  if ($year < $min_year || $year > $current_year) {
    http_response_code(400);
    // TODO Print error message
    exit();
  }
  $options = array();
  $options['el'] = '#earthquake-list';
  $options['year'] = $year;


  $TITLE = 'M2.5+ Deleted Earthquakes - ' . $year;
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.css"/>
    <link rel="stylesheet" href="significant.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.js"></script>
    <script>
      var options = ' . json_encode($options) . ';
    </script>
    <script src="deleted.js"></script>
  ';
  include 'template.inc.php';
}

?>

<p>
The USGS and networks contributing to the Advanced National Seismic System (ANSS)
take great effort to provide accurate and timely earthquake information.
Occasionally our systems produce erroneous information that is released to the
public via our web pages or Earthquake Notification System. These mistakes are
generally promptly identified by seismologists, removed from our web pages, and
“delete” e-mails are sent through ENS.  This page lists events that have been deleted.
</p>


<div class="significant-wrapper">
  <form action="deleted.php?year=<?php echo $year ?>">
    <label for="year" class="significant-year-label">
      Enter a year from <?php echo $min_year ?> to
          <?php echo $current_year ?>
    </label>

    <input type="number" class="significant-year" name="year" id="year"
        min="<?php echo $min_year ?>" max="<?php echo $current_year ?>"
        step="1" value="<?php echo $year ?>" autofocus/>
    <button type="submit" class="significant-year-button">Search</button>
  </form>

  <div id="earthquake-list">
    <noscript>
      This page requires javascript.
      Please enable javascript and refresh, or
        <a href="/earthquakes/search/">use the Earthquake Search</a>.
    </noscript>
  </div>
</div>
