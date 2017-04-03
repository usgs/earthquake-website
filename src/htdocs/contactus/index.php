<?php
// Author: Lisa Wald
// Contact: Lisa Wald, lisa@usgs.gov
// Last modified: 11/24/2015
if (!isset($TEMPLATE)) {
  $TITLE = 'Contacts and Regional Science Activities';
  $CONTACT = 'lisa@usgs.gov';
  $HEAD = '<link rel="stylesheet" href="/lib/hazdev-svgimagemap.css"></script>' .
  $FOOT = '<script src="/lib/hazdev-svgimagemap.js"></script>' .
      '<script src="index.js"></script>';
  include 'template.inc.php';
}
?>

<p>Click on office location on map or select location from list below.</p>

<div class="row">
  <div class="column one-of-two">
    <h3>USGS Headquarters</h3>
    <ul>
    	<li><a href="headquarters.php">Administrative Headquarters</a></li>
    </ul>
    <h3>USGS Science Centers</h3>
    <ul>
    	<li><a href="anchorage/">Alaska Science Center, Anchorage, AK</a></li>
    	<li><a href="menlo/">Earthquake Science Center, Menlo Park, CA</a></li>
    	<li><a href="golden/">Geologic Hazards Science Center, Golden, CO</a></li>
    </ul>
    <h3>Regional &amp; Field Offices</h3>
    <ul>
    	<li><a href="seattle/">Seattle Field Office, Seattle, WA</a></li>
    	<li><a href="pasadena/">Pasadena Field Office, Pasadena, CA</a></li>
    	<li><a href="albuquerque/">Albuquerque Seismological Laboratory</a></li>
    </ul>
    <p>&nbsp;</p>
  </div>

  <div class="column one-of-two">
    <div class="EQoffices"></div>

    <h3>For General Public and Media</h3>
    <ul>
      <li><a href="media.php">Media Contacts and Information</a></li>
      <li>Earthquake Questions or Website Comments - Use the <a href="https://answers.usgs.gov/cgi-bin/gsanswers">Questions or comments?</a> link at the bottom of every webpage. Then select the topic Natural Hazards.</li>
    </ul>

    <h3>Looking for Something Else?</h3>
    <ul>
      <li><a href="https://store.usgs.gov/">USGS Maps and Publications</a></li>
      <li><a href="https://www.usgs.gov/ohr/">USGS Employment Opportunities</a></li>
      <li><a href="https://www.usgs.gov/">USGS - Everything!</a></li>
    </ul>

  </div>
</div>
