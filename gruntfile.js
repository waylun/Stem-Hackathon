module.exports = function(grunt) {
	grunt.initConfig ({
		watch: {
			source: {
				files: ['sass/**/*.scss'],
				tasks: ['sass'],
				options: {
					liverload: true,
				}
			}
		},
		sass: {
			dist: {
				files: {
					'public/stylesheets/style.css': 'sass/style.scss'
					}
				}
			}
	
	grunt.loadNpmTasks('grunt-sass');
	grunt.registerTask('default', ['sass']);
};
