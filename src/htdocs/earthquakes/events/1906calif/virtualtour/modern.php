<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Hazards of The Bay Area Today';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';

}
include_once ('_functions.inc.php');

?>

<ul class="no-style ">
  <li>
    <div class="row">
      <div class="column one-of-five">
        <h3><img src="images/urban2.jpg" alt="Urban Areas"/></h3>
      </div>
      <div class="column four-of-five">
    <figure>
      <h3>Urban Areas</h3>
      <p>In 1906, only 650,000 people lived in the Bay Area. The 1906 earthquake left 225,000 of San Francisco&rsquo;s 400,000 citizens homeless. At the time of the earthquake, much of the Bay Area was sparsely populated; San Jose was a small town of 25,000. Today, the Bay Area population has increased ten-fold to 7 million people, all at risk from expected earthquakes on one or more of the Bay Area faults.  2 million people, for example live on or close to the Hayward fault, which has among the highest probability of producing a magnitude 6.7 or greater earthquake in the next 30 years.  The map shows the past and present population densities.</p>
         <p class="kml"><a href="kml/UrbanAreas_ModernHistoric.kmz">Urban Areas</a> <?php print(simpleFileSize("kml/UrbanAreas_ModernHistoric.kmz")); ?></p>
    </figure>
  </div>
</div>
</li>
<li>
  <div class="row">
  <div class="column one-of-five">
    <h3><img src="images/EQprobability2.jpg" alt="Earthquake Probabilities for the Bay Area"/></h3>
  </div>
  <div class="column four-of-five">
    <figure>
      <h3>Earthquake Probabilities for the Bay Area</h3>
      <p>In 2003, earthquake scientists led by the USGS estimated that there is a 62% probability of a magnitude 6.7 or greater earthquake in the Bay Area in the next 30 years. Some faults are more likely to rupture than others. The two most hazardous faults in the region are the Hayward-Rodgers Creek fault system (27%) and the San Andreas fault (21%). The East Bay has a higher earthquake hazard than the  San Francisco peninsula due to the higher number of faults that traverse the East Bay. Which fault is closest to your house? What probability for a magnitude 6.7 or greater earthquake in the next 30 years have scientists assigned to it? For a detailed explanation visit the <a href="http://earthquake.usgs.gov/regional/nca/wg02/">2003 Earthquake Probability study</a>.</p>
         <p class="kml"><a href="kml/BayAreaEQProbability.kmz">Earthquake Probabilities for the Bay Area</a><?php print(simpleFileSize("kml/BayAreaEQProbability.kmz")); ?></p>
    </figure>
  </div>
</div>
</li>
<li>
  <div class="row">
  <div class="column one-of-five">
    <h3><img src="images/Liquefaction_SF_tile.jpg" alt="Liquefaction Susceptibility in San Francisco"/></h3>
  </div>
  <div class="column four-of-five">
    <figure>
      <h3>Liquefaction Susceptibility in San Francisco</h3>
      <p>Liquefaction occurs when young, sandy, water-saturated deposits are shaken strongly during earthquakes. When this occurs, these deposits lose their load-bearing strength and behave like a liquid. Buildings and other structures can be damaged when their foundations sink into these soupy sands. Geologists map the potential for liquefaction by mapping young, sandy deposits that are likely to contain water. The following map shows the distribution of deposits in San Francisco most likely to suffer liquefaction during the next big earthquake in the Bay Area. Detailed <a href="http://pubs.usgs.gov/of/2006/1037/">maps showing liquefaction susceptibility</a> in other regions of the Bay Area are also available.</p>
      <p class="kml"><a href="kml/Liquefaction_SanFrancisco.kmz">Liquefaction Susceptibility in San Francisco</a> <?php print(simpleFileSize("kml/Liquefaction_SanFrancisco.kmz")); ?></p>
        <figcaption>This Liquefaction Susceptibility layer is intended solely as an educational tool.  The <a href="http://www.conservation.ca.gov/cgs/shzp/">California Geological Survey</a> produces State-mandated regulatory maps that show "<a href="http://www.abag.ca.gov/bayarea/eqmaps/liquefac/liquefac.html">Zones of Required Investigation</a>" for liquefaction (and landslide) hazard. These state maps depict zones where site specific studies are required for new construction. These zone maps also are used in real estate transactions&mdash;sellers of properties within a "Zone of Required Investigation" must disclose that fact to prospective buyers.</figcaption>
    </figure>
  </div>
</div>
</li>
</ul>

          <h2>What Can I Do?</h2>
          <p>To find out what you and your family should do to prepare, and to learn more about earthquake hazards in your community and neighborhood, please see these additional <a href="/regional/nca/resources/">Earthquake Hazard Resources</a>.</p>
