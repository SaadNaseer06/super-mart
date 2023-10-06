<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Categories;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        View::composer('layouts.user.app', function ($view) {
            $categories = Categories::all();
            $carts = Cart::where('user_id', Auth::id())->get();
            $total = 0;

            foreach ($carts as $cart) {
                $total += $cart->price * $cart->quantity;
            }

            $view->with('carts', $carts);
            $view->with('total', $total);
            $view->with('categories', $categories);
        });
    }
}
