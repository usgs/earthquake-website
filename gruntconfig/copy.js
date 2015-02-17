'use strict';

var config = require('./config');

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    src: [
      'htdocs/**/*',
      'lib/**/*'
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
    'htdocs/**/*',
      'lib/**/*'
    ],
    dest: config.dist,
    options: {
      mode: true
    }
  }
};

module.exports = copy;