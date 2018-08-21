// SASS task

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
      files: { "<%= path.source %>/assets/css/app.css": "<%= path.source %>/sass/app.scss"}
    },
    dist: {
      files: [
        {"<%= path.dist %>/html/assets/css/app.css": "<%= path.source %>/sass/app.scss"}
      ]
    }
  };
};