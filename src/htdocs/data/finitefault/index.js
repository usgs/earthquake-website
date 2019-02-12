'use strict';

var ShakeMapList = require('listwidget/ShakeMapList');


var url = '/fdsnws/event/1/query.geojson?producttype=finite-fault&starttime=-1+year';

ShakeMapList({
  container: document.querySelector('.recent-products'),
  feed: url
});
