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

// Public
Route::group(['domain' => '{type}.' . env("APP_URL")], function () {
    Route::name('external.')->group(function () {
        Route::get('/', 'External\ProductController@index')->name('index');
        Route::get('/{product}', 'External\ProductController@show')->name('show');
        Route::post('/{product}', 'External\ProductController@like')->name('like');
    });
});

//Admin
Route::get('/', 'HomeController@index')->middleware("guest");
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'PageController@index')->name('home');
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
