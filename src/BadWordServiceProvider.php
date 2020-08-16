<?php

namespace MBozwood\LaravelExplicitFilter;

use Illuminate\Support\ServiceProvider;
use MBozwood\LaravelExplicitFilter\Validation\Explicit;

class BadWordServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['validator']->extend('explicit', Explicit::class . '@validate');

        $this->publishes([
            __DIR__.'/../config/explicit.php' => config_path('explicit.php')
        ], 'config');
    }
}
