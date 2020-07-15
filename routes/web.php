<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'PageController@index')->name('frontend.page.index');
    Route::get('/product/{id}', 'PageController@productdetails')->name('page.productdetails');
    Route::get('/productaddtocart/{id}', 'PageController@productaddcart')->name('page.productaddcart');

    Route::post('/cart', 'AddtocartController@addtocart')->name('addtocart');
    Route::get('/cart/showcart', 'AddtocartController@showcart')->name('showcart');
    Route::post('/cart/remove', 'AddtocartController@removecart')->name('removecart');
    Route::get('/cart/clearcart', 'AddtocartController@clearcart')->name('clearcart');
    Route::get('/cart/cartprocess', 'AddtocartController@checkout')->name('cartprocess.checkout');
    Route::post('/cart/cartporcess', 'AddtocartController@cartporcess')->name('cartporcess');

    Route::get('/cart/cartdetails/{id}', 'AddtocartController@cartdetails')->name('cartdetails');
    Route::get('/cart/orderdashboard', 'AddtocartController@orderdashboard')->name('orderdashboard');

});

Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::get('/', 'PageController@index')->name('backend.page.index');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');
        Route::post('/create', 'CategoryController@store')->name('category.store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
        Route::post('/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index')->name('product.index');
        Route::get('/create', 'ProductController@create')->name('product.create');
        Route::post('/create', 'ProductController@store')->name('product.store');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('/update/{id}', 'ProductController@update')->name('product.update');
        Route::post('/destroy/{id}', 'ProductController@destroy')->name('product.destroy');
    });

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
