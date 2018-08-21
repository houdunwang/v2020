/*Concat*/

module.exports = {
  options:{
    banner: "<%= banner %>"
  },
  dev:{
    src:[
      '<%= path.source %>/js/app.js',
      '<%= path.source %>/assets/lib/fastclick/fastclick.min.js',
      '<%= path.source %>/assets/lib/tinycolor/tinycolor-min.js',
      '<%= path.source %>/assets/lib/jquery-touchswipe/jquery.touchSwipe.min.js',
      '<%= path.source %>/assets/lib/jquery-breakpoint-check/jquery-breakpoint-check.min.js'
    ],
    dest:'<%= path.source %>/js/main.js'
  }
};