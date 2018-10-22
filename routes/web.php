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

Route::get('logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => ['auth','roleCheck']], function () {
    Route::get('charts', 'ChartsController@index');
    Route::get('tables', 'TablesController@index');
    Route::get('404', 'ErrorsController@index');
    Route::get('blank', 'MapController@index');
    Route::get('maps', 'MapsController@index');
});

