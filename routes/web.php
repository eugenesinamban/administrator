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

// Public - Products
Route::group(['domain' => '{type}.' . env("APP_URL")], function () {
    Route::name('external.')->group(function () {
        Route::get('/ranking', 'External\ProductController@ranking')->name('ranking');
        Route::get('/', 'External\ProductController@index')->name('list');
        Route::get('/{product}', 'External\ProductController@show')->name('show');
        Route::post('/{product}', 'External\ProductController@like')->name('like');
    });
});

//Admin
Auth::routes(['register' => false]);
Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminPageController@index')->name('home');
        Route::prefix('{type}')->group(function () {
            Route::get('/create', 'ProductController@create')->name('add');
            Route::get('/{product}', 'ProductController@show')->name('show');
            Route::post('/', 'ProductController@store')->name('create');
            Route::get('/{product}/edit', 'ProductController@edit')->name('edit');
            Route::delete('/{product}', 'ProductController@destroy')->name('destroy');
            Route::patch('/{product}', 'ProductController@update')->name('update');
            Route::get('/', 'ProductController@list')->name('list');
        });
    });
});

// Public - Portfolio
Route::get('/', 'PortfolioController@index')->name('index');
Route::get('/en', 'PortfolioController@index')->name('index');
Route::get('/ja', 'PortfolioController@index')->name('index');
Route::get('/{slug}', 'PortfolioController@show')->name('portfolio');
Route::get('/{slug}/{lang}', 'PortfolioController@show')->name('portfolio');