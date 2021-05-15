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
const webpack = require('webpack');
const LiveReloadPlugin = require('webpack-livereload-plugin');

require('laravel-mix-bundle-analyzer');

mix.webpackConfig({
        resolve: {
            alias: {
                "@": path.resolve(__dirname, "resources/")
            }
        },
        plugins: [
            new LiveReloadPlugin(),
            new webpack.ContextReplacementPlugin(/moment[\/\\]locale$/, /(en|zh-tw)$/),
        ],
        output: {
            publicPath: `${process.env.APP_URL}`,
            chunkFilename: '[name].js?id=[chunkhash]',
        },
        optimization: {
            splitChunks: {
                cacheGroups: {
                    vendors: false,
                }
            }
        },
    })
    .js("resources/js/app.js", "public/js")
    .copy("resources/image/banner/*", 'public/images')
    .copy("resources/image/og_image.jpg", 'public/images')
    .options({
        postCss: [require('autoprefixer')],
    })
    .version();

if (!mix.inProduction()) {
    mix.webpackConfig({
            devtool: 'eval-source-map'
        })
        .sass("resources/sass/app.scss", "public/css")
        .postCss("resources/css/main.css", "public/css")
        .postCss("resources/css/page.css", "public/css")
        .sourceMaps();
} else {
    mix.extract([
            'vue',
            'vue-router',
            'vue-meta',
            'vue-infinite-loading',
            'vue-lazyload',
            'vue-loading-skeleton',
            'vue-recaptcha-v3',
        ], '/js/vendor-vue.js')
        .extract([
            'axios',
            'object-to-formdata',
        ], '/js/vendor-net.js')
        .extract([
            'lodash',
            'moment',
            'sweetalert2',
            'smoothscroll-polyfill',
        ], '/js/vendor-utils.js');

    if (process.env.APP_ENV === 'local') {
        mix.bundleAnalyzer();
    }
}
