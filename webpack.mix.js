const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/scss/app.scss', 'css/');

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/admin');
mix.copyDirectory('resources/img/auth', 'public/img/auth');
mix.styles([
    'resources/css/auth/style.css',
    'resources/css/auth/shortcodes.css',
    'resources/css/auth/widget.css',
    'resources/css/auth/colors.css',
], 'public/css/auth/all.css');