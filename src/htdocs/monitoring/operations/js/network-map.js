/* global L, NETOPS_WEBSITE_BASEURL, TELEMETRY_ICONS, TELEMETRY_SHADOW_ICON */
'use strict';


var HazDevLayers = require('leaflet/control/HazDevLayers'),
    Satellite = require('leaflet/layer/Satellite'),
    Street = require('leaflet/layer/Street');


/**
 * This class creates a simple Leaflet map and plots all the stations on it.
 * Clicking a station takes the user to the station details page for that
 * station.
 *
 * @param options {Object}
 *     Configuration options for this network map. See `_initialize` for
 *     details.
 */
var NetworkMap = function (options) {
  var _this,
      _initialize;


  _this = {};

  /**
   * Constructor. Initializes a new network map.
   *
   * @param options.el {HTMLElement}
   *     The container element into which the map should be rendered.
   * @param options.stations {Array<Station>}
   *     An array of Station features to render on the map.
   */
  _initialize = function (options) {
    _this.el = options.el || document.createElement('div');
    _this.stations = options.stations || [];

    _this.telemetryIcons = options.telemetryIcons || TELEMETRY_ICONS;
    _this.shadowIcon = options.shadowIcon || TELEMETRY_SHADOW_ICON;

    _this._createMap();
    _this._addMarkers();
  };


  /**
   * Loops over all the stations and creates and adds a marker to the map
   * for each one. Also re-centers/zooms the map to show all the plotted
   * station markers.
   *
   */
  _this._addMarkers = function () {
    var bounds;

    bounds = new L.LatLngBounds();

    _this.stations.forEach(function (station) {
      var marker;

      marker = _this._createStationMarker(station);
      bounds.extend(marker.getLatLng());

      _this.map.addLayer(marker);
    });

    _this.map.fitBounds(bounds, {padding: [25, 25]});
  };

  /**
   * Creates the basic leaflet map. Does not include station markers yet.
   *
   */
  _this._createMap = function () {
    _this.el.innerHTML = '';
    _this.mapEl = _this.el.appendChild(document.createElement('div'));
    _this.mapEl.classList.add('network-map');

    _this.satelliteLayer = Satellite();
    _this.streetLayer = Street();

    _this.map = L.map(_this.mapEl, {
      center: [0, 0],
      layers: [_this.streetLayer],
      zoom: 10
    });

    _this.layersControl = HazDevLayers({
      'Street': _this.streetLayer,
      'Satellite': _this.satelliteLayer
    });

    _this.layersControl.addTo(_this.map);
  };

  /**
   * Creates the station marker.
   *
   * @param station {Object}
   *     The station object for which to create the marker
   *
   * @return {L.Marker}
   *     The marker to use for the station.
   */
  _this._createStationMarker = function (station) {
    var marker,
        coordinates;

    coordinates = station.geometry.coordinates;

    marker = L.marker([
      coordinates[1],
      coordinates[0]
    ], {
      icon: _this._createStationMarkerIcon(station),
      clickable: true,
      draggable: false,
      keyboard: false,
      title: station.properties.name + ' - ' + station.properties.telemetry,
      alt: station.properties.name,
    });

    marker.on('click', function () {
      window.location = _this._getStationPageLink(station);
    });

    return marker;
  };

  /**
   * Creates the station marker icon.
   *
   * @param station {Object}
   *     The station object for which to create the marker
   *
   * @return {L.Icon}
   *     The marker icon to use for the station.
   */
  _this._createStationMarkerIcon = function (station) {
    var iconIndex,
        iconUrl;

    // Choose the icon to use. If telemetry does not correspond to an icon
    // then use the undefined icon (0).
    iconIndex = station.properties.telemetry || 0;
    if (iconIndex > _this.telemetryIcons.length - 1) {
      iconIndex = 0;
    }

    iconUrl = _this.telemetryIcons[iconIndex];

    return L.icon({
      iconUrl: iconUrl,
      // iconRetina: iconUrl.replace('.png', '@2x.png'),
      iconSize: [16, 14],
      iconAnchor: [8, 7],
      popupAnchor: [0, -10],
      shadowUrl: _this.shadowIcon,
      // shadowRetinaUrl: _this.shadowIcon.replace('.png', '@2x.png'),
      shadowSize: [23, 20]// ,
      // shadowAnchor: [0, 0] // TODO
    });
  };

  /**
   * Generates a link to the station details page for the given station.
   *
   * @param station {Object}
   *     The station for which to generate the link.
   *
   * @return {String}
   *     The link to the station details page.
   */
  _this._getStationPageLink = function (station) {
    var properties;

    properties = station.properties;

    return NETOPS_WEBSITE_BASEURL + '/stations/' + properties.network_code +
        '/' + properties.station_code + '/';
  };

  /**
   * Frees resources assiated with the {StationDetailsMap}.
   *
   */
  _this.destroy = function () {
    _this.layersControl.removeFrom(_this.map);

    _this.satelliteLayer.destroy();
    _this.streetLayer.destroy();

    _this.map.remove();
    _this.el.innerHTML = '';
  };


  _initialize(options || {});
  options = null;
  return _this;
};


try {
  module.exports = NetworkMap;
} catch (ex) { /* Ignore */ }
