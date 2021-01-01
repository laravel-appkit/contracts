<?php

namespace AppKit\:package_name_cap;

use Illuminate\Support\ServiceProvider;

class :package_name_capServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', ':package_name');
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', ':package_name');
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // $this->loadRoutesFrom(__DIR__ . '/routes/:package_name.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path(':package_name.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/:package_name'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/:package_name'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/:package_name'),
            ], 'lang');*/

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
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', ':package_name');

        // Register the main class to use with the facade
        $this->app->singleton(':package_name', function () {
            return new :package_name_cap;
        });
    }
}
