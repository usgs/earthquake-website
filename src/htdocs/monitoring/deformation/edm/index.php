<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Two-Color Electronic Distance Meter (EDM)';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<figure class="right" style="max-width: 480px">
  <img src="img/duane.gif" alt="Two-Color EDM in operation" />
  <figcaption>
    The two-color EDM in operation at Parkfield, California. This particular
    instrument was built in the mid-1970s. The magenta light is a combination
    of red and blue laser light expanded to 20 cm. Photo by John Nakata, USGS.
  </figcaption>
</figure>

<p>
  The two-color EDM is an ultra-precise distance measuring instrument with a
  precision of 0.5&ndash;1.0 mm for ranges between 1 and 12 km. It is
  used to measure crustal deformation along faults and near volcanoes.
  We used this instrument to monitor the deformation of the Long
  Valley Caldera east of Yosemite, and at Parkfield, California along the San
  Andreas fault. To take advantage of the instrument&rsquo;s high precision, these
  measurements were made frequently, typically several times per week. In
  addition, we made infrequent measurements of distances at other sites in
  California to measure strain accumulation within the San Andreas fault zone.
</p>
<p>
  This instrument is unique for laser distance measuring instruments because it
  uses two colors to measure the transit time of light through the atmosphere.
  Commercially available electronic distance measuring instruments use only
  one laser, usually red or infra-red, as a carrier. By modulating the laser,
  the instrument measures the round-trip travel time of light through the
  atmosphere for that particular wavelength between the active instrument and
  its remotely located reflector. If the index of refraction for the atmosphere
  is known (by measuring its average temperature and pressure), then the
  velocity of light is known, and the distance is calculated by multiplying the
  measured travel time by the velocity. To be able to measure distances to a 1
  mm precision over a 10 km long baseline, or 0.1 part-per-million, the average
  temperature and pressure along the 10 km path need to be known to better than
  0.1 degree C and 1 mb. In practice, this is difficult to achieve without
  instrumenting an aircraft with temperature and pressure probes to obtain a
  profile of these quantities.
</p>
<p>
  However, the two-color EDM measures the travel time of light for two
  wavelengths, red and blue. Because the atmosphere is dispersive, there is a
  difference in travel time which is a direct function of temperature and
  pressure. The difference in travel time is used to measure the average
  temperature and pressure in the atmosphere for calculating the index of
  refraction. With the index of refraction, the distance is computed from the
  travel time of one of the colors. For two-color measurements of distance to
  achieve a 0.1 ppm precision, pressure needs to be known to within 50 mb, and
  there is essentially no requirement to know the temperature. However, the
  partial pressure of water needs to be known to 1 mb, but this is relatively
  easy to achieve by measuring the relative humidity near the instrument.
</p>
<p>
  More recently, Global Positioning Systems (GPS) have been developed as 
  another method to measure crustal deformation over long baselines. This
  system relies on a group satellites and many receivers on the Earth's
  surface that are used to measure the location of each receiver. The
  precision of horizontal, relative positions with GPS is approximately 3 mm
  for baselines in excess of a couple kilometers. The advantage of GPS is its
  relative ease of operation in the field since receiver sites need not be
  in sight of each other and the receivers are relatively
  simple to use. Although more precise than GPS at ranges less than 10 km, the
  two-color EDM has some disadvantages because its range is limited (due to
  scattering of the short-wavelength, blue, through the atmosphere), the sites
  must be mutually visible, and the crew operating the system must be highly
  skilled. Although the two-color EDM was available commercially for a few
  years in the early 1980s, only a few were made and the cost was high, $250K.
  In contrast, GPS has proliferated and the receiver cost for a high-precision
  unit is less than $15K.
</p>

<p>
  These pages contain results from measuring changes in distances using a
  two-color Electronic Distance Meter (EDM). Measurements are made in
  <a href="parkfield/">Parkfield</a>,
  <a href="longvalley/">Long Valley</a>, and
  <a href="socal.php">Southern California</a>.
</p>
