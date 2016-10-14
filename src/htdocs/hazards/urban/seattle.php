<?php
// Author: Lisa Wald
// Contact: Rob Williams
  if (!isset($TEMPLATE)) {
    $TITLE = 'Seattle Seismic Hazard Maps and Data';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<img src='images/seattle.gif' alt='seattle hazard map' style='float: right;'/>

<p>
  The USGS has produced a new series of earthquake hazard maps for the City of Seattle. These ‘urban seismic hazard’ maps provide a much higher-resolution view of the potential for strong earthquake shaking than previously available. This new view is particularly important for Seattle, which sits atop a sedimentary basin that strongly affects the patterns of earthquake ground shaking and therefore, of potential damage.
</p>
<p>
  These hazard maps for Seattle depict the hazard for ground shaking at frequencies of about 1 cycle per second. Generally speaking, buildings of 10 stories in height are most sensitive to ground shaking at this frequency, so these maps show the hazard to medium-sized buildings. Since single-family houses are most sensitive to ground-shaking frequencies higher than 1 cycle per second, these maps may not always be a good indicator of the hazard to single-family houses. However, areas of artificial fill and young alluvium (soft soils), as indicated by the locations with highest hazard in these maps, have elevated levels of hazard for a variety of building types, including single-family houses. We are currently conducting research to assess the vulnerability of single-family houses to basin surface waves with frequencies around 1 cycle per second. We expect that many earthquake sources will produce such surface waves in the Seattle basin.
</p>
<p>
  The Poster files are all 26x48in (50 MB PDF). Gridded data files are .0037 degrees (280m) grid spacing in latitude and longitude (300 kb ASCII).
</p>

<table>
    <tr>
        <th>Data Type</th>
        <th>Spectral Acceleration</th>
        <th>Probability of Exceedence</th>
        <th>Download</th>
      </tr>
    <tr>
      <td>Map</td>
      <td>1.0 sec</td>
      <td>10% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/hazmap10in50_150_rdc.jpg">JPG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/hazmap10in50.pdf">Poster</a></td>
    </tr>
    <tr>
      <td>Map</td>
      <td>1.0 sec</td>
      <td>5% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/hazmap5in50_150_rdc.jpg">JPG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/hazmap5in50.pdf">Poster</a></td>
    </tr>
    <tr>
      <td>Map</td>
      <td>1.0 sec</td>
      <td>2% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/hazmap2in50_150_rdc.jpg">JPG</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/hazmap2in50.pdf">Poster</a></td>
    </tr>
    <tr>
      <td>Gridded Data</td>
      <td>1.0 sec</td>
      <td>10% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea10percentg_data.asc">TXT</a></td>
    </tr>
    <tr>
      <td>Gridded Data</td>
      <td>1.0 sec</td>
      <td>5% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea5percentg_data.asc">TXT</a></td>
    </tr>
    <tr>
      <td>Gridded Data</td>
      <td>1.0 sec</td>
      <td>2% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea2percentg_data.asc">TXT</a></td>
    </tr>
    <tr>
      <td>ArcGIS Shapefile</td>
      <td>1.0 sec</td>
      <td>10% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea10percentg_pt.zip">Point Grid</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea10percentg.zip">Polygon Area</a></td>
    </tr>
    <tr>
      <td>ArcGIS Shapefile</td>
      <td>1.0 sec</td>
      <td>5% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea5percentg_pt.zip">Point Grid</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea5percentg.zip">Polygon Area</a></td>
    </tr>
    <tr>
      <td>ArcGIS Shapefile</td>
      <td>1.0 sec</td>
      <td>2% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea2percentg_pt.zip">Point Grid</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea2percentg.zip">Polygon Area</a></td>
    </tr>
    <tr>
      <td>Metadata</td>
      <td>1.0 sec</td>
      <td>10% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea10percentg_pt.htm">Point Grid</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea10percentg.htm">Polygon Area</a></td>
    </tr>
    <tr>
      <td>Metadata</td>
      <td>1.0 sec</td>
      <td>5% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea5percentg_pt.htm">Point Grid</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea5percentg.htm">Polygon Area</a></td>
    </tr>
    <tr>
      <td>Metadata</td>
      <td>1.0 sec</td>
      <td>2% in 50 yrs</td>
      <td><a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea2percentg_pt.htm">Point Grid</a> | <a href="ftp://hazards.cr.usgs.gov/web/nshm/seattle/sea2percentg.htm">Polygon Area</a></td>
    </tr>

</table>
