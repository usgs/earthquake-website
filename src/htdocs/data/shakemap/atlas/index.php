<?php
// Author: Lisa Wald
// Contact: David Wald, wald@usgs.gov

if (!isset($TEMPLATE)) {
  $TITLE = 'The ShakeMap Atlas';
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
  The Atlas of ShakeMaps (~15,200 earthquake, 1900-2019) provides a consistent and quantitative description of the distribution of shaking intensity for calibrating earthquake loss estimation methodologies, like those used in the <a href="/data/pager/">PAGER</a> system. Version 4 of the Atlas includes a vastly expanded compilation of ShakeMaps for consequential and widely felt earthquakes using updated <a href="https://github.com/usgs/shakemap">ShakeMap (Version 4)</a>  software. For each event, we have attempted to gather available macroseismic, recorded ground motions and finite fault inputs. Please <a href="mailto:pager@usgs.gov">let us know</a> if you know of additional datasets that could be added to specific events or sets of events.
</p>

<h2>Accessing the ShakeMap Atlas</h2>
<p>
  Select events or collections of events ShakeMap Atlas can be accessed via the <a href="/earthquakes/search/">USGS Earthquake Catalog Search</a> or with queries from the search tools we provide.
</p>

<h3>Sample Atlas Query – Using the USGS Earthquake map interface</h3>
<p>
  The full ShakeMap Atlas is contains too many earthquakes to load in its entirety via the <a href="/earthquakes/map/"></a>USGS Latest Earthquakes</a> interface. To access the Atlas using the catalog search tool, it is necessary to search for a smaller subset of events as search results displayed via the map interface is limited to 2,000 events.
</p>

<p><a href="http://earthquake.usgs.gov/earthquakes/map/#%7B%22feed%22%3A%221581370083650%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22restrictListToMap%22%3A%5B%22restrictListToMap%22%5D%2C%22timezone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%5B%22plates%22%5D%2C%22viewModes%22%3A%5B%22list%22%2C%22map%22%5D%2C%22listFormat%22%3A%22shakemap%22%2C%22autoUpdate%22%3Afalse%2C%22search%22%3A%7B%22id%22%3A%221581370083650%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%222000-01-01%2000%3A00%3A00%22%2C%22endtime%22%3A%222006-01-01%2000%3A00%3A00%22%2C%22minmagnitude%22%3A2.5%2C%22contributor%22%3A%22atlas%22%2C%22orderby%22%3A%22time%22%2C%22producttype%22%3A%22shakemap%22%7D%7D%7D">View a sample search of Atlas ShakeMaps from 2000-2005.</a></p>

<p>
  It is also simple to download a csv file of all events in the Atlas using the same catalog search tool. To do so, select “Output Options” -> “Format” -> “CSV” on the search page.
</p>

<h3>Sample Atlas Query – Libcomcat and Getproducts</h3>
<p>
  <a href="https://github.com/usgs/libcomcat">Libcomcat</a> is a Python library that allows command line tools easily access the ShakeMap Atlas, or specified subsets, and to then download any of the associated ShakeMap products and files for each event. One of the standard tools with libcomcat is getproducts, which greatly facilitates the retrieval of select earthquakes and associated products. Even more complex queries can be facilitated with other libcomcat tools.
</p>

<p>For example, <a href="http://github.com/usgs/libcomcat/blob/master/notebooks/Search.ipynb">view a sample ComCat search using an iPython Notebook.</a></p>
