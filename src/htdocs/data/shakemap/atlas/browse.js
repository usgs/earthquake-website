/* global options */
'use strict';

var ShakeMapList = require('listwidget/ShakeMapList');


var endtime,
    starttime,
    url;

endtime = new Date(Date.UTC(options.year + 1, 0, 1));
starttime = new Date(Date.UTC(options.year, 0, 1));
url = 'https://earthquake.usgs.gov/fdsnws/event/1/query.geojson?' +
    [
      'contributor=atlas',
      'endtime=' + endtime.toISOString(),
      'starttime=' + starttime.toISOString()
    ].join('&');

var list = ShakeMapList({
  container: document.querySelector(options.el),
  feed: url,
  load: false
});

var eventMarkup = list.getEventMarkup;
list.getEventMarkup = function(e) {
  e.properties.url += '/shakemap?source=atlas';
  return eventMarkup(e);
};
list.load();
