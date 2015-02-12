'use strict';

var config = require('./config');

var uglify = {
  options: {
  },
  dist: {
    src: config.build + '/' + config.src + '/earthquake-website.js',
    dest: config.dist + '/earthquake-website.js'
  }
};

// // uglify from build into dist
// [
//   'htdocs/eqlist/EqList.js',

// ].forEach(function (file) {
//   uglify.dist.files[config.dist + '/' + file] =
//       config.build + '/' + config.src + '/' + file;
// });

module.exports = uglify;
