/* global options */
'use strict';

var EqList = require('listwidget/EqList');
var url;

url = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_month.geojson';

EqList({
  container: document.querySelector('#significant-earthquakes'),
  feed: url
});
