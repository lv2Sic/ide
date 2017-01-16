<?php

namespace Lv2Sic\Ide;

use Illuminate\Support\ServiceProvider;

class IdeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';

        $this->loadViewsFrom(__DIR__ . '/Views', 'ide');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['ide'] = $this->app->share(function($app) {
            return new Ide;
        });
    }
}
