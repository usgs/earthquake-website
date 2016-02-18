'use strict';

var DYFIList = require('listwidget/DYFIList'),
    EqList = require('listwidget/EqList');

DYFIList({
  container: document.querySelector('.recent-products'),
  feed: EqList.ALL_URL_DAY
});
