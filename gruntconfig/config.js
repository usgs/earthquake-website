'use strict';

var fs = require('fs'),
    ini = require('ini');


var iniConfig = ini.parse(fs.readFileSync('./src/conf/config.ini', 'utf-8'));

var BASE_PORT = 8080;

var config = {
  example: 'example',
  examplePort: BASE_PORT + 4,
  ini: iniConfig,
  liveReloadPort: BASE_PORT + 9,
  offsitePaths: [
    // apps that should proxy to config.ini's OFFSITE_HOST
    '/earthquakes/eventpage/',
    '/earthquakes/feed/v1.0/',
    '/earthquakes/map/',
    '/fdsnws/',
    '/ws/network-operations',
    '/scenarios/eventpage/',
    '/scenarios/feed/',
    '/scenarios/map/'
  ],
  src: 'src',
  srcPort: BASE_PORT,
  templatePort: BASE_PORT + 8
};

module.exports = config;
