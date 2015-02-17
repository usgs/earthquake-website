'use strict';

var config = require('./config');

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    src: [
      '**/*',
      '!**/*.scss'
    ],
    dest: config.build + '/' + config.src,
    options: {
      mode: true
    }
  },
  dist: {
    expand: true,
    cwd: config.build + '/' + config.src,
    src: [
      '**/*',
      '!**/*.css'
    ],
    dest: config.dist,
    options: {
      mode: true
    }
  }
};

module.exports = copy;