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

mix.sass('Themes/Bootstrap/resources/sass/app.scss', 'public/css/frontend.css')
    .sass('Themes/AdminLTE/resources/sass/app.scss', 'public/css/backend.css')
    .js([
        'Themes/Bootstrap/resources/js/app.js',
        'Themes/Bootstrap/resources/js/plugin/sweetalert/sweetalert.min.js',
        'Themes/Bootstrap/resources/js/plugins.js'
    ], 'public/js/frontend.js')
    .js([
        'Themes/AdminLTE/resources/js/app.js',
        'Themes/AdminLTE/resources/js/plugin/sweetalert/sweetalert.min.js',
        'Themes/AdminLTE/resources/js/plugins.js'
    ], 'public/js/backend.js');

    mix.version();
}