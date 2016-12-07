<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Seismogram Displays';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

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

<!--
<script type="text/javascript">

/* <![CDATA[ */
$(document).ready( function() {
  loadMap();
});

_map = null;
var loadMap = function() {

  // setup tiles
  _basemapSatellite = new L.TileLayer(
      'http://otile{s}.mqcdn.com/tiles/1.0.0/sat/{z}/{x}/{y}.jpg', {
        'attribution' : '', 'subdomains': '1234', 'zIndex': 10
  });
  _basemapStreet = new L.TileLayer(
      'http://otile{s}.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png', {
        'attribution' : '', 'subdomains': '1234', 'zIndex': 20
  });

  // setup markers
  var markers = [
    [50.5, -112, 'Canada','http://www.earthquakescanada.nrcan.gc.ca/stndon/wf-fo/index-eng.php'],
    [45.3, -122, 'Pacific Northwest', 'http://pnsn.org/seismograms/map/'],
    [36.5, -119.6, 'Northern California - USGS', '/monitoring/helicorders/'],
    [37.6, -122, 'Northern California - Berkeley', 'http://quake.geo.berkeley.edu/bdsn/seismograms.html'],
    [34, -118, 'Southern California - USGS', 'http://pasadena.wr.usgs.gov/webicorder/'],
    [46, -112.5, 'Montana', 'http://mbmgquake.mtech.edu/earthworm/wavef_disp/current/welcome.html'],
    [40, -111.6, 'Utah/Yellowstone', 'http://quake.utah.edu/earthquake-center/heli-map'],
    [39.5, -119.6, 'Nevada', 'http://crack.seismo.unr.edu/Webcam/webcam.html'],
    [35, -106.6, 'New Mexico', 'http://www.ees.nmt.edu/eworm-heli/'],
    [32.1, -111, 'Arizona-Tucson', 'http://www.geo.arizona.edu/saso/Earthquakes/Current/TUC.html'],
    [35.1, -111.6, 'Arizona-Flagstaff', 'http://www4.nau.edu/geology/aeic/recent_heli.html'],
    [36.5, -89.5, 'New Madrid', 'http://www.ceri.memphis.edu/seismic/heli/'],
    [34, -81, 'South Carolina', 'http://eeyore.seis.sc.edu/earthworm/heli/welcome.html'],
    [37.5, -77.5, 'Virginia', 'http://cannonball.geos.vt.edu/heli/'],
    [39.3, -76.5, 'Maryland Geological Survey', 'http://www.mgs.md.gov/seismic/helicorder.php'],
    [40.6, -74, 'Eastern US-Lamont', 'http://www.ldeo.columbia.edu/LCSN/view_pal.html'],
    [42.3, -71, 'Eastern US-Weston', 'http://aki.bc.edu/cgi-bin/NESN/24hr_heli'],
    [18, -66.5, 'Puerto Rico', 'http://www.prsn.uprm.edu/English/EstacionesV3/seismometers.php'],
    [51.5, 0, 'United Kingdom', 'http://www.earthquakes.bgs.ac.uk/helicorder/heli.html'],
    [35.6, 139, 'Japan', 'http://www.fnet.bosai.go.jp/freesia/waveform/'],
    [43.93, 12.46, 'Republic of San Marino', 'http://www.libertas.sm/cont/pagina/sismografo-online-terremoti-tracce-sismiche-e-sismogrammi-in-diretta-da-san-marino-repubblica-componente-nord-sud-n/1409/3.html'],
    [-41, 175, 'New Zealand', 'http://www.geonet.org.nz/quakes/drums/']
  ];

  // load the map
  _map = L.map('map', {
    center: new L.LatLng(44, -108),
    worldCopyJump: true,
    zoom: 3,
    minZoom: 2,
    maxZoom:	 5,
    layers: [_basemapStreet]
  });

  // setup map controls
  L.control.layers({
    'Satellite' : _basemapSatellite,
    'Street' : _basemapStreet
  }).addTo(_map);

  // add the markers
  for( x in markers ) {
    var icon = new L.icon({
      iconUrl: 'images/helicorderIcon.png',
      iconAnchor: [20, 25],
    });
    var marker = L.marker(new L.LatLng(markers[x][0], markers[x][1]), {
      icon: icon,
      link: markers[x][3],
      title: markers[x][2]}).on('click', function() {
        win = window.open(this.options.link);
        setTimeout('win.focus()', 1);
      });
    marker.addTo(_map);
  }
};
/* ]]> */

</script>
-->
