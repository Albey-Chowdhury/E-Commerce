<?php

namespace App\Providers;

use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;

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
        view::composer('*', function($view) {
            $view->with('categories', Category::all());
            $view->with('products', Product::all());
            $view->with('cartProduct',Cart::with('products')->where('ip_address',request()->ip())->get());
        });

        // view::composer('*', function ($view) {
        // });
    }
}
