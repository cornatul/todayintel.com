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

mix.js('resources/assets/js/feeds.js', 'public/js').vue().sourceMaps();
mix.js('resources/assets/js/news.js', 'public/js').vue().sourceMaps();


//copy all the image to public folder and compress them to reduce the size
mix.copyDirectory('resources/assets/img', 'public/img');



//compress all the css files in one file
/**
* <!-- CSS here -->
 */
mix.styles([
      'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/owl.carousel.min.css',
        'resources/assets/css/animate.css',
        'resources/assets/css/magnific-popup.css',
        'resources/assets/css/all.min.css',
        'resources/assets/css/flaticon.css',
        'resources/assets/css/font.css',
        'resources/assets/css/metisMenu.css',
        'resources/assets/css/nice-select.css',
        'resources/assets/css/spacing.css',
        'resources/assets/css/main.css',
    ], 'public/css/all.css');



mix.copy('resources/assets/fonts', 'public/fonts');

mix.copy(
    [
        'resources/assets/js/vendor/modernizr-3.5.0.min.js',
        'resources/assets/js/vendor/jquery-3.5.1.min.js',

    ],
    'public/js/'
)

/**
 *
 * <!-- JS here -->
 */
//compress all the js files in one file
mix.scripts([
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/isotope.pkgd.min.js',
    'resources/assets/js/metisMenu.min.js',
    'resources/assets/js/jquery.nice-select.js',
    'resources/assets/js/wow.min.js',
    'resources/assets/js/jquery.counterup.min.js',
    'resources/assets/js/waypoints.min.js',
    'resources/assets/js/jquery.scrollUp.min.js',
    'resources/assets/js/imagesloaded.pkgd.min.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/plugins.js',
    'resources/assets/js/main.js',
    ], 'public/js/all.js');
