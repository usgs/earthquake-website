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


  $TITLE = ' Significant Earthquakes - ' . $year;
  $NAVIGATION = true;
  $HEAD = '<link rel="stylesheet" href="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.css"/>' .
     '<link rel="stylesheet" href="significant.css"/>';
  $FOOT =
      '<script src="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.js"></script>' .
      '<script>' .
      'var options = ' . json_encode($options) . ';' .
      '</script>' .
      '<script src="significant.js"></script>';
  include 'template.inc.php';
}

?>
<div class="significant-wrapper">
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
  <p><a href="#sigdef">What makes an earthquake "significant"?</a></p>
  <div id="earthquake-list">
    <noscript>
      This page requires javascript.
      Please enable javascript and refresh, or
        <a href="/earthquakes/search/">use the Earthquake Search</a>.
    </noscript>
  </div>
</div>

<hr/>
<h4 id="sigdef">What makes an earthquake "significant"?</h4>

<p>
  Events in this list and shown in red on our real-time earthquake map and list are considered “significant events’, and they are determined by a combination of magnitude, number of Did You Feel It responses, and PAGER alert level.
</p>
<p>Here is the equation:<p>

<p>
  <strong>mag_significance</strong> = magnitude * 100 * (magnitude / 6.5);<br/>
  <strong>pager_significance</strong> = red is 2000 : orange is 1000 : yellow is 500 : green is 0;<br/>
  <strong>dyfi_significance</strong> = min(num_responses, 1000) * max_cdi / 10;
</p>

<p><strong>significance</strong> = max(mag_significance, pager_significance) + dyfi_significance;</p>

<p>Any event with a <strong>significance > 600</strong> is considered a significant event and appears on the list.</p>
