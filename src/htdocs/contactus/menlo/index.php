<?php
  // Author: Lisa Wald
  // Contact: Steve Hickman,

  date_default_timezone_set('America/Los_Angeles');

  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake Science Center, Menlo Park, CA';
    $NAVIGATION = true;

    // Read file contents into output buffer
    ob_start();
    include ('seminars/next-seminar.json.php');
    $next_contents = ob_get_contents();
    ob_end_clean();

    // Reset content type to html (gets set to JSON by included file)
    header('Content-Type: text/html');

    $next_array = json_decode($next_contents, true);
    $next_seminar = $next_array['seminar'];
    $next_html = sprintf('
      <h5>%s</h5>
      <p>%s by %s</p>',
      date('l F j, Y \a\\t g:iA', $next_seminar['timestamp']),
      $next_seminar['topic'],
      $next_seminar['speaker']
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
<!--  *****RE-INSTATE this CONTENT when SCOTT moves it to new WEBSTACK*****
      <li><a href="/regional/nca/directory/">Staff Directory</a></li>
-->
    </ul>

   </div>
</div>

<hr/>

<div class="row">
  <div class="column two-of-three">

    <ul class="linklist">

<!--  *****RE-INSTATE this CONTENT when SCOTT moves it to new WEBSTACK*****
      <li>
        <a href="/regional/nca/prepare/">
          <h4>Preparedness</h4>
          <img src="images/pdr-2x.jpg" alt="preparedness handbook cover" width="150" />
        </a>
        <p>USGS handbooks that describe the threat posed by earthquakes in the San Francisco Bay region and explain how you can prepare for, survive, and recover from these inevitable events.</p>
      </li>
-->
      <li>
        <a href="seminars/">
          <h4>USGS Earthquake Seminar Series</h4>
          <img src="images/seminars-2x.png" alt="earthquake podcast" width="150" />
        </a>
        <?php print $next_html; ?>
        <p>See also: <a href="https://online.wr.usgs.gov/calendar/">USGS Evening Public Lecture Series</p>
      </li>

<!--  *****RE-INSTATE this CONTENT when SCOTT moves it to new WEBSTACK*****
      <li>
        <a href="/regional/nca/campus/">
          <h4>Campus Video Presentation</h4>
          <img src="images/campus-2x.jpg" alt="thumbnail image of video" width="150" />
        </a>
        <p>This short video gives an overview of the USGS Menlo Park Science Center in California. It briefly introduces you to the San Francisco Bay Area, shows the campus and facilities, and includes interviews with scientists describing their work.</p>
      </li>
      <li>
        <a href="/regional/nca/ucerf/">
          <h4>2008 Bay Area Earthquake Probabilities</h4>
          <img src="images/ucerf-2x.jpg" alt="probability map" width="150" />
        </a>
        <p>The probability of a magnitude 6.7 or greater earthquake in the Greater Bay Area is 63%, about 2 out of 3, in the next 30 years.</p>
      </li>
-->
</ul>

  </div>

  <div class="column one-of-three">

    <h2>Regional interest</h2>

<!--  *****RE-INSTATE this CONTENT when SCOTT moves it to new WEBSTACK*****
    <ul>
      <li><a href="/regional/nca/1989/">October 17, 1989 Loma Prieta Earthquake</a></li>
      <li><a href="/regional/nca/1906/">April 18, 1906 San Francisco Earthquake</a></li>
      <li><a href="/regional/nca/1868/">October 21, 1868 Hayward Fault Earthquake</a></li>
      <li><a href="/regional/nca/haywardfault/">Digital Map of the Hayward Fault</a></li>
      <li><a href="http://bayquakealliance.org/howclose/">How Close to a Fault Do You Live? Interactive Map</a></li>
      <li><a href="https://pubs.usgs.gov/sim/2004/2848/">Earthquakes and Faults in the San Francisco Bay Area</a></li>
      <li><a href="/regional/nca/qmap/">Liquefaction Hazard Maps</a></li>
-->

<!--  *****RE-INSTATE this CONTENT when SCOTT moves it to new WEBSTACK*****

      <li><a href="/research/parkfield/">Parkfield Earthquake Experiment</a></li>
-->

      <li><a href="/learn/topics/hayward_paleo/">Hayward Fault Paleoseismology</a></li>
      <li><a href="/data/3dgeologic/">3D Geologic and Seismic Velocity Model of the San Francisco Bay Region</a></li>
      <li><a href="/research/rupture/">Rupture Directions for Selected Northern California Earthquakes</a></li>

<!--  *****RE-INSTATE this CONTENT when SCOTT moves it to new WEBSTACK*****

      <li><a href="/research/sf_siteresponse/">Site Response in the Northern San Francisco Bay Area, California</a></li>
-->

    </ul>
  </div>
</div>
