<?php
// Author: Lisa Wald
// Contact: Rob Schmitt
  if (!isset($TEMPLATE)) {
    $TITLE = 'Faults';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="../styles.css"/>';
    include 'template.inc.php';
  }
?>

<h2>Quaternary Fault and Fold Database of the United States</h2>

<div class='row'>
  <div class='column three-of-five'>
    <h2>Interactive Fault Map</h2>
    <a href='https://doi.org/10.5066/F7S75FJM'><img class='left' src='images/qfault-thumb.jpg'></a>

    <br style="clear:left;"/>

    <ul>
      <li><a href='https://doi.org/10.5066/F7S75FJM'><strong>Interactive fault map.</strong></a>
      </li>
      <li><a href="/cfusion/qfault/index.cfm">
        Database Search</a></li>
      <li>Download Data:
        <ul>
          <li><a href="/static/lfs/nshm/qfaults/qfaults.kmz">KML (Google Earth) Files</a> (13 MB KMZ)<br/>
          - includes 5 fault layers: Historic, Holocene to Latest Pleistocene, Late Quaternary, Mid-Late Quaternary, Quaternary</li>
          <li><a href="/static/lfs/nshm/qfaults/Qfaults_GIS.zip">GIS files</a> (16 MB ZIP file)</li>
        </ul>
      </li>
      <li><a href="background.php">Background</a> - history, help, personnel and references</li>
      <li><a href="contributors.php">Contributors</a></li>
    </ul>

    <p>
      This database contains information on faults and associated folds in the United States that demonstrate geological evidence of coseismic surface deformation in large earthquakes during the past 1.6 million years (Myr). At the time the Quaternary Fault and Fold database was established (1993), the Quaternary time period was defined as &lt;1.6 Myr in the <a href="https://www.geosociety.org/documents/gsa/timescale/timescl-1983.pdf">1983 Geologic Time Scale</a>, published in 1983. In 1999, it was updated to 1.8 Myr, and in 2009 it was revised to 2.6 Myr. Most recently, in 2018 it was revised again to 2.58 Myr, see <a href="https://www.geosociety.org/GSA/Education_Careers/Geologic_Time_Scale/GSA/timescale/home.aspx">GSA Geologic Time Scale</a>.
    </p>

    <p class='alert info'>
      In order to maintain a current and relevant dataset, effective January 12, 2017, the USGS will maintain a limited number of metadata fields that characterize the Quaternary faults and folds of the United States.  Archived reports are accessible from the abbreviated record.
    </p>

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
      <li><a href="https://www.usgs.gov/faq/natural-hazards">Fault FAQ</a> - select topic "Faults"</li>
    </ul>

    <h2>About the Quaternary Faults and the National Seismic Hazard Maps</h2>
    <p>
      This database was used to create the <a href="/cfusion/hazfaults_2014_search/query_main.cfm">fault-source characterization</a> in the National Seismic Hazard Maps. For the hazard maps, both the fault surface trace and the metadata are simplified representations of the geometry and behavior of the fault, based on geologic interpretation.
    </p>
    <p>
      <a href="citation.php">Citation information</a> - when using these data, please provide proper acknowledgment.
    </p>

  </div>
</div>
