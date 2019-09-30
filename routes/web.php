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
Route::get('/','ProductController@index');
Route::get('/shoppingCart', [
    'uses'=>'ProductController@getCart',
    'as'=>'shopping-cart',
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
