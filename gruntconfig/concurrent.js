'use strict';

var concurrent = {
  build: [
    'compass',
    'copy:build',
    'jshint'
  ],
  dist: [
    'cssmin',
    'uglify',
    'copy:dist'
  ]
};

module.exports = concurrent;