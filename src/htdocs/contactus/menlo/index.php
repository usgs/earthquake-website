<?php
  // Author: Lisa Wald
  // Contact: Steve Hickman,

  date_default_timezone_set('America/Los_Angeles');

  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake Science Center, Menlo Park, CA';
    $NAVIGATION = true;

    $seminarJson = file_get_contents('https://earthquake.usgs.gov/contactus/menlo/seminars/next-seminar.json.php');
    $seminarArray = json_decode($seminarJson, true);
    $seminar = $seminarArray['seminar'];

    $seminarHtml = sprintf('
      <p>%s by %s</p>
      <h5>%s</h5>',
      $seminar['topic'],
      $seminar['speaker'],
      date('l F j, Y \a\\t g:iA', $seminar['timestamp'])
    );

    include 'template.inc.php';
  }

?>

<!-- Intro, Photo, Directions and Contacts -->
<div class="row">
  <div class="column two-of-three">
    <p>
      The Menlo Park Science Center has been the flagship research center for the USGS in the western United States for more than 50 years. It is the largest USGS research center in the West and houses extensive research laboratories, scientific infrastructure, and library facilities. The Center is strategically located to take advantage of partnerships in one of the greatest geographic concentrations of nationally and internationally recognized Earth science institutions in the world. Scientists in Menlo Park conduct a wide array of both basic and applied science, usually in collaboration with scientists from outside the Center.
    </p>

  </div>

  <div class="column one-of-three">
    <figure>
      <img src="images/menlocampus-2x.jpg" alt="Menlo Park office" />
      <figcaption>Vincent E. McKelvey Building on the Menlo Park campus. Photo by Scott Haefner, USGS.</figcaption>
    </figure>

    <ul>
      <li><a href="menloloc.php">Contact info and driving directions</a></li>
      <li><a href="staff/">Staff Directory</a></li>
    </ul>

   </div>
</div>

<hr/>

<div class="row">
  <div class="column two-of-three">

    <ul class="linklist">

      <li>
        <a href="prepare/">
          <h4>Preparedness</h4>
          <img src="images/pdr-2x.jpg" alt="preparedness handbook cover" width="150" />
        </a>
        <p>USGS handbooks that describe the threat posed by earthquakes in the San Francisco Bay region and explain how you can prepare for, survive, and recover from these inevitable events.</p>
      </li>
      <li>
        <a href="seminars/">
          <h4>USGS Earthquake Seminar Series</h4>
          <img src="images/seminars-2x.png" alt="earthquake podcast" width="150" />
        </a>
        <?php print $seminarHtml; ?>
        <p>See also: <a href="https://online.wr.usgs.gov/calendar/">USGS Evening Public Lecture Series</a></p>
      </li>

      <li>
        <a href="campus/">
          <h4>Campus Video Presentation</h4>
          <img src="campus/poster.jpg" alt="thumbnail image of video" width="150" />
        </a>
        <p>This short video gives an overview of the USGS Earthquake Science Center in Menlo Park, California.</p>
      </li>
    </ul>

  </div>

  <div class="column one-of-three">

    <h2>Regional Interest</h2>

    <ul>
      <li><a href="/earthquakes/events/1989lomaprieta/">October 17, 1989 Loma Prieta Earthquake</a></li>
      <li><a href="/earthquakes/events/1906calif/">April 18, 1906 San Francisco Earthquake</a></li>
      <li><a href="/earthquakes/events/1868calif/">October 21, 1868 Hayward Fault Earthquake</a></li>
      <li><a href="/learn/topics/haywardfault/">Google Earth Hayward Fault Tour</a></li>
      <li><a href="/learn/topics/geologicmaps/">Bay Area Geologic Maps in Google Earth</a></li>
      <li><a href="/learn/topics/hayward_paleo/">Hayward Fault Paleoseismology</a></li>
      <li><a href="/hazards/urban/sfbay/liquefaction/">Liquefaction Hazard Maps</a></li>
      <li><a href="https://bayquakealliance.org/howclose/">How Close to a Fault Do You Live? Interactive Map</a></li>
      <li><a href="https://pubs.usgs.gov/sim/2004/2848/">Earthquakes and Faults in the San Francisco Bay Area</a></li>
      <li><a href="/learn/parkfield/">Parkfield Earthquake Experiment</a></li>
      <li><a href="/data/3dgeologic/">3D Geologic and Seismic Velocity Model of the San Francisco Bay Region</a></li>
      <li><a href="/data/rupture/">Rupture Directions for Selected Northern California Earthquakes</a></li>
      <li><a href="/data/siteresponse/">Site Response in the Northern San Francisco Bay Area, California</a></li>
    </ul>
  </div>
</div>
