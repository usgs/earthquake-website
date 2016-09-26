<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/26/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Measuring the Size of an Earthquake';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>Seismic waves are the vibrations from earthquakes that travel through the Earth; they are recorded on instruments called seismographs. Seismographs record a zig-zag trace that shows the varying amplitude of ground oscillations beneath the instrument. Sensitive seismographs, which greatly magnify these ground motions, can detect strong earthquakes from sources anywhere in the world. The time, locations, and magnitude of an earthquake can be determined from the data recorded by seismograph stations.</p>

<h2>The Richter Scale</h2>

<p>The Richter magnitude scale was developed in 1935 by Charles F. Richter of the California Institute of Technology as a mathematical device to compare the size of earthquakes. The magnitude of an earthquake is determined from the logarithm of the amplitude of waves recorded by seismographs. Adjustments are included for the variation in the distance between the various seismographs and the epicenter of the earthquakes. On the Richter Scale, magnitude is expressed in whole numbers and decimal fractions. For example, a magnitude 5.3 might be computed for a moderate earthquake, and a strong earthquake might be rated as magnitude 6.3. Because of the logarithmic basis of the scale, each whole number increase in magnitude represents a tenfold increase in measured amplitude; as an estimate of energy, each whole number step in the magnitude scale corresponds to the release of about 31 times more energy than the amount associated with the preceding whole number value.</p>

<p>At first, the Richter Scale could be applied only to the records from instruments of identical manufacture. Now, instruments are carefully calibrated with respect to each other. Thus, magnitude can be computed from the record of any calibrated seismograph.</p>

<p>Earthquakes with magnitude of about 2.0 or less are usually called microearthquakes; they are not commonly felt by people and are generally recorded only on local seismographs. Events with magnitudes of about 4.5 or greater - there are several thousand such shocks annually - are strong enough to be recorded by sensitive seismographs all over the world. Great earthquakes, such as the 1964 Good Friday earthquake in Alaska, have magnitudes of 8.0 or higher. On the average, one earthquake of such size occurs somewhere in the world each year.</p>

<p>The Richter Scale is not commonly used anymore, as it has been replaced by another scale called the moment magnitude scale which is a more accurate measure of the earthquake size.</p>

<h2>Magnitude </h2>

<p>Modern seismographic systems precisely amplify
and record ground motion (typically at periods of
between 0.1 and 100 seconds) as a function of time.
This amplification and recording as a function of time
is the source of instrumental amplitude and arrival-time
data on near and distant earthquakes. Although
similar seismographs have existed since the 1890's,
it was only in the 1930's that Charles F. Richter,
a California seismologist, introduced the concept of
earthquake magnitude. His original definition held
only for California earthquakes occurring within
600 km of a particular type of seismograph
(the Woods-Anderson torsion instrument).
His basic idea was quite simple:
by knowing the distance from a seismograph
to an earthquake and observing the maximum signal
amplitude recorded on the seismograph, an empirical
quantitative ranking of the earthquake's inherent size
or strength could be made. Most California earthquakes
occur within the top 16 km of the crust;
to a first approximation, corrections for variations in
earthquake focal depth were, therefore, unnecessary.</p>

<p>Richter's original magnitude scale (M<sub>L</sub>) was then extended
to observations of earthquakes of any distance
and of focal depths ranging between 0 and 700 km.
Because earthquakes excite both body waves, which
travel into and through the Earth, and surface waves,
which are constrained to follow the natural wave guide
of the Earth's uppermost layers, two magnitude scales
evolved - the m<sub>b</sub> and
M<sub>S</sub> scales.
</P>

<P>
The standard body-wave magnitude formula is
</P>
<P  style="text-indent: 1em; text-align: justify">
m<sub>b</sub> = log<sub>10</sub>(<i>A/T</i>) + Q(<i>D</i>,<i>h</i>) ,
</P>
<P>
where <i>A</i> is the amplitude of ground motion (in microns);
<i>T</i> is the corresponding period (in seconds);
and Q(<i>D</i>,<i>h</i>) is a correction factor that is a function of
distance, <i>D</i> (degrees), between epicenter and station
and focal depth, <i>h</i> (in kilometers), of the earthquake.
The standard surface-wave formula is
</P>
<P  style="text-indent: 1em; text-align: justify">
M<sub>S</sub> = log<sub>10</sub> (<i>A/T</i>) + 1.66 log<sub>10</sub> (D) + 3.30 .
</P>
<P>
There are many variations of these formulas that
take into account effects of specific geographic regions,
so that the final computed magnitude is
reasonably consistent with Richter's original definition
of M<sub>L</sub>. Negative magnitude values are permissible.
</P>
<P>
A rough idea of frequency of occurrence of large
earthquakes is given by the following table:<br>
<table>
	<thead>
		<tr>
			<th>M<sub>S</sub></th>
			<th>Earthquakes per year</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>8.5 - 8.9</td>
			<td>0.3</td>
		</tr>
		<tr>
			<td>8.0 - 8.4</td>
			<td>1.1</td>
		</tr>
		<tr>
			<td>7.5 - 7.9</td>
			<td>3.1</td>
		</tr>
		<tr>
			<td>7.0 - 7.4</td>
			<td>15</td>
		</tr>
		<tr>
			<td>6.5 - 6.9</td>
			<td>56</td>
		</tr>
		<tr>
			<td>6.0 - 6.4</td>
			<td>210</td>
		</tr>
	</tbody>
