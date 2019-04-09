<?php
  // Author: Lisa Wald
  // Contact: Jill McCarthy
  if (!isset($TEMPLATE)) {
  $TITLE = 'National Earthquake Information Center (NEIC)';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="styles.css"/>
  ';
  include 'template.inc.php';
  }
?>

<div class="row">
  <div class="column two-of-three">

    <h2>NEIC Location</h2>

    <p>
    1711 Illinois Street <br />
    (on the Colorado School of Mines Campus).
    </p>

    <p>
    Our mailing address is:
    <br />
    U.S.Geological Survey
    <br />
    National Earthquake Information Center
    <br />
    Box 25046 MS 966
    <br />
    Denver Federal Center
    <br />
    Denver, Colorado 80225-0046
    </p>

    <p>NEIC: 303-273-8500</p>
  </div>

  <div class="column one-of-three">
      <figure>
        <img src="images/ghsc-neicbldg.jpg" alt="National Earthquake Information Center building">
        <figcaption>
          National Earthquake Information Center building
        </figcaption>
      </figure>
  </div>
</div>

<h2>About the NEIC</h2>

<figure class="left">
  <img src="images/neic-media.jpg" alt="media room at NEIC"/>
</figure>

<p>
The National Earthquake Information Center (NEIC),
was established in Rockville, Maryland, in 1966 as part
of the National Ocean Survey of the Department of Commerce.
The Coast and Geodetic Survey, a forerunner of the National Ocean Survey,
had coordinated the collection of seismological data
in the United States for many years.
The NEIC was transferred to Boulder, Colorado,
in 1972 and made part of the U.S. Geological Survey in 1973.
The NEIC was moved again in 1974 to its present location
in Golden, Colorado.
</p>
<p>
The National Earthquake Information Center (NEIC),
a part of the Department of the Interior, U.S. Geological Survey,
is located in Golden, Colorado, 10 miles west of Denver.
The NEIC has three main missions.
First, the NEIC determines, as rapidly and as accurately as possible,
the location and size of all significant earthquakes that occur worldwide.
The NEIC disseminates  this information immediately to concerned national
and international agencies, scientists, critical facilities, and the general public.
Second, the NEIC collects and provides to scientists and to the public an
extensive seismic database that serves as a solid foundation
for scientific research, principally through the operation
of modern digital national and global seismograph networks
and through cooperative international agreements.
The NEIC is <i>the</i> national data center and archive
for earthquake information.
Third, the NEIC pursues an active research program
to improve its ability to locate earthquakes and
to understand the earthquake mechanism.
These efforts are all aimed at mitigating the risks
of earthquakes to mankind;
and they are made possible by the fine international cooperation
that has long characterized the science of seismology.
</p>
<p>
<img src="images/who_we_are.gif" alt="NEIC Data Sources, Products and Applications" />
</p>
<p>
The NEIC operates a 24-hour-a-day service to determine the location and magnitude of significant earthquakes in the United States and around the world as rapidly and accurately as possible. This information is communicated to federal and state government agencies who are responsible for emergency response, to government public information channels, to national and international news media, to scientific groups (including groups planning aftershock studies), and to private citizens who request information. At the present time, the NEIC staff locates and publishes approximately 30,000 earthquakes on a yearly basis. These are the most important of the many million earthquakes which are estimated to occur each year.
</p>

<figure class="left w322">
  <img src="images/waverly_person.gif" alt="Waverly Person in NEIC Recording Room"/>
  <figcaption>
    Waverly J. Person - first spokesperson for NEIC, starting with Great Alaska Earthquake in 1964 and continuing for more than 40 years. Known by many people in the news media as Mr. Earthquake.
  </figcaption>
</figure>

<p>
The NEIC collects data through the operation of national and global networks,
and through cooperative agreements.
To enable the detection and location
of all felt earthquakes with the U.S.,
the NEIC
acts as the National Operations Center
of the Advanced National Seismic System (ANSS),
a cooperative venture between the
NEIC and the operators of the regional seismic networks
across the United States.
The NEIC also relies on the cooperation
of a variety of seismic reporting networks
throughout the world to gather data.


