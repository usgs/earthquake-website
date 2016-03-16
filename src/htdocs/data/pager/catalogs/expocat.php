<?php
  // Author: Lisa Wald
  // Contact: Dave Wald, wald@usgs.gov
  // Last modified: 03/16/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'EXPO-CAT Earthquake Catalog';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<h2>Files:</h2>
<ul>
  <li><a href="EXPO_CAT_2007_12_README.txt">EXPO_CAT_2007_12_README.txt</a> - a complete description of the fields contained in EXPO-CAT.</li>
  <li><a href="EXPO_CAT_2007_12.csv">EXPO_CAT_2007_12.csv</a> - catalog in Comma Separated Value (CSV) format directly readable by most data processing applications including, Excel and ArcGIS</li>
  <li><a href="EXPO_CAT_2007_12.mat">EXPO_CAT_2007_12.mat</a> - catalog in Matlab structure format.</li>
</ul>

<h2>Overview:</h2>

<p>
  EXPO-CAT provides first-order estimates of the number of people exposed to significant global earthquakes since 1973 using current <a href="/data/pager/">PAGER</a> methodology (Earle et al., 2008; Wald et al., 2008a). It combines earthquakes in the <a href="/earthquakes/map/#%7B%22feed%22%3A%221450204307479%22%2C%22search%22%3A%7B%22id%22%3A%221450204307479%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%221900-01-01%2000%3A00%3A00%22%2C%22catalog%22%3A%22atlas%22%2C%22producttype%22%3A%22shakemap%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22shakemap%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Atlas of ShakeMaps</a> (<a href="http://pubs.usgs.gov/of/2008/1236">Allen et al., 2008</a>) with a gridded global population database to estimate population exposure at discrete levels of macroseismic intensity. Present-day exposure is estimated using the Oak Ridge Laboratory's Landscan 2006 global population database (e.g., Dobson et al., 2000; Bhaduri et al., 2002). We subsequently hindcast these numbers to the date of the earthquake using United Nations population growth rate information (United Nations, 2006).</p>

<p>Since the instrumental intensity estimates that are calculated in ShakeMap are floating point values, we extract population exposures in both integer and half intensity unit bins. Both present-day and hindcasted population estimates for each ShakeMap are aggregated into EXPO-CAT. These data also include ShakeMap input parameters such as the earthquake source parameters (origin time, hypocenter and magnitude), ground motion<br />
  prediction equation used, and shaking uncertainty factor (Wald et al., 2008b.) EXPO-CAT is subsequently combined with <a href="index.php">PAGER-CAT</a> to provide earthquake loss information and country of origin, in addition to information regarding the occurrence of secondary earthquake impacts, such as landslides, tsunami and fire, which may have also contributed to losses (Allen et al., 2009; Marano et al., in review). In total, there are 31 searchable fields in EXPO-CAT, and descriptions of each field are located in EXPO_CAT_2007_12_readme.txt.</p>

<p>A detailed description of the development of this EXPO-CAT is given in Allen et al. (in review). Please contact <a href="mailto:kmarano@usgs.gov">Kristin Marano</a> with any comments.

<h2>Release notes:</strong> <br />

<em>Version 2007-12</em> <br />
Date range: 1973 to December, 2007<br />
Number of events: 5,637<br />
Release date: 1 December 2008<br />
Content as described in Allen et al., in review.</p>
<hr />

<h2>References</h2>
<ul>

  <li>Allen, T.I., Marano, K., Earle, P.S., and Wald, D.J. (2009) PAGER-CAT: A composite earthquake catalog for calibrating global fatality models, Seism. Res. Lett., 80(1), 57-62.</li>

  <li>Allen, T.I., Wald, D.J., Earle, P.S., Marano, K.D., Hotovec, A.J., Lin, K., and Hearne, M.G. (in review) An Atlas of ShakeMaps and population exposure catalog for earthquake loss modeling. Bull. Earthq. Eng.</li>

  <li>Allen, T.I., Wald, D.J., Hotovec, A.J., Lin, K., Earle, P.S. and Marano, K.D. (2008) <a href="http://pubs.usgs.gov/of/2008/1236/">An Atlas of ShakeMaps for selected global earthquakes</a>. U.S. Geological Survey Open-File Report 2008-1236, U.S. Geological Survey Open-File Report 2008-1236, 47 p.</li>

  <li>Bhaduri, B., Bright, E., Coleman, P. and Dobson, J. (2002) LandScan - locating people is what matters. Geoinformatics, 5(2), 34-37.</li>

  <li>Dobson, J.E., Bright, E.A., Coleman, P.R., Durfee, R.C. and Worley, B.A. (2000) LandScan: A global population database for estimating populations at risk. Photogramm. Eng. Rem. S., 66(7), 849- 857.</li>

  <li>Earle, P.S., Wald, D.J., Allen, T.I., Jaiswal, K.S., Porter, K.A. and Hearne, M.G. (2008). Rapid exposure and loss estimates for the May 12, 2008 MW 7.9 Wenchuan earthquake provided by the U.S. Geological Survey's PAGER system, 14th World Conf. Earthq. Eng., Beijing, China, Paper S31-039.</li>

  <li>Marano, K.D., Wald, D.J. and Allen, T.I. (in review) Global earthquake casualties due to secondary effects: a quantitative analysis for improving PAGER losses. Nat. Hazards.</li>

  <li>United Nations (2006) Population growth and distribution, retrieved March 2007, from
  <a href="http://unstats.un.org/unsd/demographic/products/indwm/tab1c.htm">http://unstats.un.org/unsd/demographic/products/indwm/tab1c.htm</a>.</li>

  <li>Wald, D.J., Earle, P.S., Allen, T.I., Jaiswal, K., Porter, K. and Hearne, M. (2008a). Development of the U.S. Geological Survey's PAGER system (Prompt Assessment of Global Earthquakes for Response), 14th World Conf. Earthq. Eng., Beijing, China, Paper 10-0008.</li>

  <li>Wald, D.J., Lin, K. and Quitoriano, V. (2008b) <a href="http://pubs.usgs.gov/of/2008/1238/">Quantifying and qualifying ShakeMap uncertainty</a>. U.S. Geological Survey Open-File Report 2008-1238, 27 p.</li>

  <li>Wald, D.J., Worden, B.C., Quitoriano, V. and Pankow, K.L. (2005) <a href="http://pubs.usgs.gov/tm/2005/12A01/">ShakeMap manual: technical manual, user's guide, and software guide</a>. U.S. Geological Survey, U.S. Geological Survey Reston, Virginia, 132.</li>
</ul>
