module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
		clean: {
			build: {
				src: ['build/', 'tmp/']
			}
		},
		sprite: {
			build: {
				src: 'src/images/*.png',
				destImg: 'tmp/images/sprite.png',
				destCSS: 'src/css/sprite.css',
				imgPath: '../images/sprite.png',
				engine: 'phantomjs'
			}
		},
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
				sourceMap: 'build/source.map.js',
				report: 'min'
      },
      build: {
        src: 'src/js/*.js',
        dest: 'build/js/script.min.js'
      }
    },
		cssmin: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
				report: 'min'
			},
			build: {
				src: 'src/css/*.css',
				dest: 'build/css/style.min.css'
			}
		},
		copy: {
			php: {
				expand: true,
				cwd: 'src',
				src: '*.php',
				dest: 'build/',
				filter: 'isFile'
			}
		},
		imagemin: {
			build: {
				files: {
					'build/images/sprite.png': 'tmp/images/sprite.png'
				}
			}
		}
  });

	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-spritesmith');
  grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Default task(s).
  grunt.registerTask('default', ['clean', 'sprite', 'uglify', 'cssmin', 'copy', 'imagemin']);

};
