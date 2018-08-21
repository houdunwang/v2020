/*Dist copy files*/

module.exports = function(grunt, data){

  return {
    dist:{
      files:[
        { expand: true, src: ['*','!starter'], cwd: 'src/html', dest: 'dist/html' },
        { expand: true, src: ['**'], cwd: 'src/html/starter', dest: 'dist/starter' },
        { expand: true, src: ['**','!css/*'], cwd: 'src/assets', dest: 'dist/html/assets' },
        { expand: true, src: ['**','!main.js'], cwd: 'src/js', dest: 'dist/html/assets/js' },
        { expand: true, src: ['app.js'], cwd: 'src/js', dest: 'dist/starter/assets/js' }
      ]
    },
    starter:{
      files:[
        {expand: true, src: [
          "css/**",
          "img/**",
          "lib/jquery/**",
          "lib/tether/**",
          "lib/bootstrap/**",
          "lib/perfect-scrollbar/**",
          "lib/material-design-icons/**",
          "lib/roboto/**",
          "lib/jquery.niftymodals/**"
          ], cwd: 'dist/html/assets', dest: 'dist/starter/assets' 
        }
      ]
    }
  };
};