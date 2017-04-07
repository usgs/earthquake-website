<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'The Hayward Fault and the 1868 Earthquake';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $FOOT = '';
  $NAVIGATION = true;
  include 'template.inc.php';
}
include_once ('_functions.inc.php');
?>

<ul class="no-style">
  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/shakemap.jpg" alt="Photo of the Shaking Intensity of the Hayward Fault"/></h3>
      </div>
      <div class="column four-of-five">
        <h3> Shaking Intensity </h3>
        <p>What is shaking intensity?  Most earthquake damage results from strong shaking, not from fault rupture, landslides, and ground failure. Since there were no seismic instruments in 1868, USGS scientists have used historic photographs and accounts of the damage it caused to produce a detailed map of the shaking intensity of the 1868 earthquake. This Google Earth file shows the 1868 &ldquo;ShakeMap&rdquo; and quotes from some of the historic accounts that were used to create it. The intensity of shaking that an area experiences during an earthquake depends on the magnitude of the earthquake, the site&rsquo;s distance from the fault, and the type of geologic material at the site. Soft, water saturated sands and sediments amplify shaking even at great distances from an earthquake, while bedrock shakes to a much lesser extent. For more information on the 1868 ShakeMap, see the <a href="http://pubs.usgs.gov/of/2008/1121/">1868 Intensity Maps</a>.</p>
        <p class="kml"><a href="kml/1868ShakemapQuotes.kmz">Shaking Intensity</a> <?php print(simpleFileSize("kml/1868ShakemapQuotes.kmz"));  ?>  </p>
      </div>
    </li>

    <li>
      <div class="row">
        <div class="column one-of-five">
          <h3><img src="images/photos.jpg" alt="Photo of the Bay Area in 1868"/></h3>
        </div>
        <div class="column four-of-five">
          <h3> The Bay Area in 1868 </h3>
          <p>What was the Bay Area like in 1868? This Google Earth file shows the main transportation routes in the 1860&rsquo;s, photographs  showing earthquake damage from throughout the Bay Area from 1868, and modern photos showing what these same locations look like today. The 1868 earthquake caused damage throughout the Bay Area, then having a total population of about 260,000.  Property loss was extensive and 30 people were killed.  Damage was most severe in Hayward and nearby towns along the Hayward Fault in Alameda County.  About 500 people lived in Hayward where almost every building in town was extensively damaged or wrecked.</p>
          <p class="kml"><a href="kml/1868PhotosRoads.kmz">Photographs</a> <?php print(simpleFileSize("kml/1868PhotosRoads.kmz"));  ?></p>
        </div>
      </div>
    </li>
</ul>

<p><a href="./fault.php">Urbanization of the Hayward Fault</a> &raquo;</p>
