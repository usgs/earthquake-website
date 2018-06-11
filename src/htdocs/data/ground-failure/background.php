<?php
// Author: Lisa Wald
// Contact: Kate Allstadt
  if (!isset($TEMPLATE)) {
    $TITLE = 'Ground Failure Scientific Background';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<p>
  Earthquake-triggered landslides and liquefaction, collectively referred to as ground failure, can be a significant contributor to earthquake losses. The USGS Ground Failure (GF) earthquake product provides near-real-time spatial estimates of earthquake-triggered landslide and liquefaction hazard following significant earthquakes worldwide.
</p>
<p>
  We developed this product to provide initial awareness of the overall extent and importance of potential landslides and liquefaction, and to indicate areas in which they are most likely to have occurred. It takes time for first responders and experts to survey the actual damage in the area, so our product provides early estimates of where to focus attention and response planning. Though our models provide regional estimates of landslide and liquefaction hazard triggered by this earthquake, they do not predict specific occurrences.
</p>
<p>
  The GF product is based on a suite of geospatial models that relate ground motion estimates provided by the USGS ShakeMap and proxies for ground failure susceptibility to rapidly provide regional estimates of earthquake-triggered ground failure hazard over a grid of evenly-spaced points. See <a href="#models">Models</a> section for details.
</p>

<h2>Product Overview</h2>

<h3>Triggering</h3>
<p>
  The GF product is generally triggered when a USGS ShakeMap is created for earthquakes greater than M4 within the United States and greater than M5.5 worldwide. It can also be triggered manually. The triggering is the same as that used to trigger the USGS <a href="/data/pager/">PAGER</a> product. Results are always shown if it is run, even for events for which little to no ground failure is estimated.
</p>

<h3>Product Card</h3>
<p>
  Ground Failure is considered a new earthquake information product, one of the suite of USGS Earthquake Program information systems that provide situational awareness and scientific content pertaining to each significant earthquake around the globe. The user will typically navigate to the Ground Failure page for a specific earthquake by starting at the overview of the earthquake-specific webpage (Figure 1) and selecting the card titled “Ground Failure.” This card will only appear if GF was triggered (see above). The card summarizes the landslide and liquefaction hazard for this event qualitatively (e.g., significant area affected, extensive population exposed). The color of the icon next to each ground failure type corresponds to the maximum of the two <a href="#alert-levels">alert levels</a>.
</p>

<!-- INSERT FIG.1: SCREENSHOT OF EVENTPAGE with CARDS -->

<h3>Summary Page</h3>
<p>
  Selecting the Ground Failure card takes the user to the Summary page for Ground Failure. This page gives the user an overview of the hazard and population exposure for the two different types of ground failure and allows the user to navigate to interactive maps and other features, as described in the following sections and labeled in Figure 2.
</p>

<!-- INSERT FIG.2: GROUND FAILURE SUMMARY PAGE -->

<h4>A) Earthquake Summary</h4>
<p>
  The top of all earthquake event webpages consists of a summary of the most up-to-date earthquake information (magnitude, geographic location, event time, and epicentral location). Below this is the title of the product and time of last update.
</p>

<h4>B) "About" Tab</h4>
<p>
  This tab provides basic information for the general public that describes why we developed this product, how to use it, what earthquake-triggered landslides and liquefaction are, and what hazards they pose to human populations. The simplified information provided in this tab is intended for non-expert users who may not be interested in the level of detail provided on this detailed webpage.
</p>

<h4>C, D) Landslide and Liquefaction Models</h4>
<p>
  The left column of the summary webpage summarizes the landslide hazard and exposure alert levels for this earthquake based on our <a href="#pref-ls-model">preferred landslide model</a>, and the right column corresponds to the same for <a href="#pref-liq-model">liquefaction</a>. On mobile devices, these columns will be stacked on top of each other.
</p>

<h4>E) Alert Levels</h4>
<p>
  The focal points of our summary webpage are the four alert level bars that give a quick overview of the expected hazard and population exposure for each ground failure type (Figure 3).
</p>

<!-- INSERT FIG.3: ALERT LEVELS -->

<p>
  The alert levels are determined using two statistical parameters for each model type: Estimated Area Exposed to Hazard (Htot) and Estimated Population Exposure (popexp). Htot is equivalent to the model’s estimate of the total area exposed to hazard in km2, and popexp is the approximate number of people who live in the areas exposed to hazard. See the <a href="#stats">Statistics</a> section for details about how these are computed.
</p>
<p>
  The alert level bins are each defined by a qualitative order-of-magnitude range for each statistic, which were chosen based on historic earthquakes with known consequences. See the <a href="#alert-level-defs">Alert Level Definitions</a> section for details.
