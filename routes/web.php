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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('profile')->group(function() {
    Route::get('/', 'ProfileController@show')->name('profile.show');
    Route::post('/', 'ProfileController@store')->name('profile.store');
});

Route::prefix('account')->group(function() {
    Route::get('/', 'AccountController@show')->name('account');
    Route::get('/bpi', 'AccountController@bpi')->name('account.bpi');
    Route::post('/bpi', 'AccountController@bpi_p')->name('account.bpi.phaseone');
    Route::get('/bpi/confirmation', 'AccountController@bpi_confirmation')->name('account.bpi.confirmation');
    Route::post('/bpi/confirmation', 'AccountController@store')->name('account.bpi.store');
});

Route::prefix('investment')->group(function() {
    Route::get('/', 'InvestmentController@index')->name('investment');
    Route::get('/products', 'InvestmentController@products')->name('investment.products');
    Route::get('/product/{id}', 'InvestmentController@product')->name('investment.product');
});

