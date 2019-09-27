<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'M7.0 Earthquake Scenarios - Hayward Fault';
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
These three scenarios show the ground shaking for a magnitude 7.0 earthquake on the Hayward fault. Similar to the <a href="M6.8.php">magnitude 6.8 scenarios</a>, the slip or offset across the fault is the same in all three cases, but the earthquake ruptures start in different locations, in this case, San Pablo Bay, Oakland, and Fremont. These scenarios are larger than the magnitude 6.8 1868 earthquake but are about as likely to occur as the magnitude 6.8 scenarios because there has not been a large earthquake on the northern portion of the Hayward fault for about 300 years.
</p>
<p>
These scenario earthquakes rupture 52 miles (83 km) of the Hayward fault extending from Fremont to San Pablo Bay. The average slip or offset across the fault is about 4 ft (1.3 m). Compared to the magnitude 6.8 scenarios, these magnitude 7.0 scenarios have a longer rupture length and larger average slip. This results in significantly stronger shaking.
</p>

<div class="tablist">
  <section class="panel" data-title="San Pablo Bay Epicenter" data-selected="true">
    <header>
      <h2>San Pablo Bay Epicenter</h2>
    </header>
    <h3>Map View</h3>
    <div class="movies">
      <?php print buildMovieHtml('HaywardM70_SanPabloBayEp_mapview', 'hayward', '',' 4 Mb',' 17 Mb'); ?>
    </div>
    <h3>Detailed Perspective Views</h3>
    <div class="map">
      <img src="images/map_HaywardM70_SanPabloBayEp.jpg" alt="region map" usemap="#MapSanPabloBayEp" style="max-width: none" width="372" height="400"/>
      <map name="MapSanPabloBayEp" id="MapSanPabloBayEp">
        <area shape="rect" coords="195,235,245,249" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_SanPabloBayEp_Fremont.mp4" alt="Fremont" title="Click for normal resolution Fremont movie" />
        <area shape="rect" coords="223,208,282,226" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_SanPabloBayEp_Livermore.mp4" alt="Livermore" title="Click for normal resolution Livermore movie" />
        <area shape="rect" coords="148,186,203,201" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_SanPabloBayEp_Oakland.mp4" alt="Oakland" title="Click for normal resolution Oakland movie" />
        <area shape="rect" coords="208,275,260,293" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_SanPabloBayEp_SanJose.mp4" alt="San Jose" title="Click for normal resolution San Jose movie" />
      </map>
      <?php print file_get_contents('perspective_description.html') ?>
      <p>The ground moves 18-24 inches (0.3-0.6 m) at locations along the fault. In Livermore the sedimentary basin amplifies the motions so that the maximum displacement is 3.5 ft (1 m).</p>
    </div>
    <div class = "videos">
      <?php print buildMovieHtml('HaywardM70_SanPabloBayEp_Fremont', 'hayward', 'Fremont (looking north)','6 Mb','24 Mb');?>
      <?php print buildMovieHtml('HaywardM70_SanPabloBayEp_Livermore', 'hayward', 'Livermore (looking west)','6 Mb','23 Mb');?>
      <?php print buildMovieHtml('HaywardM70_SanPabloBayEp_Oakland', 'hayward', 'Oakland (looking north)','6 Mb','22 Mb');?>
      <?php print buildMovieHtml('HaywardM70_SanPabloBayEp_SanJose', 'hayward', 'San Jose (looking north)','7 Mb','26 Mb');?>
    </div>
    <?php include "movies_description.html" ?>
  </section>

  <section class="panel" data-title="Oakland Epicenter">
    <header>
      <h2>Oakland Epicenter</h2>
    </header>
    <h3>Map View</h3>
    <div class="movies">
      <?php print buildMovieHtml('HaywardM70_OaklandEp_mapview', 'hayward','','5 Mb','19 Mb');?>
    </div>
    <h3>Detailed Perspective Views</h3>
    <div class="map">
      <img src="images/map_HaywardM70_OaklandEp.jpg" alt="region map" usemap="#MapOaklandEp" style="max-width: none" width="372" height="400"/>
      <map name="MapOaklandEp" id="MapOaklandEp">
        <area shape="rect" coords="149,170,200,183" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_Berkeley.mp4" alt="Berkeley" title="Click for normal resolution Berkeley movie" />
        <area shape="rect" coords="185,151,240,166" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_Concord.mp4" alt="Concord" title="Click for normal resolution Concord movie" />
        <area shape="rect" coords="195,235,245,249" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_Fremont.mp4" alt="Fremont" title="Click for normal resolution Fremont movie" />
        <area shape="rect" coords="223,208,282,226" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_Livermore.mp4" alt="Livermore" title="Click for normal resolution Livermore movie" />
        <area shape="rect" coords="156,88,189,105" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_Napa.mp4" alt="Napa" title="Click for normal resolution Napa movie" />
        <area shape="rect" coords="130,147,185,160" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_PointPinole.mp4" alt="Point Pinole" title="Click for normal resolution Point Pinole movie" />
        <area shape="rect" coords="113,191,192,206" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_SanFrancisco.mp4" alt="San Francisco" title="Click for normal resolution San Francisco movie" />
        <area shape="rect" coords="208,275,260,293" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_SanJose.mp4" alt="San Jose" title="Click for normal resolution San Jose movie" />
        <area shape="rect" coords="76,62,139,76" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_OaklandEp_SantaRosa.mp4" alt="Santa Rosa" title="Click for normal resolution Santa Rosa movie" />
      </map>
      <?php print file_get_contents('perspective_description.html') ?>
      <p>The ground moves 18-24 inches (0.3-0.6 m) at locations along the fault. In Livermore the sedimentary basin amplifies the motions so that the maximum displacement is 2 ft (0.6 m).</p>
    </div>
    <div class = "videos">
      <?php print buildMovieHtml('HaywardM70_OaklandEp_Berkeley', 'hayward', 'Berkeley (looking south)','5 Mb','22 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_Concord', 'hayward', 'Concord (looking west)','6 Mb','27 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_Fremont', 'hayward', 'Fremont (looking north)','6 Mb','24 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_Livermore', 'hayward', 'Livermore (looking west)','6 Mb','25 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_Napa', 'hayward', 'Napa (looking south)','6 Mb','25 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_PointPinole', 'hayward', 'Point Pinole (looking south)','5 Mb','20 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_SanFrancisco', 'hayward', 'San Francisco (looking east)','5 Mb','19 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_SanJose', 'hayward', 'San Jose (looking north)','8 Mb','31 Mb');?>
      <?php print buildMovieHtml('HaywardM70_OaklandEp_SantaRosa', 'hayward', 'Santa Rosa (looking south)','6 Mb','25 Mb');?>
    </div>
    <?php include "movies_description.html" ?>
  </section>

  <section class="panel" data-title="Fremont Epicenter">
    <header>
      <h2>Fremont Epicenter</h2>
    </header>
    <h3>Map View</h3>
    <div class="movies">
      <?php print buildMovieHtml('HaywardM70_FremontEp_mapview', 'hayward','','4 Mb','17 Mb');?>
    </div>
    <h3>Detailed Perspective Views</h3>
    <div class="map">
      <img src="images/map_HaywardM70_FremontEp.jpg" alt="region map" usemap="#MapFremontEp" style="max-width: none" width="372" height="400"/>
      <map name="MapFremontEp" id="MapFremontEp">
        <area shape="rect" coords="149,170,200,183" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_FremontEp_Berkeley.mp4" alt="Berkeley" title="Click for normal resolution Berkeley movie" />
        <area shape="rect" coords="185,151,240,166" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_FremontEp_Concord.mp4" alt="Concord" title="Click for normal resolution Concord movie" />
        <area shape="rect" coords="173,219,226,235" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_FremontEp_Hayward.mp4" alt="Hayward" title="Click for normal resolution Hayward movie" />
        <area shape="rect" coords="130,147,185,160" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_FremontEp_PointPinole.mp4" alt="Point Pinole" title="Click for normal resolution Point Pinole movie" />
        <area shape="rect" coords="156,88,189,105" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_FremontEp_Napa.mp4" alt="Napa" title="Click for normal resolution Napa movie" />
        <area shape="rect" coords="208,275,260,293" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/hayward/HaywardM70_FremontEp_SanJose.mp4" alt="San Jose" title="Click for normal resolution San Jose movie" />
      </map>
      <?php print file_get_contents('perspective_description.html')?>
      <p>In Berkeley and Hayward the ground moves about 2-3 ft, while in San Jose and Napa the ground moves only about 1 ft.</p>
    </div>
    <div class = "videos">
      <?php print buildMovieHtml('HaywardM70_FremontEp_Berkeley', 'hayward', 'Berkeley (looking south)','6 Mb','22 Mb');?>
      <?php print buildMovieHtml('HaywardM70_FremontEp_Concord', 'hayward', 'Concord (looking west)','7 Mb','28 Mb');?>
      <?php print buildMovieHtml('HaywardM70_FremontEp_Hayward', 'hayward', 'Hayward (looking east)','5 Mb','22 Mb');?>
      <?php print buildMovieHtml('HaywardM70_FremontEp_PointPinole', 'hayward', 'Point Pinole (looking south)','5 Mb','22 Mb');?>
      <?php print buildMovieHtml('HaywardM70_FremontEp_Napa', 'hayward', 'Napa (looking south)', '7 Mb', '26 Mb');?>
      <?php print buildMovieHtml('HaywardM70_FremontEp_SanJose', 'hayward', 'San Jose (looking north)','5 Mb','19 Mb');?>
    </div>
    <?php include "movies_description.html" ?>
  </section>
</div>

<p id="back">&laquo; <a href="./">Back</a></p>
