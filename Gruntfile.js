'use strict';
module.exports = function (grunt) {

    var appConfig = {
        skin: 'app',
        app: 'app',
        dist: 'dist',
    };

    // Permet d'afficher le temps d'exécution de chaque tâche, suite à un build
    require('time-grunt')(grunt);

    grunt.loadNpmTasks('grunt-slack-notifier');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        appConfig: appConfig,

        watch: {
            sass: {
                files: [
                    '<%= appConfig.app %>/sass/**/*'
                ],
                tasks: ['sass']
            },

            livereload: {
                files: [
                    '<%= appConfig.dist %>/css/*.css'
                ],
                options: {
                    livereload: true,
                    livereloadOnError: false
                },
                triggerLiveReloadOnTheseFiles: {
                    // We use this target to watch files that will trigger the livereload
                    options: {
                        livereload: true
                    }
                }
            }
        },

        sass: {
            options: {
                outputStyle: 'compressed',
                sourceMap: true
            },
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= appConfig.app %>/sass/',
                        src: ['*.scss'],
                        dest: '<%= appConfig.dist %>/css/',
                        ext: '.css'
                    }
                ]
            }
        },

    });

    // Autoloader pour les tâches
    require('load-grunt-tasks')(grunt);

    grunt.registerTask('default', ['menu']);
    grunt.registerTask('watchAll', ['watch']);

};
