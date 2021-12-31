const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .react()
    .sass('resources/sass/app.scss', 'public/css/common.css')
    .sass('resources/sass/home/app.scss', 'public/css/home.css')
    .sass('resources/sass/service/app.scss', 'public/css/service.css')
    .sass('resources/sass/contact/app.scss', 'public/css/contact.css')
    .sass('resources/sass/aboutus/app.scss', 'public/css/aboutus.css')
    .sass('resources/sass/jobs/app.scss', 'public/css/jobs.css')
    ;

mix.styles([
    'public/css/common.css',
    'public/css/home.css',
    'public/css/service.css',
    'public/css/contact.css',
    'public/css/aboutus.css',
    'public/css/jobs.css',
], 'public/css/app.css');
