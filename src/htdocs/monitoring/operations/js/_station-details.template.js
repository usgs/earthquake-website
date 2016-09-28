/* global STATION, StationDetailsMap */
'use strict';

(function () {
  var TELEMETRY,
      TELEMETRY_DESCRIPTIONS,
      TELEMETRY_URL;


  TELEMETRY = [
    '../../../images/station-gray.png',
    '../../../images/station-red.png',
    '../../../images/station-yellow.png',
    '../../../images/station-green.png'
  ];

  TELEMETRY_DESCRIPTIONS = [
    'Telemetry Undefined',
    'No data in more than 24 hours',
    'Last data in less than 24 hours and more than 10 minutes',
    'Last data in less than 10 minutes'
  ];

  TELEMETRY_URL = '../../../telemetry.json';


  StationDetailsMap({
    el: document.querySelector('.station-details-map-container'),
    telemetryIcons: TELEMETRY,
    shadowIcon: '../../../images/station-shadow.png',
    station: STATION
  });

  var telemetryEl,
      xhr;

  telemetryEl = document.querySelector('.station-details-telemetry');
  xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    var response,
        telemetry;

    if (xhr.readyState === 4) {
      // done
      if (xhr.success !== null) {
        try {
          response = JSON.parse(xhr.response);
          telemetry = response.telemetry || 0;
          telemetryEl.innerHTML = '<img src="' + TELEMETRY[telemetry] +
              '" alt="Telemetry = ' + telemetry + '"/> ' +
              TELEMETRY_DESCRIPTIONS[telemetry];
        } catch (e) {
          telemetryEl.innerHTML = 'Error Fetching Telemetry';
        }
      } else {
        telemetryEl.innerHTML = 'Fetching Telemetry Failed';
      }
    }
  };

  xhr.open('GET', TELEMETRY_URL +
    '?network_code=' + encodeURIComponent(STATION.network_code) +
    '&station_code=' + encodeURIComponent(STATION.station_code)
  );

  xhr.send();
})();
