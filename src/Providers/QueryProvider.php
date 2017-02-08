<?php

namespace RealPage\OData\Providers;

use Illuminate\Support\ServiceProvider;
use RealPage\OData\Query\LaravelQuery as LaravelQuery;

class QueryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.  Post-boot.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.  Boot-time only.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('odataquery', function ($app) {
            return new LaravelQuery();
        });
    }
}
