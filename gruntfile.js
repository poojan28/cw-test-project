module.exports = function (grunt) {

    var assetsDir = './assets';
    var jsDir = `${assetsDir}/js`;
    var cssDir = `${assetsDir}/css`;
    var sassDir = `${assetsDir}/sass`;

    /**
     * Project configuration.
     */
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        /**
         * Uglify JS files.
         */
        uglify: {
            dev: {
                options: {
                    mangle: {
                        reserved: ['jQuery']
                    }
                },
                files: [{
                    expand: true, // Set to true for recursive search.
                    src: [
                        `**/*.js`,
                        `!**/*.min.js`,
                    ],
                    dest: jsDir,
                    cwd: jsDir,
                    rename: (dest, src) => {
                        var src = `${dest}/${src.replace('.js', '.min.js')}`;
                        return src;
                    }
                }]
            }
        },
        sass: {
            prod: {
                options: {
                    style: 'compressed'
                }
              
            },
            dev: {
                options: {
                    style: 'expanded'
                }
                
            },
            root: {
                options: {
                    style: 'expanded',
                },
                files: [{
                    'style.css': `${sassDir}/style.scss`,
                }]
            }
        },
        autoprefixer: {
            target: {
                files: {
					'style.css': 'style.css',
				
                }
            }
        
		},
        watch: {
            jsWatch: {
                files: `${jsDir}/*.js`,
                tasks: ['uglify'],
            },
            sassWatch: {
                files: [`${sassDir}/*.scss`,`${sassDir}/abstracts/*.scss`,`${sassDir}/abstracts/mixins/*.scss`,`${sassDir}/abstracts/variables/*.scss`,`${sassDir}/base/*.scss`,`${sassDir}/components/*.scss`,`${sassDir}/components/breadcrumbs/*.scss`,`${sassDir}/components/heading/*.scss`,`${sassDir}/components/image-overlay/*.scss`,`${sassDir}/components/scroll-bar/*.scss`,`${sassDir}/components/scroll-up/*.scss`,`${sassDir}/components/widgets/*.scss`, `${sassDir}/components/pagination/*.scss`,`${sassDir}/generic/*.scss`,`${sassDir}/layouts/*.scss`,`${sassDir}/plugins/*.scss`,`${sassDir}/plugins/elementor/*.scss`,`${sassDir}/utilities/*.scss`,`${sassDir}/base/elements/*.scss`,`${sassDir}/base/typography/*.scss`,`${sassDir}/components/comments/*.scss`,`${sassDir}/components/content/*.scss`,`${sassDir}/components/media/*.scss`,`${sassDir}/components/navigation/*.scss`,`${sassDir}/components/media/widgets/*.scss`,`${sassDir}/Dark-mode/*.scss`,`${sassDir}/plugins/jetpack/*.scss`],
                tasks: ['sass','autoprefixer'],
            }
        },

    });

    /**
     * Load the grunt plugins.
     */
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');

    /**
     * Grunt task(s).
     */
    grunt.registerTask('default', []);
    grunt.registerTask('assets',
        [
            'uglify',
            'sass',
            'autoprefixer',
        ]
    );
}