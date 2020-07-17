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
//land routes
Route::get('/masaka','LandController@getMasaka')->name('masaka');

//Houses routes
Route::get('/wakiso','HouseController@getWakiso')->name('wakiso');

//BuildingMaterials Routes
Route::get('/sand','BuildingMaterialsController@getSand')->name('sand');
Route::get('/bricks','BuildingMaterialsController@getBricks')->name('bricks');