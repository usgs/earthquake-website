/* global L */
'use strict';

var HazDevLayers = require('leaflet/control/HazDevLayers'),
    Satellite = require('leaflet/layer/Satellite'),
    Street = require('leaflet/layer/Street');

var //EsriTerrain = require('leaflet/layer/EsriTerrain'),
    Xhr = require('util/Xhr');

var createMap,
    el,
    map;

el = document.querySelector('#map');

createMap = function (data) {
  map = L.map(el).setView([40.0, -105.0], 3);
  var satelliteLayer = Satellite();
  var streetLayer = Street();

  var layersControl = HazDevLayers({
    'Street': streetLayer,
    'Satellite': satelliteLayer
  });

  layersControl.addTo(map);

  streetLayer.addTo(map);
  data.forEach(function (site) {
    var marker;
    var icon = new L.icon({
      iconUrl: 'images/helicorderIcon.gif',
      iconAnchor: [20, 25],
    });
    marker = L.marker([site.lat, site.lng], {
      icon: icon,
      title: site.name
    });
    marker.bindPopup('<a href="' + site.href + ' " target="_blank">' +
        '<h3>' + site.name + '</h3>' +
        '</a>');
    marker.addTo(map);
  });
};

Xhr.ajax({
  url: 'coordinates.json',
  success: function (data) {
    createMap(data);
  },
  error: function () {
    el.innerHTML = '<p class="alert error">' +
        'Error loading map' +
        '</p>';
  }
});
