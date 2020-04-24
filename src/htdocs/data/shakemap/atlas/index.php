<?php
// Author: Lisa Wald
// Contact: David Wald, wald@usgs.gov

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


  $TITLE = 'The ShakeMap Atlas';
  $NAVIGATION = true;
  $HEAD = '<link rel="stylesheet" href="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.css"/>' .
  '<link rel="stylesheet" href="index.css"/>';

  $FOOT =
      '<script src="/lib/earthquake-list-widget-1.0.1/earthquake-list-widget.js"></script>' .
      '<script>' .
      'var options = ' . json_encode($options) . ';' .
      '</script>' .
      '<script src="index.js"></script>';
  include 'template.inc.php';
}
?>

<p>
  The Atlas of ShakeMaps (~15,200 earthquake, 1900-2019) provides a consistent and quantitative description of the distribution of shaking intensity for calibrating earthquake loss estimation methodologies, like those used in the <a href="/data/pager/">PAGER</a> system. Version 4 of the Atlas includes a vastly expanded compilation of ShakeMaps for consequential and widely felt earthquakes using updated <a href="https://github.com/usgs/shakemap">ShakeMap (Version 4)</a>  software. For each event, we have attempted to gather available macroseismic, recorded ground motions and finite fault inputs. Please <a href="mailto:pager@usgs.gov">let us know</a> if you know of additional datasets that could be added to specific events or sets of events.
</p>

<div class="row right-to-left" >

  <div class="column one-of-two">
    <h3>ShakeMap Atlas, By Year</h3>

    <form action="index.php?year=<?php echo $year ?>" class="browse-form">
      <label for="year" class="browse-year-label">
        Enter a year from <?php echo $min_year ?> to
        <?php echo $current_year ?>:
      </label>

      <input type="number" class="browse-year" name="year" id="year"
          min="<?php echo $min_year ?>" max="<?php echo $current_year ?>"
          step="1" value="<?php echo $year ?>" autofocus/>
      <button type="submit" class="browse-year-button">Apply</button>
    </form>

    <div class="recent-products" style="overflow:scroll; height:800px; background:#f4f4f4;">
      <div id="earthquake-list">
        <noscript>
          This page requires javascript.
          Please enable javascript and refresh, or
          <a href="/earthquakes/search/">use the Earthquake Search</a>.
        </noscript>
      </div>
    </div>

    <p><a href="http://earthquake.usgs.gov/earthquakes/map/#%7B%22feed%22%3A%221581370083650%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22restrictListToMap%22%3A%5B%22restrictListToMap%22%5D%2C%22timezone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%5B%22plates%22%5D%2C%22viewModes%22%3A%5B%22list%22%2C%22map%22%5D%2C%22listFormat%22%3A%22shakemap%22%2C%22autoUpdate%22%3Afalse%2C%22search%22%3A%7B%22id%22%3A%221581370083650%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%222000-01-01%2000%3A00%3A00%22%2C%22endtime%22%3A%222006-01-01%2000%3A00%3A00%22%2C%22minmagnitude%22%3A2.5%2C%22contributor%22%3A%22atlas%22%2C%22orderby%22%3A%22time%22%2C%22producttype%22%3A%22shakemap%22%7D%7D%7D">View Atlas ShakeMaps from 2000-2005</a></p>
  </div>

  <div class="column one-of-two">
    <h2>Accessing the ShakeMap Atlas</h2>
    <p>
      Select events or collections of events ShakeMap Atlas can be accessed via the <a href="/earthquakes/search/">USGS Earthquake Catalog Search</a> or with queries from the search tools we provide described below.
    </p>

    <h3>1. Earthquake Catalog Search</h3>
    <p>
      The <a href="/earthquakes/search/"></a>Search Earthquake Catalog</a> interface can be used to find Atlas events. <strong>Click on Advanced Options and Contributor to choose "ShakeMap Atlas" in the list</strong>. A sample search query result is below the list on the right. To simply modify the query, click on the "gear" icon in the upper right banner and then click on the "Search Earthquake Catalog" button.
    </p>

    <p>
      The full ShakeMap Atlas is contains too many earthquakes to load in its entirety via the <a href="/earthquakes/search/"></a>Search Earthquake Catalog</a> interface. To obtain Atlas data using the catalog search tool, it is necessary to search for a smaller subset of events as search results displayed via the Search interface is limited to 2,000 events.
    </p>
    <p>
      It is also simple to <strong>download a csv file</strong> of all events in the Atlas using the same catalog search tool. To do so, select “Output Options” -> “Format” -> “CSV” on the search page.
    </p>

    <h3>2. Libcomcat and Getproducts</h3>
    <p>
      <a href="https://github.com/usgs/libcomcat">Libcomcat</a> is a Python library that allows command line tools easily access the ShakeMap Atlas, or specified subsets, and to then download any of the associated ShakeMap products and files for each event. One of the standard tools with libcomcat is getproducts, which greatly facilitates the retrieval of select earthquakes and associated products. Even more complex queries can be facilitated with other libcomcat tools.
    </p>

    <p>For example, <a href="http://github.com/usgs/libcomcat/blob/master/notebooks/Search.ipynb">view a sample ComCat search using an iPython Notebook.</a></p>

  </div>

</div>
