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

Auth::routes();

Route::get("/", "TrafficController@index");
Route::resource("traffics.donates", "DonateController", [
    'parameters' => 'singular'
]);
Route::resource("/traffics", "TrafficController");
Route::resource("/brands", "BrandController");
Route::resource("/cars", "CarController");
Route::resource("/drivers", "DriverController");