</table>

</P>
<P>
This table is based on data for a recent 47 year
period. Perhaps the rates of earthquake occurrence are
highly variable and some other 47 year period could give quite
different results.
</P>
<P>
The original m<sub>b</sub> scale utilized compressional body
P-wave amplitudes with periods of 4-5 s, but recent
observations are generally of 1 s-period P waves.
The M<sub>S</sub> scale has consistently used Rayleigh surface
waves in the period range from 18 to 22 s.
</P>
<P>
When initially developed, these magnitude scales
were considered to be equivalent; in other words,
earthquakes of all sizes were thought to radiate fixed
proportions of energy at different periods. But it turns
out that larger earthquakes, which have larger rupture
surfaces, systematically radiate more long-period
energy. Thus, for very large earthquakes, body-wave
magnitudes badly underestimate true earthquake size;
the maximum body-wave magnitudes are about
6.5 - 6.8. In fact, the surface-wave magnitudes underestimate
the size of very large earthquakes;
the maximum observed values are about 8.3 - 8.7. Some
investigators have suggested that the 100 s mantle Love waves
(a type of surface wave) should be used to
estimate magnitude of great earthquakes. However,
even this approach ignores the fact that damage to structure is often
caused by energy at shorter periods.
Thus, modern seismologists are increasingly turning to
two separate parameters to describe
the physical effects of an earthquake:
seismic moment and radiated energy.
</P>
<P>
<b> Fault Geometry and Seismic Moment, M<sub>O</sub> </b>
</P>
<P>
The orientation of the fault, direction of fault movement,
and size of an earthquake can be described by
the fault geometry and seismic moment. These parameters
are determined from waveform analysis of the
seismograms produced by an earthquake. The differing
shapes and directions of motion of the waveforms
recorded at different distances and azimuths from the
earthquake are used to determine the fault geometry,
and the wave amplitudes are used to compute moment.
The seismic moment is related to fundamental
parameters of the faulting process.
</P>
<P style="text-indent: 1em; text-align: justify">
M<sub>O</sub> = &micro;S&#139;d&#155 ,
</P>
<P>
where
&micro;
is the shear strength of the faulted rock, S is
the area of the fault, and &#60;d&#62; is the average displacement
on the fault. Because fault geometry and observer
azimuth are a part of the computation, moment
is a more consistent measure of earthquake size than
is magnitude, and more importantly, moment does not
have an intrinsic upper bound. These factors have led
to the definition of a new magnitude scale
M<sub>W</sub>, based on
seismic moment, where
</P>
<P  style="text-indent: 1em; text-align: justify">
M<sub>W</sub> = 2/3 log<sub>10</sub>(M<sub>O</sub>) - 10.7 .
</P>
<P>
The two largest reported moments are 2.5 X 10<sup>30</sup>
dyn&#183;cm (dyne&#183;centimeters) for the 1960 Chile earthquake
(M<sub>S</sub> 8.5;
M<sub>W</sub> 9.6)
and 7.5 X 10<sup>29</sup> dyn&#183;cm for the
1964 Alaska earthquake (M<sub>S</sub> 8.3;
M<sub>W</sub> 9.2).
M<sub>S</sub> approaches its maximum value at a moment between
10<sup>28</sup> and 10<sup>29</sup> dyn&#183;cm.
</P>
<P>
<b> Energy, <i>E</i> </b>
</P>
<P>
The amount of energy radiated by an earthquake is a measure
of the potential for damage to man-made structures.
Theoretically, its computation requires summing
the energy flux over a broad suite of frequencies generated
by an earthquake as it ruptures a fault.  Because of instrumental
limitations, most estimates of energy have historically
relied on the empirical relationship developed by Beno Gutenberg
and Charles Richter:
</P>
<P  style="text-indent: 1em; text-align: justify">
log<sub>10</sub><i>E</i> = 11.8 + 1.5M<sub>S</sub>
<P>
where energy, <i>E</i>, is expressed in ergs.
The
drawback of this method is that M<sub>S</sub>
is computed from an
bandwidth between approximately 18 to 22 s.
It is now known that the energy radiated by an earthquake
is concentrated over a different bandwidth and at higher frequencies.
With the worldwide deployment of modern digitally recording
seismograph with broad bandwidth response, computerized
methods are now able to make accurate and explicit estimates
of energy on a routine basis for all major earthquakes.
A magnitude based on energy radiated by an earthquake, M<sub>e</sub>, can
now be defined,
</P>
<P  style="text-indent: 1em; text-align: justify">
M<sub>e</sub> = 2/3 log<sub>10</sub>E - 2.9.
</P>
<P>
For every increase in magnitude by 1 unit, the associated seismic energy
increases by about 32 times.
</P>
<P>
Although M<sub>w</sub> and M<sub>e</sub> are both magnitudes, they describe different
physical properites of the earthquake.  M<sub>w</sub>, computed from
low-frequency seismic data, is a measure of the area ruptured by
an earthquake.  M<sub>e</sub>, computed from high frequency seismic data,
is a measure of seismic potential for damage.  Consequently,
M<sub>w</sub> and M<sub>e</sub> often do not have the same numerical value.
</P>
<P>
<b> Intensity </b>
</P>
<P>
The increase in the degree of surface shaking (intensity)
for each unit increase of magnitude of a shallow
crustal earthquake is unknown. Intensity is based on
an earthquake's local accelerations and how long these
persist. Intensity and magnitude thus both depend on
many variables that include exactly how rock breaks
and how energy travels from an earthquake to a
receiver. These factors make it difficult for engineers
and others who use earthquake intensity and magnitude
data to evaluate the error bounds that may exist
for their particular applications.
</P>
<P>
An example of how local soil conditions can greatly
influence local intensity is given by catastrophic damage
in Mexico City from the 1985, M<sub>S</sub> 8.1 Mexico
earthquake centered some 300 km away. Resonances of
the soil-filled basin under parts of Mexico City amplified
ground motions for periods of 2 seconds by a factor
of 75 times. This shaking led to selective damage
to buildings 15 - 25 stories high (same resonant period),
resulting in losses to buildings of about $4.0 billion
and at least 8,000 fatalities.
</P>
<P>
The occurrence of an earthquake is a complex
physical process. When an earthquake occurs, much of
the available local stress is used to power the earthquake
fracture growth to produce heat rather than to
generate seismic waves. Of an earthquake system's
total energy, perhaps 10 percent to less that 1 percent
is ultimately radiated as seismic energy. So the degree
to which an earthquake lowers the Earth's available
potential energy is only fractionally observed as
radiated seismic energy.
</P>
<P>
<b> Determining the Depth of an Earthquake </b>
</P>
<P>
Earthquakes can occur anywhere between the
Earth's surface and about 700 kilometers below the
surface. For scientific purposes, this earthquake depth
range of 0 - 700 km is divided into three zones: shallow,
intermediate, and deep.
</P>
<P>
Shallow earthquakes are between 0 and 70 km deep;
intermediate earthquakes, 70 - 300 km deep; and deep
earthquakes, 300 - 700 km deep. In general, the term "deep-focus
earthquakes" is applied to earthquakes
deeper than 70 km. All earthquakes deeper than 70 km
are localized within great slabs of shallow lithosphere
that are sinking into the Earth's mantle.
</P>
<P>
The evidence for deep-focus earthquakes was
discovered in 1922 by H.H. Turner of Oxford,
England. Previously, all earthquakes were considered
to have shallow focal depths. The existence of deep-focus
earthquakes was confirmed in 1931 from studies
of the seismograms of several earthquakes, which in
turn led to the construction of travel-time curves for
intermediate and deep earthquakes.
</P>
<P>
The most obvious indication on a seismogram that a
large earthquake has a deep focus is the small amplitude,
or height, of the recorded surface waves and the uncomplicated
character of the P and S waves. Although
the surface-wave pattern does generally indicate
that an earthquake is either shallow or may have
some depth, the most accurate method of determining
the focal depth of an earthquake is to read a depth
phase recorded on the seismogram.
</P>
<P>
The most characteristic depth phase is pP. This is the P wave that is reflected from
the surface of the Earth at a point relatively near the
epicenter.
At distant seismograph stations, the pP follows the P
wave by a time interval that changes slowly with
distance but rapidly with depth. This time interval,
pP-P (pP minus P), is used to compute depth-of-focus
tables. Using the time difference of pP-P as read from the
seismogram and the distance between the
epicenter and the seismograph station, the depth of
the earthquake can be determined from published
travel-time curves or depth tables.
</P>
<P>
Another seismic wave used to determine focal depth
is the sP phase - an S wave reflected as a P wave from
the Earth's surface at a point near the epicenter. This
wave is recorded after the pP by about one-half of the
pP-P time interval. The depth of an earthquake can be
determined from the sP phase in the same manner as
the pP phase by using the appropriate travel-time
curves or depth tables for sP.
</P>
<P>
If the pP and sP waves can be identified on the
seismogram, an accurate focal depth can be determined.
</P>
<P>
<small>
by William Spence, Stuart A. Sipkin, and George L. Choy<br>
Earthquakes and Volcanoes<br>
Volume 21, Number 1, 1989
</small>
</p>
