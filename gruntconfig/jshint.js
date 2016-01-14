'use strict';

var config = require('./config');

var jshint = {
  options: {
    jshintrc: '.jshintrc'
  },
  gruntfile: [
    'Gruntfile.js',
    'gruntconfig/**/*.js'
  ],
  scripts: [
    config.src + '/**/*.js',
    '!' + config.src + '/htdocs/lib/**/*.js'
  ]
};

module.exports = jshint;
