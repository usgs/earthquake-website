<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Geodolite Trilateration Data Set';
  $HEAD = '<link rel="stylesheet" href="style.css"/>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<p> For a description of the data collection procedures and precision, see:
Savage, J.C., and W.H. Prescott, Precision of Geodolite distance measurements
for determining fault movements, Journal of Geophysical Research, 78, 6001-6008, 1973.</p>

<h2>Geodolite Positions</h2>

  <p><a href="/monitoring/deformation/geodolite/statab.lis"><button class="green">Download <span>(189 kB)</span></button></a></p>
  <strong>Sample</strong>
      <pre>anza  arling     a 33 52 16.842  -117 28 14.350     d  564.00   aa 'arling 1974' NCER
anza  arling80   n 33 52 17.000  -117 28 14.000     n  564.00   aa 'arling l980' USGS
anza  asbesrm1   n 33 37 39.000  -116 27 29.000     n 1600.20   hh 'asbestos no 1 l939' USCGS
anza  asbestos   a 33 37 39.304  -116 27 29.872     a 1604.80   bb 'asbestos l939' USCGS
anza  bachelor   a 33 36 19.504  -117 03 41.192     a  780.00   bb 'bachelor 1939' USCGS</pre>



<h2>Geodolite Line Lengths</h2>

  <p><a href="/monitoring/deformation/geodolite/master.dat"><button class="green">Download <span>(5.7 MB)</span></button></a></p>
  <strong>Sample</strong>
    <pre>anza  asbestos laquinta 871211 1434  58.1  16061.7423 + 16012.7427  0.0002 red    16053.466 0.471 251.098 290.68  904.22  7.55 +          383.40 0.477 1.756 7600 7601  kc g sn104   1604.80 -.048 1.485            h    ef    2  352 545 545  85 2
anza  asbestos laquinta 881116 1417  58.1  16061.7374 + 16012.7378  0.0011 red    16055.094 2.006 257.039 285.22  907.79  4.09 +         1604.80 0.475 1.500 7595       wk/g sn124    383.40 -.048 1.805            /h   if    1  164 415 555  80 2
anza  asbestos laquinta 91 5 3 0855  58.1  16061.7431 + 16012.7435  0.0030 red    16055.101 2.008 256.771 283.60  902.28  4.51 +         1604.80 0.477 1.440 7601       wk/g sn104    383.40 -.048 1.625            /h   if    1  164 535 515 100 3
anza  asbestos lookout  811112 1200 232.4  13488.1455 + 13484.2831                13487.513 0.438 233.802 289.41  836.83  4.53 +         1704.00 0.477 1.230 2198 6950  monr sn104   1604.80 -.026 1.480 4093       oe s   af  2   c   a1  76  90 2  13488.1448
anza  bachelor elsinore 74 212      269.3  26086.1850 + 26080.5419                26085.665 0.471 259.029 284.20  909.95  5.76 +         1090.00 1.480 1.270            ziag sn104    780.00 0.000 1.716            os         2       71  64 105 2  26086.1880
anza  bachelor elsinore 75 5 2      269.3  26086.1997 + 26080.5565                26085.493 0.489 250.975 292.92  909.41  9.65 +         1090.00 1.476 1.357            cb/g sn104    780.00 0.000 1.410            m          2       72  14 100 2  26086.2014</pre>


<h3>Position Column Descriptions</h3>

<table>
  <tr>
    <th>Columns</th>
    <th>Contents</th>
  </tr>
  <tr>
    <td align=right>1-5</td>
    <td>Network name</td>
  </tr>
  <tr>
    <td align=right>7-14</td>
    <td>Station name</td>
  </tr>
  <tr>
    <td align=right>18</td>
    <td>Source of coordinates (see codes at end of file)</td>
  </tr>
  <tr>
    <td align=right>20-21</td>
    <td>Latitude degrees (north positive)</td>
  </tr>
  <tr>
    <td align=right>26-31</td>
    <td>Latitude minutes</td>
  </tr>
  <tr>
    <td align=right>23-24</td>
    <td>Latitude seconds</td>
  </tr>
  <tr>
    <td align=right>34-37</td>
    <td>Longitude degrees (east positive)</td>
  </tr>
  <tr>
    <td align=right>39-40</td>
    <td>Longitude minutes</td>
  </tr>
  <tr>
    <td align=right>42-47</td>
    <td>Longitude seconds</td>
  </tr>
  <tr>
    <td align=right>53</td>
    <td>Source of elevation (see codes at end of file)</td>
  </tr>
  <tr>
    <td align=right>55-61</td>
    <td>Elevation (m)</td>
  </tr>
  <tr>
    <td align=right>65-66</td>
    <td>Type of center mark (see codes at end of file)</td>
  </tr>
  <tr>
    <td align=right>68-80</td>
    <td>Information stamped on monument</td>
  </tr>
</table>

<h3>Line Lengths Column Descriptions</h3>

