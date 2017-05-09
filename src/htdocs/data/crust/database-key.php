<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Key to crustal structure database';
  $HEAD = '<style>
    pre {
      font-family: Courier !important;
    }
    th {
      padding-right: 1em !important;
      white-space: nowrap;
      font-weight: bold !important;
    }
    em {
      font-style: italic !important;
    }
  </style>';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>
<h3>Example</h3>
<pre>
                                           Crust-thick
Rec#      lat     Pv    Sv   zlayer  depth     w/o     elev   heat   loc     R/U
          lon     Pv    Sv   zlayer  depth    w/sed    age    azim   ref    prov
                  Pv    Sv   zlayer  depth  moho/other indice

1089     58.13N  5.50  0.00  12.00   0.00     32.00    0.43  90.00  NAC-AL   3 R
        155.00W  6.50  0.00  20.00  12.00     32.00    MCz  999.00   63B.1   Oia
                 8.10  0.00   0.00  32.00  m

</pre>

<h3>Key</h3>
<table>
	<tr><th>Rec#</th><td>the record number given this datapoint in the database</td></tr>
	<tr><th>lat</th><td>the latitude of the datapoint</td></tr>
	<tr><th>lon</th><td>the longitude of the datapoint</td></tr>
	<tr><th>Pv</th><td>the P-wave velocity of a given layer in the 1-D seismic velocity model for the datapoint</td></tr>
	<tr><th>Sv</th><td>the S-wave velocity for same as above (&ldquo;0.00&rdquo; indicates no data entry)</td></tr>
	<tr><th>zlayer</th><td>the thickness of the layer described by the given P- and S-wave velocities</td></tr>
	<tr><th>depth</th><td>the depth at which the layer described by the given velocities starts</td></tr>
	<tr><th>moho/other indice</th><td>&ldquo;m&rdquo; indicates the moho depth<br />
		other parameters include &ldquo;c&rdquo; crust, &ldquo;s&rdquo; sediments, &ldquo;g&rdquo; gradient, &ldquo;l&rdquo; low-velocity zone.  Combinations may also exist for gradients within sedimentary (sg), low velocity (lg), crustal (cg) or mantle (mg) layers.  &ldquo;xm&rdquo; refers to a mantle layer with an unknown depth.  A blank space means the layer is not specifically defined in the source reference.</td>
	</tr>
	<tr>
		<th>Crust-thick</th>
		<td>
			<table>
				<tr>
					<th>w/o</th>
					<td>the crustal thickness at the datapoint without including sediments</td>
				</tr>
				<tr>
					<th>w/sed</th>
					<td>the total crustal thickness (including sediments)</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><th>elev</th><td>the elevation at the datapoint (if negative then this is the depth of the water)</td></tr>
	<tr><th>age</th>
		<td>the age of the last thermo-tectonic event at the datapoint (if known)
			<table>
				<tr>
					<th>MCz</th>
					<td>Mesozoic to Cenozoic</td>
				</tr>
				<tr>
					<th>Pz</th>
					<td>Paleozoic</td>
				</tr>
				<tr>
					<th>lPt</th>
					<td>Late Proterozoic</td>
				</tr>
				<tr>
					<th>mPt</th>
					<td>Middle Proterozoic</td>
				</tr>
				<tr>
					<th>ePt</th>
					<td>Early Proterozoic</td>
				</tr>
				<tr>
					<th>Ar</th>
					<td>Archean</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><th>heat</th><td>heat flow at the datapoint (not yet complete!)</tr>
	<tr><th>azim</th><td>the azimuth of the profile from which the 1-D profile was taken (999 indicates multiple directions, 900 indicates unknown)</tr>
	<tr><th>loc</th><td>the general location of the datapoint (e.g., NAC-BR = North American Continent, Basin and Range)
		</br /><em>available upon request</em>
	</tr>
	<tr><th>ref</th><td>the reference to the literature from which the seismic data was taken<br />
			(e.g., 63B.1 = the year in which the article was published (1963), the initial of the last name of the first author of the article (B), and the number indicating which of the references from &ldquo;63B&rdquo; this datapoint was taken (1)
			</br /><em>available upon request</em></td>
	</tr>
	<tr><th>#</th><td>(3 shown above) the number of layers in this datapoint</td></tr>
	<tr><th>R/U</th><td>indicates whether the seismic profile from which the data was taken was reversed refraction (R), unreversed refraction (U), Split (S), Reflection (F), Sonobuoy (B), Tomography (I), Time Term (T), Earthquake Model (E), Receiver Function (C), waveform model (W), Laboratory Measurement (L), unknown (*) or other (O)</td></tr>
	<tr>
		<th>prov</th>
		<td>indicates the geologic province in which the datapoint is situated (if known)
			<table>
				<tr>
					<th>ORO</th>
					<td>orogen</td>
				</tr>
				<tr>
					<th>EXC</th>
					<td>extended crust</td>
				</tr>
				<tr>
					<th>BAS</th>
					<td>basin</td>
				</tr>
				<tr>
					<th>PLT</th>
					<td>platform</td>
				</tr>
				<tr>
					<th>SHD</th>
					<td>shield</td>
				</tr>
				<tr>
					<th>LIP</th>
					<td>large igneous province</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
