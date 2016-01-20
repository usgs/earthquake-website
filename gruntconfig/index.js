'use strict';

var config = {
  connect: require('./connect'),
  jshint: require('./jshint'),
  watch: require('./watch'),


  tasks: [
    'grunt-connect-proxy',
    'grunt-contrib-connect',
    'grunt-contrib-jshint',
    'grunt-contrib-watch'
  ]
};

module.exports = config;
