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
    mix.less('main.less');
    // mix.scripts('main.less');
    mix.scriptsIn('resources/assets/js-plugins', 'public/plugins');

 //    elixir(function(mix) {
	//     mix.scripts(
	//     	[
	// 	        'resources/assets/js-plugins/jquery.min.js',
	// 	        'resources/assets/js-plugins/bootstrap.min.js'
	//     	],

	// 	    'public/plugins'
	//     );
	// });
});
