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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/directory','directoryController@index')->name('directory');
Route::get('/complementaryActivities','complementaryActivitiesController@index')->name('complementaryActivities');
Route::get('reports',function(){
    return file_get_contents('http://127.0.0.1:8001/api/reports');
});
