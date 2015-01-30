'use strict';

var config = require('./config');

var compass = {
  dev: {
    options: {
      sassDir: [config.src + '/htdocs'],
      cssDir: config.build + '/src',
      enviroment: 'development'
    }
  },
  test: {
    options: {
      sassDir: config.test,
      cssDir: config.build + '/test',
      enviroment: 'development'
    }
  }
};

module.exports = compass;