'use strict';

var fs = require('fs'),
    ini = require('ini');


var iniConfig = ini.parse(fs.readFileSync('./src/conf/config.ini', 'utf-8'));

var BASE_PORT = 8080;

var config = {
  ini: iniConfig,
  liveReloadPort: BASE_PORT + 9,
  offsitePaths: [
    // apps that should proxy to config.ini's OFFSITE_HOST
    '/fdsnws/',
    '/earthquakes/eventpage/',
    '/earthquakes/feed/',
    '/earthquakes/map/',
    '/scenarios/eventpage/',
    '/scenarios/feed/',
    '/scenarios/map/'
  ],
  src: 'src',
  srcPort: BASE_PORT,
  templatePort: BASE_PORT + 8
};

module.exports = config;
