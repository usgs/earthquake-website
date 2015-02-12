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
      livereload: true,
      open: 'http://localhost:8000/example.html',
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
      livereload: true,
      open: 'http://localhost:8001/example.html',
      port: 8001
    }
  },
  dist: {
    options: {
      keepalive: true,
      base: [
        config.dist
      ],
      livereload: true,
      open: 'http://localhost:8002/example.html',
      port: 8002
    }
  },
};

module.exports = connect;