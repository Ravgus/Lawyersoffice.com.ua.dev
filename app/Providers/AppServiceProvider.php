<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use App\Navigation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Передача полей навигации в каждый шаблон
        View::share('navigation', Navigation::all('name', 'alias'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
