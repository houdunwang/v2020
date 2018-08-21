/*Watch task*/

module.exports = {
  options: {
    livereload: true,
  },
  less: {
    files: [ 'src/less/**/*.less'],
    tasks: ['less:development','notify:less']
  },
  sass: {
    files: [ '<%= path.source %>/sass/**/*.scss'],
    tasks: ['sass:development','notify:sass']
  },
  js: {
    files: [ 'src/js/app.js'],
    tasks: ['concat:dev','notify:js']
  }
};