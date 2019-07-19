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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list', 'PortfolioController@list');
Route::post('/update', 'PortfolioController@update');

Route::get('/show/{id}', 'UserController@show');
Route::get('/setting', 'UserController@setting');

Route::get('/getImage', 'PortfolioController@getImage');
