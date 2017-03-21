'use strict';

function preloadImages() {
  if (document.images) {
    var image17a = new Image();
    image17a.src = '1906/images/sf1906t0017a.jpg';
    var image26a = new Image();
    image26a.src = '1906/images/sf1906t0026a.jpg';
    var image34a = new Image();
    image34a.src = '1906/images/sf1906t0034a.jpg';
    var image62a = new Image();
    image62a.src = '1906/images/sf1906t0062a.jpg';
    var image160a = new Image();
    image160a.src = '1906/images/sf1906t0160a.jpg';
    var image300a = new Image();
    image300a.src = '1906/images/sf1906t0300a.jpg';
  }
}

function addMouseOvers() {
  var i,
      imgs;

  imgs = document.querySelectorAll('img');
  for (i = 0; i < imgs.length; i ++) {
    if (imgs[i].classList.contains('rollover')) {
      (function (el) {
        var src = el.src;
        var rollover = src.substr(0, src.length - 4) + 'a.jpg';
        el.onmouseover = function() { el.src = rollover; };
        el.onmouseout = function() { el.src = src; };
    }) (imgs[i]);
  }
 }
}

preloadImages();
addMouseOvers();
