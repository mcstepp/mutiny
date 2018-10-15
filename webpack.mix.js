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

mix.js('resources/assets/js/app.js', 'public/js')
   .extract([
   		'jquery',
   		'vue',
   		'popper.js',
   		'bootstrap',
   		'axios',
   		'lodash',
   		'bootstrap-daterangepicker',
   		'toastr',
   		'moment',
   		'gauge'])
   .autoload({
   		'jquery': ['jQuery', '$'],
   		'popper.js/dist/umd/popper.js': ['Popper']
   })

   // compile your scss/css
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
   	'resources/assets/css/vendor/daterangepicker.min.css',
   	'resources/assets/css/vendor/gauge.min.css',
   	'resources/assets/css/vendor/toastr.min.css',
   	], 'public/css/vendor.css');

if (mix.inProduction()) {
    mix.version();
}


mix.copyDirectory('resources/assets/images', 'public/images');