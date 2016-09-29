/* global STATION, TELEMETRY_URL */
/* global TELEMETRY_DESCRIPTIONS, TELEMETRY_ICONS */
/* global StationDetailsMap, TelemetryFactory */
'use strict';


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
  StationDetailsMap({
    el: document.querySelector('.station-details-map-container'),
    station: station
  });
};


TelemetryFactory({url: TELEMETRY_URL}).getTelemetry({
  station: STATION,
  onSuccess: function (response) {
    var telemetry = response.telemetry;

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
