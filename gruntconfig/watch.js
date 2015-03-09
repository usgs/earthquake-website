'use strict';

var config = require('./config');

var watch = {
  scripts: {
    files: [
      config.src + '/**/*.js'
    ],
    tasks: [
      'jshint:scripts',
      'copy:build'
    ]
  },
  php: {
    files: [
      config.src + '/**/*.php'
    ],
    tasks: [
      'copy:build'
    ]
  },
  scss: {
    files: [
      config.src + '/**/*.scss',
      config.test + '/**/*.scss'
    ],
    tasks: [
      'compass'
    ]
  },
  reload: {
    files: [
      config.build + '/**/*',
      config.example + '/**/*'
    ],
    options: {
      livereload: true
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
