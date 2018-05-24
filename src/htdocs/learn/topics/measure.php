<?php
      //	Authors:	Tiffany Kalin, Lisa Wald
      //	Contact: George Choy
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Measuring the Size of an Earthquake';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>
  Seismic waves are the vibrations from earthquakes that travel through the Earth; they are recorded on instruments called seismographs. Seismographs record a zig-zag trace that shows the varying amplitude of ground oscillations beneath the instrument. Sensitive seismographs, which greatly magnify these ground motions, can detect strong earthquakes from sources anywhere in the world. The time, location, and magnitude of an earthquake can be determined from the data recorded by seismograph stations.
</p>
<p>
  Modern seismographic systems precisely amplify and record ground motion (typically at periods of between 0.1 and 100 seconds) as a function of time.
</p>
<p>
  Earthquakes with magnitude of about 2.0 or less are usually called microearthquakes; they are not commonly felt by people and are generally recorded only on local seismographs. Events with magnitudes of about 4.5 or greater - there are several thousand such shocks annually - are strong enough to be recorded by sensitive seismographs all over the world. Great earthquakes, such as the 1964 Good Friday earthquake in Alaska, have magnitudes of 8.0 or higher. On the average, one earthquake of such size occurs somewhere in the world each year.
</p>

<h2>The Richter Scale</h2>
<p>
  Although similar seismographs had existed since the 1890's, it was only in 1935 that Charles F. Richter, a seismologist at the California Institute of Technology, introduced the concept of earthquake magnitude. His original definition held only for California earthquakes occurring within 600 km of a particular type of seismograph (the Woods-Anderson torsion instrument). His basic idea was quite simple: by knowing the distance from a seismograph to an earthquake and observing the maximum signal amplitude recorded on the seismograph, an empirical quantitative ranking of the earthquake's inherent size or strength could be made. Most California earthquakes occur within the top 16 km of the crust; to a first approximation, corrections for variations in earthquake focal depth were, therefore, unnecessary.
</p>
<p>
  The Richter magnitude of an earthquake is determined from the logarithm of the amplitude of waves recorded by seismographs. Adjustments are included for the variation in the distance between the various seismographs and the epicenter of the earthquakes. On the Richter Scale, magnitude is expressed in whole numbers and decimal fractions. For example, a magnitude 5.3 might be computed for a moderate earthquake, and a strong earthquake might be rated as magnitude 6.3. Because of the logarithmic basis of the scale, each whole number increase in magnitude represents a tenfold increase in measured amplitude; as an estimate of energy, each whole number step in the magnitude scale corresponds to the release of about 31 times more energy than the amount associated with the preceding whole number value.
</p>
<p>
  The Richter Scale is not commonly used anymore, except for small earthquakes recorded locally, for which ML and Mblg are the only magnitudes that can be measured. For all other earthquakes, the moment magnitude scale is a more accurate measure of the earthquake size. More on that later.
</p>

<h2>Magnitude </h2>
<p>
  Richter's original magnitude scale (M<sub>L</sub>) was extended
  to observations of earthquakes of any distance
  and of focal depths ranging between 0 and 700 km.
  Because earthquakes excite both body waves, which
  travel into and through the Earth, and surface waves,
  which are constrained to follow the natural wave guide
  of the Earth's uppermost layers, two magnitude scales
  evolved - the m<sub>b</sub> and
  M<sub>S</sub> scales.
</p>

<p>
  The standard body-wave magnitude formula is
</p>
<p  style="text-indent: 1em; text-align: justify">
  m<sub>b</sub> = log<sub>10</sub>(<i>A/T</i>) + Q(<i>D</i>,<i>h</i>) ,
</p>
<p>
  where <i>A</i> is the amplitude of ground motion (in microns);
  <i>T</i> is the corresponding period (in seconds);
  and Q(<i>D</i>,<i>h</i>) is a correction factor that is a function of
  distance, <i>D</i> (degrees), between epicenter and station
  and focal depth, <i>h</i> (in kilometers), of the earthquake.
  The standard surface-wave formula is
</p>
<p  style="text-indent: 1em; text-align: justify">
  M<sub>S</sub> = log<sub>10</sub> (<i>A/T</i>) + 1.66 log<sub>10</sub> (D) + 3.30 .
</p>
<p>
  There are many variations of these formulas that
  take into account effects of specific geographic regions,
  so that the final computed magnitude is
  reasonably consistent with Richter's original definition
  of M<sub>L</sub>. Negative magnitude values are permissible.
</p>
<p>
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
</p>
<p>
  This table is based on data for a recent 47 year
  period. Perhaps the rates of earthquake occurrence are
  highly variable and some other 47 year period could give quite
  different results.
</p>
<p>
  The original m<sub>b</sub> scale utilized compressional body
  P-wave amplitudes with periods of 4-5 s, but recent
  observations are generally of 1 s-period P waves.
  The M<sub>S</sub> scale has consistently used Rayleigh surface
  waves in the period range from 18 to 22 s.
</p>
<p>
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
</p>
<p>
  <b> Fault Geometry and Seismic Moment, M<sub>O</sub> </b>
</p>
<p>
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
</p>
<p style="text-indent: 1em; text-align: justify">
  M<sub>O</sub> = &micro;S&#139;d&#155 ,
</p>
<p>
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
</p>
<p style="text-indent: 1em; text-align: justify">
  M<sub>W</sub> = 2/3 log<sub>10</sub>(M<sub>O</sub>) - 10.7 .
</p>
<p>
  The two largest reported moments are 2.5 X 10<sup>30</sup>
  dyn&#183;cm (dyne&#183;centimeters) for the 1960 Chile earthquake
  (M<sub>S</sub> 8.5;
  M<sub>W</sub> 9.6)
  and 7.5 X 10<sup>29</sup> dyn&#183;cm for the
  1964 Alaska earthquake (M<sub>S</sub> 8.3;
  M<sub>W</sub> 9.2).
  M<sub>S</sub> approaches its maximum value at a moment between
  10<sup>28</sup> and 10<sup>29</sup> dyn&#183;cm.
</p>
<p>
  <b> Energy, <i>E</i> </b>
</p>
<p>
  The amount of energy radiated by an earthquake is a measure
  of the potential for damage to man-made structures.
  Theoretically, its computation requires summing
  the energy flux over a broad suite of frequencies generated
  by an earthquake as it ruptures a fault.  Because of instrumental
  limitations, most estimates of energy have historically
  relied on the empirical relationship developed by Beno Gutenberg
  and Charles Richter:
</p>
<p style="text-indent: 1em; text-align: justify">
  log<sub>10</sub><i>E</i> = 11.8 + 1.5M<sub>S</sub>
</p>
<p>
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
</p>
<p style="text-indent: 1em; text-align: justify">
  M<sub>e</sub> = 2/3 log<sub>10</sub>E - 2.9.
</p>
<p>
  For every increase in magnitude by 1 unit, the associated seismic energy
  increases by about 32 times.
</p>
<p>
  Although M<sub>w</sub> and M<sub>e</sub> are both magnitudes, they describe different
  physical properites of the earthquake.  M<sub>w</sub>, computed from
  low-frequency seismic data, is a measure of the area ruptured by
  an earthquake.  M<sub>e</sub>, computed from high frequency seismic data,
  is a measure of seismic potential for damage.  Consequently,
  M<sub>w</sub> and M<sub>e</sub> often do not have the same numerical value.
</p>
<p>
  <b> Intensity </b>
</p>
<p>
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
</p>
<p>
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
</p>
<p>
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
</p>
