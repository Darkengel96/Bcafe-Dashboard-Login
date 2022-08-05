<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Illuminate\Support\Facades\Schema as FacadesSchema;

class AppServiceProvider extends ServiceProvider
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
      //  Schema::defaultStringLenght(191);
    }
}
