/**
 * Created by ryanrobinson on 2/6/16.
 */
module.exports = function(grunt) {

    // Project configuration
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Use Compass for SASS
        compass: { // Task for compass plugin
            dist: { // Target
                options: { // Target options
                    sassDir: 'sass',
                    cssDir: 'css',
                    environment: 'production',
                    outputStyle: 'compressed'
                }
            },
            dev: {
                options: {
                    sassDir: 'sass',
                    cssDir: 'css',
                    environment: 'development',
                    outputStyle: 'compressed',
                    trace: true,
                    watch: true
                }
            }
        },

        // Lint JS
        jshint: {
            files: ['Gruntfile.js', 'js/*.js', '!js/*.min.js'],
            options: {
                curly: true,
                eqeqeq: true,
                immed: true,
                latedef: true,
                newcap: true,
                noarg: true,
                sub: true,
                undef: true,
                boss: true,
                eqnull: true,
                browser: true,
                asi: false,
                devel: true,

                globals: {
                    module: true,
                    require: true,
                    requirejs: true,
                    jQuery: true,
                    "$": true,
                    console: true,
                    define: true
                }
            }
        },

        watch: {
            files: ['sass/*.scss'],
            tasks: 'default'
        },

        // Media Queries
        cmq: {
            options: {
                log: false
            },
            your_target: {
                files: {
                    'css': ['css/layout.css']
                }
            }
        },

        // JS concatenation and minifying
        concat: {
            dist: {
                src: ['js/*.js', '!js/**/*.min.js'],
                dest: 'js/build.min.js',
            }
        },
        uglify: {
            dist: {
                files: {
                    'js/build.min.js': ['js/*.*.js', 'js/!**/*.min.js']
                }
            },
        }
    });

    // Load compass plugin
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-combine-media-queries');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-nodeunit');

    // Default task(s).
    grunt.registerTask('default',
        ['jshint', 'concat', 'uglify', 'compass:dist', 'cmq']);
};