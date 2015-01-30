'use strict';

var config = require('./config');

var compass = {
  dev: {
    options: {
      sassDir: [config.src + '/htdocs'],
      cssDir: config.build + '/src',
      environment: 'development'
    }
  },
  test: {
    options: {
      sassDir: config.test,
      cssDir: config.build + '/test',
      environment: 'development'
    }
  }
};

module.exports = compass;