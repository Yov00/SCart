<?php

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

Route::get('/add-to-cart/{id}','ProductController@getAddToCart')->middleware('auth');
Route::get('/',[
    'uses' =>'ProductController@index',
    'as'=>'shop.index'
]);
Route::get('/shoppingCart', [
    'uses'=>'ProductController@getCart',
    'as'=>'shop.shopping-cart',
    'middleware'=>'auth'
    ]); 
Route::get('/checkout',[
    'uses'=> 'ProductController@getCheckout',
    'as' => 'pretty-little-bitch',
    'middleware'=> 'auth',
]);

Route::get('show-product/{id}',[
    'uses'=>'ProductController@productShow',
    'as' =>'show.product',
    'middleware'=>'auth'
]);

Route::post('/checkout',[
    'uses'=> 'ProductController@postCheckout',
    'as' => 'checkout',
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
