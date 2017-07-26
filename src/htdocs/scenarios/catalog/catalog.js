/* global CATALOG_URL */
'use strict';


var EqList = require('listwidget/EqList');


var catalog,
    el,
    feed,
    url;

el = document.querySelector('.catalog-events');
if (el) {
  catalog = el.getAttribute('data-catalog');
  if (catalog) {

    if (CATALOG_URL) {
      url = CATALOG_URL;
    } else {
      url = '/scenarios/map/#' + encodeURIComponent(JSON.stringify({'feed': catalog}));
    }


    el.innerHTML =
        '<h2>Scenarios</h2>' +
        '<div class="scenario-map">' +
          '<img src="/scenarios/images/' + catalog + '.gif" ' +
              'alt="map icon" />' +
          '<div class="description">' +
            '<a href="' + url + '">' + 'View the Catalog on a Map' + '</a>' +
          '</div>' +
        '</div>' +
        '<div class="scenarios">' +
          '<p class="alert info">Loading scenarios&hellip;</p>' +
        '</div>';

    feed = '/fdsnws/scenario/1/query.geojson?' +
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
      feed: feed
    });
  }
}