</p>

<h4>F, G) Interactive Map</h4>
<p>
  Selecting the &ldquo;View Landslide Map&CloseCurlyDoubleQuote; button takes the user to the interactive map with the preferred landslide model shown by default. The same applies to the “View Liquefaction Map” button. The interactive map includes numerous alternative basemap layers and earthquake layers that can be superimposed on the landslide or liquefaction hazard maps (Figure 4). The colorbars for both landslides and liquefaction (Figure 5) show the areal coverage probability type (see <a href="#interp-maps">Interpretation of Maps</a>) using logarithmic bins to better visualize the range of typical values. The colorbar saturates at 0.2, which for areal coverage, equates to severe ground failure. Neither model reaches values much higher than 0.2 for areal coverage.
</p>

<!-- INSERT FIG.4: INTERACTIVE MAPS -->
<!-- INSERT FIG.5: COLORBARS -->

<h4>H) Ground Failure Background Page</h4>
<p>
  A footer appears at the bottom of all Ground Failure product pages with basic disclaimers about the product and a link to a static webpage that provides detailed technical information for advanced users (this webpage).
</p>

<h4>Downloads</h4>
<p>
  The Downloads expansion panel allows advanced users to download GIS files of all ground failure model results, including the <a href="#alt-model">alternative model</a> results, which are not currently shown on the interactive map.
</p>

<h2>Models</h2>
<p>
  The GF models are designed to be rapidly and consistently applicable in any region of the world, requiring that they be relatively simple and depend on globally-available input datasets. There are many factors that contribute to a given occurrence of ground failure that are unknowable at the global scale; thus the models are not able to account for local characteristics of topography or geology nor to predict specific occurrences.
</p>
<p>
  Although the models differ in detail, in general, they indicate that landsliding is more likely where shaking is strong and slopes are steep, and that liquefaction is more likely where shaking is strong and the land is flat and wet. The quality of the model outputs also depend, in part, on the quality of the ShakeMap estimates of ground motion. Model calibration was done using final ShakeMaps for about two dozen earthquakes. Thus, our estimates generally improve with time as observed shaking data and estimates of rupture extent are incorporated (Figure 6).
</p>
<p>
  We currently use one <a href="#pref-ls-model">preferred landslide model</a> and one <a href="#pref-liq-model">preferred liquefaction model</a> for the product summary and interactive maps, but we also run several <a href="#alt-model">alternative models</a> that are available for users to download. All implemented models are summarized below; details can be found in the original publications. For more detailed information on our implementation of these models, see the <a href="http://usgs.github.io/groundfailure/">ground failure manual</a> and <a href="https://github.com/usgs/groundfailure">github page</a>.
</p>

<!-- INSERT FIG.6: RESULTS for SHAKEMAP -->

<h3>Preferred Landslide Model</h3>
<p>
  Nowicki Jessee and others (2018) is the preferred model for earthquake-triggered landslide hazard. Our primary landslide model is the empirical model of Nowicki Jessee and others (2018). The model was developed by relating 23 inventories of landslides triggered by past earthquakes with different combinations of predictor variables (summarized below) using logistic regression. The output resolution is ~250 m. The model inputs are described below. More details about the model can be found in the <a href="???">original publication</a>.
</p>

<table>
  <tr>
    <th>Input</th>
    <th>Source</th>
  </tr>
  <tr>
    <td>Slope</td>
    <td>
      Derived from Global Multi-resolution Terrain Elevation Data 2010 (<a href="https://topotools.cr.usgs.gov/gmted_viewer/">GMTED2010</a>) (Danielson and Gesch, 2011)
    </td>
  </tr>
  <tr>
    <td>Peak Ground Velocity</td>
    <td>
      U.S. Geological Survey <a href="/data/shakemap/">ShakeMap</a> (Worden and Wald, 2016)
    </td>
  </tr>
  <tr>
    <td>Lithology</td>
    <td>
      Global Lithological Map Database (GLiM) (Hartmann and Moosdorf, 2012)
    </td>
  </tr>
  <tr>
    <td>Land cover</td>
    <td>
      Moderate resolution (300 m) Envisat MERIS (MEdium Resolution Imaging Spectrometer) <a href="https://doi.pangaea.de/10.1594/PANGAEA.787668">GlobCover</a> land cover dataset for 2009 (Arino and others, 2012)
    </td>
  </tr>
  <tr>
    <td>Compound topographic index (CTI) (wetness index)</td>
    <td>
      U.S. Geological Survey <a href="https://lta.cr.usgs.gov/HYDRO1K">HYDRO1k</a> geographic database (Moore and others, 1991)
    </td>
  </tr>
