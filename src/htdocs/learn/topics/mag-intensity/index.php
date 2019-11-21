<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake Magnitude, Energy Release, and Shaking Intensity';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<nav class="jumplist">
  <a href="#magnitude">Magnitude</a>
  <a href="#energy">Energy Release</a>
  <a href="#intensity">Intensity</a>
  <a href="#examples">Examples</a>
</nav>

<p>
  Earthquake magnitude, energy release, and shaking intensity are all related measurements of an earthquake that are often confused with one another. Their dependencies and relationships can be complicated, and even one of these concepts alone can be confusing.
</p>
<p>
  Here we'll look at each of these, as well as their interconnectedness and dependencies.
</p>

<!-- *************************MAGNITUDE***************************** -->
<h2 id="magnitude">Magnitude</h2>

<figure class="right">
<img src="/learn/glossary/images/seismograph.jpg" alt=""/>
<figcaption>
  Sketch of a traditional seismometer.
</figcaption>
</figure>

<p>
  The time, location, and magnitude of an earthquake can be determined from the data recorded by seismometer. Seismometers record the vibrations from earthquakes that travel through the Earth. Each seismometer records the shaking of the ground directly beneath it. Sensitive instruments, which greatly magnify these ground motions, can detect strong earthquakes from sources anywhere in the world. Modern systems precisely amplify and record ground motion (typically at periods of between 0.1 and 100 seconds) as a function of time.
</p>

<h3>Types of Magnitudes</h3>

<p>
  Magnitude is expressed in whole numbers and decimal fractions. For example, a magnitude 5.3 is a moderate earthquake, and a 6.3 is a strong earthquake. Because of the logarithmic basis of the scale, each whole number increase in magnitude represents a <strong>tenfold increase in measured amplitude</strong>... of what? (Richter only?).
</p>
<p>
  When initially developed, all magnitude scales based on measurements of the recorded waveform amplitudes were thought to be equivalent. But for very large earthquakes, some magnitudes underestimate true earthquake size, and some underestimate the size. Thus, we now use measurements that describe the physical effects of an earthquake rather than measurements based only on the amplitude of a waveform recording. More on that later.
</p>

<figure class="left">
<img src="/learn/glossary/images/richter_scale.gif" alt=""/>
<figcaption>
  From Richter's (1958) book, <i>Elementary Seismology</i>.
</figcaption>
</figure>

<p>
  The <strong>Richter Scale (M<sub>L</sub>)</strong> is what most people have heard about, but in practice it is not commonly used anymore, except for small earthquakes recorded locally, for which ML and short-period surface wave magnitude (Mblg) are the only magnitudes that can be measured. For all other earthquakes, the moment magnitude (Mw) scale is a more accurate measure of the earthquake size.
</p>
<p>
  Although similar seismographs had existed since the 1890's, it was only in 1935 that Charles F. Richter, a seismologist at the California Institute of Technology, introduced the concept of earthquake magnitude. His original definition held only for California earthquakes occurring within 600 km of a particular type of seismograph (the Woods-Anderson torsion instrument). His basic idea was quite simple: by knowing the distance from a seismograph to an earthquake and observing the maximum signal amplitude recorded on the seismograph, an empirical quantitative ranking of the earthquake's inherent size or strength could be made. Most California earthquakes occur within the top 16 km of the crust; to a first approximation, corrections for variations in earthquake focal depth were, therefore, unnecessary.
</p>
<p>
  The Richter magnitude of an earthquake is determined from the logarithm of the amplitude of waves recorded by seismographs. Adjustments are included for the variation in the distance between the various seismographs and the epicenter of the earthquakes.
</p>

<figure class="right">
<img src="/learn/glossary/images/seismogenic.gif" alt=""/>
<figcaption>
  Cross-section showing the fault area and the values that are used to compute the seismic moment.
</figcaption>
</figure>

<p>
  <strong>Moment Magnitude (M<sub>W</sub>)</strong> is based on physical properties of the earthquake derived from an analysis of all the waveforms recorded from the shaking. First the seismic moment is computed, and then it is converted to a magnitude designed to be roughly equal to the Richter Scale in the magnitude range where they overlap.
</p>
<p>
  <blockquote><strong>Moment (M<sub>O</sub>) = rigidity x area x slip</strong></blockquote>
