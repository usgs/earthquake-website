<?php
// Author: Lisa Wald
// Contact: Lisa Wald, lisa@usgs.gov
// Last modified: 10/05/2015
if (!isset($TEMPLATE)) {
  $TITLE = 'Hazards';
  include 'template.inc.php';
}
?>

<div class="alert info">
  <h3><a href="contributions.php">Request for Hazard Modeling Contributions</a></h3>
  <p>
    The USGS requests that the earthquake hazard community bring to our attention new earthquake source and ground motion data or models that could be included in the NSHM updates. In addition, workshops are held for feedback and comments. The National Seismic Hazard Model will be updated twice over the next 6 years since the 2014 update.
  </p>
</div>

<div class = "row">
  <div class = "column three-of-five">

    <ul class="no-style linklist">
      <li>
        <a href="designmaps/">
          <h4>Design Ground Motions</h4>
          <img src="images/design-2x.jpg" width="150"/>
        </a>
        <p>Ground motion parameter values for building and bridge design.</p>
      </li>
      <li>
        <a href="hazmaps/">
          <h4>Hazard Maps and Site-Specific Data</h4>
          <img src="images/hazmap-2x.gif" width="150"/>
        </a>
        <p>
          Probabilistic and scenario ground-motion hazard maps, input and output data, and documentation.  Also, tools to create customized hazard and probability maps with additional options to assess individual source-contributions to overall hazard.
        </p>
      </li>
      <li>
        <a href="qfaults/">
          <h4>Quaternary Faults</h4>
          <img src="images/faults-2x.gif" width="150"/>
        </a>
        <p>
          Interactive fault map and comprehensive geologically based information on known or suspected active faults and folds in the United States. Also, generalized fault data used in the hazard maps.
        </p>
      </li>
      <li>
        <a href="contributions.php">
          <h4>Request for Hazard Modeling Contributions</h4>
          <img src="images/contrib-2x.gif" width="150"/>
        </a>
        <p>
          The USGS requests that the earthquake hazard community bring to our attention new earthquake source and ground motion data or models that could be included in the NSHM updates. In addition, workshops are held for feedback and comments. The National Seismic Hazard Model will be updated twice over the next 6 years since the 2014 update.
        </p>
      </li>

    </ul>

  </div>

  <div class = "column two-of-five">
    <div class="alert" style="margin-bottom:16px">

      <h3>What's In My Backyard?</h3>
      <p><img src="images/backyard.jpg" width="384"/></p>
      <p>
        What do I need to know about earthquake hazards?  What does "earthquake hazard" mean?  What are hazard maps?
      </p>
      <ul>
        <li><a href="learn/">Introduction to the Hazard Maps</a></li>
        <li><a href="about/basics.php">Earthquake Hazards 101</a>-The Basics</li>
        <li><a href="http://pubs.usgs.gov/fs/2008/3017/">Fact Sheet</a> - U.S. National Seismic Hazard Maps</li>
        <li><a href="http://www.usgs.gov/faq/taxonomy/term/9843">Seismic Hazard Maps FAQ</a></li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">

      <h3>Technical Overview and Workshops</h3>
      <ul>
        <li><a href="about/technical.php">Earthquake Hazards 201</a>-Technical Q&amp;A</li>
        <li><a href="about/workshops/">Workshops</a></li>
        <li><a href="about/personnel.php">Personnel</a></li>
        <li><a href="/learn/publications/pubs_tech.php#NationalSeismicHazardMaps%28NSHM%29">Publications</a></li>
      </ul>
    </div>
  </div>

</div>
