let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
        'resources/assets/lib/bootstrap/css/bootstrap.css',
        'resources/assets/lib/font-awesome/css/font-awesome.css',
        'resources/assets/css/main.css',
        'resources/assets/lib/metismenu/metisMenu.css',
        'resources/assets/lib/onoffcanvas/onoffcanvas.css',
        'resources/assets/lib/animate.css/animate.css',

], 'public/css/libs.css');

mix.scripts([
    'resources/assets/lib/jquery/jquery.js',
    'resources/assets/lib/bootstrap/js/bootstrap.js',

], 'public/css/libs.js');