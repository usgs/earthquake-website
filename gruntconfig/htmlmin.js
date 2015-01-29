'use strict';

var config = require('./config');

var htmlmin = {
  build: {
    options: {
      removeComments: true,
      collapseWhitespace: true
    },
    files: [
      {
        expand: true,
        cwd: config.build + '/example',
        src: '**/*.html',
        dest: config.dist
      }
    ]
  }
};

module.exports = htmlmin;