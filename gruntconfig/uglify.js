'use strict';

var config = require('./config');

var uglify = {
  options: {
  },
  dist: {
    src: config.build + '/' + config.src + '**/*.js',
    dest: config.dist + '**/*.js'
  }
};

module.exports = uglify;