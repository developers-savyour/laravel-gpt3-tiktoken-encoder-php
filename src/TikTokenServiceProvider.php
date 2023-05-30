<?php

namespace DevelopersSavyour\TikToken;

use Illuminate\Support\ServiceProvider;

class TikTokenServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('tiktoken', function () {
            return new TikToken();
        });
    }
}
