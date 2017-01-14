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
        'http-server': {
            'dev': {
                // the server root directory
                root: './',
                // the server port
                // can also be written as a function, e.g.
                // port: function() { return 8888; }
                port: 8888,
                // the host ip address
                // If specified to, for example, "127.0.0.1" the server will
                // only be available on that ip.
                // Specify "0.0.0.0" to be available everywhere
                host: "0.0.0.0",
                cache: 0,
                showDir: true,
                autoIndex: true,
                // server default file extension
                ext: "html",
                // run in parallel with other tasks
                runInBackground: true,
                // specify a logger function. By default the requests are
                // sent to stdout.
                logFn: function (req, res, error) {

                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-http-server');
    grunt.registerTask('default',['http-server', 'sass', 'watch']);
};