<?php

if (!isset($TEMPLATE)) {
  date_default_timezone_set('UTC');
  $min_year = 2002;
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


  $TITLE = ' Earthquake Summary Posters - ' . $year;
  $NAVIGATION = true;
  $HEAD = '<link rel="stylesheet" href="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.css"/>' .
     '<link rel="stylesheet" href="posters.css"/>';
  $FOOT =
      '<script src="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.js"></script>' .
      '<script>' .
      'var options = ' . json_encode($options) . ';' .
      '</script>' .
      '<script src="posters.js"></script>';
  include 'template.inc.php';
}
?>

<figure class='right'>
  <img src="images/poster.jpg" alt="small example of poster"/>
  <figcaption>
    Small example of an earthquake summary poster.
  </figcaption>
</figure>
<p>
  Each poster in the Earthquake Summary Poster series contains multiple panels showing the <strong>epicentral area, plate tectonic environment, earthquake history, and generalized seismic hazard</strong> of the region. These posters are approximately 36x24 inches (width x height).
</p>
<p>
  The posters should be considered preliminary. They are neither completely definitive (the earthquake data are those available in the first few days after the event) nor totally accurate (the map base may contain obsolete information, for example).
</p>
<p>
  <strong>To access the posters, select an event and scroll down to the Downloads.</strong>
</p>
<br style="clear:both;"/>
<hr/>

<div class="posters-wrapper">
  <form action="posters.php?year=<?php echo $year ?>">
    <label for="year" class="posters-year-label">
      Enter a year from <?php echo $min_year ?> to
          <?php echo $current_year ?>
    </label>

    <input type="number" class="posters-year" name="year" id="year"
        min="<?php echo $min_year ?>" max="<?php echo $current_year ?>"
        step="1" value="<?php echo $year ?>" autofocus/>
    <button type="submit" class="posters-year-button">Search</button>
  </form>

  <div id="earthquake-list">
    <noscript>
      This page requires javascript.
      Please enable javascript and refresh, or
        <a href="/earthquakes/search/">use the Earthquake Search</a>.
    </noscript>
  </div>
</div>
