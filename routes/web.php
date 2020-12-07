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
    Route::get('/{type}/create', 'ProductController@create')->name('add');
    Route::post('/{type}', 'ProductController@store')->name('create');
    Route::get('/{type}/{product}/edit', 'ProductController@edit')->name('edit');
    Route::delete('/{type}/{product}', 'ProductController@destroy')->name('destroy');
    Route::patch('/{type}/{product}', 'ProductController@update')->name('update');
    Route::get('/{type}', 'ProductController@list')->name('list');
});
