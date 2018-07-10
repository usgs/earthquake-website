'use strict';

var EqList = require('listwidget/EqList');

EqList({
  container: document.querySelector('.recent-products'),
  feed: EqList.M25_URL_WEEK,
  includeEvent: function (e) {
    return (e.properties.types.indexOf('ground-failure') !== -1);
  }
});
