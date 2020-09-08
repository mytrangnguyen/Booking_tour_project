<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\city;

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
        view()->composer('header',function($view){               
          $name_city = city::all();
          
           $view->with('name_city',$name_city);
                       
        }); 
    }
}
