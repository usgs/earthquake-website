'use strict';

var config = require('./config');

var watch = {
  scripts: {
    files: [
      config.src + '/**/*.js'
    ],
    tasks: [
      'jshint:scripts',
      'browserify',
      'mocha_phantomjs'
    ]
  },
  tests: {
    files: [
      config.test + '/*.html',
      config.test + '/**/*.js'
    ],
    tasks: [
      'jshint:tests',
      'browserify',
      'mocha_phantomjs'
    ]
  },
  scss: {
    files: [
      config.src + '/**/*.scss',
      config.test + '/**/*.scss'
    ],
    tasks: [
      'compass:dev',
      'compass:test'
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