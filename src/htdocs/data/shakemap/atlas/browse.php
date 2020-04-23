<?php

if (!isset($TEMPLATE)) {
  date_default_timezone_set('UTC');
  $min_year = 1900;
  // $current_year = intval(date('Y'));
  $current_year = 2019; // last year of atlas currently 2019
  $year = isset($_GET['year']) ? intval($_GET['year']) : $current_year;
  if ($year < $min_year || $year > $current_year) {
    http_response_code(400);
    // TODO Print error message
    exit();
  }
  $options = array();
  $options['el'] = '#earthquake-list';
  $options['year'] = $year;


  $TITLE = 'ShakeMap Atlas - ' . $year;
  $NAVIGATION = true;
  $HEAD = '<link rel="stylesheet" href="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.css"/>' .
     '<link rel="stylesheet" href="browse.css"/>';
  $FOOT =
      '<script src="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.js"></script>' .
      '<script>' .
      'var options = ' . json_encode($options) . ';' .
      '</script>' .
      '<script src="browse.js"></script>';
  include 'template.inc.php';
}

?>
<div class="browse-wrapper">
  <form action="browse.php?year=<?php echo $year ?>">
    <label for="year" class="browse-year-label">
      Enter a year from <?php echo $min_year ?> to
          <?php echo $current_year ?>
    </label>

    <input type="number" class="browse-year" name="year" id="year"
        min="<?php echo $min_year ?>" max="<?php echo $current_year ?>"
        step="1" value="<?php echo $year ?>" autofocus/>
    <button type="submit" class="browse-year-button">Search</button>
  </form>
  <div id="earthquake-list">
    <noscript>
      This page requires javascript.
      Please enable javascript and refresh, or
        <a href="/earthquakes/search/">use the Earthquake Search</a>.
    </noscript>
  </div>
</div>
