<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Seismogram Displays';
    $HEAD = '
      <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
      <link rel="stylesheet" href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"/>
      <link rel="stylesheet" href="helicorders.css"/>
    ';
    $FOOT = '
      <script src="/lib/leaflet-0.7.7/leaflet.js"></script>
      <script src="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.js"></script>
      <script src="/lib/hazdev-webutils-0.1.8/hazdev-webutils.js"></script>
      <script src="helicorders.js"></script>
    ';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>
<div id="map">
</div>

<div class="row">
  <div class="column one-of-two">
    <h2>North America</h2>

    <ul>
      <li><a href="/monitoring/operations/heliplot.php?virtual_network=ANSS"/>
        ANSS
      </a></li>
      <li><a href="http://www4.nau.edu/geology/aeic/recent_heli.html" target="_blank">
        Arizona-Flagstaff
      </a></li>
      <li><a href="http://www.geo.arizona.edu/saso/Earthquakes/Current/TUC.html" target="_blank">
        Arizona-Tucson
      </a></li>
      <li><a href="http://www.earthquakescanada.nrcan.gc.ca/stndon/wf-fo/index-eng.php" target="_blank">
        Canada
      </a></li>
      <li><a href="http://www.ldeo.columbia.edu/LCSN/view_pal.html" target="_blank">
        Eastern US-Lamont
      </a></li>
      <li><a href="http://aki.bc.edu/cgi-bin/NESN/24hr_heli" target="_blank">
        Eastern US-Weston
      </a></li>
      <li><a href="http://www.mgs.md.gov/seismic/helicorder.php" target="_blank">
        Maryland Geological Survey
      </a></li>
      <li><a href="http://mbmgquake.mtech.edu/earthworm/wavef_disp/current/welcome.html" target="_blank">
        Montana
      </a></li>
      <li><a href="http://crack.seismo.unr.edu/Webcam/webcam.html" target="_blank">
        Nevada
      </a></li>
      <li><a href="http://quake.geo.berkeley.edu/bdsn/seismograms.html" target="_blank">
        Northern California-Berkeley
      </a></li>
      <li><a href="/monitoring/helicorders/" target="_blank">
        Northern California-USGS
      </a></li>
      <li><a href="http://www.ceri.memphis.edu/seismic/heli/" target="_blank">
        New Madrid
      </a></li>
      <li><a href="http://www.ees.nmt.edu/eworm-heli/" target="_blank">
        New Mexico
      </a></li>
      <li><a href="http://pnsn.org/seismograms/map/" target="_blank">
        Pacific Northwest
      </a></li>
      <li><a href=" http://www.prsn.uprm.edu/English/EstacionesV3/seismometers.php"  target="_blank">
        Puerto Rico
      </a></li>
      <li><a href="http://pasadena.wr.usgs.gov/webicorder/" target="_blank">
        Southern California-USGS
      </a></li>
      <li><a href="http://eeyore.seis.sc.edu/earthworm/heli/welcome.html" target="_blank">
        South Carolina
      </a></li>
      <li><a href="http://quake.utah.edu/earthquake-center/heli-map" target="_blank">
        Utah/Yellowstone
      </a></li>
      <li><a href="http://cannonball.geos.vt.edu/heli/" target="_blank">
        Virginia
      </a></li>
    </ul>
  </div>
  <div class="column one-of-two">
    <h2>Worldwide</h2>

    <ul>
      <li><a href="http://www.iris.washington.edu/bud_stuff/dmc/bud_monitor.ALL.html" target="_blank">
        Global-IRIS-BUD
      </a></li>
      <li><a href="http://rev.seis.sc.edu/" target="_blank">
        Global-IRIS-REV
      </a></li>
      <li><a href="/monitoring/operations/heliplot.php?virtual_network=GSN"/>
        GSN
      </a></li>
      <li><a href="http://www.fnet.bosai.go.jp/freesia/waveform/" target="_blank">
        Japan
      </a> </li>
      <li><a href="http://www.geonet.org.nz/quakes/drums/" target="_blank">
        New Zealand
      </a></li>
      <li><a href="http://www.libertas.sm/cont/pagina/sismografo-online-terremoti-tracce-sismiche-e-sismogrammi-in-diretta-da-san-marino-repubblica-componente-nord-sud-n/1409/3.html" target="_blank">
        Republic of San Marino
      </a></li>
      <li><a href="http://www.earthquakes.bgs.ac.uk/helicorder/heli.html" target="_blank">
        United Kingdom
      </a></li>
    </ul>
  </div>
</div>
