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
  The ground failure models provide near-real-time spatial estimates of the likelihood of liquefaction and landsliding triggered following significant earthquakes worldwide. All models use ground motion estimates provided by the U.S. Geological Survey ShakeMap. As such, the quality of the model outputs depends, in part, on the quality of the ShakeMap estimates of ground motion. These estimates generally improve with time as observed shaking data and estimates of rupture extent are incorporated.
</p>
<p>
  The models are designed to be rapidly and consistently applicable in any region of the world. This requires that they be relatively simple and depend on globally-available input layers so  there is a trade-off in resolution as well as accuracy. As a result, the models do not account for local characteristics of topography or geology that may influence the actual ground failure. It is important to understand that there are many other factors that contribute to the occurrence of ground failure that are unknowable at the global scale, and thus there is a limit to the level of precision that is achievable. Therefore, the model results should not be used for site-specific purposes. The models are meant to rapidly inform responders and the public about the overall extent and approximate locations where earthquake-triggered ground failure was most likely to have occurred. While landslides and liquefaction can occur offshore, the available models were developed for use on land so we do not show model results offshore.
</p>
<p>
  Although the models differ in detail, in general, they indicate that landsliding is more likely where shaking is strong and slopes are steep, and liquefaction is more likely where shaking is strong and the land is flat and wet. See below for details about each available model.
</p>

<h2>Interpretation of Maps</h2>
<p>
  under development
</p>

<h2>Landslide Models</h2>
<p>
  We provide a brief overview of the basis for the landslide and liquefaction estimates. For more detailed information and how these models are implemented, see the <a href="http://usgs.github.io/groundfailure/">Ground Failure Manual</a> and <a href="https://github.com/usgs/groundfailure">github page</a>.
</p>

<h3>Nowicki Jessee (2017)</h3>
<p>
  The Nowicki Jessee (2017) global model estimates both 1) the relative hazard (probability of landsliding in any grid cell relative to other grid cells in the mapped area) and 2) the proportion of each cell affected by landslides triggered by the earthquake (areal coverage). The model inputs are described below. More details about the model can be found in the original publication listed on the <a href="references.php">References</a> page.
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
  <tr>
    <td>Peak Ground Velocity</td>
    <td>
      U.S. Geological Survey <a href="/data/shakemap/">ShakeMap</a> (Worden and Wald, 2016)
    </td>
  </tr>
</table>

<h3>Nowicki and others (2014)</h3>
<p>
  Nowicki and others (2014) is a global model that estimates the probability of the earthquake triggering any landslide in each given ~1 km grid cell. This is a predecessor of the Nowicki Jesse (2017) model, which largely builds on this earlier effort. The model inputs are described below. More details about the model can be found in the original publication.
</p>

<table>
  <tr>
    <th>Input</th>
    <th>Source</th>
  </tr>
  <tr>
    <td>Slope</td>
    <td>
      Maximum slope for ~1 km grid cells reported by Verdin and others (2007) derived from ~90 m resolution Shuttle Radar Topography Mission (<a href="https://www2.jpl.nasa.gov/srtm/">SRTM</a>) digital elevation model
    </td>
  <tr>
    <td>Friction angle</td>
    <td>
      Material strength properties assigned by Godt and others (2008) based on global landslide hazard evaluation by Nadim and others (2006).
    </td>
  </tr>
  <tr>
    <td>Compound topographic index (CTI) (wetness index)</td>
    <td>
      U.S. Geological Survey HYDRO1k geographic database (Moore and others, 1991)
    </td>
  </tr>
  <tr>
    <td>Peak Ground Acceleration</td>
    <td>
      U.S. Geological Survey <a href="/data/shakemap/">ShakeMap</a> (Worden and Wald, 2016)
    </td>
  </tr>
</table>

<h3>Godt and others (2008)</h3>
<p>
  Godt and others (2008) is a global model that estimates the percentage of each ~1 km grid cell affected by landslides triggered by the earthquake (areal coverage). The model inputs are described below. More details about the model can be found in the original publication.
</p>

<table>
  <tr>
    <th>Input</th>
    <th>Source</th>
  </tr>
    <td>Cohesion and friction angle</td>
    <td>
      Material strength properties assigned by Godt and others (2008) based on global landslide hazard evaluation by Nadim and others (2006)
    </td>
  </tr>
  <tr>
    <td>Slope</td>
    <td>
      Quantiles for ~1 km grid cells reported by Verdin and others (2007) derived from ~90 m resolution Shuttle Radar Topography Mission (<a href="https://www2.jpl.nasa.gov/srtm/">SRTM</a>) digital elevation model.
    </td>
  </tr>
  <tr>
    <td>Peak Ground Acceleration</td>
    <td>
      U.S. Geological Survey <a href="/data/shakemap/">ShakeMap</a> (Worden and Wald, 2016)
    </td>
  </tr>
