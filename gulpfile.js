const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var fonts = [
    'node_modules/font-awesome/fonts'
];

elixir(mix => {
    mix.sass('app.scss')
       .copy(fonts, 'public/fonts')
       .webpack('app.js');
});
