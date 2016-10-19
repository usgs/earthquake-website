<?php
// Author: Lisa Wald
// Contact: Kathy Haller,Jerry Mayer
  if (!isset($TEMPLATE)) {
    $TITLE = 'Faults';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="../styles.css"/>';
    include 'template.inc.php';
  }
?>

<h2>Quaternary Fault and Fold Database of the United States</h2>

<p class='alert info'>
  This database is the source for faults used in the National Seismic Hazard Maps, however, the <a href="http://geohazards.usgs.gov/cfusion/hazfaults_2014_search/query_main.cfm">spatial representation of the faults in the hazard maps was simplified</a> and critical fault parameters were assigned to produce the hazard maps.
</p>

<div class='row'>
  <div class='column three-of-five'>
    <h2>Interactive Fault Map</h2>
    <a href='map/'><img class='left' src='images/qfault.png'></a>

    <br style="clear:left;"/>
    <p><a href='map/'><strong>View interactive fault map.</strong></a></p>

    <p>
      This database contains information on faults and associated folds in the United States that are believed to be<strong> sources of M&gt;6 earthquakes during the Quaternary (the past 2.6 million years)</strong>. Maps of these  geologic structures are linked to detailed descriptions and references.
    </p>
    <p>
      <a href="citation.php">Citation information</a> - when using these data, please provide proper acknowledgment.
    </p>

    <ul>
      <li><a href="http://geohazards.usgs.gov/cfusion/qfault/index.cfm">
        Database Search</a></li>
      <li>Download Data:
        <ul>
          <li><a href="kml.php">KML (Google Earth) Files</a></li>
          <li><a href="ftp://hazards.cr.usgs.gov/web/nshm/qfaults/qfaults-GIS.zip">GIS Shapefiles</a> (9.1 MB ZIP file)</li>
        </ul>
      </li>
      <li><a href="background.php">Background</a> - history, help, personnel and references</li>
      <li><a href="contributors.php">Contributors</a></li>
    </ul>
  </div>

  <div class='column two-of-five'>

    <h2>Fault Basics</h2>
    <figure>
      <img src="images/sanandreas_crop.jpg" alt="offset in San Andreas fault" />
    <figcaption>
      San Andreas fault zone, Carrizo Plains, central California. Photo by R.E.
      Wallace, USGS
    </figcaption>
  </figure>

    <ul>
      <li><a href="http://pubs.usgs.gov/fs/2004/3033/">Factsheet</a></li>
      <li><a href="http://www.usgs.gov/faq/taxonomy/term/9838">FAQ</a></li>
    </ul>
  </div>
</div>
