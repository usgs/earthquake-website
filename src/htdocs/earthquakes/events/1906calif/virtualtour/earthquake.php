<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'The Northern California Earthquake, April 18, 1906';
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
        <h3><img src="images/Epicenter_tile.jpg" alt="Image of the Origin Time And Epicenter of the Northern California Earthquake in 1906"/></h3>
      </div>
      <div class="column four-of-five">
    <figure>
      <h3>Origin Time and Epicenter</h3>
      <p>At 5:12 AM local time, on April 18, 1906, a foreshock occurred with sufficient force to be felt widely throughout the San Francisco Bay area. The great earthquake broke loose some 20 to 25 seconds later, with an epicenter in the Pacific  Ocean just 2 miles west of San Francisco. Within 30 seconds of the start of the main rupture, very strong shaking had swept throughout the entire  San Francisco Bay Area, and lasted some 45 to 60 seconds. To learn more about the epicenter see <a href="http://alomax.free.fr/posters/1906-focus/">Location of the 1906 Focal region</a>.</p>
      <p class="kml"><a href="kml/1906Epicenter.kmz">Origin Time and Epicenter</a> <?php print(simpleFileSize("kml/1906Epicenter.kmz")); ?></p>
    </figure>
  </div>
</div>
</li>
<li>
  <div class="row">
  <div class="column one-of-five">
    <h3><img src="images/Seismogram_tile3.jpg" alt="Image of Seismograms"/></h3>
  </div>
  <div class="column four-of-five">
    <figure>
      <h3>Seismograms</h3>
      <p>The earthquake was felt from southern Oregon to south of Los Angeles and inland as far as central Nevada, an area of approximately 200,000 square miles, nearly 8 times greater than that of the 1989 Loma Prieta earthquake (magnitude 6.9). The ground motion propagating away from the earthquake source is recorded by instruments called seismographs. The zigzag trace made by a seismograph, called a &quot;seismogram,&quot; reflects the changing amplitude and frequency content of the ground shaking beneath the instrument. From seismograms, scientists can determine the time, the epicenter, the depth, and the type of faulting of an earthquake as well as estimate how much energy was released by it. Although there were only five seismographs in the Bay Area in 1906, the earthquake was recorded at a total of 96 stations around the world.Bay Area seismograms are variable and highly complex mainly because the shaking was so intense and the instruments were not sufficiently damped.</p>
      <p class="kml"><a href="kml/HistoricSeismographLocations.kmz">Seismograms</a><?php print(simpleFileSize("kml/HistoricSeismographLocations.kmz")); ?></p>
    </figure>
  </div>
</div>
</li>
<li>
  <div class="row">
    <div class="column one-of-five">
      <h3><img src="images/RuptureSlip.jpg" alt="Image of the Rupture Length and Slip"/></h3>
    </div>
    <div class="column four-of-five">
      <figure>
        <h3>Rupture Length and Slip</h3>
        <p>The 1906 earthquake ruptured the northernmost 296 miles (477 km) of the San Andreas Fault between San Juan Bautista and Cape Mendocino. By comparison, the 1989 Loma Prieta earthquake had a rupture length of only  25 miles. The San Andreas fault today has locked and creeping segments along its approximately 800 mile (1300 km) length in California. The 1906 earthquake ruptured all  locked segments of the fault in northern California. The amount of horizontal slip, or relative movement along the fault, varied from 2 to 32 feet (0.5 m to 9.7 m). To better visualize this, picture standing face to face with a person on the opposite side of the fault and watching them slide horizontally 32 feet to your right! The following file depicts the 1906 rupture length and the horizontal slip (in feet) along the  rupture as a histogram. Scientists now believe that details in the geology along the earthquake fault plane, and differences in stress levels, may contribute to these changes in the amount of slip along the fault.</p>
        <p class="kml"><a href="kml/DistributionofSlip.kmz">Rupture Length and Slip</a><?php print(simpleFileSize("kml/DistributionofSlip.kmz")); ?></p>
      </figure>
    </div>
  </div>
