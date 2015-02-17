'use strict';

var config = {
  clean: require('./clean'),
  compass: require('./compass'),
  concurrent: require('./concurrent'),
  connect: require('./connect'),
  copy: require('./copy'),
  jshint: require('./jshint'),
  watch: require('./watch'),
  uglify: require('./uglify'),
  cssmin: require('./cssmin'),

  tasks: [
    'grunt-concurrent',
    'grunt-connect-proxy',
    'grunt-contrib-clean',
    'grunt-contrib-compass',
    'grunt-contrib-connect',
    'grunt-contrib-copy',
    'grunt-contrib-jshint',
    'grunt-contrib-watch',
    'grunt-contrib-uglify',
    'grunt-contrib-cssmin'
  ]
};

module.exports = config;