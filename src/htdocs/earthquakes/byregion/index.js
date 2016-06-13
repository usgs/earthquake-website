'use strict';

var SvgImageMap = require('svgimagemap/SvgImageMap');

SvgImageMap({
  el: document.querySelector('.usmap'),
  imageAlt: 'U.S. map',
  imageUrl: 'images/usmap-states.png',
  mapUrl: 'images/usmap-states_imagemap.html'
});
