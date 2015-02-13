'use strict';

var concurrent = {
  build: [
    'compass',
    'copy:build',
    'jshint'
  ],
  dist: [
    //'cssmin',
    'copy:dist'
  ]
};

module.exports = concurrent;