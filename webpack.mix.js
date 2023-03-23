const mix = require('laravel-mix');
const {alias} = require("laravel-mix");
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
const postCssPlugins =[
    require('postcss-import'),
    require('tailwindcss/nesting'),
    require('tailwindcss'),
    require('autoprefixer'),
]

mix.js('resources/js/app.js', 'public/js').vue()
    .js('resources/js/baby-yoda.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', postCssPlugins)
    .sass('resources/sass/app.scss', 'public/sass')
    .webpackConfig(require('./webpack.config'))
    .sourceMaps();

mix.options({
    postCss: postCssPlugins
})

if (mix.inProduction()) {
    mix.version();
}
