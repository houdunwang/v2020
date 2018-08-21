module.exports = function(grunt) {
  
  require('load-grunt-tasks')(grunt);
  
  var path = require('path');

  var pkg = grunt.file.readJSON('package.json');

  var paths = {
    source: 'src',
    dist: 'dist',
    starter: 'starter'
  };

  require('load-grunt-config')(grunt, {
    // path to task.js files, defaults to grunt dir
    configPath: path.join(process.cwd(), 'grunt/tasks'),

    // auto grunt.initConfig
    init: true,

    // data passed into config.  Can use with <%= test %>
    data: {
      path: paths,
      pkg: pkg,
      banner: '/*!\n' +
      ' * Maisonnette - Admin Template v<%= pkg.version %> (<%= pkg.homepage %>)\n' +
      ' * Copyright 2017-<%= grunt.template.today("yyyy") %> Foxy Themes all rights reserved \n' +
      ' */\n',
    }
  });

  // Register tasks
  grunt.registerTask('default', [
    'concurrent:dev'
  ]);

  // Install Dependencies
  grunt.registerTask('install', [
    'clean:install','npmcopy','uglify:install','notify:install'
  ]);

  // Create express server to local development
  grunt.registerTask('server', function(){
    var done = this.async();
    grunt.log.writeln('Starting web server on: http://localhost:8080/index.html');
    require('./grunt/express-server.js').listen(8080).on('close', done);
  });

  // Compile dist files
  grunt.registerTask('dist', function( ){
    grunt.task.run([ 
      'clean:dist',
      'sass:dist',
      'postcss:dist',
      'cssmin:dist',
      'copy:dist',
      'uglify:dist',
      'copy:starter'
    ]);
  });

};