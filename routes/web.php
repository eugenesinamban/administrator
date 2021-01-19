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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function() {
        // Registration Routes...
        Route::group(['middleware' => ['role:admin']], function () {
            Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            Route::post('register', 'Auth\RegisterController@register');
        });

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

        // User
        Route::prefix('user')->group(function() {
            Route::get('/{user}', 'UserController@show')->name('user-show');
        });

        Route::prefix('{type}')->group(function () {
            // Product 
            Route::get('/create', 'ProductController@create')->name('add');
            Route::get('/create-file', 'ProductController@createByFile')->name('addByFile');
            Route::post('/create-file', 'ProductController@storeByFile')->name('createByFile');
            Route::get('/{product}', 'ProductController@show')->name('show');
            Route::post('/', 'ProductController@store')->name('create');
            Route::get('/{product}/edit', 'ProductController@edit')->name('edit');
            Route::delete('/{product}', 'ProductController@destroy')->name('destroy');
            Route::patch('/{product}', 'ProductController@update')->name('update');
            Route::get('/', 'ProductController@list')->name('list');
        });

        // index 
        Route::get('/', 'AdminPageController@index')->name('home');
    });
});

// Public - Portfolio
Route::get('/', 'PortfolioController@index')->name('index');
Route::get('/en', 'PortfolioController@index')->name('index');
Route::get('/ja', 'PortfolioController@index')->name('index');
Route::get('/{slug}', 'PortfolioController@show')->name('portfolio');
Route::get('/{slug}/{lang}', 'PortfolioController@show')->name('portfolio');