'use strict';

var EqList = require('listwidget/EqList');
var url;

url = '/earthquakes/feed/v1.0/shakealert.geojson';


EqList({
	container: document.querySelector('.recent-products'),
	feed: url
});
