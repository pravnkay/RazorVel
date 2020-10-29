<?php

namespace Pravnkay\Razorvel\Providers;

use Illuminate\Support\ServiceProvider;
use Razorpay\Api\Api;

/**
 * The Razorvel Serviceprovider
 *
 * Razorvel - ServiceProvider to support integration of Razorpay with 
 * Laravel framework
 * 
 *
 * @author     Praveen Kalaiarasu <github@praveen.bulc.club>
 * @package    Razorpay
 * @version    1.0.0
 * @since      Class available since Release 1.0.0
 * 
 */
class RazorvelServiceProvider extends ServiceProvider
{
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		if ($this->app->runningInConsole()) {

			$this->publishes([
			  __DIR__.'/../config/config.php' => config_path('razorpay.php'),
			], 'config');
		
		}
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {		
		$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'razorpay');

    }

}
