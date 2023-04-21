<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SampleServiseProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app() -> bind("serviceProviderTest" , function(){
            return "サービスプロバイダのテスト";
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
