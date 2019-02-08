<?php
// Author: Lisa Wald
// Contact: Gavin Hayes, ghayes@usgs.gov
if (!isset($TEMPLATE)) {
  $TITLE = 'Finite Faults';
  $NAVIGATION = true;
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget-0.1.2/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<h2>Data Process and Inversion</h2>
<p>
  We used GSN broadband waveforms downloaded from the NEIC waveform server. We analyzed 46 teleseismic broadband P waveforms, 6 broadband SH waveforms, and 57 long period surface waves selected based on data quality and azimuthal distribution. Waveforms are first converted to displacement by removing the instrument response and are then used to constrain the slip history using a finite fault inverse algorithm (Ji et al., 2002). We begin modeling using a hypocenter matching or adjusted slightly from the initial NEIC solution ( location = 6.0°N 126.8°E, depth = 60.0 km ), and a fault plane defined using either the rapid W-Phase moment tensor (for near-real time solutions), or the gCMT moment tensor (for historic solutions).
</p>

<div class="row right-to-left" >

  <div class="column two-of-five">
      <h3>Finite Faults, Past 30 Days</h3>

      <div class="recent-products" style="overflow:scroll; height:400px; background:#f4f4f4;">
        <noscript class="error alert">
          Javascript is used to load event data. If you can not enable Javascript,
          you can <a href="/earthquakes/feed/v1.0/summary/all_month.csv">view
          the raw data here</a>.
        </noscript>
      </div>

        <h3>View Map and List of Finite Fault Events</h3>
        <ul>
          <li>
            <a href="/earthquakes/map/#%7B%22feed%22%3A%221450197623756%22%2C%22search%22%3A%7B%22id%22%3A%221450197623756%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22starttime%22%3A%22-1%20week%22%2C%22minfelt%22%3A5%2C%22producttype%22%3A%22finite-fault%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22finite-fault%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Past 7 Days</a>
          </li>
          <li>
            <a href="/earthquakes/map/#%7B%22feed%22%3A%221450197866418%22%2C%22search%22%3A%7B%22id%22%3A%221450197866418%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22minfelt%22%3A5%2C%22producttype%22%3A%22finite-fault%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22finite-fault%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">Past 30 Days
          </a>
          </li>
      </ul>

  </div>

  <div class="column three-of-five">

    <ul class="no-style linklist">

      <li>
        <a href="/earthquakes/search/#%7B%22feed%22%3A%221437493916387%22%2C%22search%22%3A%7B%22id%22%3A%221437493916387%22%2C%22name%22%3A%22Search%20Results%22%2C%22isSearch%22%3Atrue%2C%22params%22%3A%7B%22producttype%22%3A%22finite-fault%22%2C%22orderby%22%3A%22time%22%7D%7D%2C%22listFormat%22%3A%22finite-fault%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22grayscale%22%2C%22autoUpdate%22%3Afalse%2C%22restrictListToMap%22%3Atrue%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-85%2C0%5D%2C%5B85%2C360%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Atrue%2C%22help%22%3Afalse%7D%7D">
        <h4>Search Finite Fault Archives</h4>
        <img src="/data/shakemap/images/search-2x.gif" alt="" width="75"/></a>
        <p>Search for events that include Finite Faults. The Search form link from here is already configured to return only events with Finite Fault products. You enter additional search parameters. The default time window is the past 30 days.</p>
      </li>
    </ul>

    <h2>References</h2>
    <ul class="referencelist">
      <li>
        Ji, C., D.J. Wald, and D.V. Helmberger, Source description of the 1999 Hector Mine, California earthquake; Part I: Wavelet domain inversion theory and resolution analysis, Bull. Seism. Soc. Am., Vol 92, No. 4. pp. 1192-1207, 2002.
      </li>
      <li>
        Bassin, C., Laske, G. and Masters, G., The Current Limits of Resolution for Surface Wave Tomography in North America, EOS Trans AGU, 81, F897, 2000.
      </li>
      <li>
        Ji, C., D. V. Helmberger, D. J. Wald, and K. F. Ma (2003), Slip history and dynamic implications of the 1999 Chi-Chi, Taiwan, earthquake, J Geophys Res-Sol Ea, 108(B9).
      </li>
      <li>
        Shao, G. F., X. Y. Li, C. Ji, and T. Maeda (2011), Focal mechanism and slip history of the 2011 M-w 9.1 off the Pacific coast of Tohoku Earthquake, constrained with teleseismic body and surface waves, Earth Planets Space, 63(7), 559-564.
      </li>
    </ul>

  </div>
</div>
