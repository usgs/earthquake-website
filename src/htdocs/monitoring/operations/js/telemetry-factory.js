'use strict';


var TelemetryFactory = function (options) {
  var _this,
      _initialize;


  _this = {};

  _initialize = function (options) {
    _this.url = options.url || '/telemetry.json';
    _this.pendingRequests = [];
  };


  _this.buildRequestUrl = function (station) {
    return _this.url +
        '?network_code=' + encodeURIComponent(station.network_code) +
        '&station_code=' + encodeURIComponent(station.station_code);
  };

  _this.destroy = function () {
    if (_this === null) {
      return;
    }

    _this.pendingRequests.forEach(function (request) {
      try {
        request.abort();
        request = null;
      } catch (e) { /* Ignore */ }
    });

    _initialize = null;
    _this = null;
  };

  _this.getTelemetry = function (options) {
    var onError,
        onSuccess,
        station,
        url,
        xhr;

    onError = options.onError || function () {};
    onSuccess = options.onSuccess || function () {};
    station = options.station || {};
    url = _this.buildRequestUrl(station);
    xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          try {
            onSuccess(JSON.parse(xhr.responseText).telemetry);
          } catch (e) {
            onError('Parsing telemetry failed');
          }
        } else {
          onError('Fetching telemetry failed');
        }
      }
    };

    xhr.open('GET', url);
    xhr.send();
  };


  _initialize(options);
  options = null;
  return _this;
};


try {
  module.exports = TelemetryFactory;
} catch (e) { /* Ignore */ }
