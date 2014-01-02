module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
				sourceMap: 'build/source.map.js',
				report: 'min'
      },
      build: {
        src: 'src/js/*.js',
        dest: 'build/script.min.js'
      }
    },
		cssmin: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
				report: 'min'
			},
			build: {
				src: 'src/css/*.css',
				dest: 'build/style.min.css'
			}
		},
		copy: {
			php: {
				expand: true,
				cwd: 'src',
				src: '*.php',
				dest: 'build/',
				filter: 'isFile'
			},
			images: {
				expand: true,
				cwd: 'src',
				src: 'images/*',
				dest: 'build/',
				filter: 'isFile'
			}
		}
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'cssmin', 'copy']);

};