</table>

<h3>Preferred Liquefaction Model</h3>
<p>
  Zhu and others (2017) is the preferred model for liquefaction hazard. The model was developed by relating 27 inventories of liquefaction triggered by past earthquakes to globally-available geospatial proxies (summarized below) using logistic regression. We have implemented the global version of the model and have added additional modifications proposed by Baise and Rashidian (2017),  including a PGA threshold of 0.1 g and linear interpolation of the input layers. We linearly interpolate the original input layers of ~1 km resolution to 500 m resolution. The model inputs are described below. More details about the model can be found in the  <a href="???">original publication</a>.
</p>

<table>
  <tr>
    <th>Input</th>
    <th>Source</th>
  </tr>
  <tr>
    <td>Peak Ground Velocity</td>
    <td>
      U.S. Geological Survey <a href="/data/shakemap/">ShakeMap</a> (Worden and Wald, 2016)
    </td>
  </tr>
  <tr>
    <td>Shear wave velocity averaged over top 30 m (Vs30)</td>
    <td>
      Computed from <a href="http://topotools.cr.usgs.gov/gmted_viewer/">GMTED2010</a> using methods of Wald and Allen (2007) based on topographic slope
    </td>
  </tr>
  <tr>
    <td>Mean Annual Precipitation</td>
    <td>
      <a href="http://WorldClim.org">WorldClim</a> database, last accessed March 2014 (Hijmans and others, 2005)
    </td>
  </tr>
  <tr>
    <td>Distance from coast</td>
    <td>
      Global <a href="http://oceancolor.gsfc.nasa.gov/cms/DOCS/DistFromCoast">distance to coast</a> dataset by NASA's Ocean Color Group
    </td>
  </tr>
  <tr>
    <td>Distance from rivers</td>
    <td>
      Computed from U.S. Geological Survey <a href="http://hydrosheds.cr.usgs.gov/dataavail.php">HydroSHEDS</a> database
    </td>
  </tr>
  <tr>
    <td>Water table depth</td>
    <td>
      Global model by Fan and others (2013)
    </td>
  </tr>
</table>

<h3>Alternative Models</h3>
<p>
  We currently run two alternative landslide models and one alternative liquefaction model, described in Table 1. These models are not currently rendered on the interactive map or used to determine alert levels, but are available for <a href="#download">download</a>.
</p>

<table>
  <tr>
    <th>Type</th>
    <th>Model Name</th>
    <th>Input Layers</th>
    <th>Resolution</th>
  </tr>
  <tr>
    <td>Landslide</td>
    <td>Nowicki and others (2014)</td>
    <td>Maximum slope (~90 m resolution), Peak Ground Acceleration, Friction angle, Compound topographic index (wetness proxy)</td>
    <td>~1 km</td>
  </tr>
  <tr>
    <td>Landslide</td>
    <td>Godt and others (2008)</td>
    <td>Slope quantiles (~1 km resolution derived from ~90 m resolution), Peak Ground Acceleration, Cohesion, Friction angle</td>
    <td>~1 km</td>
  </tr>
  <tr>
    <td>Liquefaction</td>
    <td>Zhu and others (2015)</td>
    <td>Peak Ground Acceleration, Shear wave velocity averaged over top 30 m (Vs30), Compound topographic index</td>
    <td>~1 km</td>
  </tr>
</table>

<h2>Interpretation of Maps</h2>
<p>
  Both of our preferred models are logistic models. Logistic models estimate probability, but the meaning of that probability depends on how the model was developed. The methods of our preferred models (Nowicki Jessee and others 2018 and Zhu and others 2017) result in a native output of relative hazard. This does not have a physical meaning. Therefore, both authors calibrated their models against completely mapped inventories to develop a relation to convert relative hazard to a different type of probability that does have a physical meaning: areal coverage (Ac). The meaning of Ac is illustrated in Figure 7.
</p>

<!-- INSERT FIG.7: AERIAL COVERAGE VALUES -->

<p>
  The Godt and others (2008) and Zhu and others (2015) models both estimate areal coverage natively without requiring a conversion. The Nowicki and others (2014) model is distinct from the others in that it estimates the probability of any landslide occurring within a given grid cell.
</p>

<h2>Statistics</h2>
<p>
  Statistical parameters used to summarize the model results and to assign hazard and population exposure alert levels are Estimated Area Exposed to Hazard (H<sub>tot</sub>), and population exposure (pop<sub>exp</sub>). We use a ground motion threshold of 0.1g to compute these statistics in order to control for differences in the ShakeMap areas between events. The ShakeMap extent can vary substantially from event to event and even for subsequent versions of the same event, and this can have an artificial impact on the statistics if not controlled for. Using a ground motion threshold also helps mitigate the inflation of these statistics due to small probabilities over large areas by only considering areas of relatively strong shaking.
