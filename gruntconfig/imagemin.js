'use strict';

var config = require('./config');

var imagemin = {
  dist: {
    options: {
      optimizationlevel: 3,
      svgoPlugins: [
        {removeViewBox: false},
        {removeUselessStrokeAndFill: false}
      ]
    },
    files: [{
      expand: true,
      cwd: config.build + '/' + config.src,
      src: ['**/*.{gif,jpg,png,svg}'],
      dest: config.dist
    }]
  }
};

module.exports = imagemin;