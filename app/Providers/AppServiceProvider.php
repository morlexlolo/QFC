<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service;
use App\Market;

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

        view()->composer('*', function ($view) {
            $sliders = Service::orderBy('id', 'DESC')->get();
            $markets = Market::orderBy('id', 'DESC')->get();
            $services = Service::get();
            //Registering Global variable
            $view->with('services', $services);
            $view->with('sliders', $sliders);
            $view->with('markets', $markets);
        });
    }
}