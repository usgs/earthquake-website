'use strict';

var config = require('./config');

var clean = {
  build: {
    src: [config.build, config.dist, '.sass-cache']
  }
};

module.exports = clean;