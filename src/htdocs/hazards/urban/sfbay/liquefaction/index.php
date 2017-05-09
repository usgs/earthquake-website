<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Liquefaction Hazard Maps';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $NAVIGATION  = true;

  include 'template.inc.php';
}

?>

<h2>Overview</h2>
<p>Liquefaction is a phenomenon that is caused by earthquake shaking. Wet sand can become liquid-like when strongly shaken. The liquefied sand may flow and the ground may move and crack, causing damage to surface structures and underground utilities.</p>

<ul class="no-style linklist">
  <li>
    <a href="sfbay/">
      <h3>San Francisco Bay Area</h3>
      <img src="sfbay/12liq.gif" alt="liquefaction map">
    </a>
    <p>These maps are designed to give the general public as well as land-use planners, utilities and lifeline owners, and emergency response officials, new and better tools to assess their risk from earthquake damage.</p>
  </li>

  <li>
    <a href="alameda/">
      <h3>Northwestern Alameda County</h3>
      <img src="alameda/images/liquefaction2.gif" alt="map showing liquefaction hazard">
    </a>
    <p>This map shows the liquefaction hazard in the communities of Alameda, Berkeley, Emeryville, Oakland, and Piedmont for a magnitude 7.1 earthquake on the Hayward fault.</p>
  </li>

  <li>
    <a href="scvalley/">
      <h3>Northern Santa Clara Valley</h3>
      <img src="scvalley/images/san_andreas.jpg" alt="image">
    </a>
    <p>This map shows the likelihood of liquefaction in Northern Santa Clara County during a magnitude 7.8 earthquake on the northernmost segments of the San Andreas Fault.</p>
  </li>

</ul>
