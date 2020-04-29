<?php

use Illuminate\Support\Facades\Route;





Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/shop', 'ShopController@index');
Route::get('/cart', 'CartController@index');

Route::get('/shop/{category}', [
  'uses' => 'ShopController@show',
   'as' => 'sort']);

Route::get('/add/{id}', [
  'uses' => 'CartController@add',
  'as' => 'add']);

Route::get('/remove/{id}', [
  'uses' => 'CartController@remove',
  'as' => 'remove']);

Route::post('/promo', 'CartController@promo');
Route::get('/checkout', 'CartController@checkout');

Route::post('/ordered','CartController@to_order');


Route::group(['middleware' => ['auth'=>'user']], '');
