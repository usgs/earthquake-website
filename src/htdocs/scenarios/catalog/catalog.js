'use strict';


var EqList = require('listwidget/EqList');


var catalog,
    el,
    url;

el = document.querySelector('.catalog-events');
if (el) {
  catalog = el.getAttribute('data-catalog');
  if (catalog) {

    el.innerHTML = '<h2>Scenarios</h2>' +
        '<div class="scenario-map">' +
          '<img src="http://placehold.it/100x100" ' +
              'alt="map icon" />' +
          '<div class="description">' +
            '<a href="/scenarios/map/#' +
                encodeURIComponent(JSON.stringify({'feed': catalog})) + '">' +
              'View the Catalog on a Map' +
            '</a>' +
          '</div>' +
        '</div>' +
        '<div class="scenarios">' +
          '<p class="alert info">Loading scenarios&hellip;</p>' +
        '</div>';

    url = '/fdsnws/scenario/1/query.geojson?' +
        [
          'callback=eqfeed_callback',
          'starttime=1900-01-01',
          'catalog=' + catalog
        ].join('&');

    EqList({
      compareEvents: function (a, b) {
        var aValue,
            bValue;

        aValue = a.properties.place;
        bValue = b.properties.place;
        if (aValue < bValue) {
          return -1;
        } else if (aValue > bValue) {
          return 1;
        } else {
          return 0;
        }
      },
      container: el.querySelector('.scenarios'),
      feed: url
    });
  }
}
