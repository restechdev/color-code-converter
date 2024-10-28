<?php

namespace RestechDev\ColorCodeConverter\Providers;

use RestechDev\ColorCodeConverter\Services\ColorCodeConverter;
use Illuminate\Support\ServiceProvider;

class ColorCodeConverterServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Code to bootstrap services, such as publishing configurations, views, etc.
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ColorCodeConverter::class, function($app){
            return new ColorCodeConverter();
        });
    }
}
