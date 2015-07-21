<?php
if (!isset($TEMPLATE)) {

  $TITLE = 'Did You Feel It?';

  // If you want to include section navigation.
  // The nearest _navigation.inc.php file will be used by default
  $NAVIGATION = true;

  // Stuff that goes at the top of the page (in the <head>) (i.e. <link> tags)
  $HEAD = '
    <link rel="stylesheet" href="/theme/css/alert.css"/>
    <link rel="stylesheet" href="/lib/earthquake-list-widget.css"/>
    <link rel="stylesheet" href="index.css"/>
  ';

  // Stuff that goes at the bottom of the page (i.e. <script> tags)
  $FOOT = '
    <script src="/lib/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';

  include 'template.inc.php';
}
?>

<p style="margin-bottom: 1em;">
  <a href="http://pubs.usgs.gov/fs/2005/3016/">Citizens Contribute to
  Earthquake Science</a>
</p>

<div class="floating column two-of-five">
  <div class="recent-products-wrapper">
    <h3 class="recent-products-header">Felt Events, Past 7 Days</h3>
    <div class="recent-products">
      <noscript class="error alert">
        Javascript is used to load event data. If you can not enable Javascript,
        you can <a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_week.csv">view
        the raw data here</a>.
      </noscript>
    </div>
    <ul class="recent-products-links">
      <li><a href="http://earthquake.usgs.gov/earthquakes/map/#%7B%22feed%22%3A%221437493843117%22%2C%22search%22%3A%7B%22id%22%3A%221437493843117%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22minfelt%22%3A5%2C%22producttype%22%3A%22dyfi%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22dyfi%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22help%22%3Afalse%2C%22list%22%3Atrue%2C%22map%22%3Atrue%2C%22settings%22%3Afalse%7D%7D">
        View Map and List of DYFI Events
      </a></li>
      <li><a href="http://earthquake.usgs.gov/earthquakes/search/#%7B%22feed%22%3A%221437493916387%22%2C%22search%22%3A%7B%22id%22%3A%221437493916387%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22producttype%22%3A%22dyfi%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22dyfi%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
        Search for More DYFI Events
      </a></li>
    </ul>
  </div>
</div>

<p>
  This web site is intended to tap the abundant information available about
  earthquakes from the people who actually experience them. By taking
  advantage of the vast numbers of Internet users, we can get a more complete
  description of what people experienced, the effects of the earthquake, and
  the extent of damage, than traditional ways of gathering felt information.
  And best of all, with your help we can do so almost instantly.
</p>
<p>
  By contributing your experience of the earthquake, either immediately
  afterward, or whenever it is possible for you to do so, you will have made a
  contribution to the scientific body of information about this earthquake. You
  will also ensure that your area has been represented in the compilation of
  the shaking map. This is a two-way street. Not only will you add valuable
  information on the extent of ground shaking and damage, but in the process we
  hope you will learn more about how other communities fared and gain a greater
  understanding of the effects of earthquakes.
</p>



<h3><a name="intensities"></a>What is Intensity?</h3>
<p>
  There are two different ways to describe the size of an earthquake. One is
  <strong>magnitude</strong> (often described by the <strong>Richter magnitude
  </strong>), which is related to the amount of energy released by the
  earthquake source. It is usually determined by measuring the amplitude
  (height) or by modeling the character of the earthquake waves recorded by a
  seismograph.
</p>
<p>
  The second way of describing earthquake size is to measure earthquake
  effects. <strong>Intensity</strong> is a qualitative measure of the strength
  of ground shaking at a particular site. Currently used in the U.S. is the
  <a href="#mmi">Modified Mercalli Intensity Scale</a> (see below). Each
  earthquake that is large enough to be felt will have a range of intensities.
  Usually (but not always) the highest intensities are measured near the
  earthquake epicenter and lower intensities are measured farther away. Roman
  numerals are used to describe intensities to distinguish them from
  magnitudes.
</p>
<p>
  For example, the magnitude of the Northridge earthquake was 6.7.
  The intensities ranged from IX (violent) close to the epicenter, to V's
  (moderate) at distances of about 60 - 200 miles away, and finally not felt at
  distances far away.
</p>

<h3><a name="ciim"></a>Calculating Community Internet Intensities</h3>
<p>
  The Community Internet Intensity Map (CIIM) summarizes the questionnaire
  responses provided by you and other Internet users. An intensity value has
  been assigned to each community from which we have received a filled-out CIIM
  questionnaire; each intensity value reflects the effects of earthquake
  shaking on the people and structures in the community. For convenience, we
  define "communities" to be ZIP code regions. We consider all the filled-out
  questionnaires from a given ZIP code and assign a single intensity to the ZIP
  code. The form of the questionnaire and the method for assignment of
  intensities are based on an algorithm developed by
  <a href="/learn/publications/pubs_tech.php#DidYouFeelIt?">Dengler and Dewey
  (1998)</a> for determining a "Community Decimal Intensity". The
  decimal intensity values computed by the algorithm of Dengler and Dewey have
  been rounded off to integers for the Community Internet Intensity Map and
  represented by Roman Numerals.
