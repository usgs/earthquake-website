<?php
  // Author: Lisa Wald
  // Contact: Bill Stephenson, wstephens@usgs.gov
  // Created: April 2015
  // Last modified: 07/11/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Seismology in the City';
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<figure class="right map">
	<img src="images/1-NYC.gif" alt="Temporary seismometer array in New York City"/>
  <figcaption>
    Temporary seismometer array in New York City to record ambient noise.
   </figcaption>
</figure>

<h2>Introduction</h2>
<p>
  We usually think of noise as a bad thing.  Noise during the quiet part of an orchestra performance is annoying and ruins the music.  Static  on the telephone (a type of noise) makes it difficult to hear what your friend is saying.  And when you want to record an earthquake, noise can interfere with the data signal.  A great deal of time and effort goes into finding sites for seismic instruments that are quiet and into removing noise from recordings of earthquakes.  But what information can we learn from that noise that can help us understand earthquake hazards and ground shaking? To help answer this question scientists have been  seeking out noisy city blocks in urban areas to record seismic signals.  In terms of earthquake or seismic recordings we first have to understand what noise means to a seismologist.
</p>

<h2>What is noise?</h2>
<p>
  Noise, to a seismologist, is traditionally anything that is recorded on a seismic instrument that is not caused by an earthquake.  This can be anything from electronic equipment noise, to a running air conditioner, to a nearby freight train, to a cow wandering close to an instrument in a pasture.  Sometimes scientists will use large equipment to produce a large &ldquo;thump&rdquo; to approximate a very tiny earthquake if they want to observe and record what happens to this man-made seismic signal as it travels through the earth&rsquo;s crust in a certain area.  In this case, the &ldquo;thump&rdquo; is the signal, and the cultural noise is undesirable.
</p>

<h2>Earthquake hazards</h2>
<p>
  Both earthquakes and &ldquo;thumps&rdquo; are used by scientists to study characteristics and properties of the earth, to determine what the shaking would be like in different areas from future nearby earthquakes, and to estimate damage those earthquakes might cause.  The chance that a nearby earthquake could cause shaking, and the amount of shaking it could cause, is called the &ldquo;earthquake hazard&rdquo;.  Since large earthquakes in urban areas, where we care most about the hazard, are infrequent, scientists use small earthquakes to approximate what would happen in a larger one.  In the same way, they use man-made &ldquo;thumps&rdquo; to create a seismic signal that can be used like a small earthquake.
</p>

<figure>
	<img src="images/2-Vs30.gif" alt="how Vs30 is determined"/>
	<figcaption>
    Estimating Vs30 (the average S-wave velocity to 30 meters depth) requires collection of data to measure soil and rock velocities. The traditional method for collecting these S-wave velocities required drilling a borehole and logging S-wave velocities down the well.  Many newer methods have been developed to estimate Vs30 without requiring borehole drilling and logging. One of those methods, shown above, uses ground &quot;thumps&quot; to get soil layer thicknesses and S-wave velocities for calculating the Vs30 at a site.
  </figcaption>
</figure>

<p>
  One important measurement that is used in earthquake hazard assessments is the &ldquo;average shear wave velocity in the top 30 meters&rdquo;, or Vs30.  Let&rsquo;s dissect and explain that phrase.  A shear wave (or S wave) is typically the second fastest seismic wave after the P wave, that is generated when there is an earthquake.  An S wave shakes the ground back and forth perpendicular to the direction that it travels, and it is typically the type of shaking that causes the most damage in an earthquake.  The velocity of the shear wave (the speed that it travels as it moves through the ground) is different depending on the type of soil or rock it is moving through. So the &ldquo;average shear wave velocity in the top 30 meters&rdquo; is the average speed that an S wave can move through a particular 30-meter column of soil as measured from the earth&rsquo;s surface.  S waves move faster in hard rock than they do in soft sediments, so S waves tend to cause the most shaking (and therefore potentially the most damage) in sedimentary basins like those under Salt Lake City, UT and Los Angeles, CA.
</p>
<p>
  The most direct, but also most invasive, way to obtain the Vs30 is to drill a borehole and measure S wave velocities down the well. However, that gives you a measurement at only one location, and drilling can be expensive.  Non-invasive surface methods  typically utilize arrays of many portable seismometers to record data that is used to determine the Vs30 at a series of locations in the study area. Because data collection is relatively fast scientists using non-invasive methods can rapidly obtain many site measurements.
