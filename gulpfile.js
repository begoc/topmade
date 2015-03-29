var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // Admin
    mix.styles([
            'bootstrap/dist/css/bootstrap.min.css',
            'metisMenu/dist/metisMenu.min.css',
            'startbootstrap-sb-admin-2/dist/css/timeline.css',
            'startbootstrap-sb-admin-2/dist/css/sb-admin-2.css',
            'morrisjs/morris.css',
            'font-awesome/css/font-awesome.min.css'
        ], 'public/css/admin.css', 'vendor/bower_components')
        .scripts([
            'jquery/dist/jquery.min.js',
            'bootstrap/dist/js/bootstrap.min.js',
            'metisMenu/dist/metisMenu.min.js',
            'raphael/raphael-min.js',
            'morrisjs/morris.min.js',
            'startbootstrap-sb-admin-2/dist/js/sb-admin-2.js'
        ], 'public/js/admin.js', 'vendor/bower_components')
        .copy('vendor/bower_components/bootstrap/fonts', 'public/fonts')
        .copy('vendor/bower_components/font-awesome/fonts', 'public/fonts');
    mix.styles([
            'admin.css'
        ], 'public/css/admin.costume.css')
        .scripts([
            'admin.js'
        ], 'public/js/admin.costume.js');

    // Site
    mix.styles([
            'bootstrap/dist/css/bootstrap.min.css',
            'startbootstrap-business-casual/css/business-casual.css',
        ], 'public/css/app.css', 'vendor/bower_components')
        .scripts([
            'jquery/dist/jquery.min.js',
            'bootstrap/dist/js/bootstrap.min.js',
        ], 'public/js/app.js', 'vendor/bower_components');
    mix.styles([
            'site.css'
        ], 'public/css/site.css');


    mix.version(['css/site.css', 'css/admin.costume.css', 'public/js/admin.costume.js']);
});