</p>
<p>
  A Community Internet Intensity Map is made and updated every five minutes
  following a significant earthquake and then less frequently as additional
  data are received. ZIP code areas for which data have been received are
  color-coded according to the intensity scale below the map; ZIP codes in
  gray are those for which we have not yet received data.  At first only a few
  ZIP codes will have intensities assigned, but over time others will be
  assigned as data come in. Individual ZIP code zones may change color as a new
  consensus is reached (that is, data from more respondents may change the
  average intensity value for a ZIP code). <strong>Check back often and
  remember to reload your browser to see the update! Note the date and time on
  the lower left corner of the map to keep track of the updates.</strong>
</p>
<p>
  <strong>NOTE:</strong> Since earthquake effects may vary significantly over
  small distances, the average intensity shown for an entire ZIP code may
  differ from the intensity that would be suggested by effects at a single
  location within the ZIP code. Further, the input data is raw and unchecked,
  and may contain
  <a href="http://www.usgs.gov/faq/categories/9836/3385">errors</a>.
  Finally, some details of the procedure for preparing the CIIM may change as
  we gain experience with data collection from the Internet. Hence, the nature
  of the CIIM may evolve with time. See the
  <a href="disclaimer.php">Disclaimer</A> for other considerations.
</p>

<h3><a name="geocode"></a>What is geocoding?</h3>
<p>
  We have the capability of adding geocoded maps for certain larger events with
  many hundreds (or thousands) of responses. To do this, we take the addresses
  that people provide when they fill out our questionnaire, and send them to
  <a href="http://www.tomtom.com/en_gb/licensing/?IdcService=SS_GET_PAGE&amp;siteId=TeleAtlasCW1&amp;siteRelativeUrl=%252F&amp;ssUrlPrefix=/">TomTom</a>,
  a company which turns
  regular street addresses into precise latitude and longitude coordinates
  (generally 6 digits of accuracy, enough to distinguish the nearest 1/2 block
  on a street). We then group nearby coordinates into regularly sized boxes,
  which are generally a few km across, and calculate their intensities the same
  way we do for normal ZIP code maps.  To test this geocoding on your own
  address, try this <a
  href="http://www.geocode.com/modules.php?name=TestDrive_Eagle">interactive
  script</a>.
</p>
<p>
  There are several advantages to using geocoding for maps, including greater
  precision in locating intensities and cleaner-looking maps (since ZIP codes
  tend to be very irregularly shaped). For rapid response to earthquakes,
  though, ZIP codes are still preferable - almost everyone knows immediately
  which ZIP code they are in, whereas few people know their latitude and
  longitude (and especially not to the needed precision).
</p>
<p>
  Note that because roughly 5-10% of respondants do not leave their address
  there are correspondingly fewer responses on a geocode map vs. a ZIP code
  map.
</p>

<h3><a name="global"></a>Global DYFI</h3>
<p>
  We have recently expanded CIIM to a global scale. Users from all over the
  world can now contribute their earthquake experiences using the Did You Feel
  It? system for the "Outside US" region. It works very similarly to the
  US-based system. Since ZIP codes do not exist or are not available in most
  countries, we have simplified the system to base location on the approximate
  latitude and longitude of the city which the respondent was closest to. A
  city with a response is displayed as a filled circle. The size of the circle
  is dependent on the approximate population of the city, and the color
  represents the average intensity for the city. Since we need to know the
  city's location to map it, only cities in our database can be selected by
  observers.
</p>
<p>
  Although we receive fewer responses on average per event, the global system
  is a very useful tool for rapidly assessing earthquake effects worldwide.
</p>

<h3><a name="pda"></a>Predicted Distance Attenuation</h3>
<p>
  We have also been making a variety of plots of your responses. The distance
  vs. intensity plot contains three different overlaid plots:
</p>
<div>
  <ol>
    <li>
      The average intensity for each ZIP code plotted against the distance
      from the ZIP code centroid to the epicenter. Each is represented by an
      open green circle.
    </li>
    <li>
      The average intensity for each distance "bin" in log space.
      Effectively, we combine ZIP codes with similar distances away from the
      epicenter into bins, similar to concentric rings. These bins are evenly
      spaced in log space, but grow in size in linear space. For each of
      these bins, we take the average intensity from the ZIP code
      intensities. See this
      <a href="/earthquakes/dyfi/events/us/2003teak/us/us2003teak_plot_atten.jpg">example image</a>,
      taken from eventID: us2003teak, for a visual reference. These are
      represented by filled, blue boxes with error bars of one standard
      deviation. The purple line is a sixth order polynomial that best fits
      the blue boxes.
    </li>
    <li>
      The predicted distance attenuation developed by Hotovec and Wald for
      the magnitude of the earthquake, labeled in orange. The form of the
      equation closely resembles Bakun's equation for the change of MMI with
      distance, but is formulated using CDI from CIIM. As you may see on
      several graphs, the equation doesn't quite fit the data, especially
      close in, and we are working to find a better functional form.
    </li>
  </ol>
  <p>We are currently using these equations:</p>
  <ol>
    <li>
      Eastern USA: CDI = 1.60 + 1.29*Magnitude - 0.00051*Distance -
      2.16*(log Distance)/(log 10)
    </li>
    <li>
      Western USA: CDI = 1.15 + 1.01*Magnitude - 0.00054*Distance -
      1.72*(log Distance)/(log 10)
    </li>
  </ol>
