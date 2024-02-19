let mix = require('laravel-mix');

mix.js('src/scripts.js', 'assets/js').setPublicPath('assets')
mix.sass('src/scss/main.scss', 'assets/css')
.sourceMaps()
