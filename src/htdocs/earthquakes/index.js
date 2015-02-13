/* global require */
'use strict';

(function () {
  var EqList = require('listwidget/EqList');

  new EqList(document.getElementById('significant-earthquakes'));
  new EqList(document.getElementById('m2pastDay-earthquakes'),
    'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_day.geojsonp');
})();