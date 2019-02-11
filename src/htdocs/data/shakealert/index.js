'use strict';

var EqList = require('listwidget/EqList');
var url;

url = '/earthquakes/feed/v1.0/shakealert.geojson';

var list = EqList({
  container: document.querySelector('.recent-products'),
  feed: url,
  load: false
});

list.getEventTitle = function (e) {
  var status = e.properties.status,
      title = e.properties.title;

  if (status === 'deleted') {
    title = '(Deleted) ' + title;
  }

  return title;
};

list.load();
