module.exports = function(grunt) {

	//Loads all grunt tasks matching the ['grunt-*', '@*/grunt-*'] patterns.
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		watch: {
			options: {
				livereload: true,
			},
			config: {
				files: ['package.json', 'Gruntfile.js'],
				tasks: ['gitadd']
			},
			scss: {
				files: ['css/sass/*.scss', 'css/sass/**/*.scss'],
				tasks: ['compass', 'gitadd'],
				options: {
					spawn: false
				}
			},
			src: {
				files: ['**/*.php'],
				tasks: ['gitadd']
			}
		},

		gitadd: {
			task: {
				options: {
					all: true,
					force: true
				},
				files: {
					src: [
					'*.{php,css,json,js}',
					'css/*.css',
					'css/sass/**/*.{scss,sass}',
					'templates/*.html'
					]
				}
			}
		},

		compass: {
			dist: {
				options: {
					config: 'config.rb',
					sassDir: 'css/sass',
					cssDir: 'css',
					environment: 'development'
				}
			}
		},

		combine_mq: {
			options: {
				beautify: true
			},
			main: {
				src: 'style.css',
				dest: 'style.css'
			}
		}
	});
	grunt.registerTask('default', [
		'grunt-contrib-grunt-git',
		'grunt-contrib-combine-mq',
		'grunt-contrib-compass'
	]);
};

