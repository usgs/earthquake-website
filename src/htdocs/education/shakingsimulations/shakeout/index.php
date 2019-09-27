<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Southern California ShakeOut';
  $HEAD = '<link rel="stylesheet" href="../style.css"';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
include_once('../buildMovieHtml.inc.php');
?>
<p>
  The <a href="http://shakeout.org">Great Southern California ShakeOut</a> earthquake drill is based on a magnitude 7.8 scenario earthquake on the San Andreas fault in southern California. This portion of the San Andreas fault has been identified as the most likely source of a very large earthquake in California (<a href="http://pubs.usgs.gov/fs/2008/3027/">Working Group on California Earthquake Probabilities</a>). As part of the earthquake drill, computer simulations of the ground shaking from this scenario earthquake were constructed through a collaborative effort between the USGS and the <a href="http://www.scec.org">Southern California Earthquake Center</a>, which involved researchers from the USGS, <a href="http://urscorp.com">URS Corporation</a>, <a href="http://www.geology.sdsu.edu">San Diego State University</a>, and <a href="http://www.ce.cmu.edu">Carnegie Mellon University</a>. These computer simulations capture the shaking at length scales larger than about 300 ft (100 m) and provide detailed pictures of the shaking for this scenario earthquake.
</p>

<p>
  The magnitude 7.8 scenario earthquake ruptures 186 miles (300 km) of the San Andreas fault from Bombay Beach at the edge of the Salton Sea in the south to Lake Hughes northwest of Palmdale in the north. The final slip (offset across the fault) ranges from 6-23 ft (2-7 m). <b>The colors in the movies indicate the peak intensity of the shaking up to the current time at each location.</b> See <a href="../colors.php">Explanation of Colors</a> for a more detailed description of the color scheme.
</p>
<p>
  The movies are available in two different resolutions. The normal resolution versions are typically 10-20 MB in size. The high definition (HD) versions are typically 50-80 MB in size and are best viewed on high resolution displays.
</p>
<p>
  These images and movies are in the public domain and may be used freely. Please credit the U.S Geological Survey and the Southern California Earthquake Center.
