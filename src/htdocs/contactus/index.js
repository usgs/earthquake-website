'use strict';

var SvgImageMap = require('svgimagemap/SvgImageMap');

SvgImageMap({
  el: document.querySelector('.EQoffices'),
  imageAlt: 'Office map',
  imageUrl: 'images/EQoffices.png',
  mapUrl: 'images/EQoffices.html'
});
