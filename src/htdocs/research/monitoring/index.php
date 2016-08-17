<?php
  // Author: Lisa Wald
  // Contact: Dave Wilson,
  // Last modified: 2016/08/09, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Monitoring Improvments';
      $NAVIGATION = true;
      // Use Earthquake level nav file
        include_once 'functions.inc.php';
        ob_start();
        include '../_navigation.inc.php';
        $NAVIGATION = ob_get_clean();

        include 'template.inc.php';
    }
?>

<p>
  A seismometer is an instrument used for detecting ground motion from earthquakes and other seismic sources. These highly sensitive instruments require careful installation, routine calibration, and daily monitoring to ensure the data used by scientists is of the highest quality.
</p>

<div class="row">
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="realtime.php">
          <h4>Real-time Information</h4>
          <img src="images/pager150.gif" alt=""  width="75"/>
        </a>
        <p>
          Research to improve the timeliness, scope, and reliability of authoritative earthquake information, reducing the impact to life and property.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="instrument.php">
          <h4>Instrument and Data Quality</h4>
          <img src="images/colocatedseis150.jpg" alt="" width="75"/>
        </a>
        <p>
          USGS scientists are conducting research in a number of areas to help improve instrumentation and data quality.  These improvements ultimately result in more precisely-located earthquakes and better science.
        </p>
      </li>
    </ul>
  </section>
  <section class="one-of-three column">
    <ul class="no-style linklist">
      <li>
        <a href="slowslip.php">
          <h4>Monitoring Slow Slip</h4>
          <img src="images/slowslip150.gif" alt="" width="75"/>
        </a>
        <p>
          Recognition of the phenomena of slow slip is perhaps one of the most exciting discoveries in geophysics in the last decade.
        </p>
      </li>
    </ul>
  </section>
</div>
