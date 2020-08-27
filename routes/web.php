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


Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('products','ProductController');

Route::get('/add-to-cart{product}','CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart','CartController@index')->name('cart.index')->middleware('auth');


//Voyager routes

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
