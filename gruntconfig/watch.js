'use strict';

var config = require('./config');

var watch = {
  scripts: {
    files: [
      config.src + '/**/*.js'
    ],
    options: {
      livereload: config.liveReloadPort
    },
    tasks: [
      'jshint:scripts'
    ]
  },
  reload: {
    files: [
      config.src + '/**/*',
      // scripts
      '!' + config.src + '/**/*.js'
    ],
    options: {
      livereload: config.liveReloadPort
    }
  },
  gruntfile: {
    files: [
      'Gruntfile.js',
      'gruntconfig/**/*.js'
    ],
    tasks: [
      'jshint:gruntfile'
    ]
  }
};

module.exports = watch;
