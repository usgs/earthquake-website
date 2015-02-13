'use strict';

var config = require('./config');

var EXPORTS = [
  'htdocs/eqlist'
];

var browserify = {
  options: {
    browserifyOptions: {
      debug: true,
      paths: [
        process.cwd() + '/' + config.src
      ]
    }
  },
  source: {
    src: [],
    dest: config.build + '/' + config.src + '/earthquake-website.js',
    options: {
      alias: EXPORTS.map(function (path) {
        return './' + config.src + '/' + path + '.js:' + path;
      })
    }
  },
  test: {
    src: config.test + '/test.js',
    dest: config.build + '/' + config.test + '/test.js',
    options: {
      external: EXPORTS
    }
  }
};

//bundles

[
  'test/index',
  'src/htdocs/EqList'
].forEach(function (bundle) {
  var targetFile = config.build + '/' + bundle + '.js';
  var sourceFile = bundle + '.js';

  browserify[bundle] = {files: {}};
  browserify[bundle].files[targetFile] = [sourceFile];
});

module.exports = browserify;