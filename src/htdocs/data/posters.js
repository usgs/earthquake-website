/* global options */
'use strict';

var EqList = require('listwidget/EqList');


var endtime,
    starttime,
    url;

endtime = new Date(Date.UTC(options.year + 1, 0, 1));
starttime = new Date(Date.UTC(options.year, 0, 1));
url = 'https://earthquake.usgs.gov/fdsnws/event/1/query.geojson?' +
    [
      'callback=eqfeed_callback',
      'endtime=' + endtime.toISOString(),
      'producttype=poster',
      'starttime=' + starttime.toISOString()
    ].join('&');

EqList({
  container: document.querySelector(options.el),
  feed: url
});
