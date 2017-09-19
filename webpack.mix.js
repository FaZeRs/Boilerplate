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

mix.sass('Themes/Bootstrap/resources/sass/app.scss', 'public/css/Bootstrap/app.css')
    .sass('Themes/Adminlte/resources/sass/app.scss', 'public/css/Adminlte/app.css')
    .js([
        'Themes/Bootstrap/resources/js/app.js',
        'Themes/Bootstrap/resources/js/plugin/sweetalert/sweetalert.min.js',
        'Themes/Bootstrap/resources/js/plugins.js'
    ], 'public/js/Bootstrap/app.js')
    .js([
        'Themes/Adminlte/resources/js/app.js',
        'Themes/Adminlte/resources/js/plugin/sweetalert/sweetalert.min.js',
        'Themes/Adminlte/resources/js/plugins.js',
        'Themes/Adminlte/resources/js/url_slug.js',
    ], 'public/js/Adminlte/app.js');

if(mix.inProduction()) {
    mix.version();
}