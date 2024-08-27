
const mix = require('laravel-mix');

//compile js files
mix.js('resources/js/app.js', 'public/js')

//compile css files
.sass('resources/sass/app/scss', 'public/css')

//includes with background urls
.options({processCssurls: true})

// compile images
.copyDirectory('resources/images', 'public/images');