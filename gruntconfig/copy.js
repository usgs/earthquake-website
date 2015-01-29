'use strict';

var config = require('./config');

var copy = {
  test: {
    expand: true,
    cwd: config.test,
    src: '*.html',
    dest: config.build + '/test'
  }
};

module.exports = copy;