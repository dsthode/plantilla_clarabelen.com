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
				src: ['src/images/*.png', '!src/images/logo-pattern.png'],
				destImg: 'tmp/images/sprite.png',
				destCSS: 'src/css/sprite.css',
				imgPath: 'images/sprite.png',
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
        src: ['src/js/jquery-1.10.2.js', 'src/js/bootstrap.js', 'src/js/holder.js'],
        dest: 'build/script.js'
      }
    },
		cssmin: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
				report: 'min'
			},
			build: {
				src: ['src/css/bootstrap.css', 'src/css/bootstrap-theme.css', 'src/css/carousel.css', 'src/css/sprite.css', 'src/css/style.css'],
				dest: 'build/style.css'
			}
		},
		imagemin: {
			build: {
				files: {
					'build/images/sprite.png': 'tmp/images/sprite.png',
					'build/images/logo-pattern.png': 'src/images/logo-pattern.png'
				}
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
			fonts: {
				expand: true,
				cwd: 'src',
				src: 'fonts/*',
				dest: 'build/'
			},
			deploy: {
				expand: true,
				cwd: 'build',
				src: '**',
				dest: '/Users/dsthode/Sites/wordpress/wp-content/themes/plantilla_clarabelen.com/'
			}
		},
  });

	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-spritesmith');
  grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Default task(s).
  grunt.registerTask('default', ['clean', 'sprite', 'uglify', 'cssmin', 'imagemin', 'copy']);

};
