<?php
  // Author: Lisa Wald
  // Contact: Scott Bennett, Ryan Gold
  // Last modified: 08/08/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'In the Trenches on a Paleoseismology Project';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
        <link rel="stylesheet" href="../styles.css"/>
      ';
      include 'template.inc.php';
    }
?>

<h2>Back at the Computer - Processing &amp; Analyzing the Data</h2>

<figure>
	<a href="images/lidar_satellite_lg.jpg"><img src="images/lidar_satellite.jpg" alt="satellite and lidar images"/></a>
	<figcaption>
    Satellite images (left), uninterpreted LiDAR hillshade maps (center) and interpreted LiDAR hillshade maps (right) of the Provo-Nephi segment boundary (top row) and the Brigham City-Weber segment boundary (bottom row). The red lines on the interpreted maps are faults that could be identified with the LiDAR images. Several of these faults are newly identified, revealed for the first time with this LiDAR data. Click on image to view larger version.
  </figcaption>
</figure>


<figure class='right'>
	<img src="images/process.jpg" alt="processing the data"/></a>
	<figcaption>
    USGS scientist, Nadine Reitman, examines LiDAR data and trench logs from the Alpine trench site.
  </figcaption>
</figure>

<p>
  The point data collected from the LiDAR survey are processed to create a digital elevation model (DEM), a digital representation of the ground surface, similar to a topographic map.  Shining a "digital light" onto the DEM, which simulates the early morning or late afternoon sun, creates a digital hillshade model that includes "fake shadows," which can reveal subtle topographic features such as fault scarps.  USGS scientists use these hillshade models to identify several new fault traces that had never been noticed before.
</p>
<p>
  The trench logs are also turned into a digital picture to illustrate the geologic relationships and to measure fault offset of geologic layers. Once the age-dating laboratory determines the ages of the geologic samples from the trench, that data is used to figure out when paleo-earthquakes occurred at that location.
</p>

<p>
  In this Wasatch fault zone study, scientists are looking for paleo-earthquakes near the end of one fault segment that happened at the same time as paleo-earthquakes on the adjacent fault segment, indicating that the earthquake occurred on both fault segments.  Such information would support that the paleo-earthquake could have been larger (and probably less frequent) than if it had happened only on a single fault segment.
</p>

<p class='sm'>-written by Lisa Wald, U.S. Geological Survey</p>

<figure>
	<img src="images/trenchlog.jpg" alt="trenchlog diagram and photo mosaic"/>
	<figcaption>
    Trench log (top) and photo mosaic (bottom) from the Alpine trench site.
  </figcaption>
</figure>

<!-- NAVIGATION at bottom for ARTICLE -->
<p>
  <a class='prev' href="collect.php">
    <span class='material-icons prev'>&#xe5c4;</span>
    <strong>PREV</strong>
  </a>
  <a class='next' href="resources.php">
    <strong>NEXT</strong>
  <span class='material-icons next'>&#xe5c8;</span>
  </a>
</p>
