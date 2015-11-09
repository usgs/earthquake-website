'use strict';

var BASE_PORT = 8080;

var config = {
  build: '.build',
  dist: 'dist',
  distPort: BASE_PORT + 2,
  example: 'example',
  liveReloadPort: BASE_PORT + 9,
  src: 'src',
  srcPort: BASE_PORT,
  templatePort: BASE_PORT + 8,
  test: 'test'
};

module.exports = config;
