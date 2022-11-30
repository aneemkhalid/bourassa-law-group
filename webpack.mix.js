// webpack.mix.js

let mix = require('laravel-mix');

mix.js('js/index.js', 'build');

mix.sass('sass/style.scss', 'style.min.css')
    .sourceMaps(false, 'source-map');