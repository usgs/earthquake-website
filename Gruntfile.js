'use strict';

module.exports = function (grunt) {

  var gruntConfig = require('./gruntconfig');

  gruntConfig.tasks.forEach(grunt.loadNpmTasks);
  grunt.initConfig(gruntConfig);

  grunt.registerTask('build', [
    'clean',
    'concurrent:build'
  ]);

  grunt.registerTask('default', [
    'build',
    'connect:template',
    'configureProxies:dev',
    'connect:dev',
    'watch'
  ]);

  grunt.registerTask('builddist', [
    'build',
    'concurrent:dist'
  ]);

  grunt.registerTask('dist', [
    'builddist',
    'connect:template',
    'configureProxies:dist',
    'connect:dist'
  ]);
};
