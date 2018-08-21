/*Uglify*/

module.exports = function(grunt, data){
	
	return {
		install:{
			"options":{
				"mangle": true,
				"preserveComments": false,
				"banner":'//FastClick\n'
			},
			"files": {
	      "<%= path.source %>/assets/lib/fastclick/fastclick.min.js": ["<%= path.source %>/assets/lib/fastclick/fastclick.js"]
	    }		
		},
		dist: {
			"options":{
				"mangle": true,
				"preserveComments": false,
				"banner": "<%= banner %>"
			},
			"files": {
	      "<%= path.dist %>/html/assets/js/main.min.js": ["<%= path.dist %>/html/assets/js/main.js"]
	    }
	  }
  };
};