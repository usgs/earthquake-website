/* global require */
'use strict';

(function () {
  var EqList = require('listwidget/EqList');



  EqList({
    container: document.getElementById('significant-earthquakes')
  });
  EqList({
    container: document.getElementById('m2pastDay-earthquakes'),
    feed: 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_day.geojsonp'
  });
})();