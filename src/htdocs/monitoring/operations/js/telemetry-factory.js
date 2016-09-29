'use strict';


/**
 * Factory for fetching telemetry information from a web service.
 *
 * @param options {Object}
 *     Configuration options for this factory. See `_initialize` for details.
 */
var TelemetryFactory = function (options) {
  var _this,
      _initialize;


  _this = {};

  /**
   * Constructor. Initializes a new factory.
   *
   * @param options.url {String}
   *     The URL for the telemetry web service endpoint.
   */
  _initialize = function (options) {
    _this.url = options.url || '/telemetry.json';
    _this.pendingRequests = {};
  };


  /**
   * Builds the request URL using the configured url and information from
   * the given `station`.
   *
   * @param station {Object}
   *     An object with `network_code` and `station_code` parameters.
   *
   * @return {String}
   *     The request URL to get telemetry information for the given `station`.
   */
  _this.buildRequestUrl = function (station) {
    var params,
        url;

    params = [];
    url = _this.url;

    if (station.properties.network_code) {
      params.push('network_code=' + station.properties.network_code);
    }

    if (station.properties.station_code) {
      params.push('station_code=' + station.properties.station_code);
    }

    if (params.length) {
      url += '?' + params.join('&');
    }

    return url;
  };

  /**
   * Frees resources associated with this factory. Aborts any pending
   * requests for telemetry information.
   *
   */
  _this.destroy = function () {
    if (_this === null) {
      return;
    }

    Object.keys(_this.pendingRequests).forEach(function (url) {
      var request;

      request = _this.pendingRequests[url];

      try {
        request.abort();
        request = null;
      } catch (e) { /* Ignore */ }
    });

    _initialize = null;
    _this = null;
  };

  /**
   * Fetches telemetry information. This method runs _asynchronously_ and calls
   * `options.onError` or `options.onSuccess` appropriately.
   *
   * @param options.onError {Function}
   *     A callback function that is executed if an error occurs. This method
   *     is invoked with a single parameter, the error message.
   * @param options.onSuccess {Function}
   *     A callback function that is executed upon success. This method
   *     is invoked with a single parameter, object form of the JSON response.
   * @param options.station {Object}
   *     An object with station information. Namely `network_code` and
   *     `station_code` properties.
   */
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
        delete _this.pendingRequests[url];
        if (xhr.status === 200) {
          try {
            onSuccess(JSON.parse(xhr.responseText));
          } catch (e) {
            console.error(e.stack);
            onError('Parsing telemetry failed' + e.message);
          }
        } else {
          onError('Fetching telemetry failed');
        }
      }
    };

    xhr.open('GET', url);
    xhr.send();

    _this.pendingRequests[url] = xhr;
  };


  _initialize(options);
  options = null;
  return _this;
};


try {
  module.exports = TelemetryFactory;
} catch (e) { /* Ignore */ }
