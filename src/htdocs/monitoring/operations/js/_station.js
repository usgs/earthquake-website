/* global STATION, TELEMETRY_URL */
/* global TELEMETRY_DESCRIPTIONS, TELEMETRY_ICONS */
/* global StationDetailsMap, TelemetryFactory */
'use strict';


var TabList = require('tablist/TabList');


var _createStationMap,
    telemetryEl;

telemetryEl = document.querySelector('.station-details-telemetry');

/**
 * Create a station map for the given station.
 *
 * @param station {Object}
 *     An object containing station information.
 */
_createStationMap = function (station) {
  var mapContainer,
      mapTableRow;

  mapTableRow = document.querySelector('.station-details-map-table-row') ||
      document.createElement('div');

  mapContainer = mapTableRow.appendChild(document.createElement('div'));
  mapContainer.classList.add('column');
  mapContainer.classList.add('one-of-two');
  mapContainer.classList.add('station-details-map-container');

  StationDetailsMap({
    el: mapContainer,
    station: station
  });
};


TelemetryFactory({url: TELEMETRY_URL}).getTelemetry({
  station: STATION,
  onSuccess: function (response) {
    var telemetry = response.features[0].properties.telemetry;

    STATION.properties.telemetry = telemetry;
    _createStationMap(STATION);

    telemetryEl.innerHTML = [
      '<img src="', TELEMETRY_ICONS[telemetry],
          '" alt="Telemetry = ', telemetry, '"/> ',
      TELEMETRY_DESCRIPTIONS[telemetry]
    ].join('');
  },
  onError: function (message) {
    STATION.telemetry = 0; // Undefined
    _createStationMap(STATION);

    telemetryEl.innerHTML = message;
  }
});

TabList.tabbifyAll();
