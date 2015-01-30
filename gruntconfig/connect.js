'use strict';

var config = require('./config');

var connect = {
  options: {
    hostname: '*'
  },
  dev: {
    options: {
      base: [
        config.build + '/' + config.test,
        config.build + '/' + config.src
      ],
      port: 8000
    }
  },
  test: {
    options: {
      base: [
        config.build + '/' + config.test,
        config.build + '/' + config.src,
        'node_modules'
      ],
      port: 8001
    }
  },
  dist: {
    options: {
      keepalive: true,
      base: [
        config.dist
      ],
      port: 8002
    }
  },
};

module.exports = connect;