</p>
<p>
  In addition to Vs30, S wave velocities to depths greater than 30 m are also very important for understanding how earthquake shaking can vary in urbanized sedimentary basins. Currently scientists are exploring the use of techniques that rely on noise to obtain an estimate of S wave velocities to depths of several thousand feet.
</p>

<h2>Creative use of urban noise</h2>
<p>
  Permanent seismic stations  installed to record earthquakes around the world are very expensive and are generally spaced very far apart, so their use for focused earthquake hazard studies is limited. Portable seismic instruments are used for some short-term seismic experiments, but in urban areas where information of the earthquake hazard is most critically needed, it&rsquo;s difficult to perform these portable experiments because these short-term deployments need to be for weeks to months. Also,  traditional seismic experiments using a &ldquo;thumper&rdquo;-style source are also difficult to perform because of problems in both data collection logistics and the presence of urban noise.  Scientists mulled over how to collect the data they need for earthquake hazard estimates in these important urban environments where it&rsquo;s very expensive, logistically difficult, and the &ldquo;ambient&rdquo; cultural noise is always present.
</p>
<p>
  Ambient means &ldquo;existing or present on all sides&rdquo;, and that turned out to be the key to the solution!  They figured out a way to use the ambient cultural noise as a seismic signal to record the desired data with as few as four seismometers.  This has the advantages of being inexpensive, relatively easy, extremely portable, and as it turns out, it takes less time than a traditional seismic experiment.
</p>

<h2>Seismology in the city</h2>
<p>
  Of the non-invasive techniques scientists use to obtain Vs30 and deeper S-wave velocity, the spatial auto-correlation, or SPAC, method is especially well suited for working in urban areas with high levels of ambient noise. This method takes advantage of the coherency of the ambient noise (the fact that it&rsquo;s continuous and coming from all directions) as it travels across a small array for obtaining S wave velocities of the soil and rock layers. Once the unwanted portions of the ambient noise are removed, the data that is left is what the scientists use to figure out the soil and rock layering beneath the targeted area, and then utilize this information to estimate the earthquake hazard.
</p>
<p>
  The process begins by setting up at least 4 seismometers bounding the area of study, usually using the existing  roadways and sidewalks to establish seismometer locations. Next, the seismometers record the ambient noise for up to several hours.  The instruments are picked up and then all data processing is done back in the office.  In the SPAC ambient noise studies that have been done to date in different cities, there often has been existing sparse data from boreholes or other methods that the scientists could use to correlate and check the accuracy of the results from the SPAC method.  With each successive experiment, scientists have been able to refine the process and obtain data to greater depths in the crust, providing better and more information for the hazard assessment.
</p>

<figure class="poster">
	<img src="images/3-noise.gif" alt="how urban noise is processed and turned into a useful signal"/></a>
	<figcaption>
    The steps involved in turning urban noise into a useful signal: record the ambient noise, do signal processing to determine the velocity of the noise through the surface materials, and create Vs30 model.
  </figcaption>
</figure>

<p>
  The SPAC method has already been used in investigations in numerous urban areas throughout the U.S., including New York City, NY, Salt Lake City, UT, Seattle, WA, and Santa Clara and Pleasanton valleys, CA. In New York City, NY four seismometers collected just 30 minutes of data at six sites, and the results provided  information down to 30 meters depth.  In Salt Lake City, scientists were able to collect information about the entire basin area down to 300 meters in several of 18 investigated sites.  Studies in Santa Clara Valley and Pleasanton Valley, CA led to in improved SPAC collection and analysis techniques that yielded higher resolution data in the top 100 meters (especially the topmost 30 meters) of surface material.  In the Seattle Basin, WA the largest-scale study to date involved 11 sites with the new method, and the data included information to a depth of as much as 2500 meters.
</p>
<p>
  The SPAC method of determining the crustal structure of a focused area is proving to be a useful tool in urban areas for improving earthquake hazard assessments.  The earthquake scientists who implement this technique will be using it in more regions in the coming years, and will continue its development for accurately determining S-wave velocities to even greater depths.
</p>

<p class="sm">-written by Lisa Wald, U.S. Geological Survey</p>

<h2>Scientific Staff</h2>
<ul>
	<li>Steve Hartzell</li>
  <li>Morgan Moschetti</li>
  <li>Jack Odum</li>
  <li>William Stephenson</li>
  <li>Robert Williams</li>
  <li>David Worley</li>
</ul>