</li>
<li>
  <div class="row">
    <div class="column one-of-five">
      <h3><img src="images/tour2.jpg" alt="Image of a Tour of the Rupture"/></h3>
    </div>
    <div class="column four-of-five">
      <figure>
        <h3>Tour of the Rupture</h3>
        <p>Earthquake ruptures travel at phenomenal speeds. Seismologists have estimated the average speed of the 1906 rupture along the San Andreas Fault to the north of the epicenter to be 8,300 mi/hour (3.7 km/sec), and 6,300 mi/hour (2.8 km/sec) to the south. By comparison, a Boeing 747 jet cruises at only 550 mi/hour. The following rupture tour shows how fast the rupture traveled north from the 1906 epicenter. To view more sophisticated simulations of the rupture and strong ground shaking produced by the 1906 earthquake, see models that recreate the <a href="/education/shakingsimulations/1906/">1906 Ground Motions Simulations</a>.</p>
        <p>Tour the rupture, then click the new layer &ldquo;1906 Northern Rupture Tour&rdquo; in the left panel and follow the instructions to play the tour. Or you can fly along the northern part of the rupture at 8300 miles/hour to appreciate the actual <a href="kml/1906_Rupture_Speed.mp4">speed of the rupture</a> <?php print(simpleFileSize("kml/1906_Rupture_Speed.mp4")); ?>.</p>
        <p class="kml"><a href="kml/1906RuptureTour.kmz">Tour of the Rupture</a> <?php print(simpleFileSize("kml/1906RuptureTour.kmz")); ?></p>
      </figure>
    </div>
  </div>
</li>
<li>
  <div class="row">
    <div class="column one-of-five">
      <h3><img src="images/shake_quotes.jpg" alt="Imag of Shaking Intensity in the Bay Area"/></h3>
    </div>
    <div class="column four-of-five">
      <figure>
        <h3>Shaking Intensity</h3>
        <p>Earthquake ruptures travel at phenomenal speeds. Seismologists have estimated the average speed of the 1906 rupture along the San Andreas Fault to the north of the epicenter to be 8,300 mi/hour (3.7 km/sec), and 6,300 mi/hour (2.8 km/sec) to the south. By comparison, a Boeing 747 jet cruises at only 550 mi/hour. The following rupture tour shows how fast the rupture traveled north from the 1906 epicenter. To view more sophisticated simulations of the rupture and strong ground shaking produced by the 1906 earthquake, see models that recreate the <a href="/education/shakingsimulations/1906/">1906 Ground Motions Simulations</a>.</p>
        <p>Most earthquake damage results from strong shaking. Damage caused by fault rupture, landslides, and ground failure typically accounts for only a small fraction of the total damage from earthquakes. The 1906 earthquake is remembered mainly for the fire damage in San Francisco, yet in most places throughout northern California shaking damage dominated. The intensity of shaking that an area experiences during an earthquake depends on the magnitude of the earthquake, its distance from the fault, and the type of ground materials. Soft, water saturated sands and sediments amplify the shaking even at great distances from an earthquake, while bedrock shakes to a much lesser extent. USGS geologists have produced a detailed map of shaking intensity that occurred during the 1906 earthquake, using historic accounts. The following file contains the 1906 &quot;ShakeMap&quot; and actual quotes from some of the historic accounts used to create it. For more information, see the <a href="https://pubs.usgs.gov/of/2005/1135/">1906 Intensity Maps</a>.</p>
        <p class="kml"><a href="kml/1906ShakeMapandReports.kmz">Shaking Intensity</a> <?php print(simpleFileSize("kml/1906ShakeMapandReports.kmz")); ?></p>
      </figure>
    </div>
  </div>
</li>
</ul>

<p><a href="photos.php">Historic Photographs of the 1906 Earthquake</a> &raquo;</p>
