<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Liquefaction Hazard Maps Overview';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $NAVIGATION  = true;

  include 'template.inc.php';
}
?>

<ul class="no-style linklist">
  <li>
    <a href="sfbay/">
      <h3>San Francisco Bay Area</h3>
      <img src="sfbay/12liq.gif" alt="liquefaction map">
    </a>
    <p></p>
  </li>

  <li>
    <a href="alameda/">
      <h3>Northwestern Alameda County</h3>
      <img src="alameda/images/liquefaction2.gif" alt="map showing liquefaction hazard">
    </a>
    <p></p>
  </li>

  <li>
    <a href="scvalley/">
      <h3>Northern Santa Clara Valley</h3>
      <img src="scvalley/images/san_andreas.jpg" alt="image">
    </a>
    <p></p>
  </li>

</ul>
