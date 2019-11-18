<?php
// Author: Lisa Wald
// Contact: Mark Petersen
if (!isset($TEMPLATE)) {
  $TITLE = 'Hazards';
  include 'template.inc.php';
}
?>

<div class="alert info">
  <h3><a href="/moving.php">The Earthquake Hazards Program website is moving.</a>
</div>

<div class="alert info">
  <h3><a href="contributions.php">Request for Hazard Modeling Contributions</a></h3>
  <p>
    The USGS requests that the earthquake hazard community bring to our attention new earthquake source and ground motion data or models that could be included in the NSHM updates. In addition, workshops are held for feedback and comments. The National Seismic Hazard Model will be updated twice over the next 6 years since the 2014 update. <a href="images/contrib-sched.png">View NSHM Schedule 2016-2021</a>.
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
        <p>Ground motion parameter values for the design of buildings, bridges, and other structures.</p>
      </li>
      <li>
        <a href="hazmaps/">
          <h4>Seismic Hazard Maps and Site-Specific Data</h4>
          <img src="images/hazmap-2x.gif" width="150"/>
        </a>
        <p>
          U.S. Seismic Hazard Maps, hazard tools, and other products.
        </p>
      </li>
      <li>
        <a href="qfaults/">
          <h4>Faults</h4>
          <img src="images/faults-2x.gif" width="150"/>
        </a>
        <p>
          Interactive fault map and comprehensive geologically based information on known or suspected active faults and folds in the United States. Also, generalized fault data used in the hazard maps.
        </p>
      </li>
      <li>
        <a href="/scenarios/">
          <h4>Scenarios</h4>
          <img src="images/scenarios.png" width="150"/>
        </a>
        <p>
          Earthquake Scenarios describe the expected ground motions and effects of specific hypothetical large earthquakes.
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
        <li><a href="learn/basics.php">Earthquake Hazards 101</a>-The Basics</li>
        <li><a href="https://doi.org/10.5066/F7S75FJM">Interactive U.S. Faults Map</a></li>
        <li><a href="https://pubs.usgs.gov/fs/2008/3017/">Fact Sheet</a> - U.S. National Seismic Hazard Maps</li>
        <li><a href="https://www.usgs.gov/faq/natural-hazards">Seismic Hazard Maps FAQ</a> - select topic "Seismic Hazards"</li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">

      <h3>Technical Overview and Workshops</h3>
      <ul>
        <li><a href="learn/technical.php">Earthquake Hazards 201</a>-Technical Q&amp;A</li>
        <li><a href="workshops/">Workshops</a></li>
        <li><a href="personnel.php">Personnel</a></li>
        <li><a href="pubs.php">Publications</a></li>
      </ul>
    </div>
  </div>

</div>
