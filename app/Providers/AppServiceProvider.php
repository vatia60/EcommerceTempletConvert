<?php

namespace App\Providers;
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
        $cart = session()->has('cart') ? session()->get('cart') : [];

        View::share('cart', $cart);

        $total = array_sum(array_column($cart, 'total_price'));

        View::share('total', $total);
    }
}
