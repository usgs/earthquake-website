/* global L, TELEMETRY_ICONS, TELEMETRY_SHADOW_ICON */
'use strict';


var HazDevLayers = require('leaflet/control/HazDevLayers'),
    Satellite = require('leaflet/layer/Satellite'),
    Street = require('leaflet/layer/Street');


/**
 * Creates a simple station details map. This map contains a single marker
 * for the station and is centered on the station location. Clicking on the
 * station icon will bring up some high-level station information.
 *
 * @param options {Object}
 *     See `_initialize` for details.
 */
var StationDetailsMap = function (options) {
  var _this,
      _initialize;


  _this = {};

  /**
   * Initialize a new {StationDetailsMap}.
   *
   * @param options.el {HTMLElement}
   *     The container element into which the map will be rendered.
   * @param options.station {Feature}
   *     The station object information as a GeoJSON Feature.
   */
  _initialize = function (options) {
    _this.station = options.station || {};
    _this.el = options.el || document.createElement('div');

    _this.telemetryIcons = options.telemetryIcons || TELEMETRY_ICONS;
    _this.shadowIcon = options.shadowIcon || TELEMETRY_SHADOW_ICON;

    _this._createMap();
  };


  /**
   * Creates the actual map.
   *
   */
  _this._createMap = function () {
    var latitude,
        longitude;

    _this.el.innerHTML = '';
    _this.mapEl = _this.el.appendChild(document.createElement('div'));
    _this.mapEl.classList.add('station-details-map');

    latitude = _this.station.geometry.coordinates[1];
    longitude = _this.station.geometry.coordinates[0];

    _this.satelliteLayer = Satellite();
    _this.streetLayer = Street();

    _this.map = L.map(_this.mapEl, {
      center: [latitude, longitude],
      layers: [
        // Base layer
        _this.streetLayer,
        // Station icon
        _this._createStationMarker()
      ],
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
   * @return {L.Marker}
   *     The marker to use for the station.
   */
  _this._createStationMarker = function () {
    var latitude,
        longitude,
        properties;

    latitude = _this.station.geometry.coordinates[1];
    longitude = _this.station.geometry.coordinates[0];
    properties = _this.station.properties;

    _this.stationMarker = L.marker([latitude, longitude], {
      icon: _this._createStationMarkerIcon(),
      clickable: true,
      draggable: false,
      keyboard: false,
      alt: properties.name,
    });

    _this.stationMarker.bindPopup([
      '<div class="station-details-map-popup">',
        '<h2 class="station-details-map-popup-title">',
          properties.network_code, ' ', properties.station_code,
        '</h2>',
        '<p class="station-details-map-popup-content">',
          properties.name,
          '<br/>',
          '(', latitude, ', ', longitude, ')',
        '</p>',
      '<div>'
    ].join(''));

    return _this.stationMarker;
  };

  /**
   * Creates the station marker icon.
   *
   * @return {L.Icon}
   *     The marker icon to use for the station.
   */
  _this._createStationMarkerIcon = function () {
    var iconIndex,
        iconUrl;

    // Choose the icon to use. If telemetry does not correspond to an icon
    // then use the undefined icon (0).
    iconIndex = _this.station.properties.telemetry || 0;
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
  module.exports = StationDetailsMap;
} catch (e) { /* Ignore */ }
