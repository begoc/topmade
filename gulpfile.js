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
    mix.less('site.less')
    .copy('vendor/bower_components/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    //mix.styles([
    //    'bootstrap/dist/css/bootstrap.min.css',
    //    'startbootstrap-agency/css/agency.css',
    //], 'public/css/app.css', 'vendor/bower_components')
    .scripts([
        'jquery/dist/jquery.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
        'startbootstrap-agency/js/classie.js',
        'startbootstrap-agency/js/cbpAnimatedHeader.js',
        'startbootstrap-agency/js/jqBootstrapValidation.js',
        'startbootstrap-agency/js/contact_me.js',
        'startbootstrap-agency/js/agency.js'
    ], 'public/js/site.js', 'vendor/bower_components')
        .copy('vendor/bower_components/startbootstrap-agency/img/map-image.png', 'public/img/map-image.png')
        .copy('vendor/bower_components/startbootstrap-agency/img/header-bg.jpg', 'public/img/header-bg.jpg');
    mix.styles([
        'site.css'
    ], 'public/css/site.costume.css');


    mix.version(['css/site.costume.css', 'css/admin.costume.css', 'public/js/admin.costume.js']);
});
