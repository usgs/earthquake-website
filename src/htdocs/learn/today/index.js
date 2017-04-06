/* global L */
'use strict';

var HazDevLayers = require('leaflet/control/HazDevLayers'),
    Satellite = require('leaflet/layer/Satellite'),
    Street = require('leaflet/layer/Street'),
    Xhr = require('util/Xhr');

var createMap,
    el,
    map;

createMap = function (lat_str, lng_str, name, link) {
  var lat = parseFloat(lat_str);
  var lng = parseFloat(lng_str);
  map = L.map(el).setView(new L.LatLng(lat, lng), 3);
  var satelliteLayer = Satellite();
  var streetLayer = Street();

  var layersControl = HazDevLayers({
    'Street': streetLayer,
    'Satellite': satelliteLayer
  });

  layersControl.addTo(map);

  streetLayer.addTo(map);

  var marker;
  marker = L.marker([lat, lng], {
    title: name
  });
  marker.bindPopup('<h3>' + link + '</h3>');
  marker.addTo(map);
};

for (var i = 0; i < scriptIDArray.length; i++) {
  el = document.getElementById(scriptClassArray[i]);
   var id_link = scriptIDArray[i];
   var url;
   var temp = '<a href="/earthquakes/eventpage/';
   var find = id_link.indexOf(temp);
   var id;
   if (find != -1) {
     id = (id_link.slice( temp.length, id_link.indexOf('">')));

     url = 'https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&' +
         [
           'eventid=' + id
         ].join('&');

     var response = new XMLHttpRequest();
     response.open("GET", url, false);
     response.send();

     //get coordinates
     var text = response.responseText;
     var lat = text.indexOf('latitude') + 11
     var long = text.indexOf('longitude');
     var get_lat = text.slice(lat, long);
     var final_lat = get_lat.slice(0, get_lat.indexOf('"'));

     var get_long = text.slice(long + 12);
     var final_long = get_long.slice(0, get_long.indexOf('"'));

     createMap(final_lat, final_long, scriptClassArray[i], id_link);
    }
    else {
      document.getElementById(scriptClassArray[i]).style.height = "0px";
    }
 }
