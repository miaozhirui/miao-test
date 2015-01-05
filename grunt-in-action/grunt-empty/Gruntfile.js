'use strict';

module.exports = function(grunt) {
    require('load-grunt-tasks')(grunt);

    require('time-grunt')(grunt);

    var config = {
        app: 'app',
        dist: 'dist'
    }

    grunt.initConfig({
        config: config,

        copy: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= config.app %>/',
                        src: '**/*.js',
                        dest: '<%= config.dist %>/',
                        ext: '.min.js',
                        extDot: 'last',
                        // 为true的时候会把中间各层的目录去掉
                        flatten: true,
                        //当ext的flatten被调用的时候，rename会被调用
                        rename: function(dest, src) {
                            return src;
                        }
                    }
                    // {
                    //     src: 'index.html',
                    //     dest: '<%= config.dist %>/index.html'
                    // }
                ]
            }
        },

        clean: {
            dist: {
                src: ['<%= config.dist %>/**/*'],
                // filter: function (filePath) {
                //     return !grunt.file.isDir(filePath);
                // }
            }
        }
    });
}