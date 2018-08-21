/*Cssmin Task*/

module.exports = function(grunt, data){

  return {
    dist: {
      files: [{
        expand: true,
        cwd: 'dist/html/assets/css',
        src: ['**/*.css', '!**/*.min.css'],
        dest: 'dist/html/assets/css',
        ext: '.min.css'
      }]
    }
  };
};