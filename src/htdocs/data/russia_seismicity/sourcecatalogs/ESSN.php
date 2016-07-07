<?php
  // Author: Lisa Wald
  // Contact: Bill Leith, leith@usgs.gov
  // Last modified: 07/07/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Source Catalogs';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2>Annual Earthquakes in the USSR (ESSN) </h2>
<a href="../download/essn_xls.ZIP">EXCEL</a><br />
<a href="../download/essn_shp.ZIP">ARCVIEW</a>

<p>
  <figure class='right'>
    <img src="../images/essn.gif" alt="ESSN Earthquake Distribution Map"/>
  </figure>
    By 1962, the creation and development of regional seismic surveys lead to a tremendous increase in the number of earthquakes detected in northern Eurasia (see Figure 3).  Subsequently, the Institute of Physics of the Earth began publication of a new yearly summary, "Earthquakes in USSR" (Zemletriasenniia v SSSR), which was a collection of bulletin data from the regional seismological institutes, along with articles on the seismicity of the various geographic regions of the USSR.
</p>

<p>
  Increased coverage, as a result of using regional and local stations, resulted in catalogs that had lower detection thresholds and higher epicentral location accuracies than that of the global catalogs (such as the ISC and USGS), which were based only on teleseismic observations.  The much greater resolution of the Annuals is evident the a comparison of these data with the ISC Bulletin made by Simpson and Lerner-Lam [1992] for the years 1962-1986, which showed that the annuals have about five times as many events as the ISC Bulletin in that time period.
</p>

<p>
  The data in the Annuals is based on observations solely from stations located within the former USSR.  Coverage therefore decreases to the south and southeast.  Epicenters are also reported only to the nearest 0.1 or 0.01 degree (11 or 1.1 km), resulting in a gridded pattern on maps of high-seismicity areas when viewed at large scales.  Another problem with the catalog is the lack of resolution in depth determinations, which is especially prominent near the boundaries of regions covered by the regional networks.  Many events are given zero or no depth (i.e., blank).
</p>

<p>
  The catalogs completed by each regional survey are only a part of the Annual volume.  It includes as well the papers with describing the seismicity on each zone, special paper with detail study of macroseismic data of strong earthquakes with isoseismal maps, separate paper about large (M>6) earthquakes in the world, tables of fault plain solutions and spectral content.  As an example of the typical content of the annual "Earthquakes in the USSR," the contents of the 1990 volume are given in Appendix I.
</p>

<p>
  Because the monitored regions differ both in terms of in their seismic activity and their areal extent, the yearly number of earthquakes in the various regional catalogs range from a few tens of events to thousands of events.  The following table compares the number of earthquakes listed in each zone in 1990 and 1993:
</p>

<table>
  <tr>
    <th>Zone</th>
    <th>in 1990</th>
    <th>in 1993</th>
  </tr>
  <tr>
    <td>Carpathians</td>
    <td>50</td>
    <td>37</td>
  </tr>
  <tr>
    <td>Crimea</td>
    <td>100</td>
    <td>11</td>
  </tr>
  <tr>
    <td>Caucasus</td>
    <td>300</td>
    <td>330</td>
  </tr>
  <tr>
    <td>Kopetdag</td>
    <td>270</td>
    <td>263</td>
  </tr>
  <tr>
    <td>Central Asia and Kazakstan</td>
    <td>970</td>
    <td>617</td>
  </tr>
  <tr>
    <td>North Tien Shan</td>
    <td>330</td>
    <td>475</td>
  </tr>
  <tr>
    <td>Altai and Sayan</td>
    <td>110</td>
    <td>117</td>
  </tr>
  <tr>
    <td>Baikal</td>
    <td>230</td>
    <td>263</td>
  </tr>
  <tr>
    <td>Primorie</td>
    <td>320</td>
    <td>136</td>
  </tr>
  <tr>
    <td>Sakhalin</td>
    <td>40</td>
    <td>24</td>
  </tr>
  <tr>
    <td>Kuril-Okhotsk</td>
    <td>630</td>
    <td>667</td>
  </tr>
  <tr>
    <td>Kamchatka and Komandorskaya Isl.</td>
    <td>550</td>
    <td>880</td>
  </tr>
  <tr>
    <td>North-East</td>
    <td>70</td>
    <td>40</td>
  </tr>
  <tr>
    <td>Yakutia</td>
    <td>260</td>
    <td>255</td>
  </tr>
  <tr>
    <td>Baltic Shield Artic</td>
    <td>53</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Large EQ in the World</td>
    <td>113</td>
    <td>110</td>
  </tr>
    <td><em>Annual Total</em></td>
    <td><em>4,400</em></td>
    <td><em>4,200</em></td>
  </tr>
