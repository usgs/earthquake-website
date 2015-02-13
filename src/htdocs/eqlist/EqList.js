'use strict';

var BASE_URL = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/';
var SIG_URL_MONTH = BASE_URL + 'significant_month.geojsonp';
var SIG_URL_WEEK  = BASE_URL + 'significant_week.geojsonp';
var SIG_URL_DAY   = BASE_URL + 'significant_day.geojsonp';
var SIG_URL_HOUR   = BASE_URL + 'significant_hour.geojsonp';

var ALL_URL_MONTH = BASE_URL + 'all_month.geojsonp';
var ALL_URL_WEEK  = BASE_URL + 'all_week.geojsonp';
var ALL_URL_DAY   = BASE_URL + 'all_day.geojsonp';
var ALL_URL_HOUR   = BASE_URL + 'all_hour.geojsonp';

var M45_URL_MONTH = BASE_URL + '4.5_month.geojsonp';
var M45_URL_WEEK = BASE_URL + '4.5_week.geojsonp';
var M45_URL_DAY = BASE_URL + '4.5_day.geojsonp';
var M45_URL_HOUR = BASE_URL + '4.5_hour.geojsonp';

var M25_URL_MONTH = BASE_URL + '2.5_month.geojsonp';
var M25_URL_WEEK = BASE_URL + '2.5_week.geojsonp';
var M25_URL_DAY = BASE_URL + '2.5_day.geojsonp';
var M25_URL_HOUR = BASE_URL + '2.5_hour.geojsonp';

var M1_URL_MONTH = BASE_URL + '1.0_month.geojsonp';
var M1_URL_WEEK = BASE_URL + '1.0_week.geojsonp';
var M1_URL_DAY = BASE_URL + '1.0_day.geojsonp';
var M1_URL_HOUR = BASE_URL + '1.0_hour.geojsonp';

var REGISTERED_PARSERS = {};
var VALIDATE_URL = true;

var EqList = function (container, feed) {
  this._container = container || document.createElement('div');
  this._feed = feed || SIG_URL_MONTH;

  this._list = this._container.appendChild(document.createElement('ol'));
  this._list.className = 'sigeqs';

  this._generateLoading();
  this._fetchList();
};

var __register_parser = function (feed, callback) {
  var parsers = REGISTERED_PARSERS[feed];

  if (typeof parsers === 'undefined' || parsers === null) {
    parsers = [];
  }

  parsers.push(callback);
  REGISTERED_PARSERS[feed] = parsers;
};

var __notify_parser = function (parsers, data) {
  var i = 0, len = parsers.length;

  for (; i < len; i++) {
    parsers[i].call(null, data);
  }
};

var __load_css = function (url) {
  var p = document.querySelector('head'),
      defaultCssUrl = 'http://earthquake.usgs.gov/eqlist/eqlist.css',
      cssUrl = null, src = null,
      scripts = document.querySelectorAll('script[src]');

  if (p) {
    // Got a head element. Cool.

    // Try to guess where the CSS is...
    for (var i = 0; (typeof url==='undefined') && i < scripts.length; i++) {
      src = scripts[i].src;
      if (src.match(/EqList.js$/)) {
        cssUrl = src.replace(/\.js$/, '.css');
      }
    }

    var style = document.createElement('link');
    style.setAttribute('rel', 'stylesheet');
    style.setAttribute('href', url || cssUrl || defaultCssUrl);
    p.appendChild(style);
  } else {
    // No head element. Sucky.
    // TODO
    try {
      console.log('EqList::No head element.');
    } catch (e) {/*Ignore*/}
  }
};

var __get_event_markup = function (e) {
  var p = e.properties,
      t = new Date(p.time),
      y = t.getUTCFullYear(),
      m = t.getUTCMonth()+1,
      d = t.getUTCDate(),
      h = t.getUTCHours(),
      i = t.getUTCMinutes(),
      s = t.getUTCSeconds();

  if (m < 10) { m = '0' + m; }
  if (d < 10) { d = '0' + d; }
  if (h < 10) { h = '0' + h; }
  if (i < 10) { i = '0' + i; }
  if (s < 10) { s = '0' + s; }
  var dateStamp = ''+y+'-'+m+'-'+d+' '+h+':'+i+':'+s+' UTC';

  return [
    '<li class="sigeq">',
      '<span class="mag">', p.mag.toFixed(1), '</span>',
      '<a class="place" href="', p.url, '">', p.place, '</a>',
      '<span class="time">', dateStamp, '</span>',
      '<span class="depth">',
        e.geometry.coordinates[2].toFixed(1),
      ' km deep</span>',
    '</li>'
  ].join('');
};


