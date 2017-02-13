module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'styles/css/styles.css' : 'styles/scss/styles.scss'
                }
            }
        },
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['sass']
            }
        },
        php: {
            dist: {
                options: {
                    hostname: '0.0.0.0',
                    port: 8000,
                    open: true
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['php', 'sass', 'watch']);
};