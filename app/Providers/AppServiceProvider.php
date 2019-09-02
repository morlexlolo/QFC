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

            $servicesfooterfirstcolumn = Service::orderBy('id', 'asc')->take(7)->get();
            $servicesfootersecondcolumn = Service::orderBy('id', 'desc')->take(7)->get();

            $servicesCat = ServiceCategory::get();
            $news = Post::orderBy('id', 'asc')->get();
            //Registering Global variable
            $view->with('servicesfooterfirstcolumn', $servicesfooterfirstcolumn);
            $view->with('servicesfootersecondcolumn', $servicesfootersecondcolumn);
            $view->with('sliders', $sliders);
            $view->with('markets', $markets);
            $view->with('servicesCat', $servicesCat);
            $view->with('news', $news);
        });
    }
}