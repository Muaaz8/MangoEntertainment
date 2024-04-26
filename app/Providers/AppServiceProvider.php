<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Parse\ParseClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ParseClient::initialize(env('BACK4APP_APP_ID'),env('BACK4APP_REST_KEY'),env('BACK4APP_MASTER_KEY'));
        ParseClient::setServerURL('https://parseapi.back4app.com', '/parse');
    }
}
