<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Data Network Summary Table';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>
<table>
  <tr>
    <th>Network</th>
    <th>Purpose</th>
    <th>Number of Sites</th>
    <th>Sensitivity</th>
    <th>Measurement Interval</th>
    <th>References</th>
  </tr>
  <tr>
    <td>NCSN Seismicity </td>
    <td>High-grain, short-period vertical component Northern California Seismic Network seismometers collect data within 25 km of Parkfield. Earthquake magnitudes and locations can be estimated within 3 - 5 minutes of occurrence.</td>
    <td>40</td>
    <td>M greater than or equal to 1.0</td>
    <td>continuous</td>
    <td><em>Nishioka and Michael </em>[<a href="/learn/parkfield/scientific.php#Nisho87">1987</a>]</td>
  </tr>
  <tr>
    <td>Continuous dilational strain (<a href="/monitoring/deformation/data/?region=PK&days=7&instrument=dil">dilatometers</a>)</td>
    <td>These instruments measure volumetric strain changes in the Earth near active faults. Dilatometers measure changes in volume strain near the fault. </td>
    <td>7</td>
    <td>10-9<sup>*</sup></td>
    <td>10 minutes</td>
    <td><em>Myren and Johnston</em> [<a href="/learn/parkfield/scientific.php#Myren89">1989</a>]</td>
  </tr>
  <tr>
    <td><a href="/monitoring/deformation/data/?region=PK&days=7&instrument=gtsm">Continuous tensor strain</a></td>
    <td>These instruments measure strain changes on 3 components in the Earth near active faults. Over short time periods they can detect changes of 10 parts-per-billion (1 inch in 1600 miles). Tensor strainmeters measure horizontal strain in three nonparallel directions.</td>
    <td>3</td>
    <td>10-9<sup>*</sup></td>
    <td><p>15 minutes</p>
        <p> 30 minutes (EDT,FLT) </p>
      <p>18 minutes<br />
        (DLT)</p></td>
    <td><em>Gladwin et al.</em> [<a href="/learn/parkfield/scientific.php#Gladwin87">1987</a>]</td>
  </tr>
  <tr>
    <td><a href="http://quake.usgs.gov/research/deformation/monitoring/instruments/mag.html">Magnetic Field</a></td>
    <td>These instruments measure local changes in the earth's magnetic field near active faults. Over short time periods they can detect changes of as small as 1/50,000th of the earth's magnetic field.</td>
    <td>7</td>
    <td>0.25 nT</td>
    <td>10 minutes</td>
    <td><em>Teague et al.</em> [<a href="/learn/parkfield/scientific.php#T">1994</a>]</td>
  </tr>
  <tr>
    <td><a href="/monitoring/deformation/data/?region=PK&days=7&instrument=creep">Creepmeter</a></td>
    <td>Creepmeters continuously monitor fault movement within a few meters of fault zones to characterize the rate and nature of fault slip. They can detect changes of about 0.1 millimeters.</td>
    <td>12</td>
    <td>0.05 mm<sup>*</sup></td>
    <td>10 minutes</td>
    <td><em>Schulz</em> [<a href="/learn/parkfield/scientific.php#Schulz89">1989</a>]</td>
  </tr>
  <tr>
    <td><a href="http://quake.usgs.gov/research/deformation/monitoring/instruments/water.html">Ground water level</a></td>
    <td>Fluid pressure transducers in well boreholes measure changes in the height of the ground water table associated with each well-aquifer system. Over short time periods they can detect water level changes of a few millimeters. </td>
    <td>10</td>
    <td>1 mm</td>
    <td>15 minutes</td>
    <td><em>Roeloffs et al.</em> [<a href="/learn/parkfield/scientific.php#Roeloffs89">1989</a>]</td>
  </tr>
  <tr>
    <td><a href="/monitoring/deformation/edm/parkfield/">Two-color EDM</a></td>
    <td>A two-color Electronic Distance Meter (EDM) measures the changes in distances on several baselines near Parkfield at a precision of about 0.5 mm. These changes reflect fault slip on the San Andreas and strain accumulation</td>
    <td>18 lines</td>
    <td>1 mm</td>
    <td>3 / week</td>
    <td><em>Langbein et al.</em>[<a href="/learn/parkfield/scientific.php#Lang90">1990</a>]</td>
  </tr>
  <tr>
    <td><a href="/monitoring/deformation/edm/parkfield/">Portable EDM</a></td>
    <td>Data from this network provide a measure of surface and shallow slip near Middle Mountain.</td>
    <td>20 lines</td>
    <td>1 mm</td>
    <td>1 / year</td>
    <td><em>Bakun</em> [<a href="/learn/parkfield/scientific.php#B">1987</a>]</td>
  </tr>
  <tr>
    <td colspan="2">Tilt (discontinued)</td>
    <td>5</td>
    <td>1 micro rad</td>
    <td>10 minutes</td>
    <td><em>Johnston</em> [<a href="/learn/parkfield/scientific.php#Johnston78">1978</a>]</td>
  </tr>
  <tr>
    <td colspan="2">Groundwater radon (discontinued)</td>
    <td>2</td>
    <td>1 pCi/L</td>
    <td>10 minutes</td>
    <td><em>Noguichi and Wakita </em>[<a href="/learn/parkfield/scientific.php#Nog77">1977</a>]</td>
  </tr>
  <tr>
    <td colspan="2">Soil Hydrogen (discontinued)</td>
    <td>7</td>
    <td>10 ppm</td>
    <td>10 minutes</td>
    <td><em>Sato et al.</em> [<a href="/learn/parkfield/scientific.php#Sato86">1986</a>]</td>
  </tr>
  <tr>
    <td colspan="2">Resistivity</td>
    <td>6 dipoles</td>
    <td>1%</td>
    <td>daily average</td>
    <td><em>Park</em> [<a href="/learn/parkfield/scientific.php#Park91">1991</a>]</td>
  </tr>
  <tr>
    <td colspan="2">Ultra-low frequency magnetic field</td>
    <td>2</td>
    <td>1 pT</td>
    <td>30 minute average</td>
    <td><em>McGill et al.</em> [<a href="/learn/parkfield/scientific.php#Fraser93">1993</a>]</td>
  </tr>
  <tr>
    <td colspan="2">E-M Field</td>
    <td>3 magnetic, 2 electric</td>
    <td></td>
    <td></td>
    <td>Morrison </td>
  </tr>
  <tr>
    <td><a href="/monitoring/gps/Parkfield/">Continuous GPS</a></td>
    <td>GPS ( Positioning System) measures displacements at several points near Parkfield with a precision of 2 to 3 mm in the horizontal and about 10 mm in the vertical.</td>
    <td>6</td>
    <td>2 mm</td>
    <td>1-day average</td>
    <td>Langbein oral comm. [2001)</td>
  </tr>
  <tr>
    <td colspan="2"><a href="/monitoring/gps/Parkfield/">Campaign GPS</a></td>
    <td>34</td>
    <td>3 mm</td>
    <td>1 every 3 years</td>
    <td><p>Langbein oral comm. [2001)<em><br />
      </em></p>
        <p><em> King et al.</em> [<a href="/learn/parkfield/scientific.php#King87">1987</a>]</p></td>
  </tr>
  <tr>
    <td colspan="2">Leveling</td>
    <td>7 lines</td>
    <td>1 mm/km</td>
    <td>infrequent</td>
    <td><em>Sylvester</em> [<a href="/learn/parkfield/scientific.php#Sylvester91">1991</a>]</td>
  </tr>
  <tr>
    <td><a href="https://ncedc.org/hrsn/">HRSN</a> Borehole Seismic Network</td>
    <td>These instruments measure strain changes on 3 components in the Earth near active faults. Over short time periods they can detect changes of 10 parts-per-billion (1 inch in 1600 miles)</td>
    <td>10</td>
    <td>M greater than or equal to -1</td>
    <td>continuous</td>
    <td><em>Michelini et al</em>. [<a href="/learn/parkfield/scientific.php#Mich91">1991</a>]</td>
  </tr>
  <tr>
    <td><a href="https://ncedc.org/hrsn/">Vibrosis</a> waveform (discontinued)</td>
    <td>Surface vibrator used by UCB is a source of seismic energy for an investigation of subtle changes.</td>
    <td>80 paths</td>
    <td>5 ms</td>
    <td>4 / year</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><a href="http://bssa.geoscienceworld.org/cgi/content/abstract/82/2/1041">UPSAR</a> Dense Seismic Array</td>
    <td>14 geophone, 14 accelerometers in 1 km<sup>2</sup> area</td>
    <td>M greater than or equal to 3</td>
    <td>continuous</td>
    <td><em>Fletcher et al</em>. [<a href="/learn/parkfield/scientific.php#Fletch92">1992</a>]</td>
  </tr>
  <tr>
    <td>EPRI Dense Seismic Array (discontinued)</td>
    <td>Force balance accelerometers (FBA) adequitly record magnitude 3 and 4 shocks.</td>
    <td>21 FBA in 120 m radius</td>
    <td></td>
    <td>continuous</td>
    <td><em>Schneider et al.</em> [<a href="/learn/parkfield/scientific.php#Schneider90">1990</a>]</td>
  </tr>
  <tr>
    <td colspan="2">Liquefaction Array (discontinued)</td>
    <td>5 accelerometers, 7 piezometers</td>
    <td></td>
    <td></td>
    <td><em>Holzer et al.</em> [<a href="/learn/parkfield/scientific.php#Holze88r">1988</a>]</td>
  </tr>
  <tr>
    <td colspan="2">CDMG Strong motion array</td>
    <td>48 3-componenet, SMA</td>
    <td>M greater than or equal to 4</td>
    <td>triggered</td>
    <td><em>McJunkin and Shakal </em>[<a href="/learn/parkfield/scientific.php#Mcjunkin83">1983</a>]</td>
  </tr>
  <tr>
    <td><a href="http://nsmp.wr.usgs.gov/GEOS/PRK/parkfield.html">GEOS</a> digital recording (acceleration, velocity and volume strain) </td>
    <td>Force balance accelerometers (FBA) adequilty record magnitude 3 and 4 shocks.</td>
    <td>13 3-component, FBA</td>
    <td></td>
    <td>triggered</td>
    <td><em>Borcherdt et al.</em> [<a href="/learn/parkfield/scientific.php#Borch85">1985</a>]</td>
  </tr>
  <tr>
    <td colspan="2">Rupture Video camera</td>
    <td>2 cameras</td>
    <td>M greater than or equal to 4</td>
    <td>triggered</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">Turkey Flat Strong motion array</td>
    <td>6 3-component FBA, 2 downhole, 2 km linear array</td>
    <td></td>
    <td>triggered</td>
    <td><em>Real and Tucker</em> [<a href="/learn/parkfield/scientific.php#R">1988</a>]<em><br />
      Cramer</em>[<a href="/learn/parkfield/scientific.php#Cramer">1995</a>] </td>
  </tr>
</table>
