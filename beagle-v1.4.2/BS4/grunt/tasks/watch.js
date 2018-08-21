/*Watch task*/

module.exports = {
  options: {
    livereload: true,
  },
  less: {
    files: [ 'src/sass/**/*.scss'],
    tasks: ['sass:development','notify:sass']
  },
  js: {
    files: [ 'src/js/app.js'],
    tasks: [ 'notify:js']
  }
};