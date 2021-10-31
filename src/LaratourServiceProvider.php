<?php

namespace Mprince\Laratour;

use Illuminate\Support\ServiceProvider;

class LaratourServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadViewsFrom(__DIR__.'/resources/views', 'laratour');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            // Publishing config.
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laratour.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/laratour'),
            ], 'views');

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../public/laratour' => public_path('laratour'),
            ], 'assets');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laratour');

        // Register the main class to use with the facade
        $this->app->singleton('laratour', function () {
            return new Laratour;
        });
    }
}
