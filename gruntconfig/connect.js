'use strict';

var config = require('./config');


var addMiddleware = function (connect, options, middlewares) {
  middlewares.unshift(
    require('grunt-connect-proxy/lib/utils').proxyRequest,
    require('gateway')(options.base[0], {
      '.php': 'php-cgi',
      'env': {
        'PHPRC': 'node_modules/hazdev-template/dist/conf/php.ini'
      }
    })
  );
  return middlewares;
};


var connect = {
  options: {
    hostname: '*'
  },

  dev: {
    proxies: [
      {
        context: '/theme',
        host: 'localhost',
        port: config.templatePort,
        rewrite: {
          '/theme': ''
        }
      }
    ],
    options: {
      base: [
        config.src + '/htdocs'
      ],
      livereload: config.liveReloadPort,
      middleware: addMiddleware,
      open: true,
      port: config.srcPort
    }
  },

  template: {
    options: {
      base: [
        'node_modules/hazdev-template/dist/htdocs'
      ],
      port: config.templatePort
    }
  }
};


module.exports = connect;
