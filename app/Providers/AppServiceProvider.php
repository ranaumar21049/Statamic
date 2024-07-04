<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\{Collections, Navigations, Taxonomies, Globals};


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
        View::composer(views: ['components.sidebarContent'], callback: function ($view) {
            $view->with('collectionsInfo', Collections::get());
            $view->with('navigationsInfo', Navigations::where(['status' => "1"])->get());
            $view->with('taxonomiesInfo', Taxonomies::all());
            $view->with('globalsInfo', Globals::where(['status' => 1])->get());
        });
    }
}
