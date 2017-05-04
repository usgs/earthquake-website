<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Liquefaction Hazard Maps';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $NAVIGATION  = true;

  include 'template.inc.php';
}

?>

<h2>Northwestern Alameda County</h2>
<div>
  <a href="http://pubs.usgs.gov/of/2002/of02-296/of02-296_2liq-sg.pdf"><img src="images/liquefaction2.gif" alt="map showing liquefaction hazard"/></a>
  <p>This map shows the liquefaction hazard in
                the communities of Alameda, Berkeley, Emeryville, Oakland, and
                Piedmont for a magnitude 7.1 earthquake on the Hayward fault.
                The map predicts the approximate percentage of each designated
                area that will liquefy and show surface manifestations of liquefaction
                such as sand boils and ground cracking. Liquefaction is a phenomenon
                that is caused by earthquake shaking. Wet sand can become liquid-like
                when strongly shaken. The liquefied sand may flow and the ground
                may crack and move causing damage to surface structures and
                underground utilities. The map depicts the hazard at a regional
                scale and should not be used for site-specific design and consideration.
                Subsurface conditions can vary abruptly and borings are required
                to address the hazard at a given location.</p>
  <p><a href="http://pubs.usgs.gov/of/2002/of02-296/of02-296_2liq-sg.pdf">High quality printable image</a>.</p>
</div>

<ul>
  <li><a href="shaking.php">Shaking Hazard Map for Northwestern Alameda County</a></li>
  <li>Complete USGS <a href="http://pubs.usgs.gov/of/2002/of02-296/">Open-file Report 02-296</a> includes full text and spatial database files.</li>
  <li><a href="https://earthquake.usgs.gov/research/cpt/data/alameda/">Cone Penetration Testing (CPT) data for Alameda County</a></li>
  <li><a href="http://www.conservation.ca.gov/cgs/shzp/">CGS Seismic Hazard Zone Maps</a></li>
</ul>
