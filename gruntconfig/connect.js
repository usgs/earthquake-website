'use strict';

var config = require('./config');

var connect = {
  options: {
    hostname: '*'
  },
  dev: {
     proxies: [{
      context: '/theme',
      host: 'localhost',
      port: '<%= connect.template.options.port %>',
      rewrite: {'/theme': ''}
    }],
    options: {
      base: [
        config.build + '/' + config.src + '/htdocs'
       ],
      livereload: true,
      open: 'http://localhost:8000/',
      port: 8000,
      middleware: function (connect, options, middlewares) {
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
      }
    }
  },
  dist: {
    proxies: [{
      context: '/theme',
      host: 'localhost',
      port: '<%= connect.template.options.port %>',
      rewrite: {'/theme': ''}
    }],
    options: {
      keepalive: true,
      base: [
        config.dist + '/' + 'htdocs'
      ],
      livereload: true,
      open: 'http://localhost:8002/',
      port: 8002,
      middleware: function (connect, options, middlewares) {
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
      }
    }
  },
  template: {
    options: {
      base: ['node_modules/hazdev-template/dist/htdocs'],
      port: 8003
    }
  },
};

module.exports = connect;