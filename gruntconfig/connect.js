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
        config.build + '/' + config.src + '/htdocs'
       ],
      livereload: config.liveReloadPort,
      middleware: addMiddleware,
      open: true,
      port: config.srcPort
    }
  },

  dist: {
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
      keepalive: true,
      base: [
        config.dist + '/' + 'htdocs'
      ],
      livereload: config.liveReloadPort,
      middleware: addMiddleware,
      open: true,
      port: config.distPort
    }
  },

  template: {
    options: {
      base: [
        'node_modules/hazdev-template/dist/htdocs'
      ],
      port: config.templatePort
    }
  },
};


module.exports = connect;