</table>

<p>
  These numbers vary in time not only because of variations in seismicity and changes in the number of operating stations, but also because of changes in a cutoff value of the lower magnitude (or "Energy Class", K [12,13]) for earthquakes that were included in Annual Catalog.  In 1967, a decision was made to raise the lower energy class limit of earthquakes from 7 to 9, in order to make the ESSN catalog "representative" (comparable) at all geographic zones.  While the small events were still characterized at the regional seismic centers, they were not reported in this publication.  For example, in 1990, the Altai &amp; Sayan zone ESSN Catalog listed 110 earthquakes with Energy Class (K) of 8.5 or larger, while that year about 870 small earthquakes (5 <= K <= 8) were characterized but not published.  In the Caucasus, about 1300 small earthquakes (K=5-8) were processed but not included in that year's ESSN publication.  In the relatively small area monitored by Garm expedition (100 by 150 km), more than 80,000 earthquakes were compiled in the expedition catalog for the time period from 1955 to 1990 (over 2200 per year), but only a small fraction of these events were included in the ESSN catalog for Central Asia: for example, in 1964, only 84 earthquakes were reported, with energy class, K > 9.
</p>

<p>As a rule, the follows data are included in the Regional Catalogs:</p>
<ul>
  <li>Origin date and time to (GMT)</li>
  <li>Coordinates of epicenter</li>
  <li>Depth (in km)</li>
  <li>Energy Class, K = log E (in joules)</li>
</ul>
<p>
  The Energy Class (from the Russian, Klass) determination is standard in most geographic zones (Carpathians, Caucasus, Kopetdag, Central Asia, Kazakstan, Altai-Sayans, Baikal, Yakutia, and North East), but differs slightly in the catalogs for the Crimean region [14].  In the Far East, regional versions of K were created; these are KFS (after S.Fedotov, Kamchatka) and KC (for Sakhalin, after Soloviev &amp; Solovieva [15]).
</p>

<p>
  Unfortunately, when comparing these scales with the more widely used K (called KR, or K after Rautian) via teleseismic magnitudes, the regional versions were found to have a systematical discrepancy:
</p>

<p>KR = KFS + 0.7</p>
<p>KR = KC  + 1.6</p>

<p>
  In 1980, a new movement appeared in the regional seismological surveys, which begin to create their own versions of P-wave magnitude scales for regional distances.  The MLH scale was extended to local and regional distances (tens to hundreds km), and the surveys begin to include values of these magnitudes in Annual Catalogs.  Unfortunately these regional scales MPVA have the same name, which used for classic teleseismic scale in Obninsk Bulletin.  It will be not bad if the values on regional MPVA were in a good accordance with traditional teleseismic MPVA. But preliminary study shows, that it is not.  It is well known, that the P-wave amplitude-distance dependence is extremely unstable at regional distances. So the data of local MPVA is not accordant with its teleseismic namesake and is of high scattering in the correlation with other magnitude scale data.  In contrast, the K scale based on the maximum phase of P and S, mainly S (Lg) wave, is much more stable.  The regional variation of amplitude- distance relation is small and negligible.  To avoid confusion the name MPVA now means regional P-wave scale.  The teleseismic P wave scale named Mpsp and Mplp (short- and long-period Mp).  MPVA are not included in the Composite Regional Catalogs.  The main scale in ESSN was taken K with its Far East and Crimean modifications [15,16]. Note, that K was estimated for almost 100 % of earthquakes in regional catalogs.  For deep Carpathian earthquakes the MSH scale used, based on the max amplitudes of S wave (horizontal component of the short-period instrument).  The magnitudes of deep Hundu Kush earthquakes are determined by K.
</p>
