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
const mix = require("laravel-mix");
const path = require("path");

require('laravel-mix-merge-manifest')

if (mix.inProduction()) {
    mix.webpackConfig({
            resolve: {
                alias: {
                    "@": path.resolve(__dirname, "resources/")
                }
            },
        })
        .options({
            postCss: [require('autoprefixer')],
        })
        .sass("resources/sass/app.scss", "public/css")
        .postCss("resources/css/main.css", "public/css")
        .postCss("resources/css/page.css", "public/css")
        .version()
        .mergeManifest();
}
