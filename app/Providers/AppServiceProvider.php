<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Manufacturer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.left_menu',function($view){
            $types = ProductType::all();
            $manufacturers = Manufacturer::all();
             
            $view->with('types',$types);
            $view->with('manufacturers',$manufacturers);
        });
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