</p>

  <h3>Map View</h3>

  <p>
    This movie shows a view of southern California with the seismic waves radiating outward from the fault as the rupture propagates towards the northwest along the San Andreas fault.
  </p>

  <div class="movies">
    <?php print buildMovieHtml('ShakeOut_mapview', 'shakeout', '', '6 Mb', '24 Mb'); ?>
  </div>
  <h3>Detailed Perspective Views</h3>
  <!--<figure class="left">-->
  <div class="map">
    <img src="./images/map_ShakeOut.jpg" alt="region map" usemap="#MapSites" style="max-width:none;" width="600" height="325"/>
    <map name="MapSites" id="MapSites">
      <area shape="rect" coords="226,177,273,192" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_BuenaPark.mp4" alt="Buena Park" title="Click for normal resolution Buena Park movie" />
      <area shape="rect" coords="175,112,223,127" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_Burbank.mp4" alt="Burbank" title="Click for normal resolution Burbank movie" />
      <area shape="rect" coords="287,79,347,94" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_CajonPass.mp4" alt="Cajon Pass" title="Click for normal resolution Cajon Pass movie" />
      <area shape="rect" coords="277,170,319,185" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_Corona.mp4" alt="Corona" title="Click for normal resolution Corona movie" />
      <area shape="rect" coords="178,209,277,224" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_HuntingtonBeach.mp4" alt="Huntington Beach" title="Click for normal resolution Huntington Beach movie" />
      <area shape="rect" coords="182,16,237,31" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_Lancaster.mp4" alt="Lancaster" title="Click for normal resolution Lancaster movie" />
      <area shape="rect" coords="167,189,231,204" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_LongBeach.mp4" alt="Long Beach" title="Click for normal resolution Long Beach movie" />
      <area shape="rect" coords="161,135,223,150" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_LosAngeles.mp4" alt="Los Angeles" title="Click for normal resolution Los Angeles movie" />
      <area shape="rect" coords="119,151,200,166" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_MarinadelRey.mp4" alt="Marina del Rey" title="Click for normal resolution Marina del Rey movie" />
      <area shape="rect" coords="263,133,306,148" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_Ontario.mp4" alt="Ontario" title="Click for normal resolution Ontario movie" />
      <area shape="rect" coords="425,180,492,195" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_PalmSprings.mp4" alt="Palm Springs" title="Click for normal resolution Palm Springs movie" />
      <area shape="rect" coords="3,93,47,108" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_Ventura.mp4" alt="Ventura" title="Click for normal resolution Ventura movie" />
      <area shape="rect" coords="179,168,213,183" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_Watts.mp4" alt="Watts" title="Click for normal resolution Watts movie" />
      <area shape="rect" coords="95,115,175,130" href="https://escweb.wr.usgs.gov/content/education/shakingsimulations/shakeout/ShakeOut_WoodlandHills.mp4" alt="Woodland Hills" title="Click for normal resolution Woodland Hills movie" />
    </map>
  <!--</figure>-->
  <?php include "perspective_description.html" ?>

    <p>
      The displacement offset across the fault caused by the earthquake rupture is clearly evident in the Cajon Pass and Palm Springs views. It is visible, but less so, in the Ontario and Lancaster views.
    </p>
  </div>

    <p>
      The table below gives the maximum displacement (how much the ground moves) and maximum velocity (how fast the ground moves) for a point in the foreground in each of the perspective views.
    </p>
    <table class="tabular">
      <caption>Maximum Displacements and Velocities in Perspective Views</caption>
      <tr><th>Location</th><th>Max. Displacement</th><th>Max. Velocity</th></tr>
      <tr><td>Buena Park</td><td align="center">0.8 m (3 ft)</td><td align="center">0.6 m/s (2 ft/s)</td></tr>
      <tr><td>Burbank</td><td align="center">0.5 m (2 ft)</td><td align="center">0.5 m/s (2 ft/s)</td></tr>
      <tr><td>Cajon Pass</td><td align="center">3.1 m (10 ft)</td><td align="center">1.9 m/s (6 ft/s)</td></tr>
      <tr><td>Corona</td><td align="center">0.5 m (2 ft)</td><td align="center">0.5 m/s (2 ft/s)</td></tr>
      <tr><td>Huntington Beach</td><td align="center">0.7 m (2 ft)</td><td align="center">0.6 m/s (2 ft/s)</td></tr>
      <tr><td>Lancaster</td><td align="center">1.9 m (6 ft)</td><td align="center">1.4 m/s (5 ft/s)</td></tr>
      <tr><td>Long Beach</td><td align="center">0.5 m (2 ft)</td><td align="center">0.6 m/s (2 ft/s)</td></tr>
      <tr><td>Los Angeles</td><td align="center">0.7 m (2 ft)</td><td align="center">0.6 m/s (2 ft/s)</td></tr>
      <tr><td>Marina del Rey</td><td align="center">0.5 m (2 ft)</td><td align="center">0.4 m/s (1 ft/s)</td></tr>
      <tr><td>Ontario</td><td align="center">0.8 m (3 ft)</td><td align="center">0.6 m/s (2 ft/s)</td></tr>
      <tr><td>Palm Springs</td><td align="center">1.3 m (4 ft)</td><td align="center">1.3 m/s (4 ft/s)</td></tr>
      <tr><td>Ventura</td><td align="center">0.7 m (2 ft)</td><td align="center">0.5 m/s (2 ft/s)</td></tr>
      <tr><td>Watts</td><td align="center">1.2 m (4 ft)</td><td align="center">1.2 m/s (4 ft/s)</td></tr>
      <tr><td>Woodland Hills</td><td align="center">0.4 m (1 ft)</td><td align="center">0.3 m/s (1 ft/s)</td></tr>
    </table>

  <div class = "videos">
    <?php print buildMovieHtml('ShakeOut_BuenaPark', 'shakeout', 'Buena Park', '11 Mb', '45 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_Burbank', 'shakeout', 'Burbank', '10 Mb', '38 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_CajonPass', 'shakeout', 'Cajon Pass', '7 Mb', '27 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_Corona', 'shakeout', 'Corona', '8 Mb', '31 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_HuntingtonBeach', 'shakeout', 'Huntington Beach', '10 Mb', '40 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_Lancaster', 'shakeout', 'Lancaster', '7 Mb', '29 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_LongBeach', 'shakeout', 'Long Beach', '11 Mb', '43 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_LosAngeles', 'shakeout', 'Los Angeles', '11 Mb', '41 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_Ontario', 'shakeout', 'Ontario', '8 Mb', '33 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_MarinadelRey', 'shakeout', 'Marina del Rey', '10 Mb', '39 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_PalmSprings', 'shakeout', 'Palm Springs', '8 Mb', '31 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_Ventura', 'shakeout', 'Ventura', '10 Mb', '39 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_Watts', 'shakeout', 'Watts', '13 Mb', '55 Mb'); ?>
    <?php print buildMovieHtml('ShakeOut_WoodlandHills', 'shakeout', 'Woodland Hills', '11 Mb', '41 Mb'); ?>




  </div>
