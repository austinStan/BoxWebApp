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
Auth::routes();

Route::get('/','WelcomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/masaka','LandController@getMasaka')->name('masaka');
// Route::get('/sands','SandController@index')->name('sand');

