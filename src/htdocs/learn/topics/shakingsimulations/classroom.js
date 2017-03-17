function preloadImages() {
  if (document.images) {
    image17a = new Image
    image17a.src = '1906/images/sf1906t0017a.jpg'
    image26a = new Image
    image26a.src = '1906/images/sf1906t0026a.jpg'
    image34a = new Image
    image34a.src = '1906/images/sf1906t0034a.jpg'
    image62a = new Image
    image62a.src = '1906/images/sf1906t0062a.jpg'
    image160a = new Image
    image160a.src = '1906/images/sf1906t0160a.jpg'
    image300a = new Image
    image300a.src = '1906/images/sf1906t0300a.jpg'
  }
}

function setupImgTags() {
 var img_tags = document.getElementsByTagName('img');
 for (var i = 0; i < img_tags.length; i ++) {
   if (hasClass(img_tags[i], "rollover")) {
  (function (el) {
    var src = el.src;
    var rollover = src.substr(0, src.length - 4) + 'a.jpg';
    el.onmouseover = function() { el.src = rollover; };
    el.onmouseout = function() { el.src = src; };
  }) (img_tags[i]);
   }
 }
}
