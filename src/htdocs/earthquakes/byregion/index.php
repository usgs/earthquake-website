<?php
  // Author: Lisa Wald
  // Contact: Paul Earle
  // Last modified: 5/10/2016, Lisa Wald
  if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Information by Region';
  $HEAD = '<link rel="stylesheet" href="/lib/hazdev-svgimagemap.css"></script>' .
      '<link rel="stylesheet" href="index.css"/>';
  $FOOT = '<script src="/lib/hazdev-svgimagemap.js"></script>' .
      '<script src="index.js"></script>';

  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<h2>Seismicity of the Earth Maps 1900-2013</h2>

<p>
  Click an outlined area on the map or a link below the map to see the map and report for that area.
</p>

<div class="worldmap"></div>

<p>
	<a href="ftp://hazards.cr.usgs.gov/web/learn/worldseis.pdf" title="Download updated full-size world map (1900-2013)">Download updated (1900-2013) full-size worldwide seismicity map [12.3MB PDF]</a>
</p>

<h4>Seismicity of the Earth Open File Reports:</h4>
<ul>
	<li><a href="https://pubs.usgs.gov/sim/3064/">Seismicity of the Earth 1900&ndash;2007</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/a/">Seismicity of the Earth 1900&ndash;2010, Caribbean plate and vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/b/">Seismicity of the Earth 1900&ndash;2010, Aleutian arc and vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/c/">Seismicity of the Earth 1900&ndash;2007, Kuril-Kamchatka arc and vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/d/">Seismicity of the Earth 1900&ndash;2007, Japan and vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2015/1031/e/">Seismicity of the Earth 1900&ndash;2013, Nazca plate and South America</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/f/">Seismicity of the Earth 1900&ndash;2010, Mexico and vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/g/">Seismicity  of the Earth 1900&ndash;2010, Australia Plate and Vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/h/">Seismicity  of the Earth 1900&ndash;2010, New Guinea and Vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/i/">Seismicity  of the Earth 1900&ndash;2010, Eastern Margin of the Australia Plate</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/k/">Seismicity of the Earth 1900&ndash;2010, Middle East and Vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/j/">Seismicity of the Earth 1900&ndash;2010, Himalaya and Vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/l/">Seismicity of the Earth 1900&ndash;2012, Sumatra and vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/m/">Seismicity of the Earth 1900&ndash;2012, Philippine Sea Plate and Vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/n/">Seismicity of the Earth 1900&ndash;2012, Java and Vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/o/">Seismicity of the Earth 1900&ndash;2013, Offshore British Columbia-Southeastern Alaska and Vicinity</a></li>
	<li><a href="https://pubs.usgs.gov/of/2010/1083/p/">Seismicity of the Earth 1900&ndash;2013, East African Rift</a>
	<li><a href="http://pubs.er.usgs.gov/publication/ofr20101083Q">Seismicity of the Earth 1900&ndash;2013, Mediterranean Sea and vicinity</a>
</li>
</ul>


<h2>Information by State/Territory</h2>
<p>
  Click a state on the map or a state link below the map to view state-specific earthquake, fault, and seismicity information and links to additional state resources.
</p>
<p class="alert warning">
  Be aware that earthquake lists for states include earthquakes in adjacent states since the search area is a rectangle.
</p>

<div class="usmap"></div>

<div class="row">
  <div class="column one-of-four">
    <ul>
      <li><a href="alabama.php">Alabama</a></li>
      <li><a href="alaska.php">Alaska</a></li>
      <li><a href="arizona.php">Arizona</a></li>
      <li><a href="arkansas.php">Arkansas</a></li>
      <li><a href="california.php">California</a></li>
      <li><a href="colorado.php">Colorado</a></li>
      <li><a href="connecticut.php">Connecticut</a></li>
      <li><a href="delaware.php">Delaware</a></li>
      <li><a href="florida.php">Florida</a></li>
      <li><a href="georgia.php">Georgia</a></li>
      <li><a href="guam.php">Guam/Northern Marianas</a></li>
      <li><a href="hawaii.php">Hawaii</a></li>
    </ul>
  </div>
  <div class="column one-of-four">
    <ul>
      <li><a href="idaho.php">Idaho</a></li>
      <li><a href="illinois.php">Illinois</a></li>
      <li><a href="indiana.php">Indiana</a></li>
      <li><a href="iowa.php">Iowa</a></li>
      <li><a href="kansas.php">Kansas</a></li>
      <li><a href="kentucky.php">Kentucky</a></li>
      <li><a href="louisiana.php">Louisiana</a></li>
      <li><a href="maine.php">Maine</a></li>
      <li><a href="maryland.php">Maryland</a></li>
      <li><a href="massachusetts.php">Massachusetts</a></li>
      <li><a href="michigan.php">Michigan</a></li>
      <li><a href="minnesota.php">Minnesota</a></li>
      <li><a href="mississippi.php">Mississippi</a></li>
      <li><a href="missouri.php">Missouri</a></li>
    </ul>
  </div>
  <div class="column one-of-four">
    <ul>
      <li><a href="montana.php">Montana</a></li>
      <li><a href="nebraska.php">Nebraska</a></li>
      <li><a href="nevada.php">Nevada</a></li>
      <li><a href="newhampshire.php">New Hampshire</a></li>
      <li><a href="newjersey.php">New Jersey</a></li>
      <li><a href="newmexico.php">New Mexico</a></li>
      <li><a href="newyork.php">New York</a></li>
      <li><a href="northcarolina.php">North Carolina</a></li>
      <li><a href="northdakota.php">North Dakota</a></li>
      <li><a href="ohio.php">Ohio</a></li>
      <li><a href="oklahoma.php">Oklahoma</a></li>
      <li><a href="oregon.php">Oregon</a></li>
      <li><a href="pennsylvania.php">Pennsylvania</a></li>
      <li><a href="puerto-virgin.php">Puerto Rico and the Virgin Islands</a></li>
    </ul>
  </div>
  <div class="column one-of-four">
    <ul>
      <li><a href="rhodeisland.php">Rhode Island</a></li>
      <li><a href="southcarolina.php">South Carolina</a></li>
      <li><a href="southdakota.php">South Dakota</a></li>
      <li><a href="tennessee.php">Tennessee</a></li>
      <li><a href="texas.php">Texas</a></li>
      <li><a href="utah.php">Utah</a></li>
      <li><a href="vermont.php">Vermont</a></li>
      <li><a href="virginia.php">Virginia</a></li>
      <li><a href="washington.php">Washington</a></li>
      <li><a href="washingtondc.php">Washington D.C.</a></li>
      <li><a href="westvirginia.php">West Virginia</a></li>
      <li><a href="wisconsin.php">Wisconsin</a></li>
      <li><a href="wyoming.php">Wyoming</a></li>
  </ul>
  </div>
</div>
