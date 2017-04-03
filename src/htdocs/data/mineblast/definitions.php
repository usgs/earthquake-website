<?php
// Author: Lisa Wald
// Contact: Jim Dewey
  if (!isset($TEMPLATE)) {
    $TITLE = 'Routine United States Mining Seismicity';
    $NAVIGATION = true;
    $CONTACT = 'dewey@usgs.gov';
    include 'template.inc.php';
  }
?>

<h2>Explanation of Catalog Listings</h2>

<p>
  Most hypocenters and magnitudes in "Routine Mining Seismicity in the United
  States" catalogs are computed by the algorithms used by the USGS/NEIC to
  compute source parameters of earthquakes. More detailed explanations of the
  source parameters may be found in the January and July issues of the
  publication, "Preliminary Determination of Epicenters, Monthly Listing",
  published by the USGS/NEIC.
</p>

<h3>Abbreviations in Heading</h3>

<dl>
  <dt>MB</dt>
  <dd>
    Body wave magnitude computed by the USGS/NEIC. Because USGS/NEIC practice is
    to calculate MB using P-wave amplitude data from stations more than 15
    degrees from the epicenter, very few of the routine mining seismic events
    are sufficiently large that MB can be computed.
  </dd>

  <dt>Msz</dt>
  <dd>
    Vertical surface wave magnitude. To date, none of the routine
  mining seismic events have been large enough, or rich enough in long-period
  energy, that Msz could be computed for them.
  </dd>

  <dt>UTC</dt>
  <dd>
    Coordinated Universal Time. <b>HR MN SEC</b> - Hour, minute, second
  </dd>

  <dt>SD</dt>
  <dd>
    Standard Deviation from the arithmetic mean of primary phase, P-wave/PKP-wave, residuals
  </dd>

  <dt>No. Sta.</dt>
  <dd>
    Number of stations reporting P or PKP phases used in computation. Stations
    used in &quot;Routine Mining Seismicity in the United States&quot; are only
    those for which digital traces are recorded at the USGS/NEIC.
  </dd>
</dl>

<h3>Symbols Following Origin Time</h3>

<p>
  The following symbols indicate the precision of the solution, as indicated by
  the 90% confidence ellipse on the epicentral coordinates. The orientation and
  semi-axes lengths of the confidence ellipses are given in the bulletins
  (mchedrYYMMex.dat) and catalog (mineevents.gct) that are available by
  anonymous ftp (ftp://hazards.cr.usgs.gov/mineblast/). The confidence ellipses
  are estimated under the assumption that travel-time tables used to locate the
  seismic events (1940 Jeffreys-Bullen P and 1968 Bolt PKP travel-time tables)
  are appropriate for the event-to-station path and under the assumption that
  errors in arrival-time readings are Gaussian. Because neither of the above
  assumptions is likely satisfied, the 90% confidence ellipses for most
  epicenters probably underestimate the uncertainty of those epicenters.
</p>

<dl>
  <dt>?</dt>
  <dd>
    Indicates a poor solution, published to make the catalog more complete. In
    general, the geometric mean of the semi-major and semi-minor axes of the
    epicenter's 90% confidence ellipse is greater than 16.0 km.
  </dd>

  <dt>*</dt>
  <dd>
    Indicates a less reliable solution. In general, the geometric mean of the
    semi-major and semi-minor axes of the epicenter's 90% confidence ellipse is
    greater than 8.5 km and less than or equal to 16.0 km.
  </dd>
</dl>

<p>
  The lack of any symbol indicates that the geometric mean of the semi-major and semi-minor axes of the epicenter's 90% confidence ellipse is less than or equal to 8.5 km.
</p>

<h4>Symbols Following Depth</h4>
<dl>
  <dt>G</dt>
  <dd>
    indicates that depth was restrained by a geophysicist. Most mining associated events are restrained to a 0 km depth.
  <dd>
</dl>

<h3>Items under "REGION, CONTRIBUTED MAGNITUDES, AND COMMENTS"</h3>

<p>
  Broad geographic regions- The broad geographic regions given in upper case
  letters in the &quot;REGION, CONTRIBUTED MAGNITUDES, AND COMMENTS&quot; column
  are determined from a representation of political boundaries that is defined
  at one degree intervals (Flinn and others, 1974). This representation accounts
  only approximately for many state boundaries, and, for this reason, some
  epicenters are attributed to states that are adjacent to the states in which
  the epicenters are actually located.
</p>

<dl>
  <dt>ML (GS)</dt>
  <dd>
    Local magnitude computed according to the formula of Richter (1935). There
    are two major differences between the ML given in the present catalog and
    those that would be computed by strict application of Richter's formula.
    First, the ML quoted in &quot;Routine Mining Seismicity in the United
    States&quot; are based on amplitudes picked from traces of
    vertical-component, electronically amplifying, seismographs, whereas
    Richter's formula was defined for amplitudes picked from the traces of
    horizontal-component, optically amplifying, seismographs. Second, the ML
    quoted in &quot;Routine Mining Seismicity in the United States&quot; are
    computed for seismic events from throughout the western United States,
    whereas Richter's formula was defined for Southern California, and
    implicitly incorporates the attenuative properties of Southern California
    crust and mantle.
  </dd>

  <dt>mbLg (GS)</dt>
  <dd>
    Magnitude calculated from amplitudes of Lg phases at an approximately
    1-second period, according to the formulas of Nuttli (1973), who defined
    mblg so that mbLg and mb from the same seismic event would be approximately
    equal. In &quot;Routine Mining Seismicity in the United States&quot;, mbLg
    (GS) are computed principally for seismic events in the central and eastern
    Unitied States.
    <dd>
</dl>

<p>
  Specific geographic location - Specific geographic locations of
  mining-associated seismic events are given with respect to nearby town names.
  <a href="sources.php">Mining Seismicity Source Regions </a>summarizes
  characteristics of locations from which many mining-associated seismic events
  have been cataloged.
</p>

<h3>References</h3>
<ul class='referencelist'>
  <li>
    Flinn, E.A., Engdahl, E.R., and Hill, A.R., 1974, Seismic and Geographic Regionalization, Bulletin of the Seismological Society of America, v. 64, p.771-993.
  </li>
  <li>
    Nuttli, O.W., 1973, Seismic wave attenuation and magnitude relations for eastern North America: Journal of Geophysical Research, v. 78, p.876-885.
  </li>
  <li>
    Richter, C.F., 1935, An instrumental earthquake scale: Bulletin of the Seismological Society of America, v. 25, p. 1-32.
  </li>
</ul>