<table>
  <tr>
    <th>Columns</th>
    <th>Contents</th>
  </tr>

  <tr>
    <td align=right>1-5</td>
    <td>Network name</td>
  </tr>
  <tr>
    <td align=right>7-14</td>
    <td>Station 1 name</td>
  </tr>

  <tr>
    <td align=right>16-23</td>
    <td>Station 2 name</td>
  </tr>
  <tr>
    <td align=right>25-26</td>
    <td>Year (2-digit, always in 1900s)</td>
  </tr>

  <tr>
    <td align=right>27-28</td>
    <td>Month</td>
  </tr>
  <tr>
    <td align=right>29-30</td>
    <td>Day of month</td>
  </tr>

  <tr>
    <td align=right>32-35</td>
    <td>Time (hhmm)</td>
  </tr>
  <tr>
    <td align=right>37-41</td>
    <td>Azimuth (clockwise from north, decimal degrees)</td>
  </tr>

  <tr>
    <td align=right>43-53</td>
    <td>Mark-to-mark distance (m)</td>
  </tr>
  <tr>
    <td align=right>55</td>
    <td>Reduction code (+=latitude properly accounted for in pressure
      reduction, /=latitude was ignored)</td>
  </tr>

  <tr>
    <td align=right>56-66</td>
    <td>Distance on Clarke spheriod (m)</td>
  </tr>
  <tr>
    <td align=right>68-74</td>
    <td>Standard deviation (m)</td>
  </tr>

  <tr>
    <td align=right>76-80</td>
    <td>Code ([blank]=geodolite, red=reduced [from an eccentric],
      g8=geodimeter)</td>
  </tr>
  <tr>
    <td colspan="2" class="note"><strong>Note:</strong> the casual user can ignore the remaining columns</td>
  </tr>

  <tr>
    <td align=right>83-91</td>
    <td>Mean ranging (m)</td>
  </tr>
  <tr>
    <td align=right>93-97</td>
    <td>Mean offset (m)</td>
  </tr>

  <tr>
    <td align=right>99-105</td>
    <td>Mean index of refraction</td>
  </tr>
  <tr>
    <td align=right>107-112</td>
    <td>Mean air temperature (degrees K)</td>
  </tr>

  <tr>
    <td align=right>114-120</td>
    <td>Mean air pressure (mb)</td>
  </tr>
  <tr>
    <td align=right>122-126</td>
    <td>Mean vapor pressure (mb)</td>
  </tr>

  <tr>
    <td align=right>128</td>
    <td>Original reduction code ([blank] or $)</td>
  </tr>
  <tr>
    <td align=right>130-136</td>
    <td>Correction to convert [blank] or $ to / (m)</td>
  </tr>

  <tr>
    <td align=right>138-144</td>
    <td>Elevation of Station 1 (m)</td>
  </tr>
  <tr>
    <td align=right>146-150</td>
    <td>Instrument constant (m)</td>
  </tr>

  <tr>
    <td align=right>152-156</td>
    <td>Instrument Height 1 (m)</td>
  </tr>
  <tr>
    <td align=right>158-156</td>
    <td>Instrument digiquartz #1 id</td>
  </tr>

  <tr>
    <td align=right>163-166</td>
    <td>Instrument digiquartz #2 id</td>
  </tr>
  <tr>
    <td align=right>169-172</td>
    <td>Instrument operator</td>
  </tr>

  <tr>
    <td align=right>163-166</td>
    <td>Instrument id</td>
  </tr>
  <tr>
    <td align=right>182-188</td>
    <td>Elevation of Station 2 (m)</td>
  </tr>

  <tr>
    <td align=right>190-194</td>
    <td>Reflector constant (m)</td>
  </tr>
  <tr>
    <td align=right>196-200</td>
    <td>Reflector Height 1 (m)</td>
  </tr>

  <tr>
    <td align=right>202-205</td>
    <td>Reflector digiquartz #1 id</td>
  </tr>
  <tr>
    <td align=right>207-210</td>
    <td>Reflector digiquartz #2 id</td>
  </tr>

  <tr>
    <td align=right>213-216</td>
    <td>Reflector operator</td>
  </tr>
  <tr>
    <td align=right>218-223</td>
    <td>Reflector id</td>
  </tr>

  <tr>
    <td align=right>224</td>
    <td>Processing direction (1=Sta 1 to Sta 2, 2=Sta2 to Sta1)</td>
  </tr>
  <tr>
    <td align=right>226-229</td>
    <td>Aircraft recorder id</td>
  </tr>

  <tr>
    <td align=right>231-233</td>
    <td>Probe 1 id</td>
  </tr>
  <tr>
    <td align=right>235-237</td>
    <td>Probe 2 id</td>
  </tr>

  <tr>
    <td align=right>239-241</td>
    <td>Airspeed (knots)</td>
  </tr>
  <tr>
    <td align=right>242-243</td>
    <td>Number of aircraft passes</td>
  </tr>

  <tr>
    <td align=right>245-255</td>
    <td>Old arc distance using Bomford refractivity</td>
  </tr>
</table>
