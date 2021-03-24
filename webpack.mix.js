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

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}

mix.js('resources/js/dashboard.js', 'public/js/dashboard.js');

 mix.styles([
    'resources/css/stylelogin.css',
 ], 'public/css/stylelogin.css');

 mix.styles([
    'resources/css/stylehistorico.css',
 ], 'public/css/stylehistorico.css');

 mix.styles([
    'resources/css/styledashboard.css',
 ], 'public/css/styledashboard.css');

 mix.copyDirectory('resources/img', 'public/img');
 mix.copyDirectory('resources/img/icone.png', 'public/');
