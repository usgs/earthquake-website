'use strict';

var config = require('./config');

var copy = {
  app: {
    expand: true,
      cwd: [config.src + '/htdocs'],
      dest: [config.dist + '/htdocs'],
      src: [
        '**/*',
        '!**/*.scss'
      ]
    },
    conf: {
      expand: true,
      cwd: [config.src + '/conf'],
      dest: [config.dist + '/conf'],
      src: [
        '**/*',
        '!**/*.orig'
      ]
    },
    lib: {
      expand: true,
      cwd: [config.src + '/lib'],
      dest: ['<%= app.dist %>/lib'],
      src: [
        '**/*'
      ]
    },
    templateConfig: {
      expand: true,
      cwd: [config.src + '/htdocs'],
      dest: config.test,
      src: [
        '_config.inc.php'
      ]
    }
};

module.exports = copy;