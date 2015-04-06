// BEGIN Gruntfile
// this file configures the behavior of Grunt and its installed task modules (this is currently setup for a WordPress project running Bones theme)

module.exports = function(grunt) { // wrapper function - encapsulates your Grunt configuration
    var globalConfig = { // set variable for project url
        src: '/var/www/vhosts/jhqp/wp-content/themes/eddiemachado-bones-evolvingwisdom', // change this url!
        dest: '/var/www/vhosts/jhqp/wp-content/themes/eddiemachado-bones-evolvingwisdom' // change this url!
    };

    grunt.initConfig({ // initialize the Grunt configuration object
        globalConfig: globalConfig, // enable use of globalConfig variable in module settings

        pkg: grunt.file.readJSON('package.json'), // get metadata from package.json file

        // sass task settings (this is currently set up for a Bones theme project - change the files/urls if these don't fit your project)
        sass: {
            dist: {
                files: {
                    '<%= globalConfig.src %>/library/css/style.css' : '<%= globalConfig.src %>/library/scss/style.scss',
                    '<%= globalConfig.src %>/library/css/ie.css' : '<%= globalConfig.src %>/library/scss/ie.scss',
                    '<%= globalConfig.src %>/library/css/login.css' : '<%= globalConfig.src %>/library/scss/login.scss'
                }
            }
        },

        // watch task settings
        watch: {
            css: {
                files: '**/*.scss', // watched file(s)
                tasks: ['sass'] // task(s) to perform when watched files are successfully saved
            }
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.registerTask('default',['watch']);
    grunt.registerTask('runsass',['sass']);
}
// END Gruntfile
