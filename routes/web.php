<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return (config('app.installed') == true)
    ? view('welcome')
    : redirect()->route('install.index', ['steep' => 'site']);
});

Route::group(['as' => 'install.', 'prefix' => 'install', 'namespace' => "Install"], function () {
    Route::get('{steep}', 'InstallController@index')->name('index');
    Route::post('{steep}', 'InstallController@store')->name('post');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/env', function() {
    HomeController::setenv('APP_NAME', 'Store');
    HomeController::setenv('APP_URL', 'https://store.dev');
});