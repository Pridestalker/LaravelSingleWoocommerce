<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-12
 * Time: 09:38
 */
namespace Elderbraum\LaraSingleWoo;

use \Illuminate\Support\ServiceProvider as LaravelProvider;

class ServiceProvider extends LaravelProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
		$this->publishes([
			__DIR__ . '/../config/larasingle.php' => config_path('larasingle.php'),
		]);
	}
	
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		
		$this->app->singleton(LaraSingleWoo::class, function() {
			return new LaraSingleWoo();
		});
		
		$this->app->alias(LaraSingleWoo::class, 'LaraSingleWoo');

		$this->app->bind('LaraSingleWoo', function() {
			return new LaraSingleWoo();
		});
	}
	
}