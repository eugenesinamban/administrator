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

Route::get('/', 'HomeController@index')->middleware("guest");
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'PageController@index')->name('home');
    Route::group(['middleware' => ['check.type']], function() {
        Route::get('/{slug}/create', 'ProductController@create')->name('add');
        Route::post('/{slug}', 'ProductController@store')->name('create');
        Route::get('/{slug}/{id}/edit', 'ProductController@edit')->name('edit');
        Route::delete('/{slug}', 'ProductController@destroy')->name('destroy');
        Route::patch('/{slug}', 'ProductController@update')->name('update');
        Route::get('/{slug}', 'ProductController@list')->name('list');
    });
});
