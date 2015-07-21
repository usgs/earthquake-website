'use strict';

var DYFIList = require('listwidget/DYFIList'),
    EqList = require('listwidget/EqList');

DYFIList({
  container: document.querySelector('.recent-products'),
  feed: EqList.ALL_URL_WEEK,
  includeEvent: function (e) {
    var p = e.properties;
    return (
      p.types.indexOf('dyfi') !== -1 &&
      p.felt !== null &&
      p.felt > 5
    );
  }
});
