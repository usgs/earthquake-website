<?php
  // Author: Lisa Wald
  // Contact: Elizabeth Cochran
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Earthquake Early Warning';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
        include 'template.inc.php';
    }
?>

<h2>Next Steps</h2>

<h3>Improving the sensor network</h3>
<p>
  <strong>The most important component of an earthquake early warning system is a dense network of seismic and geodetic stations with robust communications.</strong> Future development of the warning system will include the installation of larger numbers of seismic stations and upgrading station telecommunications. The current seismic station densities in California are currently much lower than the Japanese public alert system. New sensors are needed in California to reduce earthquake detection times allowing warnings to be issued faster.
</p>

<figure class='right'>
<img src="images/stationdensity.JPG" alt="Station density of California and Japan"/>
  <figcaption>
    Earthquake sensor density: California versus Japan.  New sensors need to be added in California to shorten the CISN sensors spacing to approximately 12 miles to facilitate timely EEW.  The shorter the station spacing, the smaller the blind zone will be because warnings can be issued faster.
  </figcaption>
</figure>

<h3>Additional Sources of Ground Motion Measurements</h3>
<p>
  In the future, additional sources of ground motion observations can be integrated in the EEW algorithms. Additional data may be able to help reduce the time to detection and improve early estimates of earthquake magnitude and location.
</p>

<p><strong>Some examples include:</strong>
  <ol>
    <li>
      <strong>Real-time GPS displacements.</strong> Throughout California there are over a hundred high sample rate Global Positioning System (GPS) sensors that provide very accurate measurements of ground displacement. Data is collected from several regional GPS network including from the <a href="http://www.scign.org/">Southern California Integrated GPS Network</a> and <a href="http://seismo.berkeley.edu/bard/">Bay Area Regional Deformation Network</a>. Measurements of ground displacement can be very useful for identifying large earthquakes that can have centimeters to meters of ground displacement. It can be challenging to recover displacements in real time because very accurate information is needed on the orbits of the GPS satellites. Several research groups within the USGS and at collaborating universities are currently developing algorithms to estimate GPS positions accurately in real-time and methods to integrate the information into existing EEW algorithms.
    </li><br />

    <li>
      <strong>Low-cost sensors hosted in homes, businesses, and schools. </strong>New sensor technologies have greatly reduced the cost of lower-resolution strong motion seismometers. These sensors use micro-electro-mechanical systems (MEMS) accelerometers that are contained on a single computer chip. Scientists have been exploring ways to utilize theses sensors to increase the number of strong motion sensors in urban areas. Two examples include the <a href="http://qcn.stanford.edu/">Quake-Catcher Network</a> and the <a href="http://www.communityseismicnetwork.org/">Community Seismic Network</a> that install low-cost sensors in homes, businesses, and schools.
    </li>
  </ol>
</p>

<div class='row'>
  <div class='column one-of-two'>
    <figure>
      <img src="images/antenna.JPG" alt="GPS Antenna"/>
      <figcaption>
        A GPS antenna in southern California. Many of the GPS stations in California are currently being converted to send data in real time back to the networks. And, algorithms are being developed to process and use these data in the earthquake early warning alerts.
      </figcaption>
    </figure>
  </div>
  <div class='column one-of-two'>
    <figure>
      <img src="images/accelerometer.JPG" alt="MEMS Accelerometer"/>
      <figcaption>
        MEMS accelerometer being tested for earthquake detection. These lower cost sensors may be used in urban areas to better map variation in shaking amplitudes across a region. In addition, the data may be useful for reducing the time needed to detect an earthquake.
      </figcaption>
    </figure>
  </div>
</div>

<h3>Issuing Warnings</h3>
<p>
  Every available technology will be used to ensure that EEW messages reach as many people and as quickly as possible.  Most currently available mass messaging technologies are too slow for EEW.  Unlike the Japanese system, here in the US we are unable to send messages to large numbers of cell phones without delays. However, many promising technologies are on the horizon like broadcast text messaging, smartphone apps and recent upgrades to the national <a href="http://www.fema.gov/emergency/ipaws/">Integrated Public Alert and Warning System (IPAWS)</a>. EEW may also open the door to many public/private partnerships.
</p>

<h3>Public Outreach</h3>
<p>
  The EEW system must be connected with users of the warning ahead of time, and therefore requires a public outreach effort upon implementation to make people aware of the system and how to respond to it.  Responses are most effective when automated and pre-established so the recipients know what action to take when they get a warning.
</p>
