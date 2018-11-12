<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class QuoteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\QuoteContract', 'App\Services\QuoteService');
    }
}
