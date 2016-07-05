<?php
  // Author: Lisa Wald
  // Contact: Walter Mooney, mooney@usgs.gov
  // Last modified: 06/30/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Source Catalogs';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2>General Catalog of Earthquakes in North Eurasia</h2>
<a href="../download/general_xls.ZIP">EXCEL</a><br />
<a href="../download/general_shp.ZIP">ARCVIEW</a>

<p>
  <figure class='right'>
    <img src="../images/general.gif" alt="Genral Catalog Earthquake Map"/>
  </figure>
  The "General Catalog of Earthquakes in North Eurasia" is an extension of the previous "New Catalog" by Shebalin and Kondorskaya, 1974,  It was compiled by the Institute of Physics of the Earth under the direction of W. Ulomov, but never published, and exists only in electronic form.  As a source in our Composite Regional Catalogs, it is referred to as "General" (or shortened to "Gnrl").
</p>

<p>
  The GENERAL Catalog provides data for 31,821 events that occurred during the time period from 1900 to 1990 in the region of Eurasia from 30°-90° N and  0°-190° E.  Earthquakes that occurred before 1955, when Obninsk began to issue its Bulletin, are mostly taken from the New Catalog, supplemented by macroseismic information and from some local stations Bulletins (the sources of data are not documented in the catalog).
</p>

<p>
  The GENERAL Catalog contains a seismic magnitude M, which has been calculated from various kinds of data, as follows:
</p>
<ol>
  <li>
    The Soviet surface wave magnitude MLH, (later renamed to Ms, but really not   identical to western Ms), which is determined not from amplitude A but from A/T; both A and T correspond to maximum A on surface wave records (and not necessarily to 20-second period waves).
  </li>
  <li>
    The p-wave magnitude, MPVA (taken from SKM instrumentation, periods To-1.5-2 sec records) and MPVB (taken from SD instrumentation, To=15-20 sec) were used for calculation of M.
  </li>
</ol>

<p>
  The magnitudes of the smaller events were initially characterized by Energy Class (K) as determined by the local surveys.  This makes the number of earthquakes in the GENERAL catalog more than twice that of the Obninsk Bulletin; further, all events in the GENERAL catalog have a value of M.
</p>

<p>
  The GENERAL catalog has been divided into regions, corresponding to those of the OBNINSK catalog.  The table below shows the distribution of events versus regions and the magnitude range of earthquakes in each region.  Note that the total number of events in the all the regions listed below (23,467) are less than in the whole GENERAL catalog, since no data for the active regions Central Asia and Turkmenia were included.
</p>

<table>
  <tr>
    <th>Region</th>
    <th>N</th>
    <th>Lat</th>
    <th>Lon</th>
    <th>M</th>
  </tr>
  <tr>
    <td>Aldan</td>
    <td>249</td>
    <td>52-60</td>
    <td>122-142</td>
    <td>6.6-3.3</td>
  </tr>
  <tr>
    <td>Altai</td>
    <td>474</td>
    <td>43-60</td>
    <td>80-90</td>
    <td>8.0-3.5</td>
  </tr>
  <tr>
    <td>Artic*</td>
    <td>334</td>
    <td>70-90</td>
    <td>0-170</td>
    <td>6.8-3.5</td>
  </tr>
  <tr>
    <td>Baikal</td>
    <td>1967</td>
    <td>50-60</td>
    <td>102-122</td>
    <td>7.6-3.3</td>
  </tr>
  <tr>
    <td>Baltic</td>
    <td>12</td>
    <td>52-60</td>
    <td>20-30</td>
    <td>4.7-3.5</td>
  </tr>
  <tr>
    <td>Caucasus-E</td>
    <td>1074</td>
    <td>38-45</td>
    <td>44-51</td>
    <td>6.9-3.3</td>
  </tr>
  <tr>
    <td>Caucasus-W</td>
    <td>317</td>
    <td>40-45</td>
    <td>37-44</td>
    <td>6.8-3.3</td>
  </tr>
  <tr>
    <td>Central Asia</td>
    <td>7662</td>
    <td>35-44</td>
    <td>65-80</td>
    <td>8.3-3.2</td>
  </tr>
  <tr>
    <td>Chukotka</td>
    <td>37</td>
    <td>59-70</td>
    <td>165-190</td>
    <td>5.8-3.5</td>
  </tr>
  <tr>
    <td>Crimea</td>
    <td>45</td>
    <td>44-46</td>
    <td>28-37</td>
    <td>6.8-3.5</td>
  </tr>
  <tr>
    <td>Kamchatka</td>
    <td>6767</td>
    <td>50-60</td>
    <td>155-165</td>
    <td>8.5-3.5</td>
  </tr>
  <tr>
    <td>Kazakstan NE</td>
    <td>15</td>
    <td>45-60</td>
    <td>65-80</td>
    <td>5.8-3.6</td>
  </tr>
  <tr>
    <td>Kuriles Is.</td>
    <td>1954</td>
    <td>45-51</td>
    <td>145-164</td>
    <td></td>
  </tr>
  <tr>
    <td>Primorie E</td>
    <td>649</td>
    <td>42-52</td>
    <td>131-142</td>
    <td>7.8-3.2</td>
  </tr>
  <tr>
    <td>Primorie W</td>
    <td>6</td>
    <td>48-52</td>
    <td>127-131</td>
    <td>6.0-3.6</td>
  </tr>
  <tr>
    <td>Russia Central</td>
    <td>3</td>
    <td>52-60</td>
    <td>30-54</td>
    <td>4.8-3.5</td>
  </tr>
  <tr>
    <td>Russia North</td>
    <td>13</td>
    <td>60-70</td>
    <td>30-54</td>
    <td>4.9-3.0</td>
  </tr>
  <tr>
    <td>Russia South</td>
    <td>12</td>
    <td>45-52</td>
    <td>37-54</td>
    <td>5.4-3.5</td>
  </tr>
  <tr>
    <td>Sakhalin</td>
    <td>660</td>
    <td>46-55</td>
    <td>142-146</td>
    <td>7.0-3.3</td>
  </tr>
  <tr>
    <td>Sayans</td>
    <td>924</td>
    <td>50-60</td>
    <td>90-102</td>
    <td>7.0-3.5</td>
  </tr>
  <tr>
    <td>Sibria East</td>
    <td>240</td>
    <td>59-72</td>
    <td>115-165</td>
    <td>7.1-3.3</td>
  </tr>
  <tr>
    <td>Siberia West</td>
    <td>0</td>
    <td>60-72</td>
    <td>66-115</td>
    <td></td>
  </tr>
  <tr>
    <td>Ukraine</td>
    <td>45</td>
    <td>46-52</td>
    <td>20-37</td>
    <td>5.5-3.4</td>
  </tr>
  <tr>
    <td>Urals</td>
    <td>15</td>
    <td>45-70</td>
    <td>54-66</td>
    <td>5.5-3.2</td>
  </tr>
</table>

<p>*including the Laptev Sea</p>

<h2>Sources of Data</h2>

<p>
  The General Catalog was converted to electronic format in the 1990s.  The compilers at IPE combined data from the New Catalog, the Obninsk Bulletin and the annuals (ESSN data), with the goal of making the catalog as homogeneous as possible.  If two of three sources reported the same event, was only one version was included, as decided by the compiler.  The origin time and coordinates were taken from these sources, choosing the most reliable version, or after revising the data.  They converted all the various magnitude scales and energy classes as well as macroseismic data into unified magnitude M.  The available information on errors were included for all the parameters.
</p>
