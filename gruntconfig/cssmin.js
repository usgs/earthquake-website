'use strict';

var config = require('./config');

var cssmin = {
  dist: {
    files: [{
      expand: true,
      cwd: config.build + '/' + config.src,
      src: ['**/*.css'],
      dest: config.dist
    }]
  }
};

module.exports = cssmin;