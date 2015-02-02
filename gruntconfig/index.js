'use strict';

var config = {
  browserify: require('./browserify'),
  clean: require('./clean'),
  compass: require('./compass'),
  connect: require('./connect'),
  copy: require('./copy'),
  cssmin: require('./cssmin'),
  htmlmin: require('./htmlmin'),
  imagemin: require('./imagemin'),
  jshint: require('./jshint'),
  mocha_phantomjs: require('./mocha_phantomjs'),
  replace: require('./replace'),
  uglify: require('./uglify'),
  watch: require('./watch'),

  tasks: [
    'grunt-browserify',
    'grunt-contrib-clean',
    'grunt-contrib-compass',
    'grunt-contrib-connect',
    'grunt-contrib-copy',
    'grunt-contrib-cssmin',
    'grunt-contrib-htmlmin',
    'grunt-contib-imagemin',
    'grunt-contrib-jshint',
    'grunt-mocha-phantomjs',
    'grunt-replace',
    'grunt-contrib-uglify',
    'grunt-contrib-watch'
  ]
};

module.exports = config;