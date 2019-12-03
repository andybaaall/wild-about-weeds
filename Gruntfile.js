module.exports = function(grunt) {

    // Project configuration
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // meta
        meta: {
            src: 'dev',
            dest: 'dist',
            modules: 'node_modules',
            inc: 'inc'
        },
        // Task options
        copy: {
            main: {
                files: [
                    {
                        // php
                        expand: true,
                        cwd: 'dev',
                        src: '**/*.php',
                        flatten: true,
                        filter: 'isFile',
                        dest: 'dist/',
                    },
                    {
                        // .min.css
                        expand: true,
                        cwd: '<%= meta.src %>',
                        src: '**/*.min.css',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/css'
                    },
                    {
                        // .min.js
                        expand: true,
                        cwd: '<%= meta.src %>',
                        src: '**/*.min.js',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/js'
                    },
                    {
                        // bootstrap - JS
                        expand: true,
                        cwd: '<%= meta.modules %>',
                        src: 'bootstrap/dist/js/bootstrap.min.js',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/js'
                    },
                    {
                        // bootstrap - CSS
                        expand: true,
                        cwd: '<%= meta.modules %>',
                        src: 'bootstrap/dist/css/bootstrap.min.css',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/css'
                    },
                    {
                        // popper.js
                        expand: true,
                        cwd: '<%= meta.modules %>',
                        src: 'popper.js/dist/umd/popper.min.js',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/js'
                    },
                    {
                        // jQuery
                        expand: true,
                        cwd: '<%= meta.modules %>',
                        src: 'jquery/dist/jquery.min.js',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/js'
                    },
                    {
                        // image folder
                        expand: true,
                        cwd: '<%= meta.src %>',
                        src: 'assets/img/**',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/img'
                    },
                    {
                        // inc folder
                        expand: true,
                        cwd: '<%= meta.src %>',
                        src: 'inc/**',
                        flatten: true,
                        filter: 'isFile',
                        dest: '<%= meta.dest %>/inc'
                    }
                ],
            }
        },
        csslint: {
            strict: {
                options: {
                    import: 2
                },
                src: ['dev/assets/css/master.css']
            },
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    src: ['dev/assets/css/master.css'],
                    dest: '',
                    ext: '.min.css'
                }]
            }
        },
        jshint: {
            files: ['dev/assets/js/script.js'],
            options: {
                unused: true,
                esversion: 6
            }
        },
        shell: {
            options: {
                stderr: false
            },
            target: {
                command: 'rm -r /Applications/MAMP/htdocs/wild-about-weeds/wp-content/themes/wild-about-weeds && cp -r /Users/test/Documents/workingFiles/wild-about-weeds/dist /Applications/MAMP/htdocs/wild-about-weeds/wp-content/themes && mv /Applications/MAMP/htdocs/wild-about-weeds/wp-content/themes/dist /Applications/MAMP/htdocs/wild-about-weeds/wp-content/themes/wild-about-weeds'
            },
        },
        uglify: {
            my_target: {
                files: {
                    'dev/assets/js/script.min.js': ['dev/assets/js/script.js']
                }
            }
        },
        watch: {
            files: ['dev/assets/js/script.js', 'dev/assets/css/master.css'],
            tasks: ['jshint', 'csslint', 'uglify', 'cssmin'],
            options: {
                reload: true
            }
        }
    });

    // Loading tasks
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify-es');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-shell');


    // Registering tasks
    grunt.registerTask('default', function() {
        grunt.log.write('Grunt is up and running!').ok();
    });

    grunt.registerTask('makeDist', ['copy', 'shell']);
    grunt.registerTask('runWatch', ['watch']);
};
