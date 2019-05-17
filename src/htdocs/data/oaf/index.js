'use strict';

var AftershockForecastList = require('listwidget/AftershockForecastList'),
    EqList = require('listwidget/EqList');

AftershockForecastList({
  container: document.querySelector('.recent-products'),
  feed: EqList.ALL_URL_YEAR
});
