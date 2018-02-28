module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({


        uglify: {
            options: {
                mangle: false  // Use if you want the names of your functions and variables unchanged
            },
            frontend: {
                files: {
                    'js/front.min.js':
                        'js/front.js'
                    //'js/jquery.browser.min.js',
                    //'js/modernizer.custom.02939.js'
                }
            }
        },

        less: {
            development: {
                options: {
                    compress: true,  //minifying the result
                },
                files: {
                    //compiling frontend.less into frontend.css
                    'css/style.css': [
                        'less/style.less'
                    ]
                }
            }
        },

        watch: {
            less: {
                files: ['less/*.less'],  //watched files
                tasks: ['less'],                          //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');

    // Default task(s).
    grunt.registerTask('default', ['less', 'uglify']);

};