'use strict';

var ShakeMapList = require('listwidget/ShakeMapList'),
    EqList = require('listwidget/EqList');

ShakeMapList({
  container: document.querySelector('.recent-products'),
  feed: EqList.ALL_URL_WEEK
});
