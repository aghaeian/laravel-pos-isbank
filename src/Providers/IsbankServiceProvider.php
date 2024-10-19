<?php
 
namespace Aghaeian\isbank\Providers;

use Illuminate\Support\ServiceProvider;
 
/**
 *  isbank service provider
 *
 * @author  Aghaeian
 */
class isbankServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    
   
    public function boot()
    {
		
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'isbank');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'isbank');

    }
 
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {   
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {   
        //this will merge payment method
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/paymentmethods.php', 'payment_methods'
        );

        // add menu inside configuration  
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'   
        );

    }
}
