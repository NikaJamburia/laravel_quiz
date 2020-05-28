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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/airports', 'AirportController@index');
Route::get('/airports/delete/{Flight}', 'AirportController@destroy');
Route::get('/airports/new', function() {return view('new-airport');} );
Route::post('/airports', 'AirportController@store');


Route::get('/flights', 'FlightController@index');
Route::get('/flights/delete/{Flight}', 'FlightController@destroy');
Route::get('/flights/new', function() {return view('new-flight');} );
Route::post('/flights', 'FlightController@store');

