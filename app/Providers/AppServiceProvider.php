<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\library\classes\SomeClass;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //включение файла со вспомогательными функциями
        require_once __DIR__.'/../library/functions.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('App\library\Interfaces\Counter','App\library\classes\Counter2');
        
        $this->app->singleton('SingleSome', function ($app){
            return new \App\library\classes\SomeClass();
        });
    }
}
