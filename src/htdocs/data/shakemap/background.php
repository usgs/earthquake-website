<?php
// Author: Lisa Wald
// Contact: David Wald,wald@usgs.gov
// Last modified: 01/27/2016

if (!isset($TEMPLATE)) {
  $TITLE = 'ShakeMap Scientific Background';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>
<figure class="right">
  <img src="images/example.png" alt="ShakeMap example"/>
</figure>

<p>
  <a href="index.php">ShakeMap&circledR;</a>, developed by the U.S. Geological Survey (USGS), facilitates communication of earthquake information beyond just magnitude and location. By rapidly mapping out earthquake ground motions, ShakeMap portrays the distribution and severity of shaking, information critical for gauging the extent of the areas affected, determining which areas are potentially hardest hit, and allowing for rapid estimation of losses. Key to ShakeMap’s success, algorithms were developed that take advantage of any high-quality recorded ground motions&ndash;and any available macroseismic intensity data&ndash;to provide ground-truth constraints on shaking. Yet, ShakeMap also utilizes best practices for both interpolating recordings and&ndash;critically&ndash;providing event-specific estimates of shaking in areas where observations are sparse or nonexistent.
</p>
<p>
  Detailed background on all aspects of ShakeMap can be found online in the <a href="http://usgs.github.io/shakemap">ShakeMap Manual</a> (<a href="http://usgs.github.io/shakemap/references.html#worden2016b">Worden and Wald, 2016</a>). A <a href="http://usgs.github.io/shakemap/_static/ShakeMapManual.pdf">PDF version</a> (52.3MB) is also available.
</p>
<p>
  The ShakeMap Manual provides background on technical aspects of ShakeMap; describes the wide range of products and formats ShakeMap produces, as well as their uses; and provides guidance for ShakeMap developers and operators.
</p>

<ul>
  <li>Readers interested in understanding how ShakeMaps works can navigate to the <a href="http://usgs.github.io/shakemap/technical_guide.html">Technical Guide section</a>.</li>
  <li>Those who want to use ShakeMap products and understand their varied forms can jump to the <a href="http://usgs.github.io/shakemap/users_guide.html">User’s Guide</a>.</li>
  <li>If your goal is to install and operate ShakeMap, see the <a href="http://usgs.github.io/shakemap/software_guide.html">Software &amp; Implementation Guide</a>. The Software &amp; Implementation Guide also points users to the ShakeMap software distribution and Software Guide.</li>
</ul>