</p>

<h3>Estimated Area Exposed to Hazard</h3>
<p>
  The estimated area exposed to hazard, (Htot) represents the sum of the area of each cell multiplied by the probability (areal coverage) estimated for that cell. This gives the model’s estimate of the total area affected by ground failure. However, the models are conservative so these areas are often overestimated, thus Htot serves more as a proxy for total area affected.
</p>
<p>
  H<sub>tot</sub> is calculated by:
</p>

<!-- INSERT EQUATION: Htot -->

<p>
  where P<sub>i,j</sub> is the ground failure probability (areal coverage) at grid cell i, j, A<sub>i,j</sub> is the area of cell i, j (in km<sup>2</sup>), m is the number of rows, n is the number of columns, gm<sub>i,j</sub> is the ground motion parameter (peak ground acceleration or peak ground velocity) at grid cell i, j and gm<sub>thresh</sub> is the ground motion threshold.
</p>

<h3>Estimated Population Exposure</h3>
<p>
  The estimated population exposure, popexp, represents the population of each grid cell multiplied by the areal coverage:
</p>

<!-- INSERT EQUATION: POPexp -->

<p>
  where L<sub>i,j</sub> is the population of grid cell i, j, m is the number of rows, n is the number of columns, P<sub>i,j</sub> is the ground failure probability (areal coverage) at cell i,j, gm<sub>i,j</sub> is the ground motion parameter (peak ground acceleration or peak ground velocity) at grid cell i, j and gm<sub>thresh</sub> is the ground motion threshold. The population grid we use is LandScan 2016&trade; (Bright and others, 2017). Since population is reported in whole numbers, resampling is problematic. Therefore, to compute this statistic we resample the probability grid to the Landscan grid using a block mean before multiplying. Pop<sub>exp</sub> is not an estimate of fatalities, but instead represents the number of people estimated to be living near areas prone to ground failure hazard triggered by the earthquake.
</p>

<h2>Alert Level Definitions</h2>
<p>
  The alert level bins are each defined by an order-of-magnitude range of the relevant statistic (H<sub>tot</sub> or pop<sub>exp</sub>), a qualitative descriptor (little to no, limited, significant, extensive), and a corresponding color (green to red). The alert bin edges were determined by computing these statistics for historic earthquakes and using knowledge about what actually occurred to select bin edges that grouped them most appropriately for each qualitative descriptor (see Figure 8 for examples). We do not have quantified measures of fatalities or economic losses specific to each type of ground failure for many historic events, so we use the model statistics and expert opinion to select the bin edges that best qualitatively captured the character of the historic events.
</p>
<p>
  In general, alerts qualitatively capture the hazard and population exposure, with some exceptions. Low probabilities in a highly populated area (e.g., Chino Hills) can inflate the population alert. For some events, most of the losses were due to exceptional site-specific circumstances that these simple ground failure models cannot capture (e.g., large deep-seated slide impacting a remote village). In addition, the model results for historic events can be inconsistent because ShakeMap quality varies between historic events so some model results are more accurate than others. Furthermore, population exposure is currently our only proxy for potential impacts, but it does not account well for indirect remote effects (e.g., landslide dam hazards, blocked or damaged roads).
</p>

<!-- INSERT FIG.8: ALERT STATISTICS -->

