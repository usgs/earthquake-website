'use strict';

var config = require('./config');

var cssmin = {
  dist: {
    src: config.build + '/' + config.src + '/earthquake-website.css',
    dest: config.dist + '/earthquake-website.css'
  }
};

module.exports = cssmin;