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

Route::get('/', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('404', function() {
    return view('errors.404');
});

Route::get('blank', function() {
    return view('blank');
});

Route::get('charts', function() {
    return view('charts');
});
