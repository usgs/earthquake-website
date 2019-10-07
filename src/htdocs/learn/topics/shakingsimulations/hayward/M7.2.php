<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'M7.2 Earthquake Scenarios - Hayward and Rodgers Creek Faults';
  $HEAD = '<link rel="stylesheet" href="../style.css"';
  $NAVIGATION = true;

  include 'template.inc.php';
}

include_once('../buildMovieHtml.inc.php');

?>

<p>
  This scenario shows the ground shaking from a magnitude 7.2 earthquake involving rupture of both the Hayward and Rodgers Creek faults. In this scenario, rupture begins beneath San Pablo Bay and simultaneously proceeds towards the south on the Hayward fault and towards north on the Rodgers Creek fault. Although earthquakes on multiple faults do occur, they are much rarer than earthquakes on a single fault. Consequently, <strong>this scenario, which involves rupture of two faults, is much less likely to occur</strong> than any of the <a href="M6.8.php">magnitude 6.8</a> or <a href="M7.0.php">magnitude 7.0 scenarios</a>.
</p>

<p>
  This scenario earthquake ruptures 51 miles (83 km) of the Hayward fault from San Pablo Bay to Fremont and 39 miles (63 km) of the Rodgers Creek fault from San Pablo Bay to north of Santa Rosa. The average slip or offset across the Hayward fault is about 4 ft (1.2 m). For the Rodgers Creek fault it is about 3 ft (0.9 m).
</p>

<div>
  <h2>San Pablo Bay Epicenter</h2>
  <h3>Map View</h3>
  <div class="movies">
    <?php print buildMovieHtml('HaywardM72_SanPabloBayEp_mapview', 'hayward',' ', '5 Mb', '20 Mb'); ?>
  </div>
  <h3>Detailed Perspective Views</h3>
  <div class="map">
    <img src="images/map_HaywardM72_SanPabloBayEp.jpg" alt="region map" usemap="#MapSanPabloBayEp" style="max-width: none" width="372" height="400"/>
    <map name="MapSanPabloBayEp" id="MapSanPabloBayEp">
      <area shape="rect" coords="195,235,245,249" href="https://escweb.wr.usgs.gov/content/learn/topics/shakingsimulations/hayward/HaywardM72_SanPabloBayEp_Fremont.mp4" alt="Fremont" title="Click for normal resolution Fremont movie" />
      <area shape="rect" coords="156,88,189,105" href="https://escweb.wr.usgs.gov/content/learn/topics/shakingsimulations/hayward/HaywardM72_SanPabloBayEp_Napa.mp4" alt="Napa" title="Click for normal resolution Napa movie" />
      <area shape="rect" coords="148,186,203,201" href="https://escweb.wr.usgs.gov/content/learn/topics/shakingsimulations/hayward/HaywardM72_SanPabloBayEp_Oakland.mp4" alt="Oakland" title="Click for normal resolution Oakland movie" />
      <area shape="rect" coords="208,275,260,293" href="https://escweb.wr.usgs.gov/content/learn/topics/shakingsimulations/hayward/HaywardM72_SanPabloBayEp_SanJose.mp4" alt="San Jose" title="Click for normal resolution San Jose movie" />
      <area shape="rect" coords="76,62,139,76" href="https://escweb.wr.usgs.gov/content/learn/topics/shakingsimulations/hayward/HaywardM72_SanPabloBayEp_SantaRosa.mp4" alt="Santa Rosa" title="Click for normal resolution Santa Rosa movie" />
    </map>
    <?php include "perspective_description.html" ?>
    <p>At locations very close to the faults such as Fremont, Oakland, and Santa Rosa, the ground moves up to 2-3 ft. In San Jose the peak displacement is about 1 ft.</p>
  </div>

  <div class = "videos">
    <?php print buildMovieHtml('HaywardM72_SanPabloBayEp_Fremont', 'hayward', 'Fremont (looking north)','7 Mb', '26 Mb'); ?>
    <?php print buildMovieHtml('HaywardM72_SanPabloBayEp_Napa', 'hayward', 'Napa (looking south)', '5 Mb', '21 Mb'); ?>
    <?php print buildMovieHtml('HaywardM72_SanPabloBayEp_Oakland', 'hayward', 'Oakland (looking north)', '6 Mb', '24 Mb'); ?>
    <?php print buildMovieHtml('HaywardM72_SanPabloBayEp_SanJose', 'hayward', 'San Jose (looking north)','8 Mb', '32 Mb'); ?>
    <?php print buildMovieHtml('HaywardM72_SanPabloBayEp_SantaRosa', 'hayward', 'Santa Rosa (looking south)', '7 Mb', '27 Mb'); ?>
  </div>
</div>

<?php include "movies_description.html" ?>

<p id="back">&laquo; <a href="./">Back</a></p>