<h2>References</h2>
<ul class="referencelist">
  <li>
    Allstadt, K.E., Jibson, R. W., Thompson, E.M., Massey, C.I., Wald, D.J., Godt, J.W., Rengers, F.K., 2018, <a href="https://doi.org/10.1785/0120170297">Improving Near-Real-Time Coseismic Landslide Models: Lessons Learned from the 2016 Kaikoura, New Zealand, Earthquake</a>: Bulletin of the Seismological Society of America, (in press).
  </li>
  <li>
    Arino, O., Ramos Perez, J.J., Kalogirou, V., Bontemps, S., Defourny, P., Van Bogaert, E., 2012, <a href="https://doi.org/10.1594/PANGAEA.787668">Global Land Cover Map for 2009 (GlobCover 2009)</a>: European Space Agency (ESA) and Université catholique de Louvain (UCL), PANGAEA.
  </li>
  <li>
    Baise, L.G., and Rashidian, V., 2017, <a href="https://earthquake.usgs.gov/cfusion/external_grants/reports/G16AP00014.pdf">Validation of a Geospatial Liquefaction Model for Noncoastal Regions Including Nepal</a>: Final Technical Report for USGS Award G16AP00014.
  </li>
  <li>
    Bright, E.A., Rose, A.N., Urban, M.L., and McKee, J.J., 2017, <a href="https://landscan.ornl.gov">LandScan 2016 High-Resolution Global Population Data Set</a>: U.S. Dept. of Energy, Oak Ridge National Laboratory.
  </li>
  <li>
    Danielson, J., and Gesch, D., 2011, Global Multi-resolution Terrain Elevation Data 2010 (GMTED2010): U.S. Department of the Interior, U.S. Geological Survey, Open-File Report 2011-1073.
  </li>
  <li>
    Fan, Y., Li, H., and Miguez-Macho, G., 2013, Global Patterns of Groundwater Table Depth: Science, 339, 940-943.
  </li>
  <li>
    Godt, J.W., Sener, B., Verdin, K.L., Wald, D.J., Earle, P.S., Harp, E.L. and Jibson, R.W., 2008, Rapid Assessment of Earthquake-induced Landsliding: Proceedings of the First World Landslide Forum, United Nations University, Tokyo, Japan, p. 392-395.
  </li>
  <li>
    Harp, E.L., and Jibson, R.W., 1995, Inventory of landslides triggered by the 1994 Northridge, California earthquake: U.S. Geological Survey Open-File Report 95-213, 17 p., 2 plates.
  </li>
  <li>
    Hartmann, J. and Moosdorf, N., 2012, The new global lithological map database GLiM: A representation of rock properties at the Earth surface: G3, vol 13, no. 12., 37 p.
  </li>
  <li>
    Hijmans, R. J., Cameron, S. E., Parra, J. L., Jones, P. G., and Jarvis, A., 2005, <a href="https://doi.org/10.1002/joc.1276">Very high resolution interpolated climate surfaces for global land areas</a>: International Journal of Climatology, 25(15), 1965–1978.
  </li>
  <li>
    Massey, C., Townsend D., Rathje, E., Allstadt, K., Kaneko, Y., Lukovic, B., Bradley, B., Wartman, J., Horspool, N., Hamling, I., Carey, J., Cox, S., Davidson, J., Dellow, S., Godt, J.W., Holden, C., Jones, K., Kaiser, A., Little, M., Lyndsell, B., McColl, S., Morgenstern, R., Rengers, F.K., Rhoades, D., Rosser, B., Strong, D., Singeisen, C., Villeneuve, M., 2018, <a href="https://doi.org/10.1785/0120170305">Landslides triggered by the 14 November 2016, Mw 7.8 earthquake, Kaikōura, New Zealand</a>, Bulletin of the Seismological Society of America.
  </li>
  <li>
    Moore, I.D., Grayson, R.B., and Ladson, A.R., 1991, Digital terrain modelling: a review of hydrological, geomorphological, and biological applications: Hydrological Processes, 5(1), 3–30.
  </li>
  <li>
    Nowicki, M.A., Wald, D.J., Hamburger, M.W., Hearne, M., and Thompson, E.M., 2014, Development of a globally applicable model for near real-time prediction of seismically induced landslides: Engineering Geology, v. 173, p. 54–65.
  </li>
  <li>
    Nowicki Jessee, M.A., Hamburger, H.W., Allstadt, K.E., Wald, D.J., Robeson, S.M., Tanyas, H., Hearne, M., Thompson, E.M., 2018, A Global Empirical Model for Near Real-time Assessment of Seismically Induced Landslides, J. Geophys. Res. (in press).
  </li>
  <li>
    Wald, D.J., and Allen, T.I., 2007, Topographic Slope as a Proxy for Seismic Site Conditions and Amplification: Bulletin of the Seismological Society of America, 97 (5), 1379–1395.
  </li>
  <li>
    Worden, C.B. and D.J. Wald, 2016, <a href="https://doi.org/10.5066/F7D21VPQ">ShakeMap Manual Online: technical manual, user’s guide, and software guide</a>: U. S. Geological Survey.
  </li>
  <li>
    Zhu, J., Daley, D., Baise, L.G., Thompson, E.M., Wald, D.J., and Knudsen, K.L., 2015, A geospatial liquefaction model for rapid response and loss estimation: Earthquake Spectra, v. 31, no. 3, p. 1813–1837.
  </li>
  <li>
    Zhu, J.,  Baise, L. G., Thompson, E. M., 2017, An Updated Geospatial Liquefaction Model for Global Application, Bulletin of the Seismological Society of America, 107, p 1365-1385, doi: 0.1785/0120160198
  </li>
</ul>
