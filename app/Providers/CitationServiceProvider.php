<?php

namespace App\Providers;

use App\Services\CitationService;
use Illuminate\Support\ServiceProvider;

class CitationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(CitationService::class, function () {
            return new CitationService();
        });
    }
}
