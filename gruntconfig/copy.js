'use strict';

var config = require('./config');

// var copy = {
//   app: {
//     expand: true,
//       cwd: [config.src + '/htdocs'],
//       dest: [config.dist + '/htdocs'],
//       src: [
//         '**/*',
//         '!**/*.scss'
//       ]
//     },
//   conf: {
//     expand: true,
//     cwd: [config.src + '/conf'],
//     dest: [config.dist + '/conf'],
//     src: [
//       '**/*',
//       '!**/*.orig'
//     ]
//   },
//   lib: {
//     expand: true,
//     cwd: [config.src + '/lib'],
//     dest: [config.dist + '/lib'],
//     src: ['**/*']
//   },
//   templateConfig: {
//     expand: true,
//     cwd: [config.src + '/htdocs'],
//     dest: config.test,
//     src: ['_config.inc.php']
//   }
// };

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    src: [
      '**/*',
      '!conf',
      '!**/*.scss'
    ],
    dest: config.build + '/' + config.src,
    options: {
      mode: true
    }
  },
  dist: {
    expand: true,
    cwd: config.build + '/' + config.src,
    src: [
      '**/*',
      '!conf',
      '!**/*.js',
      '!**/*.css'
    ],
    dest: config.dist,
    options: {
      mode: true
    }
  }
};

module.exports = copy;