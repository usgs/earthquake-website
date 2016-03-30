'use strict';

var config = require('./config');

var OFFSITE_HOST = config.ini.OFFSITE_HOST;


var addMiddleware = function (connect, options, middlewares) {
  middlewares.unshift(
    function (req, res, next) {
      res.setHeader('Access-Control-Allow-Origin', '*');
      res.setHeader('Access-Control-Allow-Methods', '*');
      return next();
    },
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
      middleware: addMiddleware,
      port: config.templatePort
    }
  }
};


config.offsitePaths.forEach(function (path) {
  connect.dev.proxies.push({
    context: path,
    headers: {
      host: OFFSITE_HOST,
      'accept-encoding': 'identity'
    },
    host: OFFSITE_HOST,
    port: 80
  });
});


module.exports = connect;
