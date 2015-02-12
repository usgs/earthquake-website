'use strict';

var config = require('./config');

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    src: [
      '**/*',
      '!conf',
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
      '!conf',
      '!**/*.js',
      '!**/*.css'
    ],
    dest: config.dist,
    options: {
      mode: true
    }
  }
};

module.exports = copy;