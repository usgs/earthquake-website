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

module.exports = uglify;
