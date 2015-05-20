var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	elixir.config.sourcemaps = false;
    mix.sass(['*'], 'public/css/partials');
    mix.scripts(['data/*', 'events/*', 'plugins/*'], 'public/js/script.js');
    mix.styles(['*'], 'public/css/style.css', 'public/css/partials');
   
    // mix.scriptsIn("js");
    // mix.phpUnit();
});
