'use strict';

var EqList = require('listwidget/EqList');
var url;

url = '/earthquakes/feed/v1.0/summary/significant_month.geojsonp';

EqList({
  container: document.querySelector('#significant-earthquakes'),
  feed: url
});
