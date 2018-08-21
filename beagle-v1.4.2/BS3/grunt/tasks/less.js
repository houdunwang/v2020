/*Compile LESS task*/

module.exports = function(grunt, data){

  return {
    development: {
      options: {
        sourceMap: true,
        sourceMapFilename: '<%= path.source %>/assets/css/style.css.map',
        sourceMapURL: '/css/style.css.map',
        paths: ["<%= path.source %>/less"],
        plugins : [ new (require('less-plugin-autoprefix'))({browsers : [
          "Android >= 4",
          "Chrome >= 20",
          "Firefox >= 24",
          "Explorer >= 8",
          "iOS >= 6",
          "Opera >= 12",
          "Safari >= 6"
        ]}) ]
      },
      files: { "<%= path.source %>/assets/css/style.css": "<%= path.source %>/less/style.less"}
    },  
    dist: {
       options: {
          paths: ["src/less"],
          plugins : [ new (require('less-plugin-autoprefix'))({browsers : [
            "Android >= 4",
            "Chrome >= 20",
            "Firefox >= 24",
            "Explorer >= 8",
            "iOS >= 6",
            "Opera >= 12",
            "Safari >= 6"
          ]}) ]
       },
       files: [
        {"dist/html/assets/css/style.css": "src/less/style.less"}
      ]
    }
  };
};