</p>
<p>
  where <strong>rigidity</strong> is the strength of the rock along the fault, <strong>area</strong> is the area of the fault that slipped, and <strong>slip</strong> is the distance the fault moved. Thus, <strong>stronger rock material, or a larger area, or more movement in an earthquake</strong> will all contribute to produce a larger magnitude.
<p>
  Then,
</p>
<p>
  <blockquote><strong>Moment Magnitude (M<sub>W</sub>) = 2/3 log<sub>10</sub>(M<sub>O</sub>) - 10.7</strong></blockquote></p>

<p>
  See the <strong>Magnitude Types Table</strong> (below)for a summary of types, magnitude ranges, distance ranges, equations, and a brief description of each.
</p>

<h3>For More Information on Magnitudes</h3>
<ul>
  <li>
    <a href="magnitude-types.php">Magnitude Types Table</a>
  </li>
  <li>
    <a href="https://earthquake.usgs.gov/education/how_much_bigger.php">How much bigger is a magnitude 8.7 earthquake than a magnitude 5.8 earthquake? Try it yourself calculator</a>
  </li>
  <li>
    <a href="/learn/publications/BigFaults_BigQuakes.pdf">Bigger Faults Make Bigger Earthquakes</a> - K-5 activity: fault length, rupture duration, magnitude
  </li>
  <li>
    <a href="/education/topics.php?topicID=24">Magnitude Educational Resources</a>
  </li>
</ul>


<!-- *************************ENERGY***************************** -->

<h2 id="energy">Energy Release</h2>

<figure class="right">
  <a href="images/Mag-Energy-Freq-lg.gif">
    <img src="images/Mag-Energy-Freq-sm.gif" alt=""/>
  </a>
  <figcaption>
    Earthquake magnitudes and energy release, and comparison with other natural and man-made events. (Gavin Hayes)<strong><a href="images/Mag-Energy-Freq-lg.gif"> Click on image to view larger version.</a></strong>
  </figcaption>
</figure>

<p>
  Another way to measure the size of an earthquake is to compute how much energy it released. The amount of energy radiated by an earthquake is a measure of the potential for damage to man-made structures. An earthquake releases energy at many frequencies, and in order to compute an accurate value, you have to include all frequencies of shaking for the entire event.
</p>
<p>
  While each whole number increase in magnitude represents a tenfold increase in the measured amplitude, it represents an <strong>32 times more energy release</strong>.
</p>
<p>
  The energy can be converted into yet another magnitude type called the <strong>Energy Magnitude (M<sub>e</sub>)</strong>. However, since the Energy Magnitude and Moment Magnitude measure two different properties of the earthquake, their values are not the same.
</p>
<p>
  The energy release can also be roughly estimated by converting the moment magnitude to energy using the equation log E = 5.24 + 1.44M, where M is the magnitude.
</p>


<!-- *************************INTENSITY***************************** -->
<h2 id="intensity">Intensity</h2>

<figure class="right">
  <a href="images/Napa-dyfi.gif">
    <img src="images/Napa-dyfi.gif" alt=""/>
  </a>
  <figcaption>
    Did You Feel It? map for the M6.0 Napa, California earthquake on August 24, 2014. The earthquake epicenter is shown as a star, and the geocoded intensities are shown as small colored squares. The associated MMI value for each color is shown in the key at the bottom. <strong><a href="images/Napa-dyfi.gif"> Click on image to view larger version.</a></strong>
  </figcaption>
</figure>

<p>
  Whereas the magnitude of an earthquake is one value that describes the size, there are many intensity values for each earthquake that are distributed across the geographic area around the earthquake epicenter.  The intensity is the measure of shaking at each location, and this varies from place to place, <strong>depending mostly on the distance from the fault rupture area</strong>.  However, there are many more aspects of the earthquake and the ground it shakes that affect the intensity at each location, such as what direction the earthquake ruptured, and what type of surface geology is directly beneath you. Intensities are expressed in Roman numerals, for example, VI, X, etc.
</p>
<p>
  Traditionally the intensity is a subjective measure derived from human observations and reports of felt shaking and damage.  The data used to be gathered from postal questionnaires, but with the advent of the internet, it's now collected using a web-based form.  However, instrumental data at each station location can be used to calculate an estimated intensity.
</p>
<p>
  The intensity scale that we use in the United States is called the <strong>Modified Mercalli Intensity Scale</strong>, but other countries use other scales.
</p>

