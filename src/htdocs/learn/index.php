<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Learn';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<div class = "row">
  <div class = "column three-of-five">

    <ul class="no-style linklist">
      <li>
        <a href="faq.php">
          <h4>FAQ</h4>
          <img src="images/main-faq.gif" width="150"/>
        </a>
        <p>Frequently Asked Questions.  Seriously, check here first.</p>
      </li>
      <li>
        <a href="kids/">
          <h4>For Kids</h4>
          <img src="images/main-forkids.gif" width="150"/>
        </a>
        <p>
          Fun and educational resources including Science Fair ideas and earthquake science you can understand.
        </p>
      </li>
      <li>
        <a href="topics.php">
          <h4>Earthquake Topics</h4>
          <img src="images/main-EQtopics.gif" width="150"/>
        </a>
        <p>
          Learn about a variety of earthquake topics. USGS resources and links to outside educational resources.  Browse or search.
        </p>
      </li>
      <li>
        <a href="glossary/">
          <h4>Earthquake Glossary</h4>
          <img src="images/main-glossary.gif" width="150"/>
        </a>
        <p>
          200+ earthquake terms with a definition and image.
        </p>
      </li>
      <li>
        <a href="preparedness.php">
          <h4>Prepare</h4>
          <img src="images/main-prepare.gif" width="150"/>
        </a>
        <p>
          Learn what you can do to prepare for an earthquake… before, during, and after.
        </p>
      </li>
      <li>
        <a href="kml.php">
          <h4>Google Earth/KML Files</h4>
          <img src="images/main-kml.jpg" width="150"/>
        </a>
        <p>
          Downloadable layers for display iin Google Earth.<sup>TM</sup>
        </p>
      </li>
      <li>
        <a href="posters.php">
          <h4>Earthquake Summary Posters</h4>
          <img src="images/poster.jpg" width="150"/>
        </a>
        <p>
          Epicentral area, plate tectonic environment, earthquake history, and generalized seismic hazard of the region.
        </p>
      </li>

    </ul>

  </div>

  <div class = "column two-of-five">
    <div class="alert" style="margin-bottom:16px">

      <h3>Multimedia</h3>
      <a href="photos.php"><img src="images/hectormine.jpg" alt="two people walking on top of a fault scarp"/></a>
      <ul>
        <li><a href="photos.php">Earthquake Photos</a> - earthquake effects and damage.</li>
      </ul>
      <img src="" alt="">
      <p>Educational videos and audio interviews on a variety of earthquake topics.</p>
      <ul>
        <li><a href="videos.php">Videos</a></li>
        <li><a href="podcasts.php">PodCasts</a></li>
      </ul>

      <h3>Publications</h3>
      <a href="publications/pubs_factsheets.php"><img src="images/publications.jpg" alt="cover of EQ Country"/></a>
      <ul>
        <li><a href="publications/pubs_factsheets.php">Fact Sheets</a></li>
        <li><a href="publications/pubs_geninfo.php">General Information</a></li>
        <li><a href="publications/pubs_maps.php">Maps</a></li>
        <li><a href="publications/pubs_multimedia.php">Multimedia</a></li>
        <li><a href="publications/pubs_ofr_bull_circ.php">Open-File Reports, Bulletins, Circulars</a></li>
      </ul>
    </div>
  </div>

</div>
