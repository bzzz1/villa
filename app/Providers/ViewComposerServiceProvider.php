<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {
	public function boot() {
		// view()->share('data', [1, 2, 3]);
		// $this->composeEstates();

		// view()->composers([
		// 	'App\Http\ViewComposers\EstateViewComposer' => ['estates', 'estate'],
		// 	'App\Http\ViewComposers\UserComposer' => 'user',
		// 	'App\Http\ViewComposers\ProductComposer' => 'product',
		// ]);
	}

	public function register() {}

	// private function composeEstates() { 
		// view()->composer('estates', 'App\Http\ViewComposers\EstateViewComposer');
		// view()->composer(['estates', 'estate'], 'App\Http\ViewComposers\EstateViewComposer@compose');

		// view()->composer('estates', function($view) { 
		// 	$view->with('test', 'This is test ViewComposer variable.');
		// });
		// view()->composer(['estates', 'estate'], function($view) { 
		// 	$view->with('test', 'This is test ViewComposer variable.');
		// });	

		// view()->composers([
			// 'App\Http\ViewComposers\EstateViewComposer' => ['estates', 'estate'],
			// 'App\Http\ViewComposers\UserComposer' => 'user',
			// 'App\Http\ViewComposers\ProductComposer' => 'product',
		// ]);
	// }
}