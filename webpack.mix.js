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
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/tour');

mix.copyDirectory('resources/img/auth', 'public/img/auth');
mix.copyDirectory('resources/img/tour', 'public/img/tour');

mix.styles([
    'resources/css/auth/style.css',
    'resources/css/auth/shortcodes.css',
    'resources/css/auth/widget.css',
    'resources/css/auth/colors.css',
], 'public/css/auth/all.css');

mix.styles([
    'resources/css/tour/style.css',
    'resources/css/tour/shortcodes.css',
    'resources/css/tour/widget.css',
    'resources/css/tour/icons.css',
    'resources/css/tour/colors.css',
    'resources/css/tour/typography.css',
    'resources/css/tour/selectric.css',
], 'public/css/tour/all.css');

mix.copy('resources/css/tour/icons.css', 'css/tour/');