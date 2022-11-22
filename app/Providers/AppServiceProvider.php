<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('main.layout', function ($view) {
            $view->with('contact',Contact::first());
        });

        View::composer('main.layout', function ($view) {
            $view->with('category',Category::all());
        });

    }
}
