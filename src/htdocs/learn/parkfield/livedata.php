<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'View or Download Data';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>
<div class="row">
  <div class="column one-of-two">
 <div>
   <h3>Tensor Strainmeters</h3>
    <ul>
      <li><a href="/monitoring/deformation/data/plots/map.php?region=PK">Map of Instruments</a></li>
      <li><a href="http://www.cat.csiro.au/dem/msg/straincal/straincal.html">Plots of Tensor Strainmeter 1987-1999</a></li>
      <li><a href="http://www.cat.csiro.au/dem/msg/straincal/strainpark.html">CSIRO</a></li>
    </ul>
 </div>
 <div>
   <h3>Creepmeters</h3>
    <ul>
      <li><a href="http://escweb.wr.usgs.gov/share/langbein/Web/Creep/pkf_10.png">Past 7 days</a></li>
      <li><a href="http://escweb.wr.usgs.gov/share/langbein/Web/Creep/pkf_30.png">Past 30 days</a></li>
      <li><a href="/monitoring/deformation/data/plots/map.php?region=PK">Map of Instruments</a></li>
      <li><a href="http://escweb.wr.usgs.gov/share/langbein/Web/Creep/pkf_3650.png">Long-term</a></li>
    </ul>
  </div>
 <div>
   <h3>Dilatometers</h3>
    <ul>
      <li><a href="http://escweb.wr.usgs.gov/share/langbein/Web/USGS_strain/pkf_10.png">Past 7 days</a></li>
      <li><a href="http://escweb.wr.usgs.gov/share/langbein/Web/USGS_strain/pkf_30.png">Past 30 days</a></li>
      <li><a href="/monitoring/deformation/data/plots/map.php?region=PK">Map of Instruments</a></li>
    </ul>
  </div>
 <div>
   <h3>Pore Pressure</h3>
    <ul>
      <li><a href="/monitoring/deformation/data/plots/plots.php?type=pp&region=PK&days=7">Past 7 days</a></li>
      <li><a href="/monitoring/deformation/data/plots/plots.php?type=pp&region=PK&days=30">Past 30 days</a></li>
      <li><a href="/monitoring/deformation/data/plots/map.php?region=PK">Map of Instruments</a></li>
    </ul>
  </div>
</div>
  <div class="column one-of-two">
 <div>
   <h3>GPS</h3>
    <ul>
      <li><a href="/monitoring/gps/Parkfield/">USGS Campaign and Continuous</a></li>
      <li><a href="/monitoring/deformation/edm/parkfield/continuous.php">USGS Continuous</a> - with additional processing</li>
    </ul>
  </div>
 <div>
   <h3>Two-color EDM </h3>
    <ul>
      <li><a href="/monitoring/deformation/edm/parkfield/">Parkfield network data</a></li>
      <li><a href="/learn/parkfield/lime.html" rel="ibox&amp;width=635&amp;height=800">LIME Data</a></li>
      <li><a href="/learn/parkfield/pig.html" rel="ibox&amp;width=640&amp;height=800">PIG Data</a></li>
    </ul>
  </div>
 <div>
  <h3>Other Data</h3>
    <ul>
      <li><a href="http://nsmp.wr.usgs.gov/GEOS/PRK/parkfield.html">GEOS Data</a></li>
      <li><a href="http://quake.usgs.gov/research/deformation/gps/geodolite/sanlu/">Geodolite</a></li>
      <li><a href="http://www.quake.ca.gov/turkeyflat.htm">CDMG Strong Motion Data</a></li>
    </ul>
  </div>
 <div>
   <h3>Summary Information</h3>
    <ul>
      <li><a href="/monitoring/deformation/data/?region=PK">Interactive Deformation Instrument Maps</a></li>
      <li><a href="/learn/parkfield/instrument_table.php">Summary
              Table</a> Details on instruments and measurements</li>
    </ul>
  </div>
</div>
</div>
