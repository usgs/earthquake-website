<?php
  // Author: Lisa Wald
  // Contact: Dave Wilson,
  // Last modified: 2016/08/09, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Monitoring Improvments';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<div class="row">
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="overview.php">
          <h4>Overview</h4>
          <img src="images/" alt="" width="75"/>
        </a>
        <p>
          USGS scientists are conducting research in a number of areas to help improve instrumentation and data quality.
        </p>
      </li>
    </ul>
  </section>

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="slowslip.php">
          <h4>Monitoring Slow Slip</h4>
          <img src="images/" alt="" width="75"/>
        </a>
        <p>
          Recognition of the phenomena of slow slip is perhaps one of the most exciting discoveries in geophysics in the last decade.
        </p>
      </li>
    </ul>
  </section>

  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="realtime.php">
          <h4>Realjtime Information</h4>
          <img src="images/" alt=""  width="75"/>
        </a>
        <p>
          Research to improve the timeliness, scope, and reliability of authoritative earthquake information, reducing the impact to life and property.
        </p>
      </li>
    </ul>
  </section>
</div>





<figure class='right'>
	<img src="images/colocatedseis.jpg" alt="">
	<figcaption>
    Seismometers being co-located to identify their noise characteristics.
  </figcaption>
</figure>

<p>
  A seismometer is an instrument used for detecting ground motion from earthquakes and other seismic sources. These highly sensitive instruments require careful installation, routine calibration, and daily monitoring to ensure the data used by scientists is of the highest quality. USGS scientists are conducting research in a number of areas to help improve instrumentation and data quality. These improvements ultimately result in more precisely-located earthquakes and better science.
</p>

<h2>Instrument Noise Reduction</h2>
<p>
  Seismic instrumentation is sensitive to a number of non-seismic sources such as wind-induced tilt, temperature changes, and variations in Earth's magnetic field. To help isolate instruments from such noise sources, the USGS conducts experiments on installation techniques, including testing different vault designs, assessing different materials for thermal properties, and evaluating enclosures for magnetic shielding.
</p>

<h2>Instrument Calibration</h2>
<p>
  Most modern seismometers use an analog electronic feedback system, which must be digitized and then converted from units of volts to displacement. These systems must be calibrated routinely in order to verify the response of the system. Scientists are currently working on new ways to calibrate these instruments, including shake table testing and injecting known voltages into the instrument. By analyzing these signals, scientists are able to characterize the instruments to a high precision.
</p>

<h2>Identification of potential data quality problems</h2>
<p>
  Scientists are also investigating potential problems with instrumentation by examining data quality. This includes using earthquakes, co-locating instruments as well as comparing long-term trends in noise levels at stations. By using such signals, scientists can identify anomalous behavior, which could be compromising the quality of data produced at a seismic station.
</p>

<figure>
  <img src="images/ASLundergrd.jpg">
  <figcaption>
    Panorama of the Albuquerque Seismological Laboratory underground test facility. This vault allows scientists to calibrate instruments and test various installation techniques since the instruments can be well isolated from temperature changes. Photo courtesy of Kelly Holcomb, IRIS.
  </figcaption>
</figure>

<p>
	Detecting and accurately locating seismic events and slower crustal movements depends on sensitive instruments and good models (equations that describe characteristics of the earth’s structure).  Scientists are performing research to improve several aspects of monitoring:
	<ul>
		<li>Changes to allow NEIC to trigger on smaller earthquakes.</li>
		<li>Evaluation of alternate method of locating earthquakes.</li>
		<li>Improving earthquake early warning and rapid response using real time high rate GPS data.</li>
		<li>Enable objective, automated geodetic data monitoring and rapid deformation event analysis.</li>
	</ul>
</p>

<h2>Monitoring Slow Slip</h2>
<p>
	Recognition of the phenomena of slow slip is perhaps one of the most exciting discoveries in geophysics in the last decade. These phenomena are providing new clues and understanding about the processes involved in the loading and relaxation of deformation in subduction zones and elsewhere, which in turn will ultimately help us assess and reduce the hazard associated with the relaxation that occurs as damaging earthquakes. The newness of this discovery, and the explosion of related studies and data, require new efforts to coordinate information exchange about these phenomena and their connections to earthquakes. USGS is coordinating with other groups studying slow slip, and the results of these studies will be conveyed to various sectors of the public.
</p>

<h2>Real-time Information</h2>
<p>
	There is also research to improve the timeliness, scope, and reliability of authoritative earthquake information, reducing the impact to life and property. These efforts are focused at allowing an integrated and evolving view of any significant earthquake as soon as possible, providing earthquake source parameters, shaking distribution, shaking intensity, population exposure to shaking, and economic and casualty loss estimates.
</p>

<h2>Real-time Products for Response</h2>

<figure class='right'>
	<img src="images/pager.gif" alt="PAGER">
	<figcaption>
    PAGER - population exposed to different levels of shaking in the M6.0 South Island, New Zealand earthquake on June 13, 2011.
  </figcaption>
</figure>

<p>
	Research supports the following real-time products:
  <ul>
  	<li><a href="/data/dyfi">Did You Feel It?</a> -DYFI is a citizen science web application that invites users to answer a questionnaire about their experience of an earthquake, and then creates a map of the felt shaking (macro seismic intensity) with all the information collected.</li>

  	<li><a href="/data/shakemap/">ShakeMap</a> - ShakeMap is an emergency response tool designed to rapidly portray the extent and degree of damaging ground motions recorded in a seismic network.</li>

  	<li><a href="/data/pager/">PAGER</a> - PAGER rapidly assesses the overall impact (casualties and losses) for all damaging earthquakes within minutes of the earthquake and automatically transmits that information following damaging events to critical users and decision makers (including utilities, global corporations, governments, aid agencies, and search and rescue operations).</li>

  	<li>Fast Finite Faults (FFF)/InSAR Modeling - Improve rapid finite-fault determination and source modeling waveform (WF), InSAR and real-time GPS modeling.</li>

  	<li>Moment Tensors (RMT/MT/CMT) - Automated computation of source duration and source-time function for all M6+ earthquakes.</li>
  </ul>
</p>

<h2>See also:</h2>
<!-- The new link will be /monitoring/asl/ -->
<a href="/regional/asl/">Albuquerque Seismological Laboratory (ASL)</a>

<h2>Scientific Staff</h2>
<ul>
	<li>Harley Benz</li>
	<li>George Choy</li>
	<li>Elizabeth Cochran</li>
	<li>Paul Earle</li>
  <li>John Evans</li>
	<li>Jeremy Fee</li>
	<li>Doug Given</li>
	<li>Joan Gomberg</li>
	<li>Michelle Guy</li>
	<li>Gavin Hayes</li>
	<li><a href="https://profile.usgs.gov/hudnut">Ken Hudnut</a></li>
	<li>John Patton</li>
	<li><a href="https://profile.usgs.gov/wald">David Wald</a></li>
  <li>Dave Wilson</li>
</ul>