</table>

<h2>Liquefaction models</h2>

<h3>Zhu and others (2015)</h3>
<p>
  Zhu and others (2015) presented two models: a global and a coastal model. We have implemented the global model, and describe its inputs below. The model estimates the proportion of each cell affected by liquefaction (areal coverage). More details about the model can be found in the original publication.
</p>

<table>
  <tr>
    <th>Input</th>
    <th>Source</th>
  </tr>
  <tr>
    <td>Shear wave velocity averaged over top 30 m (Vs30)</td>
    <td>
      Computed from <a href="http://topotools.cr.usgs.gov/gmted_viewer/">GMTED2010</a> using methods of Wald and Allen (2007) based on topographic slope
    </td>
  </tr>
  <tr>
    <td>Compound topographic index (CTI)</td>
    <td>
      U.S. Geological Survey <a href="https://lta.cr.usgs.gov/HYDRO1K">HYDRO1k</a> geographic database (Moore and others, 1991)
    </td>
  </tr>
  <tr>
    <td>Peak Ground Acceleration</td>
    <td>
      U.S. Geological Survey <a href="/data/shakemap/">ShakeMap</a> (Worden and Wald, 2016)
    </td>
  </tr>
</table>

<h3>Zhu and others (2017)</h3>
<p>
  Zhu and others (2017) also provides both a coastal and a global model. Again we have implemented the global model. We also have added an additional PGA threshold of 0.1 g and upsample the input layers based on further model validation by Baise and Rashidian (2017). We upsample the original input layers of ~1 km resolution to 250 m resolution using bilinear interpolation. The model provides estimates of both the relative hazard (not shown) and proportion of each cell affected by liquefaction (areal coverage). The model inputs are described below. More details about the model can be found in the original publication.
</p>

<table>
  <tr>
    <th>Input</th>
    <th>Source</th>
  </tr>
  <tr>
    <td>Shear wave velocity averaged over top 30 m (Vs30)</td>
    <td>
      Computed from <a href="http://topotools.cr.usgs.gov/gmted_viewer/">GMTED2010</a> using methods of Wald and Allen (2007) based on topographic slope
    </td>
  </tr>
  <tr>
    <td>Precipitation</td>
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
    <td>Peak Ground Velocity</td>
    <td>
      U.S. Geological Survey <a href="/data/shakemap/">ShakeMap</a> (Worden and Wald, 2016)
    </td>
  </tr>
</table>

<h2>Statistics</h2>
<p>
  Statistical parameters used to summarize the model results are the maximum probability (Max), the standard deviation of the estimated probabilities (Std) excluding any cells with null values (for example, offshore areas), aggregate hazard (H<sub>agg</sub>), and total area exceeding a threshold probability (P<sub>area</sub>). The latter two can be computed for a range of ground motion and probability thresholds, respectively, as shown below.
</p>

<h3>Aggregate Hazard</h3>
<p>
  The aggregate hazard, Hagg, represents the sum of the area of each cell multiplied by the probability estimated for that cell. For models that output areal coverage (both liquefaction models, Godt and others, 2008, and Nowicki Jessee, 2017), it gives an estimate of the total area by ground failure. Small probabilities over large areas can inflate this statistic, so ground motion thresholds are used to allow for easier event-to-event comparisons.
</p>
<p>H<sub>agg</sub> is calculated by:</p>
<img src="images/hagg.png" alt="equation for aggregate hazard">,
<p>
  where P<sub>i,j</sub> is the ground failure probability at grid cell i, j, A<sub>i,j</sub> is the area of cell i, j (in km<sup>2</sup>), m is the number of rows, n is the number of columns, gm<sub>i,j</sub> is the ground motion parameter (peak ground acceleration or peak ground velocity) at grid cell i, j and gm<sub>thresh</sub> is the ground motion threshold. The threshold is indicated in the summary tables with an underscore. For example, Hagg_0.05g is the aggregate hazard for which the threshold, x, is a peak ground acceleration of 0.05g.
</p>

<h3>Map Area Exceeding a Threshold Probability</h3>
<p>
  The area exceeding a threshold probability, P<sub>area</sub> is calculated by:
</p>
<img src="images/parea.png" alt="equation for aggregate hazard">,
<p>
  where A<sub>i,j</sub> is the area of grid cell i, j (in km<sup>2</sup>), m is the number of rows, n is the number of columns, P<sub>i,j</sub> is the ground failure probability at cell i,j, P<sub>thresh</sub> is the ground motion threshold. The threshold probability is indicated in the summary tables with an underscore. For example, Parea_0.10 is the total area where a given model estimates probabilities greater than 0.1.
</p>