<h3>For More Information on Intensity</h3>
<ul>
  <li>
    <a href="/education/mercalli.php">The Modified Mercalli Intensity Scale</a>
  </li>
  <li>
    <a href="/static/lfs/learn/Mag_vs_Int_Pkg_1.pdf">Magnitude vs Intensity</a> - Grades 4-12 activity: magnitude, intensity
  </li>
  <li>
    <a href="https://pubs.usgs.gov/of/1995/0092/report.pdf">Intensity distribution and isoseismal maps for the Northridge, California, earthquake of January 17,1994</a>, USGS Open-File Report 95-92.
  </li>
  <li>
    <a href="/education/intensity/compare_intensity.php">Comparing Shaking Intensity from Two Bay Area Earthquakes</a> - fault length, magnitude, intensity (needs magnitude for each on this page)
  </li>
  <li>
    <a href="/education/topics.php?topicID=77">Intensity Educational Resources</a>
  </li>
</ul>

<h2 id="examples">Examples</h2>

<p>
  These examples illustrate how locations (and depth), magnitudes, intensity, and faults (and rupture) characteristics are dependent and related.
</p>

<h3>Intensity of Shaking Depends on the Local Geology</h3>

<figure>
  <img src="images/LomaPrietasiteresp.gif" alt=""/>
  <figcaption>
    This shows the shaking amplitude recorded on 3 different seismometers from the M6.9 Loma Prieta, CA earthquake in 1989. All 3 stations are about the same distance from the earthquake to the south, but the type of local geology beneath the instrument influences the amount of shaking at that location. Bedrock shakes the least, and soft mud the most.
  </figcaption>
</figure>

<h3>Intensity of Shaking Depends on Depth of the Earthquake</h3>

<figure>
  <img src="images/intensity-Nisq.vs.Northridge.jpg" alt=""/>
  <figcaption>
  </figcaption>
</figure>
<p>
  The two maps above show the shaking intensity from two different earthquakes with about the same magnitude. The shaking from the M6.7 Northridge, CA earthquake was more intense and covered a wider area than the slightly larger M6.8 Nisqually, WA earthquake.
</p>
<p>
  The reason is shown by the two cartoon cross-sections below.  There was more shaking in the Northridge earthquake because the earthquake occurred closer to the surface (3-11 miles), as opposed to the Nisqually earthquake's deeper hypocenter (30-36 miles).
</p>
<figure>
  <img src="images/EQdepth-Nisq.vs.Northridge.jpg" alt=""/>
  <figcaption>
  </figcaption>
</figure>

<h3>Moment Release (Energy) of Many Small Earthquakes vs. One Large Earthquake</h3>

<p>
  This graph demonstrates the logarithmic nature of earthquake magnitudes and energy release. The small- and moderate-size earthquakes that occur frequently around the world release far less energy that a single great earthquake.
</p>
<figure>
  <img src="images/Cumul_moment.png" alt="graph of cumulative moment release of all earthquakes from 1900 to 2017"/>
  <figcaption>
  </figcaption>
</figure>

<h3>What Would it Take to Make a Magnitude N Earthquake?</h3>
<p>
  If we sum all of the energy release from all of the earthquakes over the past ~110 years, the equivalent magnitude ~ Mw9.95.
</p>
<p>
  If the San Andreas Fault were to rupture end-to-end (~1400km), with ~10m of average slip, it would produce an earthquake of Mw 8.47.
</p>
<p>
  If the South American subduction zone were to rupture end-to-end (~6400km), with ~40m of average slip, it would produce an earthquake of Mw 9.86.
</p>
<p>
  You would need ~14,000km fault length, with a seismogenic thickness averaging 40km (width of 100km), to slip and average of 30m to produce an Mw 10.
</p>
<p>
  <figure>
    <img src="images/fault-Aleutian-to-Chile.jpg" alt=""/>
    <figcaption>

    </figcaption>
  </figure>

<p>
  You would need ~80,000km of fault length with an average seismogenic width of 100km to produce an Mw10.5.  All of the subduction zones in the World, plus some adjoining structures amount to ~40,000km, and the circumference of the Earth is ~40,000km, so an Mw 10.5 is highly unlikely.
</p>
<p>
  <figure>
    <img src="images/fault-most-of-world.jpg" alt=""/>
    <figcaption>

    </figcaption>
  </figure>

  <p>Thanks to Gavin Hayes and David Wald for much of the material for this page.</p>
