<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return (config('app.installed') == true)
    ? view('welcome')
    : redirect()->route('install', ['steep' => 'site']);
}); */


Route::get('/', function () {
    return view('welcome');
});

Route::get('/install/{steep}', 'Install@index')->name('install');
Route::post('/install/{steep}', 'Install@store')->name('install.post');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
