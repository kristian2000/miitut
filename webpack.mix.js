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

mix.js('resources/js/main.js', 'public/js')

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/materialdesignicons.min.css',
    'resources/css/template.css',
    'resources/css/purple.css',
    'resources/css/styles.css'
], 'public/css/all.css');


mix.webpackConfig({
    devServer: {
        proxy: {
            '*': 'http://localhost:8000'
        }
    }
});