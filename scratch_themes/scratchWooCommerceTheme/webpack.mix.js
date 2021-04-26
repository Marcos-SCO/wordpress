
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

mix.js('src/js/app.js', 'public/./')
    //.postCss('src/css/app.css', 'public/css', []);
    .sass('src/css/app.scss', 'public/./', []);
    // .sass('src/css/app.scss', 'public/css', []);