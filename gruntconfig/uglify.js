'use strict';

// var config = require('./config');

// var uglify = {
//   build: {
//     files: {
//     }
//   }
// };

// module.exports = uglify;

var config = require('./config');

var uglify = {
  options: {
    mangle: {
      except: ['require']
    },
    compress: true,
    report: 'gzip'
  },
  dist: {
    files: {}
  }
};

// uglify from build into dist
[
  'htdocs/eqlist/EqList.js',

].forEach(function (file) {
  uglify.dist.files[config.dist + '/' + file] =
      config.build + '/' + config.src + '/' + file;
});

module.exports = uglify;