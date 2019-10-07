<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Tweet Earthquake Dispatch';
  $HEAD = '<meta name="twitter:widgets:csp" content="on">';
  $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
          '<script src="index.js"></script>';
  include_once 'functions.inc.php';
  ob_start();
  include '../feed/_navigation.inc.php';
  $NAVIGATION = ob_get_clean();
  include_once 'template.inc.php';
}
?>

<div class="row">
  <div class="column">
    <p>
      The USGS is offering earthquake alerts via two twitter accounts @USGSted
      and @USGSBigQuakes.
    </p>

    <p>
      On average, @USGSted and @USGSBigQuakes will produce about one tweet per
      day, however, aftershocks following major earthquakes can greatly increase
      this number. Users interested in custom alerts based on specific
      geographic regions and magnitude thresholds should sign up for e-mail
      alerts distributed by our <a href="/ens/">
      Earthquake Notification Service (ENS)</a>.
    </p>
  </div>
</div>

<h2>@USGSted</h2>
<hr />
<div class="row">
  <div class="two-of-three column">
    <p>
      <a href="https://twitter.com/USGSted">@USGSted</a> (USGS Tweet Earthquake
      Dispatch) distributes alerts for earthquakes worldwide with magnitudes of
      5.5 and above. We may modify this criteria in the future to tweet alerts
      for more earthquakes of potential interest. @USGSted earthquake tweets
      contain a magnitude descriptor, location, origin time, and a link to the
      USGS webpage with the most recent information about the event. In addition
      to the seismically derived parameters, the alerts also include the
      frequency of tweets in a region surrounding the event that contain the
      word &ldquo; earthquake&rdquo; or its equivalent in several languages.
      Our observations show these tweets often originate from people who have
      experienced the shaking effects of the earthquake. After some significant
      earthquakes, @USGSted will also tweet supplementary information about the
      event.
    </p>
    <a href="https://twitter.com/USGSted" class="twitter-follow-button">
      Follow @USGSted
    </a>
  </div>
  <div class="one-of-three column">
    <a class="twitter-timeline" href="https://twitter.com/USGSted"
        data-widget-id="379700470429663232">
      Tweets by @USGSted
    </a>
  </div>
</div>

<h2>@USGSBigQuakes</h2>
<hr />
<div class="row">
  <div class="two-of-three column">
    <p>
      <a href="https://twitter.com/USGSBigQuakes">@USGSBigQuakes</a> (USGS Big
      Quakes) is for users who are only interested in seismically derived
      content. @USGSBigQuakes distributes alerts for earthquakes worldwide with
      magnitudes of 5.5 and above. The tweets do not include the frequency of
      tweets containing the word &ldquo;earthquake&rdquo;.
    </p>
    <a href="https://twitter.com/USGSBigQuakes" class="twitter-follow-button">
      Follow @USGSBigQuakes
    </a>
  </div>
  <div class="one-of-three column">
    <a class="twitter-timeline" href="https://twitter.com/USGSBigQuakes"
        data-widget-id="379700916972044288">
      Tweets by @USGSBigQuakes
    </a>
  </div>
</div>

<script>
  (function(d, id){
    var js,
        fjs = d.getElementsByTagName('script')[0],
        p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)){
      js = d.createElement('script');
      js.id = id;
      js.src = p + '://platform.twitter.com/widgets.js';
      fjs.parentNode.insertBefore(js, fjs);
    }
  } (document, 'twitter-wjs'))();
</script>
