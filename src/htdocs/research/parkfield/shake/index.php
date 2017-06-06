<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Parkfield Earthquake Shake Table Exhibit';
  $HEAD = '
    <script src="js/aframe-v0.5.0.min.js"></script>
    <script src="js/constrained-look-controls.js"></script>
    <link rel="stylesheet" href="style.css" />
  ';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<div class="alert info no-icon">&ldquo;David&rsquo;s art installation brings the earthquakes that happen under California every day to the surface and makes them visible for all to see. His work has the potential to give viewers a deeper appreciation for how the earth works and why they need to accept and prepare for the inevitable large and damaging earthquakes. As scientists we can tell people about earthquakes and show graphs, but not everyone learns in the same way.&rdquo;
  <cite>Andy Michael, USGS</cite>
</div>

<figure class="right">
  <a href="images/shaketable3-lrg.jpg" title="Click for a high-res photo">
    <img src="images/shaketable3.jpg" alt="Photo of shake table">
  </a>
  <figcaption>Shake Table at dusk.</figcaption>
  <a href="images/dvr4-lrg.jpg" title="Click for a high-res photo">
    <img src="images/dvr4.jpg" alt="Photo of D.V. Rogers">
  </a>
  <figcaption>Artist D.V. Rogers stomps on a geophone to trigger it.</figcaption>
</figure>

<p>This art installation, known as the <a href="http://pieqf.allshookup.org/">Parkfield Interventional EQ Fieldwork</a> (PIEQF), uses earthquake waves recorded by the USGS seismic network in California to trigger a hydraulic shake table installed in an excavated trench. The shake table is activated in near real-time as earthquakes occur throughout California. The shaking causes 10-foot steel vertical rods attached to the table to oscillate and resonate, reflecting the dynamic nature of the Californian landscape.</p>

<p>The shake table was located in the small town of <a href="http://maps.google.com/maps?f=q&amp;hl=en&amp;geocode=&amp;q=parkfield,+ca&amp;sll=37.0625,-95.677068&amp;sspn=82.586371,79.804688&amp;ie=UTF8&amp;z=16&amp;iwloc=addr">Parkfield, California</a>, between the Parkfield Cafe and Fire Station.  It was installed and open to the public through November, 2008. Parkfield is situated right on the San Andreas Fault midway between San Francisco and Los Angeles. Parkfield is sometimes referred to as the &ldquo;earthquake capital of California&rdquo;, due to the large number of M6.0 &ndash; M6.5 earthquakes that have occurred over the past 150 years. The <a href="/research/parkfield/2004.php">most recent Parkfield earthquake</a>, a M6.0, occurred in 2004.</p>

<p>This shake table exhibit seeks to promote earthquake awareness and preparedness for Californians by merging earthquake science and art in an innovative, interactive display. It is a collaboration between U.S. Geological Survey seismologist Andy Michael and Australian artist, D.V. Rogers. The Parkfield installation embodies the extra dimension art brings to science, helping to visualize what&rsquo;s going on below the surface in a way science can&rsquo;t on its own.</p>

<figure>
  <a-scene embedded>
    <a-assets>
      <img id="shaketable" src="images/shaketable-sphere.jpg">
    </a-assets>
    <a-entity camera constrained-look-controls="limit-down: -26; limit-up: 28;"
       rotation="-10 266.5 0"></a-entity>
    <a-sky src="#shaketable"></a-sky>
  </a-scene>
  <figcaption>Interactive photo of the shake table exhibit.</figcaption>
</figure>

<p>The conceptual basis behind the  earthwork is to bring all seismic events to a hypothetical epicentre. Each time a seismic event is reported, the horizontal motion of an earthquake  is triggered on the shake table, providing a feedback loop between  California quakes and a physical and mechanical representation of the events. According to David, &ldquo;<em>PIEQF is a seismic art work designed to introduce human interaction within geological time. Conceptually PIEQF is a blip on the geological radar, an interactive earthwork which connects, maps and creates a temporary reference point within the scale of geological time</em>.&rdquo;</p>

<p>Surrounding the earthquake shake table and buried within the excavation is an array of vertical motion sensors called L10 Geophones. These Geophones are excited when walked over or jumped upon which trigger the vertical motion of the shake table. Visitors to PIEQF can engage interactively with the earthwork.</p>

<p>PIEQF sleeps at night between 9.30pm and 6.30am. The control system keeps polling seismic events overnight, then replays them at 6.30am every morning. After this morning replay sequence, PIEQF switches into live mode and is triggered by near real-time reported earthquakes which are reported between 30sec - 3min after actual earthquakes occur.</p>

<div class="row">
  <div class="column one-of-two">
    <a href="images/kap-shaketable2-lrg.jpg" title="Click for a high-res photo">
      <img src="images/kap-shaketable2.jpg" alt="Parkfield Shaketable" />
    </a>
  </div>
  <div class="column one-of-two">
    <a href="images/kap-shaketable1-lrg.jpg" title="Click for a high-res photo">
      <img src="images/kap-shaketable1.jpg" alt="Parkfield Shaketable" />
    </a>
  </div>
  <p>Photos taken from a kite-lofted camera, showing the shake table and control bunker (left) and the earthwork in context of the small town of Parkfield, CA (right).</p>
</div>

<div class="row">
  <div class="column three-of-five">
    <h2>The Art-Science of Earthquakes</h2>
    <p><a href="http://media.wr.usgs.gov/colloquium/WRC_23nov09.mp4">Lecture by D.V. Rogers</a>
      <br />November 23, 2009 (<strong>video</strong>)</p>
    <p>The exhibit was a geologically interactive, seismic machine earthwork temporarily installed in Parkfield in 2008. Rogers presented the history, conceptual premise, documentation of the work, and also put forward the idea of how early 21st century cultural practice could be used to encourage earthquake awareness and preparedness.</p>
    </p>
    <h2>See Also</h2>
    <ul class="linklist">
      <li>
        <h4><a href="http://scotthaefner.com/features/shaketable/">Parkfield Shake Table</a></h4>
        <p>YouTube video interview with the artist and a short video shot from the kite-camera.</p>
      </li>
    </ul>
  </div>
  <div class="column two-of-five">
    <figure>
      <a href="images/dvr3-lrg.jpg" title="Click for a high-res photo">
        <img src="images/dvr3.jpg" alt="parkfield photo" />
      </a>
      <figcaption>D.V. in the &quot;Bunker,&quot; the control center for the project. Real-time earthquakes are received via satellite internet.</figcaption>
    </figure>
  </div>
</div>

<div class="photo-group">
  <a href="images/rods-lrg.jpg" title="Click for a high-res photo">
    <img src="images/rods.jpg" alt="Parkfield Shaketable" />
  </a>
  <a href="images/shaketable1-lrg.jpg" title="Click for a high-res photo">
    <img src="images/shaketable1.jpg" alt="Parkfield Shaketable" />
  </a>
  <a href="images/shaketable2-lrg.jpg" title="Click for a high-res photo">
    <img src="images/shaketable2.jpg" alt="Parkfield Shaketable" />
  </a>
  <p>Looking straight up from the center of the Shake Table (top) followed by two nighttime shots showing the hydraulic actuators that create vertical movement on the shake table.</p>
</div>

<p>All photos by Scott Haefner, USGS.</p>
