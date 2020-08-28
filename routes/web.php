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
//  Route::get('/', 'HomeController@index')->name('home');



Route::group(['prefix' => 'customer'], function () {
    Auth::routes();
});

Route::get('/', 'HomeController@index');

Route::resource('products','ProductController');

Route::get('/add-to-cart{product}','CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart','CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemid}','CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemid}','CartController@update')->name('cart.update')->middleware('auth');

//Voyager routes

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
