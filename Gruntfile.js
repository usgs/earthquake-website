'use strict';

module.exports = function (grunt) {

  var gruntConfig = require('./gruntconfig');

  gruntConfig.tasks.forEach(grunt.loadNpmTasks);
  grunt.initConfig(gruntConfig);

  grunt.registerTask('nowatch', [
    'connect:template',
    'configureProxies:dev',
    'connect:dev:keepalive'
  ]);

  grunt.registerTask('default', [
    'connect:template',
    'configureProxies:dev',
    'connect:dev',
    'watch'
  ]);

};
