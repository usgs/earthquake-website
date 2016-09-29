/* global NETOPS_WEBSITE_BASEURL, STATION, TELEMETRY_URL */
/* global StationDetailsMap, TelemetryFactory */
'use strict';


var TELEMETRY_DESCRIPTIONS;

TELEMETRY_DESCRIPTIONS = [
  'Telemetry Undefined',
  'No data in more than 24 hours',
  'Last data in less than 24 hours and more than 10 minutes',
  'Last data in less than 10 minutes'
];


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
    baseUrl: NETOPS_WEBSITE_BASEURL,
    el: document.querySelector('.station-details-map-container'),
    station: station
  });
};


TelemetryFactory({url: TELEMETRY_URL}).getTelemetry({
  station: STATION,
  onSuccess: function (telemetry) {
    STATION.telemetry = telemetry;
    _createStationMap(STATION);

    telemetryEl.innerHTML = [
      '<img src="',
          NETOPS_WEBSITE_BASEURL,
          StationDetailsMap.TELEMETRY_ICONS[telemetry],
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
