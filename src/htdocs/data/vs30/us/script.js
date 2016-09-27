'use strict';
var VS30 = function() {

  var map, bounds, ctrl_layers, points;

  $(document).ready(function() {
    initMap();
  });

  function initMap() {
    var ctrl_scale;

    map = L.map('map', {
      scrollWheelZoom: false
    });
    bounds = new L.LatLngBounds();
    ctrl_layers = L.control.layers().addTo(map);
    ctrl_scale = L.control.scale().addTo(map);

    addBaseLayers();
    addMarkersLayer();
  }

  function addBaseLayers() {
    var mapq_osm, mapq_sat, greyscale_base, greyscale_ref, greyscale, terrain;

    // Mapquest base layers
    mapq_osm = L.tileLayer('http://{s}.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png', {
      _id: 'mapq_osm',
      maxZoom: 18,
      subdomains: ['otile1','otile2','otile3','otile4'],
      attribution: 'Maps provided by <a href="http://open.mapquest.com" target="_blank">MapQuest</a>, <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a> and contributors.'
    });

    mapq_sat = L.tileLayer('http://{s}.mqcdn.com/tiles/1.0.0/sat/{z}/{x}/{y}.jpg', {
      _id: 'mapq_sat',
      maxZoom: 18,
      subdomains: ['otile1','otile2','otile3','otile4'],
      attribution: 'Maps provided by <a href="http://open.mapquest.com" target="_blank">MapQuest</a> (portions courtesy NASA/JPL and USDA).'
    });

    // ESRI base layers
    greyscale_base = L.tileLayer('http://services.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
      attribution: '&copy;2014 Esri, DeLorme, HERE'
    });
    greyscale_ref = L.tileLayer('http://services.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Reference/MapServer/tile/{z}/{y}/{x}');
    greyscale = L.layerGroup([greyscale_base, greyscale_ref]);

    terrain = L.tileLayer('http://services.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
      attribution: 'Esri, HERE, DeLorme, TomTom, USGS, NGA, USDA, EPA, NPS'
    }).addTo(map);

    // Add layers to layer controller
    ctrl_layers.addBaseLayer(terrain, 'Terrain')
      .addBaseLayer(mapq_osm, 'Street (Mapquest)')
      .addBaseLayer(greyscale, 'Greyscale')
      .addBaseLayer(mapq_sat, 'Satellite');
  }

  function addMarkersLayer() {
    var cluster, markers, marker, popup, count = points.metadata.count;

    cluster = new L.MarkerClusterGroup({
      showCoverageOnHover: false,
      maxClusterRadius: 60,
      disableClusteringAtZoom: 9
    });

    markers = L.geoJson(points, {
      pointToLayer: function(feature, latlng) {
        bounds.extend(latlng);
        marker = L.circleMarker(latlng, {
          radius: 8,
          color: feature.properties.color,
          opacity: 0.8,
          weight: 2,
          fillColor: feature.properties.color,
          fillOpacity: 0.6
        });
        cluster.addLayer(marker);
        return marker;
      },
      onEachFeature: function(feature, layer) {
        popup = [
          '<div class="popup"><h1>',
          feature.properties.index,
          '</h1><table><tr><th>Network/Station Code</th><td>',
          feature.properties.net_sta || 'N/A',
          '</td></tr><tr><th>Station Name</th><td>',
          feature.properties.name || 'N/A',
          '</td></tr><tr><th>Method</th><td>',
          feature.properties.method || 'N/A',
          '</td></tr><tr><th><i>V</i><sub><i>S</i>30</sub></th><td>',
          (feature.properties.vs30 || 'N/A') + ' m/s',
          '</td></tr><tr><th>Max. Depth of Profile</th><td>',
          (feature.properties.d_max || 'N/A') + ' m',
          '</div>'
        ].join('');
        layer.bindPopup(popup);
      }
    });
    map.fitBounds(bounds);
    //$('.numstations').html(count + ' points on this map');
    $('.number').html(count);

    // either display indiv. markers or cluster
    if (count > 300) {
      map.addLayer(cluster);
    } else {
      map.addLayer(markers);
    }
    initDownloadLink();
  }

  // create / update link to download only points visible on map
  function initDownloadLink() {
    var uri = './vs30.csv.php',
      querystring = getQueryString();

    $('.downloads').append('<li><a href="' + uri + querystring + '" download class="extent">Only data points within the current map extent</a></li>');
    map.on('moveend', function() {
      var querystring = getQueryString(),
        href = uri + querystring;

      $('.extent').attr('href', href);
    });
  }

  function getQueryString() {
    var mapextent = map.getBounds(),
      qs = [
        '?latmin=', Math.round(mapextent.getSouth() * 1000) / 1000,
        '&latmax=', Math.round(mapextent.getNorth() * 1000) / 1000,
        '&lngmin=', Math.round(mapextent.getWest() * 1000) / 1000,
        '&lngmax=', Math.round(mapextent.getEast() * 1000) / 1000,
      ].join('');
    return qs;
  }

  // expose public methods, etc outside protected 'VS30' namespace
  var pub = {};
  pub.storepoints = function(geojson) { // called via jsonp callback in HTML source
    points = geojson;
  };
  return pub;

}();
