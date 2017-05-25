<?php
// Author: Lisa Wald
// Contact: Lisa Wald, lisa@usgs.gov
if (!isset($TEMPLATE)) {
  $TITLE = 'Research';
  $HEAD = '<link rel="stylesheet" href="styles.css"/>';
  include 'template.inc.php';
}
?>

<div class = "row">
  <div class = "column three-of-five">

    <ul class="no-style linklist">
      <li>
        <a href="induced/">
          <h4>Induced Earthquakes</h4>
          <img src="images/topic-induced.png" width="150" alt="thumbnail of Oklahoma seismicity graph"/>
        </a>
        <p>
          Current research on induced earthquakes due to human activities. Observations, modeling, and hazards.
        </p>
      </li>
      <li>
        <a href="earlywarning/">
          <h4>Early Warning</h4>
          <img src="images/topic-earlywarning.jpg" width="150" alt="thumbnail of mockup of early warning screen"/>
        </a>
        <p>
          A few seconds matter. USGS has been working to develop earthquake early warning for the United States.
        </p>
      </li>
      <li>
        <a href="faults/">
          <h4>Faults, Earthquake Geology, and Special Earthquake Studies</h4>
          <img src="images/topic-eqgeology.jpg" width="150" alt="thumbnail photo of Denali fault offsetting snow"/>
        </a>
        <p>
          The study of active fault zones, and collections of information for specific significant earthquakes.
        </p>
      </li>
      <li>
        <a href="hazrisk/">
          <h4>Hazard and Risk</h4>
          <img src="images/topic-hazrisk.gif" width="150" alt="thumbnail of national hazard map"/>
        </a>
        <p>
          To mitigate earthquake losses, scientists evaluate the earthquake hazards across the country.
        </p>
      </li>
      <li>
        <a href="eqproc/">
          <h4>Earthquake Processes and Effects</h4>
          <img src="images/topic-eqproc.jpg" width="150" alt="thumbnail of SAFZ in SCA"/>
        </a>
        <p>
          Crustal deformation, ground motion, ground failure, and the effects of earthquakes.
        </p>
      </li>
      <li>
        <a href="monitoring/">
          <h4>Monitoring Improvements</h4>
          <img src="images/topic-monitoring.jpg" width="150" alt="map with red markers"/>
        </a>
        <p>Scientists are doing research to improve earthquake monitoring, detection and analysis.</p>
      </li>
      <li>
        <a href="external/">
        <h4>External Grants</h4>
        <img src="images/grants.jpg" width="150" alt="3d image of fault segments in southern California"/>
      </a>
        <p>
          The USGS supports external research that will assist in achieving the goals of the National Earthquake Hazards Reduction Program (NERHP).
        </p>
      </li>
    </ul>
  </div>

  <div class = "column two-of-five">
    <div class="alert" style="margin-bottom:16px">

      <h3>Science for Everyone</h3>

      <p>View all <a href="everyone/">Science for Everyone</a> articles.</p>

      <a href="/learn/topics/paleo-intro">
        <h3>Introduction to Paleoseismology: The Past Informs the Future</h3>
        <img src="images/intro-paleo.gif" width="384"/>
      </a>

      <a href="everyone/maine2012/">
        <h3>Ground-Truthing After the M4.0 Earthquake in Southern Maine, October 16, 2012</h3>
        <img src="everyone/maine2012/images/seis.gif" width="384"/>
      </a>

    </div>

    <div class="alert" style="margin-bottom:16px">
      <a href="/contactus/">
        <h3>Regional Science Activities</h3>
        <img src="images/regional.jpg" alt="Menlo Park Science Center building">
      </a>
      <ul>
        <li>
          <a href="/contactus/anchorage/">Alaska Science Center, Anchorage, AK</a>
        </li>
        <li>
          <a href="/contactus/seattle/">Seattle Field Office, Seattle, WA</a>
        </li>
        <li>
          <a href="/contactus/menlo/">Earthquake Science Center, Menlo Park, CA</a>
        </li>
        <li>
          <a href="/contactus/pasadena/">Pasadena Field Office, Pasadena, CA</a>
        </li>
        <li>
          <a href="/contactus/golden/">Geologic Hazards Science Center, Golden, CA</a>
        </li>
      </ul>
    </div>

    <div class="alert" style="margin-bottom:16px">
      <h3>See also:</h3>
      <p>
        <a href="software/">
          <img src="software/images/3DFM.jpg" class="software">
        </a>
        <br style="clear:left;"/>
        <a href="software/">
          Software
        </a> to Download for Research
      </p>
    </div>

  </div>
</div>
