<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Southern California';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<p>
  Four EDM networks located in Southern California show strain accumulation on
  the San Andreas fault system in this region.
</p>
<figure style="max-width: 705px; margin: 0 auto;">
  <img src="img/scal.gif" alt="EDM networks in Southern California" />
  <figcaption>
    This map shows the locations of 4 two-color EDM (Electronic Distance
    Meter) networks in Southern California. These networks are radial with
    approximately 12 baselines using a common, central station. Since near
    surface, aseismic slip is not apparent, these radial networks are ideal
    for measuring the 3 components of the tensor strain. The precision of
    these measurements is 0.1 part-per-million, but localized wobble of the
    geodetic monuments limit the ultimate precision in our estimate of strain
    over long periods.
  </figcaption>
</figure>

<h2>Maps of the network</h2>

<p>
  The maps of the networks show the location of the baselines in red, the major
  faults with dark, heavy lines, and other faults with thin lines.
</p>
<p>
  Measurements at Pinon Flat and Pearblossom are made approximately 3 to 4
  times per year but the measurements at Anza and at the Buttes are made
  approximately once per year. Each measurement of strain requires a 3 to 4
  person crew to be on-site to run the instrument and set-up the reflectors to
  make distance measurements on approximately one dozen baselines. Baseline
  length are range between 2 and 10 km.
</p>

<ul>
  <li><a href="img/pearnet.gif">Map</a>
  of the Pearblossom and Buttes networks</li>
  <li><a href="img/pfonet.gif">Map</a>
  of the Pino Flat and Anza networks</li>
</ul>

<h2>Plots of the data</h2>
<ul>
  <li><a href="img/pearstr.gif">Plot</a>
    of strain changes from the Pearblossom network</li>
  <li><a href="img/buttesstr.gif">Plot</a>
    of strain changes from the Buttes network</li>
  <li><a href="img/pfostr.gif">Plot</a>
    of strain changes from the Pinon Flat network</li>
  <li><a href="img/anzastr.gif">Plot</a>
    of strain changes from the Anza network</li>
</ul>

<h2>Notes on data plots </h2>
<p>
  In general, the vertical line denotes the time of the 1992 Landers
  Earthquake.
</p>
<p>
  The error bars represent one standard deviation about the estimate of strain
  change. The error accounts for the instrument precision of 0.1ppm and the
  random walk motions of each geodetic monument of approximately 1 mm/sqrt(yr).
  The date of the Landers earthquake is specified as a reference date and the
  error grows in time relative to this date.
</p>
<p>
  The secular rates have been removed from the strain data and the rates are
  noted on the plot.
</p>
<p>
  PEARBLOSSOM: Data starts in late 1980 when measurements were made several
  times each week. This network straddles the San Andreas fault. The strain
  changes estimated for the first several years assume that strain changes
  linearly with time over 2-week intervals. However, since 1985, measurements
  of the 12 baseline network have been made approximately 3 to 4 times each
  year. The strain changes that are plotted are reckoned such that parallel
  strain is extension parallel with the local strike of the San Andreas fault,
  N65W, normal strain is extension N25E, and shear strain is the tensor shear
  on a plane parallel with the San Andreas fault. Because the network is highly
  redundant for estimating the 3 components of the strain tensor, the
  displacement of the central monument is also estimated as a function of time.
</p>
<p>
  BUTTES: Measurements of this network located north of Pearblossom by 40 Km
  started in 1991. The strain changes that are plotted are reckoned such that
  parallel strain is extension parallel with the local strike of the San
  Andreas fault, N65W, normal strain is extension N25E, and shear strain is the
  tensor shear on a plane parallel with the San Andreas fault. Because the
  network is highly redundant for estimating the 3 components of the strain
  tensor, the displacement of the central monument is also estimated as a
  function of time.
</p>
<p>
  PINON FLAT: Measurements of this network started in 1986. The strain changes
  that are plotted are reckoned such that Eee is extension in the east-west
  direction, Enn is extension in the north-south direction, and Een is tensor
  shear on either a north-south or east-west plane. Because this network is
  more-or-less a fan-shaped array rather than a radial network, it is difficult
  to resolve the contribution of wobble of the central monument from that of
  changes in strain. So, the results of the strain analysis neglects the motion
  of the central monument.
</p>
<p>
  ANZA: Measurements of this network that straddles the San Jacinto fault
  starts in 1988. The strain changes that are plotted are reckoned such that
  Eee is extension in the east-west direction, Enn is extension in the
  north-south direction, and Een is tensor shear on either a north-south or
  east-west plane. Since this network consists of two, radial networks, each
  with seven baselines, it is difficult to resolve the contribution of wobble
  of the central monument from that of changes in strain. So, the results of
  the strain analysis neglects the motion of the central monument.
</p>

<h2>Secular strain rates</h2>

<p>
  The changes in length of each baseline from each network can be adequately
  modeled using spatially and temporally uniform strain. The exception to the
  uniformity in rate of strain are the large, co-seismic changes from the
  Landers Earthquake in 1992. Tabulated below are the estimates of secular
  strain and co-seismic strain where all parameters are estimated
  simultaneously from the data. The errors in secular rate include an estimate
  of random-walk noise due to wobble of the geodetic monuments.
</p>

<img src="img/secular.gif" alt="Secular Strain Rates" />
<br />
<img src="img/coseismic.gif" alt="Landers" />

<p>
  For more details contact:
  <a href="mailto:langbein@usgs.gov">John Langbein</a>
</p>
