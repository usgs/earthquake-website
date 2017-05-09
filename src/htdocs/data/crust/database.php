<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Global Crustal Database';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>
<figure class="right" style="max-width: 410px">
<img src="/data/crust/images/datapoints.gif" alt="map depicting the location of datapoints" /></a>
 <figcaption>Orange triangles are location of continental database entries.
Blue dots are location of oceanic datapoints.</figcaption></figure>

<p>In 1988, work was started on a global database
intended to characterize the Earth&rsquo;s crust. Today, this database
has over 5000 entries, covering a large portion of the Earth&rsquo;s surface.
The primary data source is from published literature detailing the results
of seismic refraction profiles, although some unpublished results have
been used as well, especially in Russia and China. From these seismic
profiles, we extract a 1-D seismic velocity model (Vp and Vs if available)
for a specific latitude and longitude. The 1-D model includes the
thickness and seismic velocity for each crustal layer as well as annotations
of sedimentary layers, velocity gradients, and the moho depth. Other
crustal parameters are added to each point to create a complete image
of the Earth&rsquo;s crust. </p>
<table cellspacing="1" class="tabular">
  <caption>Other parameters included in the database.</caption>
  <tr>
    <th>Parameter</th>
    <th>Data Source</th>
  </tr>
  <tr>
    <td>Elevation</td>
    <td>ETOPO5</td>
  </tr>
  <tr>
    <td>Heat flow</td>
    <td>Global heat flow database compiled by Pollack et al.; available from National Geophysical Data Center</td>
  </tr>
  <tr>
    <td>Geologic province</td>
    <td>in-house compiled map</td>
  </tr>
  <tr>
    <td>Thermo-tectonic age</td>
    <td>in-house compiled map</td>
  </tr>
</table>


</table>
