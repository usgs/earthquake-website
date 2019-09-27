<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'M6.8 Earthquake Scenarios - Hayward Fault';
  $HEAD = '
    <link rel="stylesheet" href="/lib/hazdev-tablist-0.1.2/hazdev-tablist.css" />
    <link rel="stylesheet" href="../style.css"
  ';
  $FOOT = '
    <script src="/lib/hazdev-tablist-0.1.2/hazdev-tablist.js"></script>
    <script src="../tablist.js"></script>
  ';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once('../buildMovieHtml.inc.php');

?>

<p>
  These three scenarios show the ground shaking for a magnitude 6.8 earthquake on the Hayward fault. The slip or offset across the fault is the same in all three cases, but the earthquake ruptures start in different locations- Oakland, Hayward, or Fremont. Because relatively little is known about the 1868 earthquake rupture, we have not attempted to simulate the 1868 earthquake in detail; however, the magnitude 6.8 scenario with the Hayward epicenter is similar to the 1868 earthquake in rupture length, magnitude, and starting location.
</p>
<p>
   These scenario earthquakes rupture 33 miles (54 km) of the Hayward fault extending from Fremont to Berkeley. The average slip or offset across the fault is about 2 ft (0.7 m).
</p>

<div class="tablist">

  <section class="panel" data-title="Oakland Epicenter" data-selected="true">
    <header>
      <h2>Oakland Epicenter</h2>
    </header>
    <h3>Map View</h3>
    <div class="movies">
      <?php print buildMovieHtml('HaywardM68_OaklandEp_mapview', 'hayward', '', '4 Mb', '15 Mb'); ?>
    </div>
    <h3>Detailed Perspective Views</h3>
    <div class="map">
      <img src="./images/map_HaywardM68_OaklandEp.jpg" alt="region map" usemap="#MapOaklandEp" style="max-width: none" width="372" height="400"/>
      <map name="MapOaklandEp" id="MapOaklandEp">
        <area shape="rect" coords="149,170,200,183" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_OaklandEp_Berkeley.mp4" alt="Berkeley" title="Click for normal resolution Berkeley movie" />
        <area shape="rect" coords="195,235,245,249" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_OaklandEp_Fremont.mp4" alt="Fremont" title="Click for normal resolution Fremont movie" />
        <area shape="rect" coords="223,208,282,226" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_OaklandEp_Livermore.mp4" alt="Livermore" title="Click for normal resolution Livermore movie" />
        <area shape="rect" coords="148,186,203,201" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_OaklandEp_Oakland.mp4" alt="Oakland" title="Click for normal resolution Oakland movie" />
        <area shape="rect" coords="208,275,260,293" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_OaklandEp_SanJose.mp4" alt="San Jose" title="Click for normal resolution San Jose movie" />
      </map>
      <?php print file_get_contents('perspective_description.html'); ?>
      <p>The ground moves about 6-12 inches (0.2-0.3 m) at locations close to the fault. The ground also moves about 12 inches (0.3 m) in Livermore.</p>
    </div>
    <div class="videos">
      <?php print buildMovieHtml('HaywardM68_OaklandEp_Berkeley', 'hayward', 'Berkeley (looking south)', '5 Mb', '19 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_OaklandEp_Oakland', 'hayward', 'Oakland (looking north)', '5 Mb', '19 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_OaklandEp_Fremont', 'hayward', 'Fremont (looking north)', '5 Mb', '20 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_OaklandEp_SanJose', 'hayward', 'San Jose (looking north)', '6 Mb', '25 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_OaklandEp_Livermore', 'hayward', 'Livermore (looking west)', '5 Mb', '20 Mb'); ?>
    </div>
    <?php include "movies_description.html" ?>
  </section>

  <section class="panel" data-title="Hayward Epicenter">
    <header>
      <h2>Hayward Epicenter</h2>
    </header>
    <h3>Map View</h3>
    <div class="movies">
      <?php print buildMovieHtml('HaywardM68_HaywardEp_mapview', 'hayward', '', '4 Mb', '14 Mb');?>
    </div>
    <h3>Detailed Perspective Views</h3>
    <div class="map">
      <img src="./images/map_HaywardM68_HaywardEp.jpg" alt="region map" usemap="#MapHaywardEp" style="max-width: none" width="372" height="400"/>
      <map name="MapHaywardEp" id="MapHaywardEp">
        <area shape="rect" coords="149,170,200,183" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_HaywardEp_Berkeley.mp4" alt="Berkeley" title="Click for normal resolution Berkeley movie" />
        <area shape="rect" coords="185,151,240,166" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_HaywardEp_Concord.mp4" alt="Concord" title="Click for normal resolution Concord movie" />
        <area shape="rect" coords="195,235,245,249" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_HaywardEp_Fremont.mp4" alt="Fremont" title="Click for normal resolution Fremont movie" />
        <area shape="rect" coords="223,208,282,226" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_HaywardEp_Livermore.mp4" alt="Livermore" title="Click for normal resolution Livermore movie" />
        <area shape="rect" coords="156,88,189,105" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_HaywardEp_Napa.mp4" alt="Napa" title="Click for normal resolution Napa movie" />
        <area shape="rect" coords="113,191,192,206" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_HaywardEp_SanFrancisco.mp4" alt="San Francisco" title="Click for normal resolution San Francisco movie" />
        <area shape="rect" coords="208,275,260,293" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_HaywardEp_SanJose.mp4" alt="San Jose" title="Click for normal resolution San Jose movie" />
      </map>
      <?php print file_get_contents('perspective_description.html'); ?>
      <p>The ground moves about 6-12 inches (0.2-0.3 m) at locations close to the fault. The ground also moves about 12 inches (0.3 m) in Livermore.</p>
    </div>
    <div class="videos">
      <?php print buildMovieHtml('HaywardM68_HaywardEp_Berkeley', 'hayward', 'Berkeley (looking south)', '5 Mb', '19 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_HaywardEp_Napa', 'hayward', 'Napa (looking south)', '5 Mb', '18 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_HaywardEp_Concord', 'hayward', 'Concord (looking west)', '5 Mb', '21 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_HaywardEp_SanFrancisco', 'hayward', 'San Francisco (looking east)', '4 Mb', '15 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_HaywardEp_Fremont', 'hayward', 'Fremont (looking north)', '5 Mb', '19 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_HaywardEp_SanJose', 'hayward', 'San Jose (looking north)', '6 Mb', '25 Mb'); ?>
      <?php print buildMovieHtml('HaywardM68_HaywardEp_Livermore', 'hayward', 'Livermore (looking west)', '5 Mb', '19 Mb'); ?>
    </div>
    <?php include "movies_description.html" ?>
  </section>

  <section class="panel" data-title="Fremont Epicenter">
    <header>
      <h2>Fremont Epicenter</h2>
    </header>
    <h3>Map View</h3>
    <div class="movies">
      <?php print buildMovieHtml('HaywardM68_FremontEp_mapview', 'hayward', '', '4 Mb', '14 Mb');?>
    </div>
    <h3>Detailed Perspective Views</h3>
    <div class="map">
      <img src="./images/map_HaywardM68_FremontEp.jpg" alt="region map" usemap="#MapFremontEp" style="max-width: none" width="372" height="400"/>
      <map name="MapFremontEp" id="MapFremontEp">
        <area shape="rect" coords="149,170,200,183" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_FremontEp_Berkeley.mp4" alt="Berkeley" title="Click for normal resolution Berkeley movie" />
        <area shape="rect" coords="185,151,240,166" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_FremontEp_Concord.mp4" alt="Concord" title="Click for normal resolution Concord movie" />
        <area shape="rect" coords="173,219,226,235" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_FremontEp_Hayward.mp4" alt="Hayward" title="Click for normal resolution Hayward movie" />
        <area shape="rect" coords="156,88,189,105" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_FremontEp_Napa.mp4" alt="Napa" title="Click for normal resolution Napa movie" />
        <area shape="rect" coords="208,275,260,293" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM68_FremontEp_SanJose.mp4" alt="San Jose" title="Click for normal resolution San Jose movie" />
      </map>
      <?php print file_get_contents('perspective_description.html');?>
      <p>The ground moves about 6-12 inches (0.2-0.3 m) at locations close to the fault. The ground also moves about 12 inches (0.3 m) in Livermore.</p>
    </div>
    <div class="videos">
      <?php print buildMovieHtml('HaywardM68_FremontEp_Berkeley', 'hayward', 'Berkeley (looking south)', '5 Mb', '20 Mb');?>
      <?php print buildMovieHtml('HaywardM68_FremontEp_Napa', 'hayward', 'Napa (looking south)', '5 Mb', '18 Mb');?>
      <?php print buildMovieHtml('HaywardM68_FremontEp_Concord', 'hayward', 'Concord (looking west)', '6 Mb', '24 Mb');?>
      <?php print buildMovieHtml('HaywardM68_FremontEp_SanJose', 'hayward', 'San Jose (looking north)', '6 Mb', '23 Mb');?>
      <?php print buildMovieHtml('HaywardM68_FremontEp_Hayward', 'hayward', 'Hayward (looking east)', '5 Mb', '20 Mb');?>
    </div>
    <?php include "movies_description.html" ?>
  </section>
</div>

<p id="back">&laquo; <a href="./">Back</a></p>
