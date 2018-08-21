/*Compile SASS task*/

module.exports = function(grunt, data){

  return {  
    development: {
      options: {
        includePaths: ['<%= path.source %>/sass'],
        precision: 6,
        sourceComments: false,
        sourceMap: true,
        outputStyle: 'expanded'
      },
      files: { "<%= path.source %>/assets/css/style.css": "<%= path.source %>/sass/style.scss"}
    },
    dist: {
      files: [
        {"<%= path.dist %>/html/assets/css/style.css": "<%= path.source %>/sass/style.scss"}
      ]
    }
  };
};