The NEIC also collects non-instrumental reports of the effects
of earthquakes on people and man-made structures
and prepares isoseismal maps showing the distribution
of intensities in widely felt or damaging shocks.
</p>
<p>
The data that are collected by the NEIC are published
in a variety of formats and publications
and are available electronically via the Internet.
The "Quick Epicenter Determinations" (QED),
a very preliminary list of earthquakes,
is computed daily.
The "Preliminary Determination of Epicenters" (PDE)
is published weekly and monthly.


The "Earthquake Data Report" (EDR),
also a monthly publication, provides additional and
more detailed information, mainly for the use
of seismologists.
</p>
<p>
A wide range of research is also conducted at the NEIC.
Investigations range from resolving the internal structure
of the Earth and understanding the mechanics of earthquake rupture
through rapid assessment of an earthquake's impact.
These research efforts are intended to improve the data service
provided by the NEIC to the scientific community
and the general public;
and, ultimately, to aid in earthquake hazard mitigation.
</p>

<p>See also: <a href="https://doi.org/10.1785/0220170034">Building a National Seismic Monitoring Center: NEIC from 2000 to the Present</a></p>

<h2 id="resp">"Response Events" and Processing Priorities</h2>
<p>
  NEIC targets a 20-minute release time for response events.  An earthquake is considered a response event when the event exceeds a threshold magnitude.  Due to later arriving data and contributed solutions, this may not occur within the 20-minute target window, and in the case of "slow” (low-frequency content) earthquakes, it can be days or weeks before an event is discovered.  In sparsely instrumented regions, an event meeting the response criteria may not have sufficient data to locate or publish, even for the final catalog.  Events may also have a magnitude below this response threshold when they are processed by our automatic system and after manually processing their magnitude may exceed the threshold.  As a result, the release of such events will be delayed.
</p>
<p>
  Response events (target release time less than 20 minutes):
  <ul>
    <li>
      M3.0 or larger
      <ul>
        <li>Eastern US (roughly east of -105 degrees)</li>
      </ul>
    </li>
    <li>
      M4.0 or larger
      <ul>
        <li>Western U.S. (roughly west of -105 degrees)</li>
        <li>Hawaii</li>
        <li>Puerto Rico, Virgin Islands</li>
        <li>Populated Alaska</li>
      </ul>
    </li>
    <li>
      M5.0 or larger, all other parts of the world
    </li>
    <li>
      In addition, some earthquakes with magnitudes below these thresholds will also be reviewed on an immediate basis.  These include earthquakes in high-risk areas likely to cause multiple fatalities or significant damage or events which have been felt widely in densely populated parts of the world.
    </li>
  </ul>
</p>
<p>
  <img src="images/NEICresponse-us.jpg" alt="map of US">
</p>

<p>
  Events with smaller magnitudes than the response criteria will be processed in the catalog processing time frame.  This process can take up to 10 weeks although most events are finalized within 6 weeks.  The criteria for publishing catalog events are as follows:
</p>
<p>
  <ul>
    <li>M2.5 or larger or felt in the U.S. (excluding California</li>
    <li>M3.0 or larger in California</li>
    <li>M4.0 or larger or felt all other regions throughout the world</li>
  </ul>
</p>
<p>
  These criteria support a goal of about M4.5 global completeness and about M3.0 U.S. completeness.
</p>
<p>
  Published events must have a minimum of  5 phase timing observations (P or S)  used in the solution, an RMS error of less than 2.0 (less than 1.5 strongly preferred) and have "reasonable" station coverage to be published.  Events not meeting these criteria will not be published even if the magnitude threshold is exceeded.  As a result, small earthquakes in regions with sparse instrumentation may not be published or even discovered.
</p>
<p>
  <img src="images/NEICresponse-world.jpg" alt="map of US">
</p>
