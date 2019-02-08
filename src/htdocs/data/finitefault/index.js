'use strict';

var ShakeMapList = require('listwidget/Finite-FaultList'),
    EqList = require('listwidget/EqList');

ShakeMapList({
  container: document.querySelector('.recent-products'),
  feed: EqList.ALL_URL_MONTH
});
