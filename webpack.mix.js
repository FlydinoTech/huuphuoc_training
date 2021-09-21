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

mix.sass('resources/scss/app.scss', 'css/tour');

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/admin');
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/tour');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/tour');

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
    'resources/css/tour/bootstrap.css',
    'resources/css/tour/responsive.css',
], 'public/css/tour/all.css');

mix.js([
    'resources/js/tour/appear.js',
    'resources/js/tour/isotope.js',
    'resources/js/tour/jquery-ui.js',
    'resources/js/tour/jquery.fancybox.js',
    'resources/js/tour/jquery.js',
    'resources/js/tour/owl.js',
    'resources/js/tour/popper.min.js',
    'resources/js/tour/script.js',
    'resources/js/tour/scrollbar.js',
    'resources/js/tour/wow.js',
], 'public/js/tour/all_script.js');