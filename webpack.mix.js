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

//Vue js files
mix.js('resources/assets/js/feeds.js', 'public/js').vue().sourceMaps();
mix.js('resources/assets/js/trending-keywords.js', 'public/js').vue().sourceMaps();
mix.js('resources/assets/js/find-news.js', 'public/js').vue().sourceMaps();
mix.js('resources/assets/js/hacker-news.js', 'public/js').vue().sourceMaps();



//compress all the css files in one file
mix.sass('resources/assets/scss/main.scss', 'public/css/main.css');


//compress all the js files in one file
mix.scripts([
    'resources/assets/js/main.js',
    ], 'public/js/all.js');
