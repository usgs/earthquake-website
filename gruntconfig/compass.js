'use strict';

var config = require('./config');

var compass = {
  src: {
    options: {
      sassDir: config.src,
      specify: config.src + '/**/*.scss',
      cssDir: config.build + '/' + config.src,
      environment: 'development',
      importPath: [
        'node_modules/hazdev-template/src/htdocs/'
      ]
    }
  }
};

module.exports = compass;
