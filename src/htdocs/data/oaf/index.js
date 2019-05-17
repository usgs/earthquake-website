"use strict";

var EqList = require("listwidget/EqList");

var url = "/fdsnws/event/1/query.geojson?producttype=oaf&starttime=-1+year";

EqList({
	container: document.querySelector(".recent-products"),
	feed: url
});
