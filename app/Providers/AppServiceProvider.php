<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service;
use App\Market;
use TCG\Voyager\Models\Post;
use App\ServiceCategory;

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
            $markets = Market::orderBy('id', 'ASC')->get();
            $servicesfooter = Service::get();
            $servicesCat = ServiceCategory::get();
            $news = Post::orderBy('id', 'asc')->get();
            //Registering Global variable
            $view->with('servicesfooter', $servicesfooter);
            $view->with('sliders', $sliders);
            $view->with('markets', $markets);
            $view->with('servicesCat', $servicesCat);
            $view->with('news', $news);
        });
    }
}