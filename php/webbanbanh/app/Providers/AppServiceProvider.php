<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;
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
        //lay du lieu product type
        view()->composer('layout.header',function($view){
            $loaiSanPham = ProductType::all();
            $view->with('loai_sp',$loaiSanPham);
        });
        //them vao gio hang
        view()->composer('layout.header',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart' => Session::get('cart'),'product_cart' => $cart->items,'totalPrice' => $cart->totalPrice,'totalQty' => $cart->totalQty]);
            }
        });
        view()->composer('page.checkout',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=> Session::get('cart'),'product_cart' => $cart->items,'totalPrice' => $cart->totalPrice,'totalQty' => $cart->totalQty]);
            }
        });
    }
}
