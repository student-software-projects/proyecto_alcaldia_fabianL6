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
/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

mix.styles([
    'resources/nalika/css/bootstrap.min.css',
    'resources/nalika/css/font-awesome.min.css',
    'resources/nalika/css/nalika-icon.css',
    'resources/nalika/css/owl.carousel.css',
    'resources/nalika/css/owl.theme.css',
    'resources/nalika/css/owl.transitions.css',
    'resources/nalika/css/animate.css',
    'resources/nalika/css/normalize.css',
    'resources/nalika/css/meanmenu.min.css',
    'resources/nalika/css/main.css',
    'resources/nalika/css/morris.css',
    'resources/nalika/css/jquery.mCustomScrollbar.min.css',
    'resources/nalika/css/metisMenu.min.css',
    'resources/nalika/css/metisMenu-vertical.css',
    'resources/nalika/css/fullcalendar.min.css',
    'resources/nalika/css/fullcalendar.print.min.css',
    'resources/nalika/css/style.css',
    'resources/nalika/css/responsive.css',
], 'public/css/app.css')

.scripts([
    'resources/nalika/js/jquery-1.12.4.min.js',
    'resources/nalika/js/bootstrap.min.js',
    'resources/nalika/js/wow.min.js',
    'resources/nalika/js/jquery-price-slider.js',
    'resources/nalika/js/jquery.meanmenu.js',
    'resources/nalika/js/owl.carousel.min.js',
    'resources/nalika/js/jquery.sticky.js',
    'resources/nalika/js/jquery.scrollUp.min.js',
    'resources/nalika/js/jquery.mCustomScrollbar.concat.min.js',
    'resources/nalika/js/mCustomScrollbar-active.js',
    'resources/nalika/js/metisMenu.min.js',
    'resources/nalika/js/metisMenu-active.js',
    'resources/nalika/js/jquery.sparkline.min.js',
    'resources/nalika/js/jquery.charts-sparkline.js',
    'resources/nalika/js/moment.min.js',
    'resources/nalika/js/fullcalendar.min.js',
    'resources/nalika/js/fullcalendar-active.js',
    'resources/nalika/js/jquery.flot.js',
    'resources/nalika/js/jquery.flot.resize.js',
    'resources/nalika/js/curvedLines.js',
    'resources/nalika/js/flot-active.js',
    'resources/nalika/js/plugins.js',
    'resources/nalika/js/main.js',
], 'public/js/app.js');

