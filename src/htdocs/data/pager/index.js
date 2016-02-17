'use strict';

var ShakeMapList = require('listwidget/PAGERList'),
    EqList = require('listwidget/EqList');

ShakeMapList({
  container: document.querySelector('.recent-products'),
  feed: EqList.ALL_URL_WEEK
});
