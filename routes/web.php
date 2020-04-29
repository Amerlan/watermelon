<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/shop', 'ShopController@index');
Route::get('/cart', 'CartController@index');

Route::post('/subscribe','HomeController@subs');

Route::get('/shop/{category}', [
  'uses' => 'ShopController@show',
   'as' => 'sort']);

Route::get('/add/{id}', [
  'uses' => 'CartController@add',
  'as' => 'add']);

Route::get('/remove/{id}', [
  'uses' => 'CartController@remove',
  'as' => 'remove']);

Route::group(['middleware' => ['auth'=>'user']],
function ()
{

  Route::post('/promo', 'CartController@promo');
  Route::get('/checkout', 'CartController@checkout');
  Route::post('/ordered','CartController@to_order');
});

Route::group(['middleware' => ['auth'=>'admin']],
function ()
{
  Route::get('prodadd', 'ShopController@showform');
  Route::post('/prodins', 'ShopController@populate');
});