</div>
<p>
  These equations provide a predicted distance vs. intensity curve for various
  regions based on the known magnitude of the earthquake. Given enough
  intensity data, it is possible to find the magnitude of an unknown
  earthquake using these equations.
</p>


<h3><a name="shake"></a>CIIM and ShakeMap</h3>
<p>
  The Community Internet Intensity Map (CIIM) is made to be compatible with
  <a href="http://earthquake.usgs.gov/research/shakemap/">ShakeMap</A> rapid
  instrumental intensity maps. Like the ShakeMap, the CIIM's are centered on
  the epicenter (star) of the earthquake and have similar overall dimensions as
  the ShakeMaps. However, ShakeMap is based on point location measurements of
  the ground motion as recorded by seismometers, and the shaking intensity is
  inferred by empirically relating the recorded ground motions to intensities
  and then interpolating the ground motions between the recording sites.
  ShakeMap does not represent any averaging over ZIP code regions.
</p>

<h3><a name="mmi"></a>CIIM and Modified Mercalli Intensities</h3>
<p>
  For United States earthquakes, intensities have for many years been assigned
  on the basis of the <a
  href="/learn/topics/mercalli.php">Modified Mercalli
  Intensity scale</a>
  (<a href="/learn/publications/pubs_tech.php#DidYouFeelIt?">Wood and Neumann,
  1931; Richter, 1958</a>). The Modified Mercalli Intensities are based in part
  on postal questionnaires, in which respondents summarize the effects of
  shaking in their communities. In addition, Modified Mercalli Intensities are
  based on field study in areas of significant damage, on damage maps produced
  by emergency response agencies, on reports produced by the earthquake
  engineering community, and on press reports.  For a destructive earthquake,
  the process of collecting and interpreting damage data and preparing a map of
  Modified Mercalli Intensities takes months.
</p>

<p>
  The procedure used to calculate the Community Internet Intensity values was
  calibrated so that the Community Internet Intensity values should, on
  average, be similar to the Modified Mercalli Intensity values for the same
  communities (<a href="/learn/publications/pubs_tech.php#DidYouFeelIt?">Dengler
  and Dewey, 1998</a>). We hope that the
  CIIM will serve as a useful first approximation to Modified Mercalli
  Intensity maps, in the weeks to months following damaging earthquakes during
  which the final Modified Mercalli Intensity maps are being prepared. We also
  envision that the data collected from the CIIM questionnaires will be
  incorporated into final assignment of USGS Modified Mercalli Intensities.
  Nevertheless, because there are major differences in the data and procedures
  used to assign the two types of intensities, the Community Internet
  Intensities cannot be considered to be identical to the USGS Modified
  Mercalli Intensities.
</p>

<h3><a name="caveat"></a>Importance of Your Contribution and a Caveat</h3>
<p>
  It is important that you fill out a questionnaire, even if your ZIP code is
  already colored-in on the Community Internet Intensity Map for the
  earthquake.  The more questionnaires that are received for your ZIP code,
  the more reliable will be the average intensity assigned to that ZIP code.
  <strong>Even if you did not feel the earthquake, your questionnaire is
  important:</strong> in areas of lighter shaking, the "not-felt" responses are
  needed to prevent the average ZIP-code intensities from being too high.
</p>
<p>
  Since, even with our encouragement to send in "not-felt" responses, it is
  more likely that those that felt the earthquake will login and  respond to
  the questionnaire than those who did not feel it, there may  be cases where
  the lowest intensities are biased slightly upward.
</p>


<h3><a name="acks"></a>Acknowledgments</h3>
<p>
  We have benefited greatly from discussions and reviews by Jim Dewey of the
  U.S. Geological Survey in Golden, Colorado, who has the primary
  responsibility for producing the Modified Mercalli Intensity Maps for the
  U.S. Government. Lori Dengler at Humboldt State University also provided
  critical input based on her experience with public responses to the
  Northridge earthquake and to earthquakes in Northern California and Oregon.
</p>

<h3>
  <a href="/learn/publications/pubs_tech.php#DidYouFeelIt?">Publications</a>
</h3>

