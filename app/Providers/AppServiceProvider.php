<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        //usar bootstrap en el paginator
        Paginator::useBootstrap();
        
        // compartir el autor en todas las vistas
        View::share('autor',config('app.author'));
    }
}
