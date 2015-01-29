'use strict';

var confg = require('./config');

var clean = {
  build: {
    src: [config.build, config.dist, '.sass-cache']
  }
};

module.export = clean;