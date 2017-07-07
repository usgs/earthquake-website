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
        Advanced National Seismic System (ANSS)
      </a></li>
      <li><a href="https://avo.alaska.edu/webicorders/" target="_blank">
        Alaska
      </a></li>
      <li><a href="https://www.cefns.nau.edu/Orgs/aeic/recent_heli.html" target="_blank">
        Arizona-Northern
      </a></li>
      <li><a href="http://www.geo.arizona.edu/saso/Earthquakes/Current/TUC.html" target="_blank">
        Arizona-Tucson
      </a></li>
      <li><a href="http://www.earthquakescanada.nrcan.gc.ca/stndon/wf-fo/index-en.php" target="_blank">
        Canada
      </a></li>
      <li><a href="http://www.ldeo.columbia.edu/LCSN/view_pal.php" target="_blank">
        Eastern US-Lamont
      </a></li>
      <li><a href="http://aki.bc.edu/cgi-bin/NESN/24hr_heli" target="_blank">
        Eastern US-Weston
      </a></li>
      <li><a href="http://www.insivumeh.gob.gt:8060/" target="_blank">
        Guatemala
      </a></li>
      <li><a href="http://www.mgs.md.gov/seismic/helicorder.php" target="_blank">
        Maryland Geological Survey
      </a></li>
      <li><a href="http://mbmgquake-eidsserver.mtech.edu/welcome.html" target="_blank">
        Montana
      </a></li>
      <li><a href="http://www.seismo.unr.edu/Monitoring" target="_blank">
        Nevada
      </a></li>
      <li><a href="http://quake.geo.berkeley.edu/bdsn/seismograms.html" target="_blank">
        Northern California-Berkeley
      </a></li>
      <li><a href="https://earthquake.usgs.gov/monitoring/seismograms" target="_blank">
        Northern California-USGS
      </a></li>
      <li><a href="http://www.ceri.memphis.edu/seismic/heli/" target="_blank">
        New Madrid
      </a></li>
      <li><a href="http://www.ees.nmt.edu/eworm-heli/" target="_blank">
        New Mexico
      </a></li>
      <li><a href="https://pnsn.org/seismograms/map/" target="_blank">
        Pacific Northwest
      </a></li>
      <li><a href=" http://www.prsn.uprm.edu/English/EstacionesV3/seismometers.php"  target="_blank">
        Puerto Rico
      </a></li>
      <li><a href="http://www.scsn.org/index.php/earthquakes/live-seismogram-feed/" target="_blank">
        Southern California - SCSN
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
      <li><a href="http://www.zamg.ac.at/geophysik/live_seis/produkt_demo/index.php" target="_blank">
        Austria
      </a></li>
      <li><a href="http://seismologie.be/en" target="_blank">
        Belgium
      </a></li>
      <li><a href="http://www.earthquakes.bgs.ac.uk/helicorder/heli.html" target="_blank">
        British Geological Survey
      </a></li>
      <li><a href="https://www.ig.cas.cz/en/noright/daily-seismograms" target="_blank">
        Czech Republic
      </a></li>
      <li><a href="http://renass.unistra.fr/" target="_blank">
        France
      </a></li>
      <li><a href="http://www.iris.washington.edu/bud_stuff/dmc/bud_monitor.ALL.html" target="_blank">
        Global-IRIS-BUD
      </a></li>
      <li><a href="http://www.iris.edu/hq/programs/epo/resources_for_viewing_seismograms" target="_blank">
        Global-IRIS-Other
      </a></li>
      <li><a href="/monitoring/operations/heliplot.php?virtual_network=GSN"/>
        Global Seimographic Network (GSN)
      </a></li>
      <li><a href="http://bbnet.gein.noa.gr/HL/" target="_blank">
        Greece
      </a></li>
      <li><a href="http://www.ov.ingv.it/ov/" target="_blank">
        Italy - Osservatorio Vesusiano, INGV
      </a></li>
      <li><a href="http://www.distav.unige.it/rsni/" target="_blank">
        Italy - Regional Seismic Network of Northwestern Italy
      </a></li>
      <li><a href="http://www.fnet.bosai.go.jp/freesia/waveform/" target="_blank">
        Japan
      </a> </li>
      <li><a href="http://geofisica-ew1.ineter.gob.ni/sismogramas/welcome.html" target="_blank">
        Latin America
      </a></li>
      <li><a href="http://www.knmi.nl/nederland-nu/seismologie/aardbevingen" target="_blank">
        The Netherlands
      </a></li>
      <li><a href="http://www.geonet.org.nz/earthquake/drums" target="_blank">
        New Zealand
      </a></li>
      <li><a href="http://www.norsardata.no/NDC/heliplots/" target="_blank">
        Norway
      </a></li>
      <li><a href="http://www.seismology.sk/Live_seismograms/live_seismograms.html" target-"_blank">
        Slovakia
      </a></li>
      <li><a href="http://sismic2.iec.cat/drupal/?q=content/estacions-s%C3%ADsmiques" target="_blank">
        Spain - El laboratori d'Estudis Geofísics Eduard Fontserè (LEGEF)
      </a></li>
      <li><a href="http://www.ydbae.mam.gov.tr/sismogram/" target="_blank">
        Turkey
      </a></li>
    </ul>
  </div>
</div>
