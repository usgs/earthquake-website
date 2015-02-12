'use strict';

var config = require('./config');

var compass = {
  dev: {
    options: {
      sassDir: [config.src + '/htdocs'],
      specify: config.src + '/earthquake-website',
      cssDir: config.build + config.src,
      environment: 'development'
    }
  }
};

module.exports = compass;