EqList.prototype._generateLoading = function () {
  var loading = this._container.appendChild(document.createElement('p'));
  loading.className = 'sigeq-loading';

  loading.innerHTML = [
    'Fetching list of significant earthquakes. If this takes longer ',
    'than is reasonable, you can <a href="', this._feed, '">view the ',
    'source data.'
  ].join('');
};

EqList.prototype._fetchList = function () {
  var s = document.createElement('script');
  s.src = this._feed;

  __register_parser(this._feed, (function (sigeqlist) {
    return function (data) {
      sigeqlist._render(data);
      s.parentNode.removeChild(s);
    };
  })(this));

  document.querySelector('script').parentNode.appendChild(s);
};

EqList.prototype._emptyContainer = function () {
  this._container.innerHTML = '';
};

EqList.prototype._createError = function (message) {
  var p = document.createElement('p');

  p.className = 'error';
  p.innerHTML = message;

  return p;
};

EqList.prototype._render = function (data) {
  var events = data.features,
      i = 0,
      len = events.length,
      markup = [];

  if (len === 0) {
    this._emptyContainer();
    this._container.appendChild(this._createError('No Events Found.'));
    return;
  }

  events.sort(function (a, b) {
    return (b.properties.time - a.properties.time);
  });

  for (i = 0; i < len; i++) {
    markup.push(__get_event_markup(events[i]));
  }

  // Append to the DOM
  this._emptyContainer();
  this._list.innerHTML = markup.join('');
  this._container.appendChild(this._list);
};

/**
 *
 */
EqList.setValidateUrl = function (validateUrl) {
  VALIDATE_URL = validateUrl;
};

EqList.unregisterListener = function (key) {
  REGISTERED_PARSERS[key] = null;
  delete REGISTERED_PARSERS[key];
};

window.eqfeed_callback = function (data) {
  var url = data.metadata.url,
      key = null;

  for (key in REGISTERED_PARSERS) {
    if (url.indexOf(key) !== -1 || VALIDATE_URL === false) {
      // Found it; notify.
      __notify_parser(REGISTERED_PARSERS[key], data);

      // Unregister for this feed
      if (VALIDATE_URL === true) {
        EqList.unregisterListener(key);
      }
    }
  }

};


// Add CSS only once
__load_css();

// Expose these as statics for external usage
EqList.SIG_URL_MONTH = SIG_URL_MONTH;
EqList.SIG_URL_WEEK  = SIG_URL_WEEK;
EqList.SIG_URL_DAY   = SIG_URL_DAY;
EqList.SIG_URL_HOUR   = SIG_URL_HOUR;

EqList.ALL_URL_MONTH = ALL_URL_MONTH;
EqList.ALL_URL_WEEK  = ALL_URL_WEEK;
EqList.ALL_URL_DAY   = ALL_URL_DAY;
EqList.ALL_URL_HOUR   = ALL_URL_HOUR;

EqList.M45_URL_MONTH = M45_URL_MONTH;
EqList.M45_URL_WEEK = M45_URL_WEEK;
EqList.M45_URL_DAY = M45_URL_DAY;
EqList.M45_URL_DAY = M45_URL_HOUR;

EqList.M25_URL_MONTH = M25_URL_MONTH;
EqList.M25_URL_WEEK = M25_URL_WEEK;
EqList.M25_URL_DAY = M25_URL_DAY;
EqList.M25_URL_DAY = M25_URL_HOUR;

EqList.M1_URL_MONTH = M1_URL_MONTH;
EqList.M1_URL_WEEK = M1_URL_WEEK;
EqList.M1_URL_DAY = M1_URL_DAY;
EqList.M1_URL_DAY = M1_URL_HOUR;

module.exports = EqList;
