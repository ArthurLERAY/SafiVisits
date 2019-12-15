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
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/directory','DirectoryController@index')->name('directory');
Route::get('/complementaryActivities','ComplementaryActivitiesController@index')->name('complementaryActivities');
Route::get('report/{id}','ReportController@byId')->name('report');

Route::get('dashboard/drug', 'DatatablesController@dashboardDrug')->name('datatables.drug');
Route::put('report/edit/{id}','ReportController@edit')->name('reportEdit');

