<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Soil Type and Shaking Hazard in the San Francisco Bay Area';
  $HEAD = '<link rel="stylesheet" href="style.css" />';
  $FOOT = '';

  include 'template.inc.php';
}

?>

<figure class="right">
  <h3>Interactive map</h3>
  <a href="map/" title="Click to view an interactive map">
    <img src="soiltype.png" alt="Bay Area soil map thumbnail image" />
  </a>
</figure>

<p>Ground shaking is the primary cause of earthquake damage to man-made structures. When the ground shakes strongly, buildings can be damaged or destroyed and their occupants may be injured or killed. </p>
<p>Seismologists have observed that some districts tend to repeatedly experience stronger seismic shaking than others. This is because the ground under these districts is relatively soft. Soft soils <strong>amplify</strong> ground shaking. If you live in an area that in past earthquakes suffered shaking stronger than that felt in other areas at comparable distance from the source, you are likely to experience relatively strong shaking in future earthquakes as well. An example of this effect was observed in San Francisco, where many of the same neighborhoods were heavily damaged in both the 1906 and 1989 earthquakes. The influence of the underlying soil on the local amplification of earthquake shaking is called the <strong>site effect</strong>.</p>
<p>Other factors influence the strengh of earthquake shaking at a site as well, including the earthquake's magnitude and the site's proximity to the fault. These factors vary from earthquake to earthquake. In contrast, soft soil always amplifies shear waves. If an earthquake is strong enough and close enough to cause damage, the damage will usually be more severe on soft soils.</p>
<h2>Soil Types and Shaking Amplification</h2>
<p>One contributor to the site amplification is the velocity at which the rock or soil transmits shear waves (S-waves). Shaking is stronger where the shear wave velocity is lower. The National Earthquake Hazards Reduction Program (NEHRP) has defined 5 soil types based on their shear-wave velocity (Vs). We have modified these definitions slightly, based on studies of earthquake damage in the Bay Area. The modified definitions are as follows:</p>

<table>
  <tr class="typea">
    <th>Soil type A</th>
    <td>Vs &gt; 1500 m/sec</td>
    <td>Includes unweathered intrusive igneous rock. Occurs infrequently in the bay area. We consider it with type B (both A and B are represented by the color blue on the map). Soil types A and B do not contribute greatly to shaking amplification.</td>
  </tr>
  <tr class="typeb">
    <th>Soil type B</th>
    <td>1500 m/sec &gt; Vs &gt; 750 m/sec</td>
    <td>Includes volcanics, most Mesozoic bedrock, and some Franciscan bedrock. (Mesozoic rocks are between 245 and 64 million years old. The Franciscan Complex is a Mesozoic unit that is common in the Bay Area.)</td>
  </tr>
  <tr class="typec">
    <th>Soil Type C</th>
    <td>750 m/sec &gt; Vs &gt; 350 m/sec</td>
    <td> Includes some Quaternary (less than 1.8 million years old) sands, sandstones and mudstones, some Upper Tertiary (1.8 to 24 million years old) sandstones, mudstones and limestone, some Lower Tertiary (24 to 64 million years old) mudstones and sandstones, and Franciscan melange and serpentinite.</td>
  </tr>
  <tr class="typed">
    <th>Soil Type D </th>
    <td>350 m/sec &gt; Vs &gt; 200 m/sec</td>
    <td>Includes some Quaternary muds, sands, gravels, silts and mud. Significant amplification of shaking by these soils is generally expected.</td>
  </tr>
  <tr class="typee">
    <th>Soil Type E </th>
    <td>200 m/sec &gt; Vs</td>
    <td>Includes water-saturated mud and artificial fill. The strongest amplification of shaking due is expected for this soil type.</td>
  </tr>
</table>

<h2>Caveats</h2>

<ol>
  <li> Surface geology provides only a rough estimate of the site effect.</li>
  <li>Map boundaries are accurate only to within about 50 meters.</li>
  <li>Soft soils tend to overlie stiffer soils and bedrock. Sites on thin layers (less than 4 meters) of soft soil overlying stiff soil will behave more like sites on stiff soil.</li>
  <li>Some inaccuracy is introduced by assigning NEHRP soil-types to a geologic unit on the basis of the average velocity for that unit. For example, there is a widespread (in the bay area) unit consisting of Quaternary sand, gravel, silt and mud. It has been assigned a soil-type of C, based on its average velocity. While the average velocity is within the range of soil-type C, some of the slower-velocity soils within the unit fall into the range of soil-type D. Because the unit is undifferentiated in our digital geologic data set, we have no basis for identifying the slower-velocity soils.</li>
  <li>The map shows faults with historic and Holocene (less than 10,000 years old) movement.</li>
</ol>
