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

Auth::routes(['verify' => true]);

Route::prefix('profile')->group(function() {
    Route::get('/', 'ProfileController@show')->name('profile.show');
    Route::post('/', 'ProfileController@store')->name('profile.store');
});
Route::get('/home', 'HomeController@index')->name('home');
