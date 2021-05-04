const mix = require("laravel-mix");
const path = require("path");

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

var LiveReloadPlugin = require('webpack-livereload-plugin');

mix.webpackConfig({
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/")
        }
    },
    plugins: [new LiveReloadPlugin()]
});

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .postCss("resources/css/main.css", "public/css", [require("autoprefixer")])
    .postCss("resources/css/page.css", "public/css", [require("autoprefixer")])
    .copy("resources/image/banner/*", 'public/images')
    .copy("resources/media/*", 'public/media')
    .version()
    .extract(['vue']);
