<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::group(['as' => 'install.', 'prefix' => 'install', 'namespace' => "Install"], function () {
    Route::get('{steep}', 'InstallController@index')->name('index');
    Route::post('{steep}', 'InstallController@store')->name('post');
});

Auth::routes();

Route::get('/env', function() {
    HomeController::setenv('APP_NAME', 'Store');
    HomeController::setenv('APP_URL', 'https://store.dev');
});

Route::group(['middleware' => 'guest', 'namespace' => 'Store'], function () {
    Route::get('/aboutus', 'MainController@aboutus')->name('about-us');
    Route::get('/contact', 'MainController@contact')->name('contact');
    Route::get('/store', 'MainController@index')->name('store');
});